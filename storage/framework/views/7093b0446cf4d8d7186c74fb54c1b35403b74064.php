<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Une opération </h4>
    </div>

    <section class="page_content"  style="background-color: #eee;">

        <div class="row mx-5 shadow-sm">

            <div class="bg-white p-3 col-md-12 shadow-sm rounded">
                <h6 class="text-black fw-bold">
                    À propos de l'opération
                </h6>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Date de l'opération
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->created_at->format('d/m/Y à H:i:s')); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Client
                    </div>
                    <div class="col-sm-7 text-end">
                        <img src="<?php echo e(asset($transport->user->image_profil)); ?>" class="rounded-circle client-image" alt="">
                        <span class="ms-2"><a href="<?php echo e(route('admin.client', ['id' => $transport->user->id])); ?>"><?php echo e(ucfirst($transport->user->last_name).' '.ucfirst($transport->user->first_name)); ?></a></span>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Pour lui-même
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->owner == true ? "Oui" : "Non"); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Conducteur
                    </div>
                    <div class="col-sm-7 text-end">
                        <img src="<?php echo e(asset($transport->conducteur->user->image_profil)); ?>" class="rounded-circle client-image" alt="">
                        <span class="ms-2"><a href="<?php echo e(route('admin.conducteur', ['id' => $transport->conducteur->id])); ?>"><?php echo e(ucfirst($transport->conducteur->user->last_name).' '.ucfirst($transport->conducteur->user->first_name)); ?></a></span>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Montant
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->price); ?> FCFA
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Mode de Paiement
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->payement_mode); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Distance
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->distance_text); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Duree
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->duration_text); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Le trajet
                    </div>
                    <div class="col-sm-7 text-end">
                        <a href="<?php echo e(route('admin.direction', ['id' => $transport->id ])); ?>">Voir le trajet</a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Nombre de personnes
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->number_persons); ?> personne<?php echo e($transport->number_persons > 1 ? "s" : ""); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Status
                    </div>
                    <div class="col-sm-7 text-end">
                       <?php echo e($transport->status); ?>

                    </div>
                </div>

            </div>


        </div>



        <div class="row mx-5 mt-4 shadow-sm">

            <div class="bg-white p-3 col-md-12 shadow-sm rounded">
                <h6 class="text-black fw-bold">
                    Log des deplacements
                </h6>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Distance du chauffeur au client
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->driver_distance_text); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Durée du chauffeur au client
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->driver_duration_text); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Date de paiement espèce client
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->user_espece_date ? $transport->user_espece_date->format('d/m/Y à H:i:s') : ""); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Date de reception espèce chauffeur
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->driver_espece_date ? $transport->driver_espece_date->format('d/m/Y à H:i:s') : ""); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Nombre d'alerte
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->alert_number); ?>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Raison de l'annulation
                    </div>
                    <div class="col-sm-7 text-end">
                        <?php echo e($transport->cancel_reason); ?>

                    </div>
                </div>

            </div>


        </div>

    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/operation/operation.blade.php ENDPATH**/ ?>