@isset($page)

    @extends("finance.base", ['title' => $title])

    @section("content")
        @livewire("finance.".$page, ["title" => $title??"", "type" => $type??"", "id" => $id??""])
    @endsection

@endisset
