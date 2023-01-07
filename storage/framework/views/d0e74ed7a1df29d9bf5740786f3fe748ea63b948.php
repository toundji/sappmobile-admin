<?php if(isset($page)): ?>

    



    <?php if($page === "setting"): ?>

        <?php $__env->startSection("content"); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.setting")->html();
} elseif ($_instance->childHasBeenRendered('yU7t3Ev')) {
    $componentId = $_instance->getRenderedChildComponentId('yU7t3Ev');
    $componentTag = $_instance->getRenderedChildComponentTagName('yU7t3Ev');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yU7t3Ev');
} else {
    $response = \Livewire\Livewire::mount("admin.setting");
    $html = $response->html();
    $_instance->logRenderedChild('yU7t3Ev', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__env->stopSection(); ?>

    <?php elseif($page === "right"): ?>

        <?php $__env->startSection("content"); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("admin.right")->html();
} elseif ($_instance->childHasBeenRendered('r1nJcjO')) {
    $componentId = $_instance->getRenderedChildComponentId('r1nJcjO');
    $componentTag = $_instance->getRenderedChildComponentTagName('r1nJcjO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r1nJcjO');
} else {
    $response = \Livewire\Livewire::mount("admin.right");
    $html = $response->html();
    $_instance->logRenderedChild('r1nJcjO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php $__env->stopSection(); ?>

    <?php endif; ?>


<?php endif; ?>

<?php echo $__env->make("admin.base", ['title' => $title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/admin/all.blade.php ENDPATH**/ ?>