<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account; 

class AccountController extends Controller
{
    public function viewsAccount()
    {
        $accounts = Account::paginate(15);

        return view('dashboard.views_account', compact('accounts'));
    }



}
