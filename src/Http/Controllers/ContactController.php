<?php

namespace Aksam\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Aksam\Contact\Models\Contact;
use Aksam\Contact\Models\User;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function save(Request $request)
    {
        Contact::create($request->all());
    }

    public function getUserList(){
        return User::get();
    }
}
