<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > FAQ</h4>
    </div>

    @if (count($faq1s) > 0)
        <section class="py-3 px-3 mt-4 rounded" style="background-color: #fff">

            <h4 class="fs-6 my-3">Les questions sans réponse</h4>

            @foreach ($faq1s as $faq)
                <div class="row" x-data="{visible: false}">
                    <h5 type="button" class="text-primary-" x-on:click="visible = !visible">
                        <i class="uil uil-angle-right-b" x-show="!visible"></i>
                        <i class="uil uil-angle-down" x-show="visible" x-cloak></i>
                        {{ $faq->quiz }}
                    </h5>
                    <p class="mt-3 fs-6 text-justify lh-lg text-6 p-0 px-5" x-cloak x-show="visible">
                        {{ $faq->response }}
                        <div>
                            <button wire:click="delete({{ $faq->id }})" class="button_danger_small px-3 py-2 text-white ms-2 mt-3">Supprimer</button>
                            <a href="{{ route('admin.faq', ['id' => $faq->id]) }}" class="button_small px-3 py-2 text-white mt-3">Editer</a>
                        </div>
                    </p>
                </div>
                <hr class="my-1">
            @endforeach


        </section>
    @endif

    <section class="py-3 px-3 mt-4 rounded" style="background-color: #fff">

        @foreach ($faqs as $faq)
            <div class="row" x-data="{visible: false}">
                <h6 type="button" class="text-black" x-on:click="visible = !visible">
                    <i class="uil uil-angle-right-b" x-show="!visible"></i>
                    <i class="uil uil-angle-down" x-show="visible" x-cloak></i>
                     {{ $faq->quiz }}
                </h6>
                <p class="mt-3 fs-6 text-justify lh-lg text-6 p-0 px-5" x-cloak x-show="visible">
                    {{ $faq->response }}
                    <div>
                        <button wire:click="delete({{ $faq->id }})" class="button_danger_small px-3 py-2 text-white ms-2 mt-3">Supprimer</button>
                        <a href="{{ route('admin.faq', ['id' => $faq->id]) }}" class="button_small px-3 py-2 text-white mt-3">Editer</a>
                    </div>
                </p>
            </div>
            <hr class="my-1">
        @endforeach


    </section>
</div>
