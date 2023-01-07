<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.conducteur.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title, "type" => $type ?? ""])->html();
} elseif ($_instance->childHasBeenRendered('jufrujY')) {
    $componentId = $_instance->getRenderedChildComponentId('jufrujY');
    $componentTag = $_instance->getRenderedChildComponentTagName('jufrujY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jufrujY');
} else {
    $response = \Livewire\Livewire::mount("admin.conducteur.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title, "type" => $type ?? ""]);
    $html = $response->html();
    $_instance->logRenderedChild('jufrujY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/admin/allconducteur.blade.php ENDPATH**/ ?>