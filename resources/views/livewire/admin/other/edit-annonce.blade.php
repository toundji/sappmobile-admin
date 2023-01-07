<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Modifier annonce</h4>
    </div>

    <section class="page_content">
        <form wire:submit.prevent="edit_annonce" class="col-md-12 rounded bg-white p-4 shadow-sm">
            <h6 class="text-primary-">Modifier une annonce</h6>
            @if (session()->has("success"))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12 mt-4">
                    <label for="" class="mb-2">Titre de l'annonce</label>
                    <input type="text" class="form-control-" maxlength="200" wire:model="name" required>
                </div>
                <div class="col-md-12 mt-4">
                    <label for="" class="mb-2">Description</label>
                    <textarea name="" id="" cols="30" rows="4" wire:model="description" class="form-control-" required></textarea>
                </div>
                <div class="mt-4 text-center">
                    <input type="submit" wire:loading.remove wire:target="edit_annonce" value="Enregistrer" class="button">
                    <button wire:loading wire:target="edit_annonce" disabled class="button">Enregistrement...</button>
                </div>
            </div>
        </form>
    </section>
</div>

