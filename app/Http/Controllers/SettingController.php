<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class SettingController extends Controller
{

    public function index(User $update){
        $update = User::where('id',auth()->user()->id)->get();
        return view('dashboard.update-profile',compact('update'));
    }

    public function update(Request $request,User $update){
        $data = $request -> validate([
            'name' => 'required',
            'username' => '',
            'email'=>'email:dns',
            'phone'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required|integer',
            'country'=>'required',
            'company'=>'',
            'avatar'=>'image|file|max:2048',
            'about'=>'',
        ]);

        //avatar store image
        if($request->file('avatar'))
        {
            $data['avatar'] = $request->file('avatar')->store('avatar');
        }

        // dd($request->file('avatar')->store('avatar'));

        User::where('id',auth()->user()->id)->update($data);
        return redirect('/dashboard/settings');
    }

    public function chgpass()
    {
        return view('dashboard.passwordChanging');
    }

    public function chgpass2(Request $request)
    {
        $data = $request->validate([
            'password' => 'required | current_password:web',
            'password_confirmation'=>'required | same:password'
        ]);
        return view('dashboard.passwordConfirmation');
    }

    public function chgpass3(Request $request)
    {
        $data = $request->validate([
            'password'=>'required'
        ]);
        $data['password'] = bcrypt($data['password']);
        User::where('id',auth()->user()->id)->update($data);
        return redirect('/dashboard/settings')->with('success','Change password succesfully');
    }

}
