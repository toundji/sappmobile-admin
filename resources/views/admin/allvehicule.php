@isset($page)

    @extends("admin.base", ['title' => $title])


    @if ($page === "vehicules")

        @section("content")
            @livewire("admin.vehicule.vehicules")
        @endsection

    @elseif ($page === "vehicule")

        @section("content")
            @livewire("admin.vehicule.vehicule", ['title' => $title, "id" => $id])
        @endsection

    @endif


@endisset
