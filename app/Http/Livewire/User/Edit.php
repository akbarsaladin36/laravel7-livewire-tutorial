<?php

namespace App\Http\Livewire\User;

use App\User;
use Livewire\Component;

class Edit extends Component
{

    public $user_id;
    public $user_username;
    public $user_email;
    public $user_first_name;
    public $user_last_name;
    public $user_address;
    public $user_phone_number;

    public function update()
    {
        $user = User::where('user_id',$this->user_id)->first();

        if($user) {
            $user->user_username = $this->user_username;
            $user->user_email = $this->user_email;
            $user->user_first_name = $this->user_first_name;
            $user->user_last_name = $this->user_last_name;
            $user->user_address = $this->user_address;
            $user->user_phone_number = $this->user_phone_number;
            $user->user_updated_date = date("Y-m-d H:i:s");
            $user->save();
        }

        return redirect()->route('user.index');

    }

    public function mount($user_id)
    {
        $user = User::where('user_id',$user_id)->first();

        if($user) {
            $this->user_id = $user->user_id;
            $this->user_username = $user->user_username;
            $this->user_email = $user->user_email;
            $this->user_first_name = $user->user_first_name;
            $this->user_last_name = $user->user_last_name;
            $this->user_address = $user->user_address;
            $this->user_phone_number = $user->user_phone_number;
        }
    }

    public function render()
    {
        return view('livewire.user.edit');
    }
}
