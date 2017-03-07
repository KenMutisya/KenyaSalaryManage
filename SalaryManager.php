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
        public function index(Food $food, Cart $cart)
    {

        $foods = $food::all();
        //get the cart items if they are avilable
        $carts = $cart::all()->where('user_id', \Auth::user()->id)->where('sold', '0');
        // $rule = new In(['Laravel', 'Framework', 'PHP']);
        $data = $cart::with('food')->get();

        $foodss = $data->transform(function ($item, $key) {
            return $food = [
                'food_id' => $item->food_id,
                'food_name' => $item->food->food_name,
                'price' => $item->food->price
            ];
        });
        dd(collect($foodss));
        //\Mail::to('kenmsh@gmail.com')->send(new MMTTC());
        return view('home', compact('foods', 'carts'));
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
