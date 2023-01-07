<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.manager.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title])->html();
} elseif ($_instance->childHasBeenRendered('P960JFQ')) {
    $componentId = $_instance->getRenderedChildComponentId('P960JFQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('P960JFQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('P960JFQ');
} else {
    $response = \Livewire\Livewire::mount("admin.manager.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title]);
    $html = $response->html();
    $_instance->logRenderedChild('P960JFQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/admin/allmanager.blade.php ENDPATH**/ ?>