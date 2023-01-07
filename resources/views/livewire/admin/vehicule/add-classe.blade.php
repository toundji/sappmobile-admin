<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Nouveau véhicule</h4>
    </div>

    <section class="page_content bg-white mt-4 px-5 rounded shadow-sm">

        <form wire:submit.prevent="add_category" class="row">
            @if (session()->has("success"))
                    <div class="alert alert-primary mt-4">
                        {{ session('success') }}
                    </div>
                @endif
            <div class="mb-4">
                <label for="">Nom(classe)</label>
                <input type="text" class="form-control-" required wire:model.defer="name">
            </div>
            <div class="mb-4 col-md-6">
                <label for="">Prix <b class="text-black">1M</b> en CFA</label>
                <input type="number" min="1" class="form-control-" required wire:model.defer="metter_price">
            </div>
            <div class="mb-4 col-md-6">
                <label for="">Prix <b class="text-black">1KM</b> en CFA</label>
                <input type="number" min="1" class="form-control-" required wire:model.defer="km_price">
            </div>
            <div class="mb-4">
                <label for="">Image d'une voiture de la catégorie</label>
                <input type="file" min="1" accept=".png, .jpg, .jpeg" class="form-control-" required wire:model.defer="image_category">
            </div>
            <div class="mb-4">
                <label for="">Caractéristique (séparées par ;)</label>
                <textarea class="form-control-" required placeholder="Mettez les caractéristiques séparées par une virgule(,)" wire:model.defer="caracteristique" cols="30" rows="5"></textarea>
            </div>
            <div class="text-center">
                <input type="submit" wire:loading.remove wire:target="add_category" value="Modifier" class="button">
                <button wire:loading wire:target="add_category" disabled class="button">Modification...</button>
            </div>
        </form>
    </section>

</div>
