<?php

namespace App\Http\Livewire\Notes;

use App\Note;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Edit extends Component
{

    public $notes_id;
    public $notes_title;
    public $notes_description;
    public $notes_tags;

    public function update() {

        $note = Note::where('notes_id',$this->notes_id)->first();

        if($note) {
            $note->notes_title = $this->notes_title;
            $note->notes_description = $this->notes_description;
            $note->notes_tags = $this->notes_tags;
            $note->notes_updated_user_id = Session::get('user_logged_in')->user_id;
            $note->notes_updated_date = date("Y-m-d H:i:s");
            $note->save();

            return redirect()->route('notes.index');
        } 
    }

    public function mount($note_id) {

        $note = Note::where('notes_id',$note_id)->first();

        $this->notes_id = $note->notes_id;
        $this->notes_title = $note->notes_title;
        $this->notes_description = $note->notes_description;
        $this->notes_tags = $note->notes_tags;
    }

    public function render()
    {
        return view('livewire.notes.edit');
    }
}
