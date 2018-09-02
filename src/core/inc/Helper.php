<?php
namespace Jess\Messenger;

class Helper {
    function url($slug) {
        global $config;
        $site = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        return $site.$config->get("site.url").$slug;
    }

    function dd($arr, $arr2=true) {
        echo "<pre>"; print_r($arr); echo "</pre>";
        if(is_array($arr2)) {
            echo "<pre>"; print_r($arr2); echo "</pre>";
        } else if( $arr2 ) {
            die();
        }
    }

    function localImage($url) {
        global $config;
        $site = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        return \str_replace("{local}", $site.$config->get("site.url", "/"), $url);
    } 

    public function slugify($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    function toList($text, $separeBy) {
        if (strpos($text, $separeBy) !== false) {
            $arr = explode($separeBy, $text);
            return $arr;
        }
        return [$text];
    }

    function compareDates($date1, $date2 = false) {
        if(!$date2) {
            $date2 = $date1;
            $date1 = date("Y-m-d H:i:s");
        }
        $date1 = new \DateTime($date1);
        $date2 = new \DateTime($date2);

        if($date1 > $date2) return 1;
        if($date2 > $date1) return -1;
        return 0;
    }

    function humanFecha($date) {
        date_default_timezone_set('UTC');
        date_default_timezone_set("America/Mexico_City");
        setlocale(LC_TIME, 'spanish');
        return strftime("%A, %d %B %G", strtotime($date));
    }

    /**
     * By nira
     * https://stackoverflow.com/a/34413408
     */
    function calculeAge($date) {
        //calculate years of age (input string: YYYY-MM-DD)
        list($year, $month, $day) = explode("-", $date);

        $year_diff  = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff   = date("d") - $day;

        // if we are any month before the birthdate: year - 1 
        // OR if we are in the month of birth but on a day 
        // before the actual birth day: year - 1
        if ( ($month_diff < 0 ) || ($month_diff === 0 && $day_diff < 0))
            $year_diff--;   

        return $year_diff;
    }
}