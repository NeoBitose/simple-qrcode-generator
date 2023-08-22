<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index(){
        $linkqr = request()->link;
        return view('qrcode', compact('linkqr'));
    }
}
