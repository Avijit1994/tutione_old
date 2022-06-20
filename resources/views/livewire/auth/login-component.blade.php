<div>
    <form wire:submit.prevent="authenticate" id="modal-login-form">
        <div class="alert alert-danger login-alert" role="alert"></div>
        <div class="form-group mt-1 mb-2">
            <label for="email" class="control-label">Username</label>
            <input type="email" wire:model.lazy="email" name="email" class="form-control" placeholder="Username" />

            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label for="password" class="control-label">Password</label>
            <input type="password" wire:model.lazy="password" name="password" class="form-control" placeholder="Password" />

            @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <button class="btn btn-block btn-tutione" id="do-login">Login</button>
    </form>
</div>
