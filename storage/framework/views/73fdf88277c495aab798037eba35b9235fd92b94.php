<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Nouveau véhicule</h4>
    </div>

    <section class="page_content bg-white mt-4 rounded shadow-sm">
        <div >
            <div class="col-md-12  py-3 px-4">
                <h5 class="text-black fw-bold">Enregistrer un nouveau véhicule</h5>
                <small>Vous ajoutez ici les véhicules de l'entreprise SAPP MOBILE.</small>
                <?php if(session()->has("error")): ?>
                    <div class="alert alert-danger mt-4">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session()->has("success")): ?>
                    <div class="alert alert-primary mt-4">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <form wire:submit.prevent="add_vehicule" class="row">
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Classe du véhicule</label>
                        <select wire:model.defer="category_id" class="form-control-" required>
                            <option value=""></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Matricule du véhicule</label>
                        <input type="text" class="form-control-" wire:model.defer="matricule" required>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Model du véhicule</label>
                        <input type="text" wire:model.defer="model" class="form-control-" required>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Marque du véhicule</label>
                        <input type="text" class="form-control-" wire:model.defer="marque" required>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Pays de Fabrication</label>
                        <input type="text" wire:model.defer="pays_fabrication" class="form-control-" required>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Couleur du véhicule</label>
                        <input type="text" class="form-control-" wire:model.defer="couleur" required>
                    </div>
                    <div class="mt-4 text-center">
                        <input type="submit" wire:loading.remove wire:target="add_vehicule" value="Enregistrer" class="button">
                        <button wire:loading wire:target="add_vehicule" disabled class="button">Enregistrement...</button>
                    </div>
                </div>




            </form>
        </div>
    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/vehicule/add-vehicule.blade.php ENDPATH**/ ?>