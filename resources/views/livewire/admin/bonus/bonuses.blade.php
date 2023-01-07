<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des clients qui ont de bonus</h4>
    </div>

    <div class="p-3 mt-4 fw-bold text-white text-center bg-primary- rounded">
        Total des bonus cumulés = {{ $total }} SAPP = {{ $totalCFA }} FCFA <br>
        <hr>
        (1 SAPP = {{ $one_sapp }}FCFA)
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Dernier bonus</th>
                    <th>Bonus</th>
                    <th>Téléphone</th>
                    <th class="text-center">Profil</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($bonuses as $bonus)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i }}</b></td>
                            <td>
                                <img src="{{ $bonus->user->image_profil }}" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="{{ route('admin.client', ['id' => $bonus->user->id]) }}">{{ ucfirst($bonus->user->last_name).' '.ucfirst($bonus->user->first_name) }}</a></span>
                            </td>
                            <td>{{ $bonus->updated_at->format('d/m/Y') }}</td>
                            <td>{{ $bonus->valeur_bonus }} SAPP</td>
                            <td>{{ $bonus->user->phone }}</td>
                            <td class="text-center"><a href="{{ route('admin.client', ['id' => $bonus->user->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
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
