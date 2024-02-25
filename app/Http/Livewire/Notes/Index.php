<?php

namespace App\Http\Livewire\Notes;

use App\Note;
use App\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {

        $notes = DB::table('notes')
               ->join('users','notes.user_id','=','users.user_id')
               ->get();

        $no = 1;

        // dd($notes);

        return view('livewire.notes.index',[
            'no' => $no,
            'notes' => $notes
        ]);
    }
}
