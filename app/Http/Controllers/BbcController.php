<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bb;

class BbcController extends Controller
{
    public function index() {

        $context = ['bbs' => Bb::latest()->get()];
        return view('bb.index', $context);
    }

    public function detail(Bb $bb) {
        return view('bb.detail', ['bb' => $bb]);
    }
}
