<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Modifier les droits de <?php echo e(ucfirst($manager->last_name).' '.ucfirst($manager->first_name)); ?></h4>
    </div>

    <div class="table-responsive mt-4 bg-white border">
        <table class="table bg-white text-center table-striped table-bordered align-middle rounded align-middle">
            <thead class="bg-primary- border-bottom-black">
                <tr class="border-white text-white">
                    <th>Droit</th>
                    <th>Voir</th>
                    <th>Ajouter</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody class="border-white">
                <tr class="py-2">
                    <td>Client</td>
                    <td><input type="checkbox" wire:click="setRole('clients')" <?php echo e(autorisationAuth("clients", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox"  disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Conducteur</td>
                    <td><input type="checkbox" wire:click="setRole('conducteurs')" <?php echo e(autorisationAuth("conducteurs", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('conducteur_edit')" <?php echo e(autorisationAuth("conducteur_edit", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Véhicule</td>
                    <td><input type="checkbox" wire:click="setRole('vehicules')" <?php echo e(autorisationAuth("vehicules", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('vehicule_edit')" <?php echo e(autorisationAuth("vehicule_edit", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Entreprise</td>
                    <td><input type="checkbox" wire:click="setRole('entreprises')" <?php echo e(autorisationAuth("entreprises", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Classe</td>
                    <td><input type="checkbox" wire:click="setRole('classes')" <?php echo e(autorisationAuth("classes", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('classe_add')" <?php echo e(autorisationAuth("classe_add", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('classe_edit')" <?php echo e(autorisationAuth("classe_edit", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Bonus</td>
                    <td><input type="checkbox" wire:click="setRole('bonuses')" <?php echo e(autorisationAuth("bonuses", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('bonus_define')" <?php echo e(autorisationAuth("bonus_define", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('bonus_define')" <?php echo e(autorisationAuth("bonus_define", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Annonce</td>
                    <td><input type="checkbox" wire:click="setRole('annonces')" <?php echo e(autorisationAuth("annonces", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('annonce_add')" <?php echo e(autorisationAuth("annonce_add", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('annonce_edit')" <?php echo e(autorisationAuth("annonce_edit", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('annonce_delete')" <?php echo e(autorisationAuth("annonce_delete", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Publication</td>
                    <td><input type="checkbox" wire:click="setRole('publications')" <?php echo e(autorisationAuth("publications", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('publication_add')" <?php echo e(autorisationAuth("publication_add", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('publication_edit')" <?php echo e(autorisationAuth("publication_edit", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('publication_delete')" <?php echo e(autorisationAuth("publication_delete", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>FAQ</td>
                    <td><input type="checkbox" wire:click="setRole('faqs')" <?php echo e(autorisationAuth("faqs", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('faq_add')" <?php echo e(autorisationAuth("faq_add", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('faq_edit')" <?php echo e(autorisationAuth("faq_edit", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('faq_delete')" <?php echo e(autorisationAuth("faq_delete", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Finance</td>
                    <td><input type="checkbox" wire:click="setRole('finance')" <?php echo e(autorisationAuth("finance", $manager->id) ? "checked" : ""); ?> name="" id=""></td>
                    <td><input type="checkbox"  disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/manager/manager.blade.php ENDPATH**/ ?>