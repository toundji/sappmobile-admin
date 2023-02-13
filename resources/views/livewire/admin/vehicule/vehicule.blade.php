<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Véhicule > </h4>
    </div>

    <section class="page_content">

        <div class="row mx-1">

            <div class="bg-white p-4 col-md-12 shadow-sm rounded">
                <h6 class="text-black fw-bold">
                    À propos du véhicule
                    @if (autorisationAuth("vehicule_edit"))
                        <a href="{{ route('admin.edit-vehicule', ['id' => $vehicule->id]) }}" class="button_small text-white px-3 py-2 float-end">Modifier</a>
                    @endif
                </h6>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Matricule
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->matricule }}
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Catégorie
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        @if ($vehicule->category)
                            {{ $vehicule->category->name }}
                        @endif
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Model
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->model }}
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Marque
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->marque }}
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Pays de fabrication
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->pays_fabrication }}
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Killometrage
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->kilometrage }} km
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Distance total parcourir
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->distance_do }} m
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Couleur
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->couleur }}
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Etat
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end {{  ($vehicule->status === 1) ? "text-success" : "text-danger"; }}">
                        {{  ($vehicule->status === 1) ? "" : "Non"; }} En etat
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Entreprise
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->entreprise->name }}
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Nombre maximal de personne
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        {{  $vehicule->max_passenger }}
                    </div>
                </div>
                <hr>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Conducteur actuel
                    </div>
                    <div class="col-sm-7 fw-bold text-black- text-end">
                        @if ($vehicule->conducteur !== null)
                            <a href="{{ route('admin.conducteur', ['id' => $vehicule->conducteur->id]) }}" class="text-decoration-none text-secondary">
                                <img src="{{ $vehicule->conducteur->user->image_profil }}" class="complice_img me-1" alt="">
                                {{ ucfirst($vehicule->conducteur->user->last_name).' '.ucfirst($vehicule->conducteur->user->first_name) }}
                            </a>
                        @endif
                    </div>
                </div>

            </div>

            <div class="bg-white p-3 col-lg-12 mt-4 shadow-sm rounded">
                <h6 class="text-black text-center">Tous les anciens conducteurs du véhicule</h6>
                @foreach ($history as $item)
                    @if ($item->conducteur_id != 0)
                        @php
                            $conducteur1 = getConducteur($item->conducteur_id);
                            $user1 = getUser($conducteur1->user_id);
                        @endphp
                        <p class="p-3 mt-2 card bg-light">
                            <a href="{{ route('admin.conducteur', ['id' => $conducteur1->id]) }}"  class="text-decoration-none text-primary-">
                                <img src="{{ $user1->image_profil }}" class="complice_img me-2" alt="">
                                {{ ucfirst($user1->last_name).' '.ucfirst($user1->first_name) }}
                            </a>
                            <span class="mt-2">Date debut : {{ $item->created_at }}</span>
                            @if ($item->dateEnd != null)
                                <span class="mt-2">Date de fin : {{ $item->dateEnd }}</span>
                            @endif
                        </p>
                    @endif
                @endforeach
            </div>

        </div>

    </section>




</div>
