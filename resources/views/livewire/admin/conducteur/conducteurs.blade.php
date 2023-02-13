<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > {{ $title }}</h4>
    </div>



    <section class="page_content">

        <div class="hstack mb-4">
            <a href="{{ route('admin.conducteurs', ['type' => 'approved']) }}" class="{{ ($status === 1) ? "button" : "button-outline" }} me-2">Approuver</a>
            <a href="{{ route('admin.conducteurs', ['type' => 'process']) }}" class="{{ ($status === 0) ? "button" : "button-outline" }} me-2">En cours</a>
            <a href="{{ route('admin.conducteurs', ['type' => 'cancel']) }}" class="{{ ($status === -1) ? "button" : "button-outline" }} me-2">Réjéter</a>
        </div>

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Inscris le </th>
                    <th>Téléphone</th>
                    <th>Status</th>
                    <th class="text-center">Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($conducteurs as $conducteur)
                        @php
                            $user = getUser($conducteur->user_id);
                        @endphp
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i }}</b></td>
                            <td>
                                <img src="$user->image_profil" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="{{ route('admin.conducteur', ['id' => $conducteur->id]) }}">{{ ucfirst($user->last_name).' '.ucfirst($user->first_name) }}</a></span>
                            </td>
                            <td>{{ $conducteur->created_at->format('d/m/Y') }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                @php
                                    if($conducteur->status === 1) {
                                        echo "Approuver";
                                    } elseif ($conducteur->status === 0) {
                                        echo "En cours";
                                    } elseif ($conducteur->status === -1) {
                                        echo "Rejeter";
                                    }
                                @endphp
                            </td>
                            <td class="text-center"><a href="{{ route('admin.conducteur', ['id' => $conducteur->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
                        </tr>
                        @php
                            $i++
                        @endphp
                    @endforeach

                </tbody>
              </table>
        </div>

        <style>
            svg {
                height: 20px;
            }
        </style>


    </section>

</div>
