<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowHome extends Controller
{
    /**
     * 
     */
    public function index() {
        return view('home',[]);
    }

    /**
     *  [saveSubission - ]
     */
    public function saveSubmission() {
        return true;
    }
}
