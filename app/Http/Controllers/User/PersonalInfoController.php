<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalInfoController extends Controller
{
    public function index(){
        $pageTitle = 'Upgrade your personal information';
        $user = Auth::user();
        return view('user.personal.index', compact('pageTitle', 'user'));
    }
}
