@section('title','Halaman Utama')

<div>
    <div class="text-center mt-5">
        <h1>Tutorial CRUD User With Laravel 7 and Livewire 1</h1>
    </div>
    <div class="row mt-5">
        @if (Session::exists('user_logged_in'))
            <div class="col-7">
                <a href="{{ route('user.create') }}" class="btn btn-primary">Buat User Baru</a>
                <a href="{{ route('notes.index') }}" class="btn btn-primary">All Notes</a>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <button wire:click='logout' class="btn btn-secondary ms-5">Logout</button>
            </div>
        @else
            <div class="d-flex justify-content-end">
                <a href="{{ route('login.index') }}" class="btn btn-primary ms-5">Login</a>
            </div>
        @endif
    </div>
    <div class="row mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->user_username }}</td>
                    <td>{{ $user->user_email }}</td>
                    <td>
                        <a href="{{ route('user.edit',['user_id'=>$user->user_id]) }}" class="btn btn-success">Detail</a>
                        @if (Session::exists('user_logged_in'))
                            <button wire:click='destroy({{ $user->user_id }})' class="btn btn-danger">Delete</button>
                        @endif
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
