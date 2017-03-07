<?php

namespace SalaryManager\nhif;

class nhif
{
    const GROUP_A = 5999;
    const GROUP_B = 7999;
    const GROUP_C = 11999;
    const GROUP_P = 14999;
    const GROUP_Q = 19999;
    const GROUP_D = 24999;
    const GROUP_E = 29999;
    const GROUP_F = 34999;
    const GROUP_G = 39999;
    const GROUP_T = 44999;
    const GROUP_H = 49999;
    const GROUP_I = 59999;
    const GROUP_J = 69999;
    const GROUP_K = 79999;
    const GROUP_L = 89999;
    const GROUP_M = 99999;
    const GROUP_N = 100000;
    const SELF_EMPLOYED = 500;

    public function rates($salary)
    {
        if ($salary <= self::GROUP_A) {
            return 150;
        }
        if ($salary <= self::GROUP_B) {
            return 300;
        }
        if ($salary <= self::GROUP_C) {
            return 400;
        }
        if ($salary <= self::GROUP_P) {
            return 500;
        }
        if ($salary <= self::GROUP_Q) {
            return 600;
        }
        if ($salary <= self::GROUP_D) {
            return 750;
        }
        if ($salary <= self::GROUP_E) {
            return 850;
        }
        if ($salary <= self::GROUP_F) {
            return 900;
        }
        if ($salary <= self::GROUP_G) {
            return 950;
        }
        if ($salary <= self::GROUP_T) {
            return 1000;
        }
        if ($salary <= self::GROUP_H) {
            return 1100;
        }
        if ($salary <= self::GROUP_I) {
            return 1200;
        }
        if ($salary <= self::GROUP_J) {
            return 1300;
        }
        if ($salary <= self::GROUP_K) {
            return 1400;
        }
        if ($salary <= self::GROUP_L) {
            return 1500;
        }
        if ($salary <= self::GROUP_M) {
            return 1600;
        }
        if ($salary >= self::GROUP_M) {
            return 1700;
        }

        return 0;
    }
}
