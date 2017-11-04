<?php
/**
 * Created by PhpStorm.
 * User: Kennedy Mutisya
 * Date: 04/11/2017
 * Time: 20:59
 */

namespace App\Radi\Mpesa;


use App\Radi\Mpesa\Searches\Amount;
use App\Radi\Mpesa\Searches\Code;
use App\Radi\Mpesa\Searches\Date;
use App\Radi\Mpesa\Searches\Name;
use App\Radi\Mpesa\Searches\Phonenumber;
use App\Radi\Mpesa\Searches\Time;

class Mpesa
{
    protected $inspections = [
        Code::class,
        Amount::class,
        Name::class,
        Phonenumber::class,
        Time::class,
        Date::class,

    ];

    public function detect($message)
    {
        $parts = [];

        foreach ($this->inspections as $inspection) {

            foreach ((new $inspection)->detect($message) as $key => $value) {

                $parts[$key] = $value;
            }
        }

        return $parts;
    }


}
