<?php

namespace App\Http\Livewire\Login;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{

    public $user_username;
    public $user_password;

    public function login()
    {

        $user = User::where('user_username',$this->user_username)->first();

        // dd($user);

        if($user) {
            if(Hash::check($this->user_password,$user->user_password)) {
                Session::put('user_logged_in',$user);
                return redirect()->route('user.index');
            } else {
                $this->resetField();
                return redirect()->back();
            }
        } else {
            $this->resetField();
            return redirect()->back();
        }
    }

    public function resetField()
    {
        $this->user_username = '';
        $this->user_password = '';
    }

    public function render()
    {
        return view('livewire.login.index');
    }
}
