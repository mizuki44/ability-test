<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use App\Models\Contact;
use App\Models\Category;


class ContactController extends Controller
{
    public function index()
  {
    // var_dump('test');
    return view('index');
  }

  public function confirm(ContactRequest $request)
{
  $contact = $request->only(['name', 'email', 'tel', 'content']);
  return view('confirm',  compact('contact'));
}

public function store(ContactRequest $request)
{
     $contact = $request->only(['name', 'email', 'tel', 'content']);
     Contact::create($contact);
     return view('thanks');
}

public function admin()
{
  // $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
    // $contacts = Contact::all();
    $contacts = Contact::with('category')->get();

  // $categories = Category::all();
  return view('admin', compact('contacts'));
}


// public function login()
// {
  
//   return view('admin', compact('contacts'));
// }


//   public function register()
// {
  
//   return view('login', compact('contacts'));
// }


}