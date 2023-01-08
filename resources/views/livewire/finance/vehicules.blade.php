<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Véhicules</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Matricule</th>
                    <th>Catégorie </th>
                    <th>Model</th>
                    <th>Entreprise</th>
                    <th>Conducteur</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @foreach ($vehicules as $i => $vehicule)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i + 1 }}</b></td>
                            <td>
                                <a href="{{ route('finance.vehicule', ['id' => $vehicule->id, "type" => $type]) }}">{{ $vehicule->matricule }}</a>
                            </td>
                            <td>
                                @if ($vehicule->category)
                                    {{ $vehicule->category->name }}
                                @endif
                            </td>
                            <td>{{ $vehicule->model }}</td>
                            <td>
                                @if ($vehicule->entreprise)
                                    <a href="{{ route('finance.entreprise', ['id' => $vehicule->entreprise->id, "type" => $type]) }}">{{ $vehicule->entreprise->name }}</a>
                                @endif
                            </td>
                            <td>
                                @if ($vehicule->conducteur)
                                    <a href="{{ route('finance.conducteur', ['id' => $vehicule->conducteur->id, "type" => $type]) }}">{{ ucfirst($vehicule->conducteur->user->last_name ?? null).' '.ucfirst($vehicule->conducteur->user->first_name ?? null) }}</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
        </div>

    </section>
</div>
