<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste de tous les utilisateurs</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Inscris le </th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th class="text-center">Profil</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                            <td>
                                <img src="<?php echo e(asset($user->image_profil)); ?>" class="rounded-circle user-image" alt="">
                                <span class="ms-2"><a href="<?php echo e(route('admin.client', ['id' => $user->id])); ?>"><?php echo e(ucfirst($user->last_name).' '.ucfirst($user->first_name)); ?></a></span>
                            </td>
                            <td><?php echo e($user->created_at->format('d/m/Y')); ?></td>
                            <td><?php echo e($user->phone); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td class="text-center"><a href="<?php echo e(route('admin.client', ['id' => $user->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
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
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/client/clients.blade.php ENDPATH**/ ?>