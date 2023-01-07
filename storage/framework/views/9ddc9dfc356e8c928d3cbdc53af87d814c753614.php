<?php if(isset($page)): ?>

    



    <?php if($page === "setting"): ?>

        <?php $__env->startSection("content"); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.setting")->html();
} elseif ($_instance->childHasBeenRendered('aSTgUsc')) {
    $componentId = $_instance->getRenderedChildComponentId('aSTgUsc');
    $componentTag = $_instance->getRenderedChildComponentTagName('aSTgUsc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aSTgUsc');
} else {
    $response = \Livewire\Livewire::mount("admin.setting");
    $html = $response->html();
    $_instance->logRenderedChild('aSTgUsc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__env->stopSection(); ?>

    <?php elseif($page === "right"): ?>

        <?php $__env->startSection("content"); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.right")->html();
} elseif ($_instance->childHasBeenRendered('O0H0aGy')) {
    $componentId = $_instance->getRenderedChildComponentId('O0H0aGy');
    $componentTag = $_instance->getRenderedChildComponentTagName('O0H0aGy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('O0H0aGy');
} else {
    $response = \Livewire\Livewire::mount("admin.right");
    $html = $response->html();
    $_instance->logRenderedChild('O0H0aGy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__env->stopSection(); ?>

    <?php endif; ?>


<?php endif; ?>

<?php echo $__env->make("admin.base", ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/admin/all.blade.php ENDPATH**/ ?>