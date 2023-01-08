<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(f_page_title($title ?? null)); ?></title>

        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/favicon.ico')); ?>">

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

        
        <link rel="stylesheet" href="<?php echo e(asset('css/admin/style.css')); ?>">

        
        <script defer src="<?php echo e(asset('js/admin/alpine-data.js')); ?>"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    </head>
    <?php echo \Livewire\Livewire::styles(); ?>



    <body>

        <section class="container-fluid p-0">
            <div class="hstack">
                <div class="sideleft p-0">
                    <div class="sidebar">

                        <div>
                            <h3 class="my-2 text-center text-white fw-bold">SAPP MOBILE</h3>
                        </div>

                        <div>

                            <div>
                                <h6 class="nav_list_title">Gains générales <i class="uil uil-arrow-down float-end"></i></h6>
                                <ul class="nav_list">
                                    <li class="nav_item "><a href="<?php echo e(route('finance.generals', ["type" => "day"])); ?>" class="nav_link">Jour</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.generals', ["type" => "month"])); ?>" class="nav_link">Mois</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.generals', ["type" => "year"])); ?>" class="nav_link">Année</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.generals', ["type" => "interval"])); ?>" class="nav_link">Période</a></li>
                                </ul>
                            </div>

                            <div>
                                <h6 class="nav_list_title">Gains par conducteur  <i class="uil uil-arrow-down float-end"></i></h6>
                                <ul class="nav_list">
                                    <li class="nav_item "><a href="<?php echo e(route('finance.conducteurs', ["type" => "day"])); ?>" class="nav_link">Jour</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.conducteurs', ["type" => "month"])); ?>" class="nav_link">Mois</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.conducteurs', ["type" => "year"])); ?>" class="nav_link">Année</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.conducteurs', ["type" => "interval"])); ?>" class="nav_link">Période</a></li>
                                </ul>
                            </div>

                            <div>
                                <h6 class="nav_list_title">Gains par véhicule  <i class="uil uil-arrow-down float-end"></i></h6>
                                <ul class="nav_list">
                                    <li class="nav_item "><a href="<?php echo e(route('finance.vehicules', ["type" => "day"])); ?>" class="nav_link">Jour</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.vehicules', ["type" => "month"])); ?>" class="nav_link">Mois</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.vehicules', ["type" => "year"])); ?>" class="nav_link">Année</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.vehicules', ["type" => "interval"])); ?>" class="nav_link">Période</a></li>
                                </ul>
                            </div>

                            <div>
                                <h6 class="nav_list_title">Gains par entreprise  <i class="uil uil-arrow-down float-end"></i></h6>
                                <ul class="nav_list">
                                    <li class="nav_item "><a href="<?php echo e(route('finance.entreprises', ["type" => "day"])); ?>" class="nav_link">Jour</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.entreprises', ["type" => "month"])); ?>" class="nav_link">Mois</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.entreprises', ["type" => "year"])); ?>" class="nav_link">Année</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.entreprises', ["type" => "interval"])); ?>" class="nav_link">Période</a></li>
                                </ul>
                            </div>

                            <div>
                                <h6 class="nav_list_title">Gains par client  <i class="uil uil-arrow-down float-end"></i></h6>
                                <ul class="nav_list">
                                    <li class="nav_item "><a href="<?php echo e(route('finance.clients', ["type" => "day"])); ?>" class="nav_link">Jour</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.clients', ["type" => "month"])); ?>" class="nav_link">Mois</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.clients', ["type" => "year"])); ?>" class="nav_link">Année</a></li>
                                    <li class="nav_item "><a href="<?php echo e(route('finance.clients', ["type" => "interval"])); ?>" class="nav_link">Période</a></li>
                                </ul>
                            </div>

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
                                    <a href="<?php echo e(route('admin.setting')); ?>"><i class="uil uil-setting fs-3 text-white me-3"></i></a>
                                    <a href="<?php echo e(route('finance.disconnect')); ?>"><i class="uil uil-sign-out-alt fs-3 text-white"></i></a>
                                </div>
                            </div>
                        </div>


                        <div style="margin-bottom: 90px">

                        </div>

                        <div class="col-lg-10 mx-auto">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>

                    </main>
                </div>
            </div>
        </section>





        <?php echo \Livewire\Livewire::scripts(); ?>

        
        
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
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/finance/base.blade.php ENDPATH**/ ?>