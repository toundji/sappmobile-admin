<div>
    <form wire:submit.prevent="login">
        @if (session()->has("message"))
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
        @endif
        <div class="mb-4">
            <label  class="mb-2" for="email">Email</label>
            <input type="email" wire:model.defer="email" class="form-control" required id="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="mb-2">Mot de passe</label>
            <input type="password" wire:model.defer="password" id="password" required class="form-control">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="text-center">
            <input type="submit" wire:loading.remove wire:target="login" value="Envoyer" class="btn w-100 btn-login">
            <button wire:loading wire:target="login" disabled class="btn w-100 btn-login">Connexion...</button>
        </div>
    </form>
</div>
