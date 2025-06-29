<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;


class AdminController extends Controller
{
    public function admin(Request $request)
{
    $query = Contact::query();

    if ($request->filled('name')) {
        $query->where(function ($q) use ($request) {
            $q->where('last_name', 'like', '%' . $request->name . '%')
                ->orWhere('first_name', 'like', '%' . $request->name . '%')
                ->orWhereRaw("CONCAT(last_name, ' ', first_name) LIKE ?", ['%' . $request->name . '%']);
        });
    }

    if ($request->filled('email')) {
        $query->where('email', 'like', '%' . $request->email . '%');
    }

    if ($request->filled('gender')) {
        $query->where('gender', $request->gender);
    }

    if ($request->filled('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    if ($request->filled('date_from')) {
        $query->whereDate('created_at', '>=', $request->date_from);
    }

    if ($request->filled('date_to')) {
        $query->whereDate('created_at', '<=', $request->date_to);
    }

    $contacts = $query->paginate(7);
    $categories = Category::all();

    return view('admin.index', compact('contacts', 'categories'));
    }
}
