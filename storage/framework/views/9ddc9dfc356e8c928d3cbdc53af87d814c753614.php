<?php if(isset($page)): ?>

    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($page, ['id' => $id ?? 0, "type" => $type?? "", 'title' => $title ?? "", 'slug' => $slug ?? "", 'status' => $status ?? ""])->html();
} elseif ($_instance->childHasBeenRendered('CU6dHrk')) {
    $componentId = $_instance->getRenderedChildComponentId('CU6dHrk');
    $componentTag = $_instance->getRenderedChildComponentTagName('CU6dHrk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CU6dHrk');
} else {
    $response = \Livewire\Livewire::mount($page, ['id' => $id ?? 0, "type" => $type?? "", 'title' => $title ?? "", 'slug' => $slug ?? "", 'status' => $status ?? ""]);
    $html = $response->html();
    $_instance->logRenderedChild('CU6dHrk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/admin/all.blade.php ENDPATH**/ ?>