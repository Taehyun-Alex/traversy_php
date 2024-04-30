<?php

class StringUtility {
    public static function shout($string) {
        return strtoupper($string) . "!";
    }

    public static function whisper($string) {
        return strtolower($string) . "05-oop-challenges";
    }

    public static function repeat($string, $times = 2) {
        return str_repeat($string . "<br>", $times);
    }
}

$strUtil = new StringUtility();
echo StringUtility::repeat("helLo i'm alex");