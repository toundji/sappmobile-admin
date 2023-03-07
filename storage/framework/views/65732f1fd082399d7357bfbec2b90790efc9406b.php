<div class="container-fluid">

    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Conducteur > <?php echo e(ucfirst($user->last_name).' '.ucfirst($user->first_name)); ?></h4>
    </div>


    <section style="background-color: #eee;">
        <div class="container py-5">

          <div class="row">

            <div class="col-lg-4">
              	<div class="card mb-4">
					<div class="card-body text-center">
						<img src="<?php echo e($conducteur->user->image_profil); ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 100px; height: 100px; object-fit: cover">
						<h5 class="my-3"><a href="<?php echo e(route('admin.client', ['id' => $user->id])); ?>"><?php echo e(ucfirst($user->last_name).' '.ucfirst($user->first_name)); ?></a></h5>
						<p class="text-muted mb-4"><?php echo e($user->email); ?></p>
                        <p class="text-muted mb-4">Statut : <?php echo e($conducteur->ask_status); ?></p>
                        <?php if($conducteur->ask_status === "REFUSE"): ?>
                            <button type="button" class="btn btn-outline-danger btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal3">Voir le message de rejet</button>
                        <?php endif; ?>
						<div class="d-flex justify-content-center mb-2">
						<?php if(autorisationAuth("conducteur_edit")): ?>
                            <?php if($conducteur->ask_status === "APPROUVE"): ?>
                                <?php if($conducteur->status == 1): ?>
                                    <button type="button" class="btn btn-outline-danger btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal2">Bloquer</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal4">Débloquer</button>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if($conducteur->ask_status === "DEMANDE"): ?>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Approuver</button>
                                <button class="btn btn-outline-warning ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal1">Refuser</button>
                            <?php endif; ?>
                        <?php endif; ?>
					</div>
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
                                <p class="mb-0 text-black">Permis</p>
                            </div>
                            <div class="col-sm-9 text-end">
                                <p class="text-muted mb-0"><a href="<?php echo e($conducteur->permis_conduit); ?>"  class="text-decoration-none text-primary">Télécharger <i class="uil uil-download-alt"></i></a></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 text-black">CNI</p>
                            </div>
                            <div class="col-sm-9 text-end">
                                <p class="text-muted mb-0"><a href="<?php echo e($conducteur->piece_identite); ?>" class="text-decoration-none text-primary">Télécharger <i class="uil uil-download-alt"></i></a></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 text-black">Contrat baille</p>
                            </div>
                            <div class="col-sm-9 text-end">
                                <p class="text-muted mb-0"><a href="<?php echo e($conducteur->contrat_baille); ?>" class="text-decoration-none text-primary">Télécharger <i class="uil uil-download-alt"></i></a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-md-12 mx-auto mt-2">
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <p class="mb-0">Conducteur de : </p>
                            <i class="uil uil-car text-danger"></i>
                        </li>

                        <?php if($conducteur->vehicule != null): ?>
                            <div class="table-responsive-sm">
                                <table class="table bg-white rounded align-middle">
                                    <thead class="bg-primary- border-bottom-black">
                                        <tr class="border-white text-white">
                                            <th>#</th>
                                            <th>Matricule</th>
                                            <th>Catégorie </th>
                                            <th>Model</th>
                                            <th>Entreprise</th>
                                            <th class="text-center">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody  class="border-white">
                                        <tr class="border-white">
                                            <td scope="row"><b class="text-primary-">1</b></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.conducteur', ['id' => $conducteur->vehicule->id])); ?>"><?php echo e($conducteur->vehicule->matricule); ?></a>
                                            </td>
                                            <td>
                                                <?php if($conducteur->vehicule->category): ?>
                                                    <?php echo e($conducteur->vehicule->category->name); ?>

                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($conducteur->vehicule->model); ?></td>
                                            <td>
                                                <?php if($conducteur->vehicule->entreprise): ?>
                                                    <?php echo e($conducteur->vehicule->entreprise->name); ?>

                                                <?php endif; ?>
                                            <td class="text-center"><a href="<?php echo e(route('admin.vehicule', ['id' => $conducteur->vehicule->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
                                        </tr>
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


            <div class="col-md-12 mt-4">

                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <p class="mb-0">Transport : </p>
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
                            <?php $__currentLoopData = $conducteur->transports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="border-white">
                                    <td scope="row"><b class="text-primary-"><?php echo e($i + 1); ?></b></td>
                                    <td><?php echo e($transport->created_at->format('d/m/Y à H:i:s')); ?></td>
                                    <td>
                                        <img src="<?php echo e($transport->user->image_profil); ?>" class="rounded-circle client-image" alt="">
                                        <span class="ms-2"><a href="<?php echo e(route('admin.client', ['id' => $transport->user->id])); ?>"><?php echo e(ucfirst($transport->user->last_name).' '.ucfirst($transport->user->first_name)); ?></a></span>
                                    </td>
                                    <td>
                                        <img src="<?php echo e($conducteur->user->image_profil); ?>" class="rounded-circle client-image" alt="">
                                        <span class="ms-2"><a href="<?php echo e(route('admin.conducteur', ['id' => $conducteur->id])); ?>"><?php echo e(ucfirst($conducteur->user->last_name).' '.ucfirst($conducteur->user->first_name)); ?></a></span>
                                    </td>
                                    <td><?php echo e($transport->price); ?> FCFA</td>
                                    <td>
                                        <?php echo e($transport->ask_status); ?>

                                    </td>
                                    <td class="text-center"><a href="<?php echo e(route('admin.operation', ['id' => $transport->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                      </table>
                </div>


              </div>

            </div>

        </div>


      </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Approbation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment accepter ce conducteur ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" wire:loading.remove wire:target="accept" wire:click="accept">Accepter</button>
                <button type="button" class="btn btn-primary" wire:loading wire:target="accept" disabled>En cours</button>
            </div>
        </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal1Label">Rejet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="reject">
                    <textarea class="form-control" required  wire:model.defer="message" cols="30" rows="6" placeholder="Message de rejet"></textarea>
                    <div class="text-center mt-4">
                        <input type="submit" wire:loading.remove wire:target="reject" value="Réjéter" class="btn btn-primary">
                        <button wire:loading wire:target="reject" disabled class="btn btn-primary">Envoie en cours...</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal2Label">Bloqué</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment bloqué ce conducteur ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-danger" wire:loading.remove wire:target="block" wire:click="block">Bloquer</button>
                <button type="button" class="btn btn-danger" wire:loading wire:target="block" disabled>En cours</button>
            </div>
        </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal4Label">Debloqué</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment débloqué ce conducteur ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-success" wire:loading.remove wire:target="disblock" wire:click="disblock">Débloquer</button>
                <button type="button" class="btn btn-success" wire:loading wire:target="disblock" disabled>En cours</button>
            </div>
        </div>
        </div>
    </div>

    <?php if($conducteur->ask_status === "REJETE"): ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal3Label">Message de rejet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-secondary lh-lg fs-6 text-justify">
                        <?php echo e($conducteur->message); ?>

                    </p>
                </div>
            </div>
            </div>
        </div>
    <?php endif; ?>


</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/conducteur/conducteur.blade.php ENDPATH**/ ?>