<?php

namespace App\Http\Controllers;

use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        $context = ['bbs' => Bb::all()];

        return view('index', $context);
    }

    public function detail(Bb $bb)
    {
        $bb->user()->get('name');
        return view('detail', ['bb' => $bb]);
    }
}
