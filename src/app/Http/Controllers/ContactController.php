<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

use App\Models\Contact;
use App\Models\Category;


class ContactController extends Controller
{
  public function index()
  {
  $categories = Category::all();
    return view('index', compact('categories'));
  }


  public function confirm(ContactRequest $request)
{
  $contact = $request->only(['category_id','first_name','last_name', 'gender' ,'email', 'tel', 'address','building','detail']);
  return view('confirm',  compact('contact'));
}

public function store(ContactRequest $request)
{
    $contact = $request->only(['category_id','first_name','last_name', 'gender' ,'email', 'tel', 'address','building','detail']);
    Contact::create($contact);
    return view('thanks');
}

public function admin()
{
    $contacts = Contact::with('category')->simplePaginate(7);
    $categories = Category::all();
    return view('admin', compact('contacts','categories'));
}

public function search(Request $request)
{
  $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->GenderSearch($request->gender)->Created_atSearch($request->created_at)->simplePaginate(7);
  $categories = Category::all();

  return view('admin', compact('contacts', 'categories'));
}
}