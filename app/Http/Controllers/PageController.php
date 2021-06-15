<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PageController extends Controller
{
    public function landingPage()
    {
        return view('index');
    }

    public function signUp()
    {
        return view('account.signUp');
    }

    public function forgotPassword()
    {
        return view('account.forgotPassword');
    }

    public function resetPassword(Request $request, $id) {
        $user = User::find($id);
        $password = $request->get('password');
        $confirmPassword = $request->get('confirm_password');
        if($password == $confirmPassword) {
            $user->password = Hash::make($request->get('password'));            
            $user->save();
            return redirect()->route('profile.index')
                ->with('success', 'Password Successfully Reset');
        } else {
            return redirect()->route('reset_password');
        }          
    }
}
