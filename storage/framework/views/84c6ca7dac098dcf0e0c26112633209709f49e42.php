<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Definir tous les bonus</h4>
    </div>

    <section class="page_content bg-white mt-4 shadow-sm">
        <div class="row px-5"  x-data="{visible: false}">

            <form wire:submit.prevent="set_define_bonus" class="col-md-12 mx-auto">
                <h6>Modifier bonus de 1km <span class="text-primary-">(Actuel valeur <?php echo e($ONE_KM__NUMBER_SAPP->value); ?> SAPP)</span> </h6>
                <?php if(session()->has("success1")): ?>
                    <div class="alert alert-success mt-4">
                        <?php echo e(session('success1')); ?>

                    </div>
                <?php endif; ?>

                <div class="col-md-12 mt-4">
                    <label for="" class="mb-2">Nouvelle valeur en SAPP</label>
                    <input type="number" min="1" class="form-control-" required maxlength="10" wire:model.defer="number_sapp">
                </div>

                <div class="mt-4 text-center">
                    <input type="submit" wire:loading.remove wire:target="set_define_bonus" value="Enregistrer" class="button">
                    <button wire:loading wire:target="set_define_bonus" disabled class="button">Enregistrement...</button>
                </div>
            </form>

            <h4 class="my-3" x-on:click="visible = !visible" type="button">
                <i class="uil uil-angle-right-b" x-show="!visible"></i>
                <i class="uil uil-angle-down" x-show="visible" x-cloak></i>
                Historique
            </h4>
            <div class="table-responsive-sm" x-cloak x-show="visible">
                <table class="table bg-light rounded align-middle">
                    <thead class="bg-primary- border-bottom-black">
                    <tr class="border-white text-white">
                        <th>#</th>
                        <th>Distance</th>
                        <th>Bonus</th>
                        <th>Statut</th>
                        <th>De</th>
                        <th>À</th>
                    </tr>
                    </thead>
                    <tbody  class="border-white">
                        <?php
                            $i = 1;
                        ?>
                        <?php $__currentLoopData = $bonus_defines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bonus_define): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-white">
                                <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                                <td><?php echo e($bonus_define->one_km); ?> Km</td>
                                <td><?php echo e($bonus_define->number_sapp); ?> SAPP</td>
                                <td><?php echo e($bonus_define->status); ?> </td>
                                <td><?php echo e($bonus_define->created_at->format('d/m/Y à H:i:s')); ?></td>
                                <td><?php echo e($bonus_define->updated_at->format('d/m/Y à H:i:s')); ?></td>
                            </tr>
                            <?php
                                $i++
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>

        <hr>

        <div class="row px-5" x-data="{visible: false}">
            <form wire:submit.prevent="set_bonus_price" class="col-md-12 mx-auto">
                <h6>Modifier valeur de 1 SAPP <span class="text-primary-">(Actuel valeur <?php echo e($ONE_SAPP__NUMBER_CFA->value); ?> FCFA)</span></h6>
                <?php if(session()->has("success2")): ?>
                    <div class="alert alert-success mt-4">
                        <?php echo e(session('success2')); ?>

                    </div>
                <?php endif; ?>

                <div class="col-md-12 mt-4">
                    <label for="" class="mb-2">Nouvelle valeur en CFA</label>
                    <input type="number" min="1" class="form-control-" required maxlength="10" wire:model.defer="cfa">
                </div>

                <div class="mt-4 text-center">
                    <input type="submit" wire:loading.remove wire:target="set_bonus_price" value="Enregistrer" class="button">
                    <button wire:loading wire:target="set_bonus_price" disabled class="button">Enregistrement...</button>
                </div>
            </form>

            <h4 class="my-3" type="button"  x-on:click="visible = !visible">
                <i class="uil uil-angle-right-b" x-show="!visible"></i>
                <i class="uil uil-angle-down" x-show="visible" x-cloak></i>
                Historique
            </h4>
            <div class="table-responsive-sm" x-cloak x-show="visible">
                <table class="table bg-light rounded align-middle">
                    <thead class="bg-primary- border-bottom-black">
                    <tr class="border-white text-white">
                        <th>#</th>
                        <th>Distance</th>
                        <th>Bonus</th>
                        <th>Statut</th>
                        <th>De</th>
                        <th>À</th>
                    </tr>
                    </thead>
                    <tbody  class="border-white">
                        <?php
                            $i = 1;
                        ?>
                        <?php $__currentLoopData = $bonus_prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bonus_price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-white">
                                <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                                <td><?php echo e($bonus_price->one_sapp); ?> SAPP</td>
                                <td><?php echo e($bonus_price->cfa); ?> FCFA</td>
                                <td><?php echo e($bonus_price->status); ?></td>
                                <td><?php echo e($bonus_price->created_at->format('d/m/Y à H:i:s')); ?></td>
                                <td ><?php echo e($bonus_price->updated_at->format('d/m/Y à H:i:s')); ?></td>
                            </tr>
                            <?php
                                $i++
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/bonus/define-bonus.blade.php ENDPATH**/ ?>