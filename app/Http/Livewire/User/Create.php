<?php

namespace App\Http\Livewire\User;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $user_username;
    public $user_email;
    public $user_password;

    public function store()
    {

        $user = new User;
        $user->user_username = $this->user_username;
        $user->user_email = $this->user_email;
        $user->user_password = Hash::make($this->user_password);
        $user->user_created_date = date("Y-m-d H:i:s");
        $user->save();

        return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
