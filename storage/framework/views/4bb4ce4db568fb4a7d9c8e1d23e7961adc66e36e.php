<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Nouvelle FAQ</h4>
    </div>

    <section class="page_content">

        <form wire:submit.prevent="add_faq" class="col-md-10 mx-auto bg-white shadow-sm p-4 rounded">
            <h6 class="text-primary-">Enregistrer une nouvelle annonce</h6>
            <?php if(session()->has("success")): ?>
                <div class="alert alert-success mt-4">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="col-md-12 mt-4">
                <label for="" class="mb-2">Question</label>
                <input type="text" class="form-control-" maxlength="200" wire:model="quiz">
            </div>
            <div class="col-md-12 mt-4">
                <label for="" class="mb-2">Réponse</label>
                <textarea name="" id="" cols="30" rows="5" wire:model="response" class="form-control-"></textarea>
            </div>
            <div class="mt-4 text-center">
                <input type="submit" wire:loading.remove wire:target="add_faq" value="Enregistrer" class="button">
                <button wire:loading wire:target="add_faq" disabled class="button">Enregistrement...</button>
            </div>
        </form>

    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/other/add-faq.blade.php ENDPATH**/ ?>