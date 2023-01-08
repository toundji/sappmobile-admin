<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Entreprise</h4>
    </div>



    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Ville </th>
                    <th>Agent</th>
                    <th class="text-center">Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($entreprises as $entreprise)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i }}</b></td>
                            <td>
                                <img src="{{ $entreprise->logo }}" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="{{ route('admin.entreprise', ['id' => $entreprise->id]) }}">{{ $entreprise->name }}</a></span>
                            </td>
                            <td>{{ $entreprise->ville }}</td>
                            <td>
                                @if ($entreprise->agent_entreprise)
                                    <a href="{{ route('admin.client', ['id' => $entreprise->agent_entreprise->user->id]) }}">{{ ucfirst($entreprise->agent_entreprise->user->last_name).' '.ucfirst($entreprise->agent_entreprise->user->first_name) }}</a>
                                @endif
                            </td>
                            <td class="text-center"><a href="{{ route('admin.entreprise', ['id' => $entreprise->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
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
