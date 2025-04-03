<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact',[
            'contacts' => contact::pages()
        ]);
    }

    public function contacts($id){
        return view('contacts', ['contacts' => contact::find($id)]);

    }
}
