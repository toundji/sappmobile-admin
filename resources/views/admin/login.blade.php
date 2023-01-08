<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ f_page_title($title ?? null) }}</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

        <meta name="description" content="Avec SAPP MOBILE, vous n'avez plus besoin de vous déplacer, votre Taxi vient vous chercher">

        <meta name="keywords" content="Taxi, SAPP MOBILE, Commander, commander Taxi, Classe de Véhicule">
        <meta name="author" content="Sapp Mobile" >
        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="https://www.sapp-mobile.com" />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="SAPP MOBILE" />
        <meta property="og:description" content="Avec SAPP MOBILE, vous n'avez plus besoin de vous déplacer, votre Taxi vient vous chercher" />
        <meta property="og:url" content="https://www.sapp-mobile.com" />
        <meta property="og:site_name" content="SAPP MOBILE" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="Avec SAPP MOBILE, vous n'avez plus besoin de vous déplacer, votre Taxi vient vous chercher" />
        <meta name="twitter:title" content="SAPP MOBILE" />

        {{-- BOOTSTRAP --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <style>
        .error {
            color: #f00;
            font-size: 14px;
        }
        .text-primary- {
            color: rgb(17, 192, 17);
        }
        .bg-primary- {
            background-color: rgb(17, 192, 17);
        }
        .btn-login {
            color: #fff;
            background-color: rgb(17, 192, 17);
        }
    </style>
    @livewireStyles

    <body class="container-fluid" style="background: #F6F6F6">


        <div class="row" style="height: 100vh">
            <img src="{{ asset('images/logo.jpg') }}" class="w-50" alt="">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto my-auto p-4 rounded shadow-sm text-black bg-white">
                <h5 class="text-primary- text-center mb-4">CONNEXION BACK-OFFICE SAPP MOBILE</h5>
                @livewire('admin.login', ["type" => $type??""])
            </div>
        </div>

        @livewireScripts
        {{-- BOOTSTRAP --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
