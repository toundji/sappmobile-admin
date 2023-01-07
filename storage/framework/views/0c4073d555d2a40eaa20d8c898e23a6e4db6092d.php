<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Modifier une classe</h4>
    </div>

    <section class="page_content bg-white mt-4">

        <div class="shadow-sm rounded p-4 pt-0">

            <form wire:submit.prevent="set_classe" class="row">
                <?php if(session()->has("success")): ?>
                    <div class="alert alert-primary mt-4">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <div class="mb-4">
                    <label for="">Nom</label>
                    <input type="text" class="form-control-" required wire:model.defer="name">
                </div>
                <div class="mb-4 col-md-6">
                    <label for="">Prix <b class="text-black">M</b> en CFA</label>
                    <input type="number" min="1" class="form-control-" required wire:model.defer="metter_price">
                </div>
                <div class="mb-4 col-md-6">
                    <label for="">Prix <b class="text-black">1KM</b> en CFA</label>
                    <input type="number" min="1" class="form-control-" required wire:model.defer="km_price">
                </div>
                <div class="mb-4">
                    <label for="">Image d'une voiture de la catégorie(selectionnez si vous voulez changer l'ancienne)</label>
                    <input type="file" min="1" accept=".png, .jpg, .jpeg" class="form-control-" wire:model.defer="image_category">
                </div>
                <div class="mb-4">
                    <label for="">Caractéristique (séparées par ;)</label>
                    <textarea class="form-control-" required placeholder="Mettez les caractéristiques séparées par une virgule(,)" wire:model.defer="caracteristique" cols="30" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <input type="submit" wire:loading.remove wire:target="set_classe" value="Modifier" class="button">
                    <button wire:loading wire:target="set_classe" disabled class="button">Modification...</button>
                </div>
            </form>
        </div>



    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/vehicule/edit-classe.blade.php ENDPATH**/ ?>