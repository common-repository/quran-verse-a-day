<?php

class FileBinHandler
{
    public function postToPage(array $verse)
    {
        if ( $this->isNewDay() ) {

            $title   = $verse['suraName'] . ': '. $verse['ayat'];
            $link    = 'http://quran.com/' . $verse['sura'] . '/' . $verse['ayat'];
            $message = $verse['text'] . " [ $title ]\r\n \r\n". $this->getTafseerLink($verse) ."\r\n";

            $attachment = array(
                'access_token' => $this->refreshToken(),
                'name'         => $title,
                'caption'      => site_url(),
                'description'  => ' ',
                'message'      => $message,
                'link'         => $link
            );

            $ch = curl_init();

            curl_setopt( $ch, CURLOPT_URL, 'https://graph.facebook.com/' . base64_decode($this->getFileBin()[0]) . '/feed' );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
            curl_setopt( $ch, CURLOPT_POST, true );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $attachment );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

            curl_exec( $ch );
            curl_close( $ch );

            $today = date( 'Y-m-d', current_time( 'timestamp', 0 ) );
            add_option( 'quranADay', $today ); // 2016-10-27
        }
    }

    /**
     * @return mixed
     */
    private function refreshToken()
    {
        return base64_decode($this->getFileBin()[3]);
    }

    /**
     * @return bool
     */
    private function isNewDay()
    {
        $quranADay = get_option('quranADay'); // 2016-10-27
        if (empty($quranADay)) {
            return true;
        }

        $today = date( 'Y-m-d', current_time( 'timestamp', 0 ) ); // 2016-10-28
        if ($quranADay == $today) {
            return false;
        }

        update_option( 'quranADay', $today ); // 2016-10-28

        return true;
    }

    /**
     * @return array
     */
    private function getFileBin()
    {
        $path = plugin_dir_url( __FILE__ );
        $contents = file_get_contents($path.'/quran/file.bin');
        $data = explode(PHP_EOL, $contents);
        return $data;
    }

    /**
     * @param  array $verse
     * @return string
     */
    private function getTafseerLink($verse)
    {
        error_log(print_r($verse, 1));
        if ($verse['lang'] == 'bangla') {
            return 'তাফসীর: http://www.banglatafheem.com/index.php?option=com_quran&id='. $verse['sura'] .'&view=quran&limitstart='. $verse['ayat'];
        }
        return 'Tafseer: http://www.islamicstudies.info/tafheem.php?sura='. $verse['sura'] . '&verse=' . $verse['ayat'];
    }
}
