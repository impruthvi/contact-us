<?php

namespace Impruthvi\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Impruthvi\Contact\Models\ContectUs;

class ContactUsController extends Controller
{
    
    public function index()
    {
        return view('contact::contact');
    }

    
    public function store(Request $request)
    {
        ContectUs::create($request->all());
        return redirect()->back();
    }

}
