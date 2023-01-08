<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Entreprise</h4>
    </div>

    <section class="page_content">

        <div class="row mx-1">

            <div class="bg-white p-3 col-md-12 shadow-sm rounded">
                <h6 class="text-black fw-bold">
                    À propos de l'entreprise
                </h6>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Nom de l'entreprise
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($entreprise->name); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Logo de l'entreprise
                    </div>
                    <div class="col-sm-7 text-end">
                        <img src="<?php echo e($entreprise->logo); ?>"  class="rounded-circle client-image" alt="">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Ville de l'entreprise
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($entreprise->ville); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Registre de commerce
                    </div>
                    <div class="col-sm-7 text-end">
                        <a href="<?php echo e(asset($entreprise->registre_commerce)); ?>">Télécharger</a>
                    </div>
                </div>

                <?php if($entreprise->agent_entreprise): ?>
                    <div class="row mt-4">
                        <div class="col-sm-5 text-secondary">
                            Nom de l'agent de l'entreprise
                        </div>
                        <div class="col-sm-7 text-end">
                            <a href="<?php echo e(route('admin.client', ['id' => $entreprise->agent_entreprise->user->id])); ?>"><?php echo e(ucfirst($entreprise->agent_entreprise->user->last_name)." ".ucfirst($entreprise->agent_entreprise->user->first_name)); ?></a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-5 text-secondary">
                            Photo de l'agent
                        </div>
                        <div class="col-sm-7 text-end">
                            <img src="<?php echo e(asset($entreprise->agent_entreprise->user->image_profil)); ?>"  class="rounded-circle client-image" alt="">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-5 text-secondary">
                            CNI de l'agent
                        </div>
                        <div class="col-sm-7 text-end">
                            <a href="<?php echo e(asset($entreprise->agent_entreprise->piece_identite)); ?>">Télécharger</a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>


        <div class="col-md-12 mx-auto mt-4 shadow-sm">
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <h6 class="mb-0 fw-bold">Les véhicules de l'entréprise :</h6>
                        <i class="uil uil-car text-danger"></i>
                    </li>

                    <?php if(count($entreprise->vehicules) > 0): ?>
                    <div class="table-responsive-sm">
                        <table class="table bg-white rounded align-middle">
                            <thead class="bg-primary- border-bottom-black">
                              <tr class="border-white text-white">
                                <th>#</th>
                                <th>Matricule</th>
                                <th>Catégorie </th>
                                <th>Model</th>
                                <th>Entreprise</th>
                                <th>Conducteur</th>
                                <th class="text-center">Detail</th>
                              </tr>
                            </thead>
                            <tbody  class="border-white">
                                <?php
                                    $i = 1;
                                ?>
                                <?php $__currentLoopData = $entreprise->vehicules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="border-white">
                                        <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                                        <td><?php echo e($vehicule->matricule); ?></td>
                                        <td><?php echo e($vehicule->category->name); ?></td>
                                        <td><?php echo e($vehicule->model); ?></td>
                                        <td><?php echo e($entreprise->name); ?></td>
                                        <td>
                                            <?php if($vehicule->conducteur): ?>
                                            <?php echo e(ucfirst($vehicule->conducteur->user->last_name ?? null).' '.ucfirst($vehicule->conducteur->user->first_name ?? null)); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center"><a href="<?php echo e(route('admin.vehicule', ['id' => $vehicule->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
                                    </tr>
                                    <?php
                                        $i++
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                          </table>
                    </div>
                    <?php else: ?>
                        <li class="p-3">
                            <p class="mb-0 text-center">Aucun véhicule</p>
                        </li>
                    <?php endif; ?>

                </ul>
                </div>
            </div>
        </div>

    </section>

</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/entreprise/entreprise.blade.php ENDPATH**/ ?>