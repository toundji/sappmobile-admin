<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des managers</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom </th>
                    <th>Email</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $managers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manager): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                            <td>
                                <a href="<?php echo e(route('admin.manager', ['id' => $manager->id])); ?>"><?php echo e(ucfirst($manager->last_name).' '.ucfirst($manager->first_name)); ?></a>
                            </td>
                            <td><?php echo e($manager->first_name); ?></td>
                            <td><?php echo e($manager->email); ?></td>
                            <td class="text-center"><a href="<?php echo e(route('admin.manager', ['id' => $manager->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
                        </tr>
                        <?php
                            $i++
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
        </div>

    </section>

</div>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/manager/managers.blade.php ENDPATH**/ ?>