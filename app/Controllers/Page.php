<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        return view('/pages/home.php');
    }

    public function view($page = 'home')
    {

    }
}