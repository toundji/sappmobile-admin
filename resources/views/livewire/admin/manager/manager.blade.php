<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Modifier les droits de {{ ucfirst($manager->last_name).' '.ucfirst($manager->first_name) }}</h4>
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
                    <td><input type="checkbox" wire:click="setRole('clients')" {{ autorisationAuth("clients", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox"  disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Conducteur</td>
                    <td><input type="checkbox" wire:click="setRole('conducteurs')" {{ autorisationAuth("conducteurs", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('conducteur_edit')" {{ autorisationAuth("conducteur_edit", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Véhicule</td>
                    <td><input type="checkbox" wire:click="setRole('vehicules')" {{ autorisationAuth("vehicules", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('vehicule_edit')" {{ autorisationAuth("vehicule_edit", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Entreprise</td>
                    <td><input type="checkbox" wire:click="setRole('entreprises')" {{ autorisationAuth("entreprises", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Classe</td>
                    <td><input type="checkbox" wire:click="setRole('classes')" {{ autorisationAuth("classes", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('classe_add')" {{ autorisationAuth("classe_add", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('classe_edit')" {{ autorisationAuth("classe_edit", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Bonus</td>
                    <td><input type="checkbox" wire:click="setRole('bonuses')" {{ autorisationAuth("bonuses", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('bonus_define')" {{ autorisationAuth("bonus_define", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('bonus_define')" {{ autorisationAuth("bonus_define", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" disabled name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Annonce</td>
                    <td><input type="checkbox" wire:click="setRole('annonces')" {{ autorisationAuth("annonces", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('annonce_add')" {{ autorisationAuth("annonce_add", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('annonce_edit')" {{ autorisationAuth("annonce_edit", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('annonce_delete')" {{ autorisationAuth("annonce_delete", $manager->id) ? "checked" : "" }} name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>Publication</td>
                    <td><input type="checkbox" wire:click="setRole('publications')" {{ autorisationAuth("publications", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('publication_add')" {{ autorisationAuth("publication_add", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('publication_edit')" {{ autorisationAuth("publication_edit", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('publication_delete')" {{ autorisationAuth("publication_delete", $manager->id) ? "checked" : "" }} name="" id=""></td>
                </tr>
                <tr class="py-2">
                    <td>FAQ</td>
                    <td><input type="checkbox" wire:click="setRole('faqs')" {{ autorisationAuth("faqs", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('faq_add')" {{ autorisationAuth("faq_add", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('faq_edit')" {{ autorisationAuth("faq_edit", $manager->id) ? "checked" : "" }} name="" id=""></td>
                    <td><input type="checkbox" wire:click="setRole('faq_delete')" {{ autorisationAuth("faq_delete", $manager->id) ? "checked" : "" }} name="" id=""></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
