<?php

namespace App\Http\Controllers;

class CalcController extends Controller
{
    public function con($num1, $operator, $num2)
{
    if ($operator == 'addition') {
        $answer = $num1 + $num2;
    } elseif ($operator =='subtraction'){
        $answer = $num1 - $num2;
    } elseif ($operator == 'multiplication'){
        $answer = $num1 * $num2;
    } elseif ($operator == 'division'){
        $answer = $num1 / $num2;
    } else {
        $answer = '計算できません';
    }

    return view('message.con', [
        'answer' => $answer
    ]);
}
}
