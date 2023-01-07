<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.operation.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title, "type" => $type ?? "approved"])->html();
} elseif ($_instance->childHasBeenRendered('wpaSGEZ')) {
    $componentId = $_instance->getRenderedChildComponentId('wpaSGEZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('wpaSGEZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wpaSGEZ');
} else {
    $response = \Livewire\Livewire::mount("admin.operation.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title, "type" => $type ?? "approved"]);
    $html = $response->html();
    $_instance->logRenderedChild('wpaSGEZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/admin/alloperation.blade.php ENDPATH**/ ?>