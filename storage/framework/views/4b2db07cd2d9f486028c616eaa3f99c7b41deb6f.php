<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Nouvelle annonce</h4>
    </div>

    <section class="page_content">
        <form wire:submit.prevent="add_annonce" class="col-md-12 rounded bg-white p-4 shadow-sm">
            <h6 class="text-primary-">Enregistrer une nouvelle annonce</h6>
            <?php if(session()->has("success")): ?>
                <div class="alert alert-success mt-4">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-12 mt-4">
                    <label for="" class="mb-2">Titre de l'annonce</label>
                    <input type="text" class="form-control-" maxlength="200" wire:model="name" required>
                </div>
                <div class="col-md-6 mt-4">
                    <label for="" class="mb-2">Image Principale</label>
                    <input type="file" class="form-control" accept=".png, .jpg" wire:model="image" required>
                </div>
                <div class="col-md-6 mt-4">
                    <label for="" class="mb-2">Autres Images(facultatif)</label>
                    <input type="file" class="form-control" multiple accept=".png, .jpg" wire:model="images">
                </div>
                <div class="col-md-12 mt-4">
                    <label for="" class="mb-2">Description</label>
                    <textarea name="" id="" cols="30" rows="4" wire:model="description" class="form-control-" required></textarea>
                </div>
                <div class="mt-4 text-center">
                    <input type="submit" wire:loading.remove wire:target="add_annonce" value="Enregistrer" class="button">
                    <button wire:loading wire:target="add_annonce" disabled class="button">Enregistrement...</button>
                </div>
            </div>
        </form>
    </section>
</div>

<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/other/add-annonce.blade.php ENDPATH**/ ?>