<?php

namespace DevPac\Calculation\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DevPac\Calculation\App\Helper\Constants;

class CalculationController extends Controller
{
    public function add($a, $b){
        $result = $a + $b;
        $calculationName = Constants::add;
        return view('calculation::result',compact('result','calculationName'));
    }

    public function subtract($a, $b){
        $result = $a - $b;
        $calculationName = Constants::sub;
        return view('calculation::result',compact('result','calculationName'));
    }
    
    public function multiply($a, $b){
        $result = $a * $b;
        $calculationName = Constants::multiply;
        return view('calculation::result',compact('result','calculationName'));
    }
}
