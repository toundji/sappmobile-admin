<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des managers</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom </th>
                    <th>Email</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($managers as $manager)
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-">{{ $i }}</b></td>
                            <td>
                                <a href="{{ route('admin.manager', ['id' => $manager->id]) }}">{{ ucfirst($manager->last_name).' '.ucfirst($manager->first_name) }}</a>
                            </td>
                            <td>{{ $manager->first_name }}</td>
                            <td>{{ $manager->email }}</td>
                            <td class="text-center"><a href="{{ route('admin.manager', ['id' => $manager->id]) }}"><i class="uil uil-eye icon-view"></i></a></td>
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
