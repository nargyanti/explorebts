<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use DB;
use Auth;
use Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();        

        return view('account.profile', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('account.editAccount', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',         
            'phone' =>'required',             
        ]);

        $user = User::where('id', $id)->first();
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->phone = $request->get('phone');  
        $user->email = $request->get('email');              

        if($request->file('profile_picture')) {            
            if($user->profile_picture && file_exists(storage_path('storage/'.$user->profile_picture))){
                Storage::delete('storage/' . $user->profile_picture);
            }
            $image_name = $request->file('profile_picture')->store('img/profiles', 'public');            
            $user->profile_picture = $image_name;
        }
        $user->save();
        
        return redirect()->route('profile.index')
            ->with('success', 'User Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('home')
            ->with('success', 'Account Successfully Deleted');
    }

    public function changePassword() {
        $user = Auth::user();  
        return view('account.changePassword', ['user' => $user]);
    }
}
