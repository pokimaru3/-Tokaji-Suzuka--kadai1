<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class ConfirmController extends Controller
{
    public function confirm(Request $request)
    {
        $data = $request->all();
        session(['form_data' => $data]);
        return view('confirm', compact('data'));
    }
}
