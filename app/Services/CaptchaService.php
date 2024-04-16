<?php

namespace App\Services;
use Session;

class CaptchaService
{
    public static function generateCode($length = 6)
    {
        for ($i = 0; $i<6; $i++) 
        {
            $a .= mt_rand(0,9);
        }
        //rand(pow(10, $length-1), pow(10, $length)-1);
        //return $a;

    }

    public static function verifyCode($input)
    {
        return $input === session('captcha_code');
    }
}