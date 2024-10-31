<?php
/*
Plugin Name: Quran verse a day
Version: 1.9
Plugin URI: https://wordpress.org/plugins/quran-verse-a-day/
Description: Display one random verse from the quran in Bangla or English
Author: mmrs151
Author URI: http://mmrs151.tumblr.com/
*/

require_once 'VersePrinter.php';

class QuranADayWidget extends WP_Widget
{
    public function __construct()
    {
        $this->add_stylesheet();
        $widget_details = array(
            'className' => 'QuranADayWidget',
            'description' => 'Display one random verse from the Quran in Bangla or English'
        );
        parent::__construct('QuranADayWidget', 'Quran verse a day', $widget_details);
    }

    public function form($instance)
    {
        ?>
        <div xmlns="http://www.w3.org/1999/html">

            <span></br></br>
                Select Language
                <select name="<?php echo $this->get_field_name( 'language' ); ?>">
                    <option value="english" <?php if($instance["language"] === 'english'){ echo 'selected="selected"'; } ?>>English</option>
                    <option value="bangla" <?php if($instance["language"] === 'bangla'){ echo 'selected="selected"'; } ?>>Bangla</option>
                </select>
                </br>
                Please re-activate the plugin for Bangla translation.

            </span>
        </div>

        <div class='mfc-text'>
        </div>

        <?php

        echo $args['after_widget'];
        echo "</br><a href='http://edgwareict.org.uk/' target='_blank'>Support EICT</a></br></br>";
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        $lang = $instance['language'];
        $printer = new VersePrinter();
        echo $printer->printVerse(array(), $lang);

        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
        return $new_instance;
    }

    private function add_stylesheet() {
        wp_register_style( 'prayer-time-style', plugins_url('styles.css', __FILE__) );
        wp_enqueue_style( 'prayer-time-style' );
    }
}

#====================== INIT WIDGET ============================#
add_action('widgets_init', 'init_quran_a_day_widget');
function init_quran_a_day_widget()
{
    register_widget('QuranADayWidget');
}
#==============================================================#

#====================== SHORTCODE =============================#
$versePrinter = new VersePrinter();
add_shortcode( 'quran_a_day', array($versePrinter, 'printVerse') );
#==============================================================#

#====================== DEACTIVATION ==========================#
register_deactivation_hook( __FILE__, 'uninstallQuranADay' );
function uninstallQuranADay()
{
    global $wpdb;
    $table = $wpdb->prefix . "quranADay";
    $wpdb->query("DROP TABLE IF EXISTS $table");

    delete_option('quranADay');
}
