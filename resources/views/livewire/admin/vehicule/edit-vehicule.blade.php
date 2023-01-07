<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Modifier véhicule</h4>
    </div>

    <section class="mt-4">
        <div >
            <div class="col-md-12 bg-white py-3 px-4">
                @if (session()->has("error"))
                    <div class="alert alert-danger mt-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session()->has("success"))
                    <div class="alert alert-success mt-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form wire:submit.prevent="edit_vehicule" class="row">
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Classe du véhicule</label>
                        <select wire:model.defer="category_id" class="form-control-" required>
                            <option value=""></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
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
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Max personne</label>
                        <input type="number" class="form-control-" maxlength="50" minlength="1" wire:model.defer="max_passenger" required>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Etat du véhicule</label>
                        <select class="form-control-" wire:model.defer="status" required>
                            <option value=""></option>
                            <option value="1">En état</option>
                            <option value="0">Non en état</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="" class="mb-2">Téléhone du conducteur</label>
                        <input list="conducteur" wire:model.defer="conducteur_phone"  class="form-control-">
                        <datalist id="conducteur">
                            @foreach ($conducteurs as $conducteur)
                                @php
                                    $user = getUser($conducteur->user_id);
                                @endphp
                                <option value="{{ $user->phone }}">{{ ucfirst($user->last_name).' '.ucfirst($user->first_name) }}</option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="mt-4 text-center">
                        <input type="submit" wire:loading.remove wire:target="edit_vehicule" value="Enregistrer" class="button">
                        <button wire:loading wire:target="edit_vehicule" disabled class="button">Enregistrement...</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
</div>
