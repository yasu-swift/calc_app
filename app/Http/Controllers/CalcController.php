<?php

namespace App\Http\Controllers;

class CalcController extends Controller
{
    public function con($a, $b, $c,)
{
    if ($b == 'addition') {
        $answer = $a + $c;
    } elseif ($b =='subtraction'){
        $answer = $a - $c;
    } elseif ($b == 'multiplication'){
        $answer = $a * $c;
    } elseif ($b == 'division'){
        $answer = $a / $c;
    } else {
        $answer = '計算できません';
    }

    return view('message.con', [
        'answer' => $answer
    ]);
}
}
