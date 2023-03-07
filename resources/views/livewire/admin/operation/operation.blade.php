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
                        {{ $transport->created_at->format('d/m/Y à H:i:s') }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Client
                    </div>
                    <div class="col-sm-7 text-end">
                        <img src="{{ $transport->user->image_profil }}" class="rounded-circle client-image" alt="">
                        <span class="ms-2"><a href="{{ route('admin.client', ['id' => $transport->user->id]) }}">{{ ucfirst($transport->user->last_name).' '.ucfirst($transport->user->first_name) }}</a></span>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Pour lui-même
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->owner == true ? "Oui" : "Non" }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Conducteur
                    </div>
                    @if ($transport->conducteur)
                        <div class="col-sm-7 text-end">
                            <img src="{{ $transport->conducteur->user->image_profil }}" class="rounded-circle client-image" alt="">
                            <span class="ms-2"><a href="{{ route('admin.conducteur', ['id' => $transport->conducteur->id]) }}">{{ ucfirst($transport->conducteur->user->last_name).' '.ucfirst($transport->conducteur->user->first_name) }}</a></span>
                        </div>
                    @endif
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Montant
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->price }} FCFA
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Mode de Paiement
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->payement_mode }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Distance
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->distance_text }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Duree
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->duration_text }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Le trajet
                    </div>
                    <div class="col-sm-7 text-end">
                        <a href="{{ route('admin.direction', ['id' => $transport->id ]) }}">Voir le trajet</a>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Nombre de personnes
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->number_persons }} personne{{ $transport->number_persons > 1 ? "s" : "" }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Status
                    </div>
                    <div class="col-sm-7 text-end">
                       {{ $transport->status }}
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
                        {{ $transport->driver_distance_text }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Durée du chauffeur au client
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->driver_duration_text }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Date de paiement espèce client
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->user_espece_date ?? "" }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Date de reception espèce chauffeur
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->driver_espece_date ?? "" }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Nombre d'alerte
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->alert_number }}
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-5 text-secondary">
                        Raison de l'annulation
                    </div>
                    <div class="col-sm-7 text-end">
                        {{ $transport->cancel_reason }}
                    </div>
                </div>

            </div>


        </div>

    </section>
</div>
