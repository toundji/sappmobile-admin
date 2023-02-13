<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste de tous les utilisateurs</h4>
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
                    <th>Email</th>
                    <th class="text-center">Profil</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i }}</b></td>
                            <td>
                                <img src="$user->image_profil" class="rounded-circle user-image" alt="">
                                <span class="ms-2"><a href="{{ route('admin.client', ['id' => $user->id]) }}">{{ ucfirst($user->last_name).' '.ucfirst($user->first_name) }}</a></span>
                            </td>
                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center"><a href="{{ route('admin.client', ['id' => $user->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
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
