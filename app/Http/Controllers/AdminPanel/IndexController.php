<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function contacts()
    {
        $contacts = Contact::orderBy('id','desc')->get();
        return view('admin.contacts.index',compact('contacts'));
    }
}
