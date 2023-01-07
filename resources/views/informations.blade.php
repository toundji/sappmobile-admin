@extends("admin.base", ['title' => "Informations"])

@section('content')
<div class="container-fluid banner">
    <h4>SAPP MOBILE > Informations</h4>
</div>


<section class="bg-light- border">
    <div class="container px-5 pb-5 pt-4">

        <form action="{{ route('admin.p_informations') }}" method="POST">
            @csrf

            @if (session()->has("success"))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
            @endif

            @foreach ($informations as $information)
                <div class="mt-3">
                    <label for="" class="mb-1">{{ $information['option'] }}</label>
                    <input type="text" class="form-control-" value="{{ $information['value'] }}" name="{{ $information['name'] }}">
                </div>
            @endforeach
            <div class="mt-4">
                <input type="submit" value="Enregistrer" class="button">
            </div>
        </form>
    </div>
</section>
@endsection
