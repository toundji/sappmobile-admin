<?php if(isset($page)): ?>
    

    <?php $__env->startSection('content'); ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.entreprise.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title])->html();
} elseif ($_instance->childHasBeenRendered('1JPCp37')) {
    $componentId = $_instance->getRenderedChildComponentId('1JPCp37');
    $componentTag = $_instance->getRenderedChildComponentTagName('1JPCp37');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1JPCp37');
} else {
    $response = \Livewire\Livewire::mount("admin.entreprise.".$page, ["id" => $id ?? 0, "slug" => $slug ?? 0, "title" => $title]);
    $html = $response->html();
    $_instance->logRenderedChild('1JPCp37', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('admin.base', ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/admin/allentreprise.blade.php ENDPATH**/ ?>