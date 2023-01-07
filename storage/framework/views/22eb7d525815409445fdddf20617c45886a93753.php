<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(f_page_title($title ?? null)); ?></title>

        
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
    <?php echo \Livewire\Livewire::styles(); ?>


    <body class="container-fluid" style="background: #F6F6F6">


        <div class="row" style="height: 100vh">
            <img src="<?php echo e(asset('images/logo.jpg')); ?>" class="w-50" alt="">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto my-auto p-4 rounded shadow-sm text-black bg-white">
                <h5 class="text-primary- text-center mb-4">CONNEXION BACK-OFFICE SAPP MOBILE</h5>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.login')->html();
} elseif ($_instance->childHasBeenRendered('3eid5D8')) {
    $componentId = $_instance->getRenderedChildComponentId('3eid5D8');
    $componentTag = $_instance->getRenderedChildComponentTagName('3eid5D8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3eid5D8');
} else {
    $response = \Livewire\Livewire::mount('admin.login');
    $html = $response->html();
    $_instance->logRenderedChild('3eid5D8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>

        <?php echo \Livewire\Livewire::scripts(); ?>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/admin/login.blade.php ENDPATH**/ ?>