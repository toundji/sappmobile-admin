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
        <link rel="canonical" href="https://www.sapp-mobile.com/" />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="SAPP MOBILE" />
        <meta property="og:description" content="Avec SAPP MOBILE, vous n'avez plus besoin de vous déplacer, votre Taxi vient vous chercher" />
        <meta property="og:url" content="https://www.sapp-mobile.com" />
        <meta property="og:site_name" content="SAPP MOBILE" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="Avec SAPP MOBILE, vous n'avez plus besoin de vous déplacer, votre Taxi vient vous chercher" />
        <meta name="twitter:title" content="SAPP MOBILE" />

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">

        {{-- ALPINEJS --}}
        <script defer src="{{ asset('js/admin/alpine-data.js') }}"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- BOOTSTRAP --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        {{-- UNICONS --}}
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        {{-- DATATABLE --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    </head>
    @livewireStyles


    <body>

        <section class="container-fluid p-0">
            <div class="hstack">
                <div class="sideleft p-0">
                    <div class="sidebar">

                        <div>
                            <h3 class="my-2 text-center text-white fw-bold">SAPP MOBILE</h3>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Utilisateurs  <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item"><a href="{{ route('admin.clients') }}" class="nav_link {{ active('admin.clients') }} {{ active('admin.client') }}">Liste des utilisateurs</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Conducteurs  <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Liste des conducteurs</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Véhicules <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.vehicules') }}" class="nav_link {{ active('admin.vehicules') }}">Listes des véhicules</a></li>
                                <li class="nav_item d-none"><a href="{{ route('admin.add-vehicule') }}" class="nav_link {{ active('admin.add-vehicule') }}">Nouveau véhicule</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Entreprises <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.entreprises') }}" class="nav_link {{ active('admin.entreprises') }} {{ active('admin.entreprise') }}">Listes des entreprises</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Opératons <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.operations') }}" class="nav_link {{ active('admin.operations') }} {{ active('admin.operation') }}">Liste des opérations</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Classe <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.classes') }}" class="nav_link {{ active('admin.classes') }}  {{ active('admin.edit_classe') }}">Liste des classes</a></li>
                                <li class="nav_item "><a href="{{ route('admin.add_classe') }}" class="nav_link {{ active('admin.add_classe') }}">Nouvelle classe</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Bonus <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.bonuses') }}" class="nav_link {{ active('admin.bonuses') }}">Bonus par clients</a></li>
                                <li class="nav_item "><a href="{{ route('admin.define-bonus') }}" class="nav_link {{ active('admin.define-bonus') }}">Définir les bonus</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Annonces <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.annonces') }}" class="nav_link {{ active('admin.annonces') }}">Liste des annonces</a></li>
                                <li class="nav_item "><a href="{{ route('admin.add-annonce') }}" class="nav_link {{ active('admin.add-annonce') }}">Nouvelle annonce</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Publications <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.publications') }}" class="nav_link {{ active('admin.publications') }}">Liste des publications</a></li>
                                <li class="nav_item "><a href="{{ route('admin.add-publication') }}" class="nav_link {{ active('admin.add-publication') }}">Nouvelle publication</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Foire aux questions <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.faqs') }}" class="nav_link {{ active('admin.faqs') }} {{ active('admin.faq') }}">Liste des FAQ</a></li>
                                <li class="nav_item "><a href="{{ route('admin.add_faq') }}" class="nav_link {{ active('admin.add_faq') }}">Nouvelle FAQ</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Managers <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.managers') }}" class="nav_link {{ active('admin.managers') }}">Liste des managers</a></li>
                                <li class="nav_item "><a href="{{ route('admin.add_manager') }}" class="nav_link {{ active('admin.add_manager') }}">Nouveau manager</a></li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="nav_list_title">Informations <i class="uil uil-arrow-down float-end"></i></h6>
                            <ul class="nav_list">
                                <li class="nav_item "><a href="{{ route('admin.informations') }}" class="nav_link {{ active('admin.informations') }}">Contact</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="sideright  p-0">
                    <main class="content bg-light">

                        <div class="bg-primary- fixed-top text-white shadow-sm fw-bold text-center" style="padding: 1vh 2vh;">
                            <div class="hstack">
                                <div>
                                    <h4 class="pt-2 text-center text-white fw-bold">SAPP MOBILE</h4>
                                </div>
                                <div class="hstack ms-auto">
                                    <i class="uil uil-usd-circle fs-3 text-white me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
                                    <a href="{{ route('admin.setting') }}"><i class="uil uil-setting fs-3 text-white me-3"></i></a>
                                    <a href="{{ route('admin.disconnect') }}"><i class="uil uil-sign-out-alt fs-3 text-white"></i></a>
                                </div>
                            </div>
                        </div>


                        <div style="margin-bottom: 90px">

                        </div>

                        <div class="col-lg-10 mx-auto">
                            @yield('content')
                        </div>

                    </main>
                </div>
            </div>
        </section>



        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">SAPP MOBILE FINANCE</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div>
                    <h6 class="nav_list_title">Gains générales <i class="uil uil-arrow-down float-end"></i></h6>
                    <ul class="nav_list">
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Jour</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Mois</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Année</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Période</a></li>
                    </ul>
                </div>

                <div>
                    <h6 class="nav_list_title">Gains par conducteur  <i class="uil uil-arrow-down float-end"></i></h6>
                    <ul class="nav_list">
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Jour</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Mois</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Année</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Période</a></li>
                    </ul>
                </div>

                <div>
                    <h6 class="nav_list_title">Gains par véhicule  <i class="uil uil-arrow-down float-end"></i></h6>
                    <ul class="nav_list">
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Jour</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Mois</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Année</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Période</a></li>
                    </ul>
                </div>

                <div>
                    <h6 class="nav_list_title">Gains par entreprise  <i class="uil uil-arrow-down float-end"></i></h6>
                    <ul class="nav_list">
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Jour</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Mois</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Année</a></li>
                        <li class="nav_item "><a href="{{ route('admin.conducteurs') }}" class="nav_link {{ active('admin.conducteurs') }}  {{ active('admin.conducteur') }}">Période</a></li>
                    </ul>
                </div>

            </div>
        </div>


        @livewireScripts
        {{-- BOOTSTRAP --}}
        {{-- <link rel="stylesheet" href="{{ asset('js/admin/bootstrap.min.js') }}"> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js" ></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js" ></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js" ></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                "language": {
                    "lengthMenu": "Afficher _MENU_ par page",
                    "zeroRecords": "Rien à afficher - désolé",
                    "info": "Afficher _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun enregistrement disponible",
                    "infoFiltered": "(filtré de _MAX_ nombre total d'enregistrements)"
                }
            } );
        } );
        </script>
    </body>
</html>
