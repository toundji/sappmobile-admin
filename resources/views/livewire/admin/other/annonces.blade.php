<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des Annonces</h4>
    </div>

    <section class="row g-3 my-4">
        @foreach ($annonces as $annonce)
            <div class="col-6 " >
                <div class="bg-white rounded border pb-1">
                    <img src="{{ $annonce->image }}" alt="" class="w-100" style="object-fit: cover; height: 200px">
                    <div class="mx-4 my-3">
                        <h6>{{ $annonce['name'] }}</h6>
                        <p style="text-align: justify; font-size: 14px">{{ $annonce->description }}</p>
                        <div class="hstack">
                            @if (autorisationAuth("annonce_edit"))
                                <a href="{{ route('admin.annonce', ['id' => $annonce->id]) }}" class="button">Editer</a>
                            @endif
                            @if (autorisationAuth("annonce_delete"))
                                <button wire:click="delete({{ $annonce->id }})" class="ms-2 btn text-white" style="background-color: #f00">Supprimer</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
