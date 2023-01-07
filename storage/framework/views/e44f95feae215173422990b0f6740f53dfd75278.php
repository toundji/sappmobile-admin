<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.client.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title])->html();
} elseif ($_instance->childHasBeenRendered('LkvB66a')) {
    $componentId = $_instance->getRenderedChildComponentId('LkvB66a');
    $componentTag = $_instance->getRenderedChildComponentTagName('LkvB66a');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LkvB66a');
} else {
    $response = \Livewire\Livewire::mount("admin.client.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title]);
    $html = $response->html();
    $_instance->logRenderedChild('LkvB66a', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/admin/allclient.blade.php ENDPATH**/ ?>