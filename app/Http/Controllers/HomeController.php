<?php

namespace App\Http\Controllers;

use App\NetDesignAgency\Goldobak\Goldobak;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $goldo;

    public function __construct(Goldobak $goldo)
    {
        // $this->goldo = $goldo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->Goldobaker();

        return view('welcome');
    }
}
