<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountManagementController extends Controller
{
    public function index()
    {
        return view('Account.viewsaccount');
    }
}
