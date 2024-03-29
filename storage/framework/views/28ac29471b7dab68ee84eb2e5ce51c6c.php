<?php $__env->startSection('container'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ADDRESS</h1>
    </div>
    <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if(session()->has('LoginError')): ?>
            <div class="alert alert-denger alert-dismissible fade show col-lg-10" role="alert">
                <?php echo e(session('LoginError')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    <div class="table-responsive-medium col-lg-10">
        <a href="/dashboard/addresss/create" class="btn btn-primary mb-3">Add New Address</a>
        <table class="table table-striped table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Street</th>
              <th scope="col">City</th>
              <th scope="col">Province</th>
              <th scope="col">Country</th>
              <th scope="col">Postal Code</th>
              <th scope="col">ID Contact</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td><?php echo e($collect->street); ?></td>
              <td><?php echo e($collect->city); ?></td>
              <td><?php echo e($collect->province); ?></td>
              <td><?php echo e($collect->country); ?></td>
              <td><?php echo e($collect->postal_code); ?></td>
              <td><?php echo e($collect->contact_id); ?></td>
              <td>
                <a href="/dashboard/addresss/<?php echo e($collect->id); ?>" class="badge bg-info"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/addresss/<?php echo e($collect->id); ?>/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/addresss/<?php echo e($collect->id); ?>" method="POST" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure? ')"><i class="bi bi-trash3"></i></button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DATA CODE\PHP\01-laravel\tugasapi\resources\views/dashboard/address/index.blade.php ENDPATH**/ ?>