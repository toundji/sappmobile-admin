@isset($page)

    @extends("admin.base", ['title' => $title])



    @if ($page === "setting")

        @section("content")
            @livewire("admin.setting")
        @endsection

    @elseif ($page === "right")

        @section("content")
            @livewire("admin.right")
        @endsection

    @endif


@endisset
