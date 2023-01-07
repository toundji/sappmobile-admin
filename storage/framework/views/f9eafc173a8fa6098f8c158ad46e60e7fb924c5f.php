<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.vehicule.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title])->html();
} elseif ($_instance->childHasBeenRendered('penB7xO')) {
    $componentId = $_instance->getRenderedChildComponentId('penB7xO');
    $componentTag = $_instance->getRenderedChildComponentTagName('penB7xO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('penB7xO');
} else {
    $response = \Livewire\Livewire::mount("admin.vehicule.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title]);
    $html = $response->html();
    $_instance->logRenderedChild('penB7xO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/admin/allvehicule.blade.php ENDPATH**/ ?>