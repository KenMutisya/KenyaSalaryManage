<?php
/**
 * Created by PhpStorm.
 * User: Kennedy Mutisya
 * Date: 04/11/2017
 * Time: 22:23
 */

namespace App\Radi\Mpesa\Searches;


class Code
{

    public function detect($message){
        $pattern = "/([[:alnum:]]{9})[[:blank:]](Confirmed)/is";
        preg_match($pattern, $message, $matches, PREG_OFFSET_CAPTURE, 0);
        if (isset($matches[1]) && !empty($matches)) {
            return ['Transaction Code' => $matches[1][0]];
        }
        return null;
    }
}
