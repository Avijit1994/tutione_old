<div>
    @if ($emailSentMessage)
        <div class="alert alert-danger forget-alert" role="alert">{{ $emailSentMessage }}</div>
    @else
        <form wire:submit.prevent="sendResetPasswordLink" id="modal-forget-form">
            <div class="form-float mt-1">
                @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="form-control-float" placeholder="Email" />
                <label for="username" class="float-label">Email</label>
            </div>
            <button class="btn btn-block btn-tutione">Send password reset link</button>
        </form>
    @endif
</div>
