<div class="container-fluid">

    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des utilisateurs > {{ ucfirst($user->last_name).' '.ucfirst($user->first_name) }}</h4>
    </div>


    <section style="background-color: #eee;">
        <div class="container py-5">

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center pb-5">
                  <img src="{{ $user->image_profil }}" alt="avatar" class="rounded-circle img-fluid" style="width: 100px; height: 100px; object-fit: cover">
                  <h5 class="my-3">{{ ucfirst($user->last_name).' '.ucfirst($user->first_name) }}</h5>
                  <p class="text-muted mb-4">{{ $user->phone }}</p>
                  
                  <div class="d-flex justify-content-center mb-2">
                    @if ($user->status == "ACTIF")
                        <button type="button" class="btn btn-outline-danger" wire:loading.remove wire:target="set_status" wire:click="set_status('DESACTIVE')">Désactiver</button>
                    @else
                        <button type="button" class="btn btn-outline-success" wire:loading.remove wire:target="set_status" wire:click="set_status('ACTIF')">Activer</button>
                    @endif
                    <button wire:loading wire:target="set_status" disabled class="btn w-100 btn-login">Mise à jour...</button>
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
                        <p class="text-muted mb-0">{{ ucfirst($user->last_name).' '.ucfirst($user->first_name) }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Email</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0">{{ $user->email }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Téléphone</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0">{{ $user->phone }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Status</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0 text-black fw-bold">{{ $user->status }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Portefeuille</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0">{{ $user->portefeuille ? $user->portefeuille->solde : 0 }} FCFA</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <p class="mb-0 text-black">Bonus</p>
                        </div>
                        <div class="col-sm-9 text-end">
                        <p class="text-muted mb-0">{{ $user->portefeuille->sapp ?? 0 }} SAPP</p>
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

                        @if (count($user->complices) > 0)
                            @foreach ($user->complices as $complice)
                                <a href="{{ route('admin.client', ['id' => $complice->parent->id]) }}" class="d-flex align-items-center text-decoration-none text-black p-3">
                                    <img src="{{ $complice->parent->image_profil }}" class="complice_img" alt="">
                                    <p class="mb-0 ms-2">{{ ucfirst($complice->parent->last_name).' '.ucfirst($complice->parent->first_name) }}</p>
                                </a>
                            @endforeach
                        @else
                            <li class="p-3">
                                <p class="mb-0 text-center">Aucun compte</p>
                            </li>
                        @endif

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

                        @if (count($user->enfants) > 0)
                            @foreach ($user->enfants as $complice)
                                <a href="{{ route('admin.client', ['id' => $complice->user->id]) }}" class="d-flex align-items-center text-decoration-none text-black p-3">
                                    <img src="{{ $complice->user->image_profil }}" class="complice_img" alt="">
                                    <p class="mb-0 ms-2">{{ ucfirst($complice->user->last_name).' '.ucfirst($complice->user->first_name) }}</p>
                                </a>
                            @endforeach
                        @else
                            <li class="p-3">
                                <p class="mb-0 text-center">Aucun compte</p>
                            </li>
                        @endif

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
                        @foreach ($user->transports as $i => $transport)
                            <tr class="border-white">
                                <td scope="row"><b class="text-primary-">{{ $i + 1 }}</b></td>
                                <td>{{ $transport->created_at->format('d/m/Y à H:i:s') }}</td>
                                <td>
                                    <img src="{{ $transport->user->image_profil }}" class="rounded-circle client-image" alt="">
                                        <span class="ms-2"><a href="{{ route('admin.client', ['id' => $transport->user->id]) }}">{{ ucfirst($transport->user->last_name).' '.ucfirst($transport->user->first_name) }}</a></span>
                                </td>
                                <td>
                                    @if ($transport->conducteur)
                                        <img src="{{ $transport->conducteur->user->image_profil }}" class="rounded-circle client-image" alt="">
                                        <span class="ms-2"><a href="{{ route('admin.conducteur', ['id' => $transport->conducteur->id]) }}">{{ ucfirst($transport->conducteur->user->last_name).' '.ucfirst($transport->conducteur->user->first_name) }}</a></span>
                                    @endif
                                </td>
                                <td>{{ $transport->price }} FCFA</td>
                                <td>
                                    {{ $transport->status }}
                                </td>
                                <td class="text-center"><a href="{{ route('admin.operation', ['id' => $transport->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>

            <style>
                svg {
                    height: 20px;
                }
            </style>

            {{-- {{ $user->transports->links() }} --}}

          </div>

        </div>

      </section>


</div>
