<?php 
namespace App\Http\Helpers;

use DB,Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\Facades\Image;


class CustomCaptcha {

    function generateRandomAdditionExpression() {
        $num1 = rand(11, 39);
        $num2 = rand(1, 10);
        $captchaExpression = "$num1 + $num2";
        $captchaAnswer = $num1 + $num2;
        Session::put('capcode', $captchaAnswer);
        return array('expression' => $captchaExpression, 'answer' => $captchaAnswer);
    }


    function generateCaptchas()
    {
        $captchaString = Str::random(6); // Generate a random CAPTCHA string
        Session::put('captcha', $captchaString); // Store the CAPTCHA string in the session

        // Generate CAPTCHA image using QrCode
        $captchaImage = QrCode::size(200)->generate($captchaString);

       // return response($captchaImage)->header('Content-type', 'image/png');
    }
    public function generateCaptcha()
    {
        // Generate CAPTCHA string
        $captchaString = Str::random(6);

        // Store the CAPTCHA string in the session
        Session::put('captcha', $captchaString);

        // Create an image with the CAPTCHA string
        $img = Image::canvas(120, 45, '#CCC');
        $img->text($captchaString, 60, 25, function($font) {
            $font->file(public_path('fonts/arial.ttf'));
            $font->size(24);
            $font->color('#000');
            $font->align('center');
            $font->valign('middle');
        });

        // Return the image as a response
        //return $img->response('png');
    }

}