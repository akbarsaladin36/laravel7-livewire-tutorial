<?php

namespace App\Http\Livewire\Notes;

use App\Note;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Create extends Component
{

    public $notes_title;
    public $notes_description;
    public $notes_tags;

    public function store()
    {
        $notes = new Note;
        $notes->user_id = Session::get('user_logged_in')->user_id;
        $notes->notes_title = $this->notes_title;
        $notes->notes_description = $this->notes_description;
        $notes->notes_tags = $this->notes_tags;
        $notes->notes_created_date = date("Y-m-d H:i:s");
        $notes->save();

        return redirect()->route('notes.index');
    }

    public function render()
    {
        return view('livewire.notes.create');
    }
}
