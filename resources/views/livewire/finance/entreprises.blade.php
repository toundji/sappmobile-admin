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
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @foreach ($entreprises as $i => $entreprise)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i + 1 }}</b></td>
                            <td>
                                <img src="{{ $entreprise->logo }}" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="{{ route('finance.entreprise', ['id' => $entreprise->id, "type" => $type]) }}">{{ $entreprise->name }}</a></span>
                            </td>
                            <td>{{ $entreprise->ville }}</td>
                            <td>
                                @if ($entreprise->agent_entreprise)
                                    <a href="{{ route('finance.client', ['id' => $entreprise->agent_entreprise->user->id, "type" => $type]) }}">{{ ucfirst($entreprise->agent_entreprise->user->last_name).' '.ucfirst($entreprise->agent_entreprise->user->first_name) }}</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
        </div>

    </section>

</div>
