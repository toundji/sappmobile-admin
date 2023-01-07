<div>
    <div class="container-fluid banner">
        <h4>Administration > Gestion des droits du manager</h4>
    </div>

    <section class="container-fluid page_content">

        <div class="col-lg-8 mx-auto bg-white rounded border p-5">

            <div class="form-check form-switch">
                <label class="form-check-label text-black" for="client">Autoriser le manager à gérer les <b>Clients</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('client')" role="switch" id="client"
                    @if (str_contains($admin->role, "client,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="conducteur">Autoriser le manager à gérer les <b>Conducteurs</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('conducteur')" role="switch" id="conducteur"
                    @if (str_contains($admin->role, "conducteur,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="vehicule">Autoriser le manager à gérer les <b>Véhicules</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('vehicule')" role="switch" id="vehicule"
                    @if (str_contains($admin->role, "vehicule,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="partenaire">Autoriser le manager à gérer les <b>Partenaires</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('partenaire')" role="switch" id="partenaire"
                    @if (str_contains($admin->role, "partenaire,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="operation">Autoriser le manager à gérer les <b>Opérations</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('operation')" role="switch" id="operation"
                    @if (str_contains($admin->role, "operation,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="prix">Autoriser le manager à gérer les <b>Prix</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('prix')" role="switch" id="prix"
                    @if (str_contains($admin->role, "prix,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="bonus">Autoriser le manager à gérer les <b>Bonus</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('bonus')" role="switch" id="bonus"
                    @if (str_contains($admin->role, "bonus"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="actualites">Autoriser le manager à gérer les <b>Actualités</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('news')" role="switch" id="actualites"
                    @if (str_contains($admin->role, "news,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

            <div class="form-check form-switch mt-4">
                <label class="form-check-label text-black" for="faq">Autoriser le manager à gérer les <b>FAQ</b></label>
                <input class="form-check-input" type="checkbox" wire:click="setRole('faq')" role="switch" id="faq"
                    @if (str_contains($admin->role, "faq,"))
                        {{ "checked" }}
                    @endif
                >
            </div>

        </div>

    </section>


</div>
