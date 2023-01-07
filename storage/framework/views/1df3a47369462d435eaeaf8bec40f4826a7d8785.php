<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.other.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title])->html();
} elseif ($_instance->childHasBeenRendered('P6lPXmj')) {
    $componentId = $_instance->getRenderedChildComponentId('P6lPXmj');
    $componentTag = $_instance->getRenderedChildComponentTagName('P6lPXmj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('P6lPXmj');
} else {
    $response = \Livewire\Livewire::mount("admin.other.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title]);
    $html = $response->html();
    $_instance->logRenderedChild('P6lPXmj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/admin/allother.blade.php ENDPATH**/ ?>