<div class="container-fluid">
    <div class="container-fluid banner">
        <h4>Administration > Paramètre</h4>
    </div>

    <div class="row">

        <div class="my-4 col-lg-8 mx-auto">
            <div class="bg-white border rounded p-4 pb-3">
                <h6 class="text-black fw-bold">Vos infomations</h6>
                <hr>
                <dl>
                    <small>Nom</small>
                    <dd class="text-primary-"><?php echo e($admin->last_name); ?></dd>
                </dl>
                <dl>
                    <dd>Prénom</dd>
                    <dd class="text-primary-"><?php echo e($admin->first_name); ?></dd>
                </dl>
                <dl>
                    <dd>Email</dd>
                    <dd class="text-primary-"><?php echo e($admin->email); ?></dd>
                </dl>
            </div>
        </div>

        <div class="mb-4 col-lg-6 d-none">
            <form wire:submit.prevent="setEmail" class="bg-white rounded border mb-4 p-4">
                <h6 class="text-black fw-bold">Changer mon email</h6>
                <hr>
                <?php if(session()->has("error1")): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error1')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session()->has("success1")): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success1')); ?>

                    </div>
                <?php endif; ?>
                <div class="mt-4">
                    <label  class="mb-2" for="email">Nouveau email</label>
                    <input type="email" wire:model.defer="email" required class="form-control" id="email">
                </div>
                <div class="mt-4">
                    <label for="password" class="mb-2">Mot de passe</label>
                    <input type="password" wire:model.defer="password" minlength="6" required id="password" class="form-control">
                </div>
                <div class="mt-4 text-center">
                    <input type="submit" wire:loading.remove wire:target="setEmail" value="Enregistrer" class="btn btn-primary">
                    <button wire:loading wire:target="setEmail" disabled class="btn btn-primary">Enregistrement...</button>
                </div>
            </form>
        </div>

        <div class="mb-4 col-lg-8 mx-auto">
            <form wire:submit.prevent="setPassword" class="bg-white rounded border mb-4 p-4">
                <h6 class="text-black fw-bold">Changer mon mot de passe</h6>
                <hr>
                <?php if(session()->has("error2")): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error2')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session()->has("success2")): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success2')); ?>

                    </div>
                <?php endif; ?>
                <div class="mt-4">
                    <label  class="mb-2" for="lastPassword">Actuel mot de passe</label>
                    <input type="password" wire:model.defer="lastPassword" required minlength="6" class="form-control" id="lastPassword">
                </div>

                <div class="mt-4">
                    <label for="newPassword" class="mb-2">Nouveau mot de passe</label>
                    <div class="input-group" x-data="{
                            type: true,
                            setType() {
                                if(this.type === true) {
                                    document.getElementById('newPassword').type='text';
                                } else {
                                    document.getElementById('newPassword').type='password';
                                }
                                this.type = ! this.type
                            }
                        }">
                        <input type="password" wire:model.defer="newPassword" required minlength="6" id="newPassword" class="form-control" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-primary- text-white" id="basic-addon2" @click="setType()"><i class="uil uil-eye"></i></span>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <input type="submit" wire:loading.remove wire:target="setPassword" value="Enregistrer" class="button">
                    <button wire:loading wire:target="setPassword" disabled class="button">Enregistrement...</button>
                </div>
            </form>
        </div>

    </div>


</div>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/setting.blade.php ENDPATH**/ ?>