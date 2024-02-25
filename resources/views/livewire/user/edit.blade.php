@section('title','Edit User')

<div>
    <div class="text-center mt-5">
        <h1>Detail User</h1>
    </div>

    <form wire:submit.prevent="update" class="mt-5">
        <input type="hidden" name="user_id" wire:model="user_id">
        <div class="form-group">
            <label for="user_username">Username</label>
            <input type="text" name="user_username" wire:model="user_username" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_email">E-mail</label>
            <input type="email" name="user_email" wire:model="user_email" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_first_name">First Name</label>
            <input type="text" name="user_first_name" wire:model="user_first_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_last_name">Last Name</label>
            <input type="text" name="user_last_name" wire:model="user_last_name" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="user_address">Address</label>
            <textarea name="user_address" wire:model="user_address" id="user_address" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="user_phone_number">Phone Number</label>
            <input type="text" name="user_phone_number" wire:model="user_phone_number" class="form-control">
        </div>
        @if (Session::exists('user_logged_in'))
            <button type="submit" class="form-control btn btn-primary mt-3">Update</button>
        @endif
    </form>

    <a href="{{ route('user.index') }}" class="form-control btn btn-success mt-3">Back</a>

</div>
