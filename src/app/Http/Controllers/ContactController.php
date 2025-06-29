<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->has('edit')) {
            session()->forget('form_data');
        }
        $formData = session('form_data', []);
        $categories = Category::all();

        return view('index', compact('formData', 'categories'));
    }
    public function confirm(ContactRequest $request)
    {
        $data = $request->all();
        session(['form_data' => $data]);
        return view('confirm', compact('data'));
    }

    // {
    //     $categories = Category::all();
    //     return view('index', compact('categories'));
    // }
}
