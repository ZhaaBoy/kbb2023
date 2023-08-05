<?php

namespace App\Http\Controllers\Admin;

use App\Models\tutorial;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class tutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tutorial.index');
    }

}
