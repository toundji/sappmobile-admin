<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Nouveau manager</h4>
    </div>

    <section class=" p-3 mt-4 rounded" style="background-color: #fff">

        <form wire:submit.prevent="add_manager" class="mx-auto">
            <h6 class="text-primary-">Enregistrer un nouveau manager</h6>
            @if (session()->has("success"))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
            @endif

            @if (session()->has("error"))
                <div class="alert alert-danger mt-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="col-md-12 mt-4">
                <label for="" class="mb-2">Nom du manager</label>
                <input type="text" class="form-control-" required maxlength="200" wire:model.defer="last_name">
            </div>
            <div class="col-md-12 mt-4">
                <label for="" class="mb-2">Prénom du manager</label>
                <input type="text" class="form-control-" required maxlength="200" wire:model.defer="first_name">
            </div>
            <div class="col-md-12 mt-4">
                <label for="" class="mb-2">Email professionnel du manager</label>
                <input type="email" class="form-control-" required maxlength="200" wire:model.defer="email">
            </div>
            <div class="mt-4 text-center">
                <input type="submit" wire:loading.remove wire:target="add_manager" value="Enregistrer" class="button">
                <button wire:loading wire:target="add_manager" disabled class="button">Enregistrement...</button>
            </div>
        </form>

    </section>

</div>
