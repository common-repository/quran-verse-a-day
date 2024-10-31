<?php

require_once('QuranDB.php');
require_once ('FileBinHandler.php');

class VersePrinter
{
    private $db;

    public function __construct()
    {
        $this->db = new QuranDB();
    }

    public function printVerse($attr=array(), $lang='english')
    {
        if (isset($attr['language'])) {
            $lang = sanitize_text_field($attr['language']);
        }

        $quote = $this->db->getQuote($lang);

        $fb = new FileBinHandler();
        $fb->postToPage($quote);

        return
        "
        <blockquote>
            <p>".$quote['text'] . "</p> 
            <span class='link'>
                <a target='_new' href='http://quran.com/" . $quote['sura']. "/" . $quote['ayat']. "'>
                    <cite>[". $quote['suraName']. ": " . $quote['ayat']. "]</cite>
                </a>
            </span>
        </blockquote>
        ";
    }
}
