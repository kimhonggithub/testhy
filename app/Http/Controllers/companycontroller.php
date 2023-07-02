<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\maintable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class companycontroller extends Controller
{
    public function companylistdetail()
    {
        $com = Auth::user()->id;
    
        return view('userpage.company', [
            'companydetail' => $com
        ]);
    }
}