@isset($page)

    @extends('admin.base', ['title' => $title])

    @section('content')

        @livewire($page, ['id' => $id ?? 0, "type" => $type?? "", 'title' => $title ?? "", 'slug' => $slug ?? "", 'status' => $status ?? ""])

    @endsection

@endisset
