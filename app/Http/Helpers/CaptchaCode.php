<?php 
namespace App\Http\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\Facades\Image;
use DB,Log;


class CaptchaCode {


    function generateCaptchaCode($length = 6)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $captcha = '';
        for ($i = 0; $i < $length; $i++) {
            $captcha .= $characters[rand(0, strlen($characters) - 1)];
        }
        $image = imagecreatetruecolor(100, 40);
        $background = imagecolorallocate($image, 255, 255, 255);
        $textColor = imagecolorallocate($image, 0, 0, 0);
        imagestring($image, 5, 10, 10, $captcha, $textColor);
        // Output image
        header('Content-type: image/png');
        imagepng($image);
        return imagedestroy($image);
    }

    function generateCode($length = 6)
    {
        // for ($i = 0; $i<6; $i++) 
        // {
        //     $a .= mt_rand(0,9);
        // }
        $mj = $_SESSION['x'] = mt_rand(111111,999999);
        // $image = imagecreatetruecolor(100, 40);
        // $background = imagecolorallocate($image, 255, 255, 255);
        // $textColor = imagecolorallocate($image, 0, 0, 0);
        // imagestring($image, 5, 10, 10, $mj, $textColor);
        // // Output image
        // header('Content-type: image/png');
        // imagepng($image);
        
        return $mj;
        //rand(pow(10, $length-1), pow(10, $length)-1);
        //return $mj;

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

    public function captchaGenerate(){
       
        $mj = $_SESSION['x'] = mt_rand(1111,9999);
        $image = imagecreate(100, 50);
    
        imagecolorallocate($image, 215, 215, 215);
        $txtcolor = imagecolorallocate($image, 0, 0, 0);
        imagettftext($image,20,0,20,40,$txtcolor,public_path('fonts/arial.ttf'),$mj);
    
        //imagejpeg($image);
        header('content-type:image/jpeg');
        imagejpeg($image);
        return imagedestroy($image);
    }

}