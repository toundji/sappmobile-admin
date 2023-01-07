@isset($page)
    @extends('admin.base', ['title' => $title])

    @section('content')

        @livewire("admin.conducteur.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title, "type" => $type ?? ""])

    @endsection

@endisset
