<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        return view('tagihan');
    }

    public function hitungTagihan(Request $request)
    {
        $gunaair = $request->input('gunaair');
        $tagihan = 0;

        if ($gunaair <= 25) {
            $tagihan = $gunaair * 150;
        } elseif ($gunaair > 25 && $gunaair <= 50) {
            $tagihan = 25 * 150 + ($gunaair - 25) * 170;
        } elseif ($gunaair > 50 && $gunaair <= 75) {
            $tagihan = 25 * 150 + 25 * 170 + ($gunaair - 50) * 210;
        } else {
            $tagihan = 25 * 150 + 25 * 170 + 25 * 210 + ($gunaair - 75) * 250;
        }

        return view('tagihan', compact('tagihan'));
    }
}