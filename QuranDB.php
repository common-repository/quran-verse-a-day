<?php

require_once ABSPATH.'wp-admin/includes/upgrade.php';
require_once 'QuranRandomizer.php';

class QuranDB
{
    /** @var string */
    private $dbTable = '';

    /** @var string */
    private $tableName = '';

    public function __construct()
    {
        global $wpdb;

        $this->rand = new QuranRandomizer();

        $this->tableName = $wpdb->prefix.'quranADay';
        $this->dbTable = DB_NAME.'.'.$this->tableName;

        $this->createTableIfNotExist();
    }

    /**
     * @param string $lang
     *
     * @return array
     */
    public function getQuote($lang = 'english')
    {
        $sura = $this->rand->getRandomSura();
        $ayat = $this->rand->getRandomAyat($sura);
        $sql = 'SELECT * FROM '.$this->tableName.' WHERE sura = '.$sura.' and ayat =  '.$ayat." and lang =  '".$lang."';";
        $result = $this->getQuoteWithText($sql);

        $result['suraName'] = $this->rand->getSuraName($sura);
        
        return $result;
    }

    private function createTableIfNotExist()
    {
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();

        $sql = 'CREATE TABLE '.$this->dbTable."(
                  id int(11) NOT NULL AUTO_INCREMENT,
                  lang varchar(255) DEFAULT NULL,
                  sura tinyint(4) DEFAULT NULL,
                  ayat int(8) DEFAULT NULL,
                  text text,
                  PRIMARY KEY (id)
                )  $charset_collate;";

        $wpdb->get_var("SHOW TABLES LIKE '".$this->tableName."'");
        if ($wpdb->num_rows != 1) {
            dbDelta($sql);
            $this->importCsv('english');
            $this->importCsv('bangla');
        }
    }

    private function importCsv($lang)
    {
        global $wpdb;

        $path = plugin_dir_path(__FILE__).'quran/'.$lang.'.csv';

        if (($handle = fopen($path, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, '|')) !== false) {
                $sql = 'INSERT INTO '.$this->tableName."  (lang, sura, ayat, text) values ('".$lang."', '".$data[0]."', '".$data[1]."', '".esc_sql($data[2])."');";
                if (!empty($data[2])) {
                    $wpdb->query($sql);
                }
            }
        } else {
            echo 'no file';
        }
    }

    /**
     * @param $sql
     *
     * @return array
     */
    private function getQuoteWithText($sql)
    {
        global $wpdb;
        $result = $wpdb->get_row($sql, ARRAY_A);

        while (empty($result['text'])) {
            $result = $wpdb->get_row($sql, ARRAY_A);
        }

        return $result;
    }
}
