<?php
/**
 * Created by IntelliJ IDEA.
 * User: mutisya
 * Date: 22/09/2016
 * Time: 10:34 PM
 */

namespace SalaryManager;


use SalaryManager\nhif\nhif;
use SalaryManager\nssf\nssf;


require_once ('nhif/nhif.php');
require_once ('nssf/nssf.php');
class SalaryManager
{

    protected $nhif;
    public $salary;

    public function __construct($salary)

    {
        $this->salary = $salary;
        $this->nhif = new nhif();
        $this->nssf = new nssf();
    }

    public function getnhif()
    {
        return $this->nhif->rates($this->salary);
    }

    public function getnssf()
    {
        return $this->nssf->rates($this->salary);
    }

    public function totalcontribution()
    {
        return $this->getnhif() + $this->getnssf();
    }


}