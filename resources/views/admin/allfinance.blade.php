@isset($page)
    @extends('admin.base', ['title' => $title])

    @section('content')

        @livewire("admin.finance.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title])

    @endsection

@endisset
