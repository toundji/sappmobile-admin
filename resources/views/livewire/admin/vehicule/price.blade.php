<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Les classes de véhicule</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">

            <table class="table bg-primary- rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prix par M</th>
                    <th>Prix par KM</th>
                    <th class="text-center">Modifier</th>
                  </tr>
                </thead>
                <tbody  class="border-white bg-white">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($categories as $category)
                        <tr class="border-white">
                            <td scope="row">
                                <img src="{{ asset($category->image_category) }}" class="rounded-circle client-image" alt="">
                            </td>
                            <td>{{ $category->name }} </td>
                            <td>{{ $category->metter_price }} FCFA</td>
                            <td>{{ $category->km_price }} FCFA</td>
                            <td class="text-center">
                                <a href="{{ route('admin.edit_classe', ['id' => $category->id]) }}">
                                    <i class="uil uil-edit icon-view"></i>
                                </a>
                            <td>
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
