<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.conducteur.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title, "type" => $type ?? ""])->html();
} elseif ($_instance->childHasBeenRendered('gcWq4Gk')) {
    $componentId = $_instance->getRenderedChildComponentId('gcWq4Gk');
    $componentTag = $_instance->getRenderedChildComponentTagName('gcWq4Gk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gcWq4Gk');
} else {
    $response = \Livewire\Livewire::mount("admin.conducteur.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title, "type" => $type ?? ""]);
    $html = $response->html();
    $_instance->logRenderedChild('gcWq4Gk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/admin/allconducteur.blade.php ENDPATH**/ ?>