<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Les conducteurs approuvés</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Inscris le </th>
                    <th>Téléphone</th>
                    <th class="text-center">Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @foreach ($conducteurs as $i => $conducteur)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i + 1 }}</b></td>
                            <td>
                                <img src="{{ $conducteur->user->image_profil }}" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="{{ route('finance.conducteur', ['id' => $conducteur->id, "type" => $type]) }}">{{ ucfirst($conducteur->user->last_name).' '.ucfirst($conducteur->user->first_name) }}</a></span>
                            </td>
                            <td>{{ $conducteur->created_at->format('d/m/Y') }}</td>
                            <td>{{ $conducteur->user->phone }}</td>
                            <td class="text-center"><a href="{{ route('finance.conducteur', ['id' => $conducteur->id, "type" => $type]) }}"><i class="uil uil-eye icon-view"></i></a></td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
        </div>


    </section>

</div>
