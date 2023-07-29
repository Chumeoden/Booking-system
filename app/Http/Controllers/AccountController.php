<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< Updated upstream
use App\Models\Account; 
=======
>>>>>>> Stashed changes

class AccountController extends Controller
{
    public function viewsAccount()
    {
<<<<<<< Updated upstream
        $accounts = Account::paginate(15);

        return view('dashboard.views_account', compact('accounts'));
    }



=======
        $accounts = Account::all(); // Lấy tất cả tài khoản từ CSDL

        return view('dashboard.views_account', compact('accounts'));
    }
>>>>>>> Stashed changes
}
