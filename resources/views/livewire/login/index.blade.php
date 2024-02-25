@section('title','Login User')

<div>
    <div class="text-center mt-5">
        <h1>Login User</h1>
    </div>

    <form wire:submit.prevent="login" class="mt-5">
        <div class="form-group">
            <label for="user_username">Username</label>
            <input type="text" name="user_username" wire:model="user_username" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_password">Password</label>
            <input type="password" name="user_password" wire:model="user_password" class="form-control">
        </div>
        <button type="submit" class="form-control btn btn-primary mt-3">Login</button>
    </form>

    <a href="{{ route('user.index') }}" class="form-control btn btn-success mt-3">Back</a>

</div>
