@section('title','Buat User Baru')

<div>
    <div class="text-center mt-5">
        <h1>Buat User Baru</h1>
    </div>

    <form wire:submit.prevent="store" class="mt-5">
        <div class="form-group">
            <label for="user_username">Username</label>
            <input type="text" name="user_username" wire:model="user_username" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_email">E-mail</label>
            <input type="email" name="user_email" wire:model="user_email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_password">Password</label>
            <input type="password" name="user_password" wire:model="user_password" class="form-control">
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Create</button>
    </form>

    <a href="{{ route('user.index') }}" class="form-control btn btn-success mt-3">Back</a>

</div>
