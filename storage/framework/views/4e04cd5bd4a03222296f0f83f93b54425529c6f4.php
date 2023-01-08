<?php if(isset($page)): ?>

    

    <?php $__env->startSection("content"); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("finance.".$page, ["title" => $title??"", "type" => $type??"", "id" => $id??""])->html();
} elseif ($_instance->childHasBeenRendered('Q6fi3D6')) {
    $componentId = $_instance->getRenderedChildComponentId('Q6fi3D6');
    $componentTag = $_instance->getRenderedChildComponentTagName('Q6fi3D6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Q6fi3D6');
} else {
    $response = \Livewire\Livewire::mount("finance.".$page, ["title" => $title??"", "type" => $type??"", "id" => $id??""]);
    $html = $response->html();
    $_instance->logRenderedChild('Q6fi3D6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make("finance.base", ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/finance/all.blade.php ENDPATH**/ ?>