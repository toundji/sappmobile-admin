<div class="container-fluid">

    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des utilisateurs > <?php echo e(ucfirst($user->last_name).' '.ucfirst($user->first_name)); ?></h4>
    </div>


    <section style="background-color: #eee;">
        <div class="container py-5">

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center pb-5">
                  <img src="<?php echo e($user->image_profil); ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 100px; height: 100px; object-fit: cover">
                  <h5 class="my-3"><?php echo e(ucfirst($user->last_name).' '.ucfirst($user->first_name)); ?></h5>
                  <p class="text-muted mb-4"><?php echo e($user->phone); ?></p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0 text-black">Nom complet</p>
                      </div>
                      <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0"><?php echo e(ucfirst($user->last_name).' '.ucfirst($user->first_name)); ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Email</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0"><?php echo e($user->email); ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Téléphone</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0"><?php echo e($user->phone); ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">portefeuille</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0"><?php echo e($user->portefeuille ? $user->portefeuille->solde : 0); ?> FCFA</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Bonus</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0"><?php echo e($user->portefeuille->sapp ?? 0); ?> SAPP</p>
                        </div>
                    </div>
                </div>
                </div>


            </div>
          </div>


          <div class="row g-4">
            <div class="col-md-6">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0 text-black- fw-bold">Compte parents</p>
                            <i class="uil uil-link text-danger"></i>
                        </li>

                        <?php if(count($user->complices) > 0): ?>
                            <?php $__currentLoopData = $user->complices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('admin.client', ['id' => $complice->parent->id])); ?>" class="d-flex align-items-center text-decoration-none text-black p-3">
                                    <img src="<?php echo e($complice->parent->image_profil); ?>" class="complice_img" alt="">
                                    <p class="mb-0 ms-2"><?php echo e(ucfirst($complice->parent->last_name).' '.ucfirst($complice->parent->first_name)); ?></p>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <li class="p-3">
                                <p class="mb-0 text-center">Aucun compte</p>
                            </li>
                        <?php endif; ?>

                    </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0 text-black- fw-bold">Compte enfants</p>
                            <i class="uil uil-link text-danger"></i>
                        </li>

                        <?php if(count($user->enfants) > 0): ?>
                            <?php $__currentLoopData = $user->enfants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $complice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('admin.client', ['id' => $complice->user->id])); ?>" class="d-flex align-items-center text-decoration-none text-black p-3">
                                    <img src="<?php echo e($complice->user->image_profil); ?>" class="complice_img" alt="">
                                    <p class="mb-0 ms-2"><?php echo e(ucfirst($complice->user->last_name).' '.ucfirst($complice->user->first_name)); ?></p>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <li class="p-3">
                                <p class="mb-0 text-center">Aucun compte</p>
                            </li>
                        <?php endif; ?>

                    </ul>
                    </div>
                </div>
            </div>


          <div class="col-md-12 mt-4">


            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0 text-black- fw-bold">Transports : </p>
                <i class="uil uil-car text-danger"></i>
            </li>

            <div class="table-responsive-sm">
                <table class="table bg-white rounded align-middle">
                    <thead class="bg-primary- border-bottom-black">
                      <tr class="border-white text-white">
                        <th>#</th>
                        <th>Date et heure</th>
                        <th>Client</th>
                        <th>Conducteur</th>
                        <th>Montant</th>
                        <th>Status</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody  class="border-white">
                        <?php
                            $i = 1;
                        ?>
                        <?php $__currentLoopData = $user->transports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-white">
                                <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                                <td><?php echo e($transport->created_at->format('d/m/Y à H:i:s')); ?></td>
                                <td>
                                    <img src="<?php echo e($transport->user->image_profil); ?>" class="rounded-circle client-image" alt="">
                                    <span class="ms-2"><a href="<?php echo e(route('admin.client', ['id' => $transport->user->id])); ?>"><?php echo e(ucfirst($transport->user->last_name).' '.ucfirst($transport->user->first_name)); ?></a></span>
                                </td>
                                <td>
                                    <img src="<?php echo e($transport->conducteur->user->image_profil); ?>" class="rounded-circle client-image" alt="">
                                    <span class="ms-2"><a href="<?php echo e(route('admin.conducteur', ['id' => $transport->conducteur->id])); ?>"><?php echo e(ucfirst($transport->conducteur->user->last_name).' '.ucfirst($transport->conducteur->user->first_name)); ?></a></span>
                                </td>
                                <td><?php echo e($transport->price); ?> FCFA</td>
                                <td>
                                    <?php echo e($transport->status); ?>

                                </td>
                                <td class="text-center"><a href="<?php echo e(route('admin.operation', ['id' => $transport->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
                            </tr>
                            <?php
                                $i++
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  </table>
            </div>

            <style>
                svg {
                    height: 20px;
                }
            </style>

            

          </div>

        </div>

      </section>


</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/client/client.blade.php ENDPATH**/ ?>