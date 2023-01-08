<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des opérations et Gains de l'entreprise <span class="text-primary-">{{ $entreprise->name }}</span></h4>
    </div>

    <div class="bg-warning py-2 px-2 rounded hstack mt-3">
        <p class="text-white- mb-0">Total des gains</p>
        <p class="text-white- fw-bold ms-auto mb-0">{{ $total }} F</p>
    </div>


    <div class="row mt-3">
        <div class="{{ $type == "interval" ? "col-4" : "col-6" }}">
            <p class="mt-3 mb-0">Filtre par {{ $filter }}</p>
        </div>
        <div class="col-3 text-center">
            <select name="" id="" wire:model.lazy="payement_mode" class="form-control text-center">
                <option value="all">Tout Moyen</option>
                <option value="ESPECE">Espèce</option>
                <option value="COMPLICE">Complice</option>
                <option value="ELECTRONIQUE">Electronique</option>
            </select>
        </div>
        <div class="{{ $type == "interval" ? "col-5" : "col-3" }}">
            @if ($type == "month")
                <input type="month" wire:model.lazy="month" class="form-control">
            @elseif ($type == "year")
                <input type="year" wire:model.lazy="year" class="form-control">
            @elseif ($type == "interval")
                <div class="hstack">
                    <input type="date" wire:model.lazy="start" class="form-control">
                    <input type="date" wire:model.lazy="end" class="form-control ms-3">
                </div>
            @else
                <input type="date" wire:model.lazy="date" class="form-control">
            @endif
        </div>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Date et heure</th>
                    <th>Client</th>
                    <th>Conducteur</th>
                    <th>Montant</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @foreach ($transports as $i => $transport)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i+1 }}</b></td>
                            <td>{{ $transport->created_at->format('d/m/Y à H:i:s') }}</td>
                            <td>
                                <img src="{{ $transport->user->image_profil }}" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="{{ route('admin.client', ['id' => $transport->user->id]) }}">{{ ucfirst($transport->user->last_name).' '.ucfirst($transport->user->first_name) }}</a></span>
                            </td>
                            <td>
                                <img src="{{ $transport->conducteur->user->image_profil }}" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="{{ route('admin.conducteur', ['id' => $transport->conducteur->user->id]) }}">{{ ucfirst($transport->conducteur->user->last_name).' '.ucfirst($transport->conducteur->user->first_name) }}</a></span>
                            </td>
                            <td>{{ $transport->price }} FCFA</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>

    </section>
</div>
