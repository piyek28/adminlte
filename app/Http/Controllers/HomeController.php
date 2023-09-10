<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            'title'=>'Home'
        ]);
    }
    public function masuk()
    {
        return view('suratmasuk',[
            'title'=>'Surat Masuk'
        ]);
    }
    public function keluar()
    {
        return view('suratkeluar',[
            'title'=>'Surat Keluar'
        ]);
    }
    public function tampilan()
    {
        return view('tampilan',[
            'title'=>'Tampilan'
        ]);
    }
}
