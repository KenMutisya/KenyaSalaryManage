<?php
/**
 * Created by IntelliJ IDEA.
 * User: mutisya
 * Date: 22/09/2016
 * Time: 11:32 PM.
 */

namespace SalaryManager\nssf;

class nssf
{
    public $salary;
    const GROUP_ONE = 3000;
    const GROUP_TWO = 4500;
    const GROUP_THREE = 6000;
    const GROUP_FOUR = 1000;
    const GROUP_FIVE = 14000;
    const GROUP_SIX = 18000;
    const UEL = 18000;
    const LEL = 6000;
    const RATE = 0.12;

    public function rates($salary)
    {
        if ($salary <= self::LEL) {
            return $salary * self::RATE;
        }

        return $salary * self::RATE;
    }
}
