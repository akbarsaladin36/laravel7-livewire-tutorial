@section('title','Edit Notes')

<div>
    <div class="text-center mt-5">
        <h1>Edit Notes</h1>
    </div>

    <form wire:submit.prevent="update" class="mt-5">
        <input type="hidden" name="notes_id" wire:model="notes_id">
        <div class="form-group">
            <label for="notes_title">Title</label>
            <input type="text" name="notes_title" wire:model="notes_title" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="notes_description">Description</label>
            <textarea name="notes_description" wire:model="notes_description" id="notes_description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="notes_tags">Tag</label>
            <input type="text" name="notes_tags" wire:model="notes_tags" class="form-control">
        </div>

        <button type="submit" class="form-control btn btn-primary mt-3">Update</button>
    </form>

    <a href="{{ route('notes.index') }}" class="form-control btn btn-success mt-3">Back</a>

</div>
