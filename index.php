<?php

require_once('SalaryManager.php');
use SalaryManager\SalaryManager;


$manager = new SalaryManager(3000);
echo $manager->totalcontribution();
