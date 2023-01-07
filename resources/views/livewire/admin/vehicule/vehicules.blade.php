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
                    <th class="text-center">Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($vehicules as $vehicule)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i }}</b></td>
                            <td>
                                <a href="{{ route('admin.vehicule', ['id' => $vehicule->id]) }}">{{ $vehicule->matricule }}</a>
                            </td>
                            <td>
                                @if ($vehicule->category)
                                    {{ $vehicule->category->name }}
                                @endif
                            </td>
                            <td>{{ $vehicule->model }}</td>
                            <td>
                                @if ($vehicule->entreprise)
                                    <a href="{{ route('admin.entreprise', ['id' => $vehicule->entreprise->id]) }}">{{ $vehicule->entreprise->name }}</a>
                                @endif
                            </td>
                            <td>
                                @if ($vehicule->conducteur)
                                    <a href="{{ route('admin.conducteur', ['id' => $vehicule->conducteur->id]) }}">{{ ucfirst($vehicule->conducteur->user->last_name ?? null).' '.ucfirst($vehicule->conducteur->user->first_name ?? null) }}</a>
                                @endif
                            </td>
                            <td class="text-center"><a href="{{ route('admin.vehicule', ['id' => $vehicule->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
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
