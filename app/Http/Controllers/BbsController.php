<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index() {
        // $bbs = Bb::latest()->get();
        // $s = "Объявления:<hr>";
        // foreach ($bbs as $bb) {
        //     $s .= $bb->title . "<br>";
        //     $s .= $bb->price . " грн.<br>";
        //     $s .= "<br>";
        // }
        $context = ['bbs' => Bb::latest()->get()];
        return view('index', $context);
    }

    public function detail(Bb $bb) {
        // $bb = Bb::find($bb);
        // $s = $bb->title . "\r\n\r\n";
        // $s .= $bb->content . "\r\n";
        // $s .= $bb->price . "грн.\r\n";
        // return response($s)->header('Content-Type', 'text/plain');

        return view('detail', ['bb' => $bb]);
    }
}

?>
