<?php
namespace Jess\Messenger;

class Helper {
    function url($slug) {
        global $config;
        return $config->get("site.url").$slug;
    }

    function dd($arr) {
        echo "<pre>"; print_r($arr); echo "</pre>";
    }

    function localImage($url) {
        global $config;
        return \str_replace("{local}", $config->get("site.url", "/"), $url);
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
}