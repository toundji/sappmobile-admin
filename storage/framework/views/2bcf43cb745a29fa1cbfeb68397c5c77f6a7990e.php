<div>
    <div class="container-fluid banner border">
        <h4 class="text-secondary">SAPP MOBILE > Modifier publication</h4>
    </div>

    <section class="page_content">
        <form wire:submit.prevent="edit_publication" class="row mx-auto border  rounded bg-white p-4 shadow">
            <h6 class="text-primary-">Modifier une publication</h6>
            <?php if(session()->has("success")): ?>
                <div class="alert alert-success mt-4">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="col-md-6 mt-4">
                <label for="" class="mb-2">Titre de la publication</label>
                <input type="text" class="form-control-" maxlength="200" wire:model="name" required>
            </div>
            <div class="col-md-6 mt-4">
                <label for="" class="mb-2">Lien de la publication (facultatif)</label>
                <input type="url" class="form-control-" maxlength="200" wire:model="link">
            </div>
            <div class="col-md-12 mt-4">
                <label for="" class="mb-2">Description</label>
                <textarea name="" id="" cols="30" rows="4" wire:model="description" class="form-control-" required></textarea>
            </div>
            <div class="mt-4 text-center">
                <input type="submit" wire:loading.remove wire:target="edit_publication" value="Enregistrer" class="button">
                <button wire:loading wire:target="edit_publication" disabled class="button">Enregistrement...</button>
            </div>
        </form>
    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/other/edit-publication.blade.php ENDPATH**/ ?>