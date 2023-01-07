<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Listes des Publications</h4>
    </div>

    <section class="row g-3 my-4">
        @foreach ($publications as $publication)
            <div class="col-6 " >
                <div class="bg-white rounded border pb-1">
                    <img src="{{ asset($publication->image) }}" alt="" class="w-100" style="object-fit: cover; height: 200px">
                    <div class="mx-4 my-3">
                        <h6>{{ $publication['name'] }}</h6>
                        @if ($publication['link'] !== "" && $publication['link'] !== null)
                            <a href="{{ $publication['link'] }}" target="_blank" class="mb-2">En savoir plus</a>
                        @endif
                        <p style="text-align: justify; font-size: 14px">
                            {!! Str::limit($publication['description'], 350) !!}
                        </p>
                        <div class="hstack">
                            @if (autorisationAuth("publication_edit"))
                                <a href="{{ route('admin.publication', ['id' => $publication['id']]) }}" class="button">Editer</a>
                            @endif
                            @if (autorisationAuth("publication_delete"))
                                <button wire:click="delete({{ $publication['id'] }})" class="ms-2 btn text-white" style="background-color: #f00">Supprimer</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
