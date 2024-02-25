<?php

namespace App\Http\Livewire\User;

use App\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public function logout()
    {
        Session::forget('user_logged_in');
        return redirect()->route('user.index');
    }

    public function destroy($user_id)
    {
        $user = User::where('user_id',$user_id)->first();

        if($user) {
            $user->delete();

            return redirect()->route('user.index');
        }
    }

    public function render()
    {

        $no = 1;

        return view('livewire.user.index',[
            'users' => User::all(),
            'no' => $no
        ]);
    }
}
