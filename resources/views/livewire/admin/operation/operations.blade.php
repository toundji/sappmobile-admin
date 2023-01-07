<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des opérations </h4>
    </div>

    <section class="page_content">

        <div class="d-block g-4 mb-4">
            <a href="{{ route('admin.operations', ['type' => "DEMANDE"]) }}" class="{{ ($status == "DEMANDE") ? "button" : "button-outline" }} m-2">DEMANDE</a>
            <a href="{{ route('admin.operations', ['type' => "RECHERCHE"]) }}" class="{{ ($status == "RECHERCHE") ? "button" : "button-outline" }} m-2">RECHERCHE</a>
            <a href="{{ route('admin.operations', ['type' => "NEGOCIATION"]) }}" class="{{ ($status == "NEGOCIATION") ? "button" : "button-outline" }} m-2">NEGOCIATION</a>
            <a href="{{ route('admin.operations', ['type' => "VALIDE"]) }}" class="{{ ($status == "VALIDE") ? "button" : "button-outline" }} m-2">VALIDE</a>
            <a href="{{ route('admin.operations', ['type' => "ATTENTE"]) }}" class="{{ ($status == "ATTENTE") ? "button" : "button-outline" }} m-2">ATTENTE</a>
            <a href="{{ route('admin.operations', ['type' => "EN COURS"]) }}" class="{{ ($status == "EN COURS") ? "button" : "button-outline" }} m-2">EN COURS</a>
            <a href="{{ route('admin.operations', ['type' => "TERMINE"]) }}" class="{{ ($status == "TERMINE") ? "button" : "button-outline" }} m-2">TERMINE</a>
            <a href="{{ route('admin.operations', ['type' => "ANNULE"]) }}" class="{{ ($status == "ANNULE") ? "button" : "button-outline" }} m-2">ANNULE</a>
        </div>

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
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
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($transports as $transport)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i }}</b></td>
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
                            <td>
                                @php
                                    if($transport->status === 1) {
                                        echo "Terminer";
                                    } elseif ($transport->status === 0) {
                                        echo "En cours";
                                    } elseif ($transport->status === -1) {
                                        echo "Annuler";
                                    }
                                @endphp
                            </td>
                            <td class="text-center"><a href="{{ route('admin.operation', ['id' => $transport->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
                        </tr>
                        @php
                            $i++
                        @endphp
                    @endforeach

                </tbody>
              </table>
        </div>

    </section>
</div>
