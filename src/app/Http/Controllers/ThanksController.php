<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ThanksController extends Controller
{
    public function store(Request $request)
    {
        $data = session('form_data');

        $data['tel'] = $data['tel1'] . '-' . $data['tel2'] . '-' . $data['tel3'];
        unset($data['tel1'], $data['tel2'], $data['tel3']);

        Contact::create($data);

        session()->forget('form_data');

        return view('thanks');
    }
}
