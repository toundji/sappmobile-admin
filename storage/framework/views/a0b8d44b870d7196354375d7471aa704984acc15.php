<div>
    <form wire:submit.prevent="login">
        <?php if(session()->has("message")): ?>
            <div class="alert alert-warning">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <div class="mb-4">
            <label  class="mb-2" for="email">Email</label>
            <input type="email" wire:model.defer="email" class="form-control" required id="email">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="password" class="mb-2">Mot de passe</label>
            <input type="password" wire:model.defer="password" id="password" required class="form-control">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="text-center">
            <input type="submit" wire:loading.remove wire:target="login" value="Envoyer" class="btn w-100 btn-login">
            <button wire:loading wire:target="login" disabled class="btn w-100 btn-login">Connexion...</button>
        </div>
    </form>
</div>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/login.blade.php ENDPATH**/ ?>