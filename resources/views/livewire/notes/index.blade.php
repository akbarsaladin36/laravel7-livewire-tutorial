@section('title','List Notes')

<div>
    <div class="text-center mt-5">
        <h1>List Notes</h1>
    </div>
    <div class="row mt-5">
        <div class="col-7">
            <a href="{{ route('notes.create') }}" class="btn btn-primary">Buat Note Baru</a>
        </div>
        <div class="col-5 d-flex justify-content-end">
            <a href="{{ route('user.index') }}" class="btn btn-secondary ms-5">Back</a>
        </div>
    </div>
    <div class="row mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Ditulis Oleh</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $note->notes_title }}</td>
                    <td>{{ $note->user_username }}</td>
                    <td>
                        <a href="{{ route('notes.edit',['note_id'=>$note->notes_id]) }}" class="btn btn-success">Detail</a>
                        <button wire:click='#' class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
