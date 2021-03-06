<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">

          <div class="col-md-2" style="padding-top:20px">
            <a href="<?php echo e(route('view_category')); ?>" class="btn btn-success" style="margin:5px">Add Category</a><br>
            <a href="<?php echo e(route('view_author')); ?>" class="btn btn-success" style="margin:5px">Add Author</a><br>
            <a href="<?php echo e(route('view_publisher')); ?>" class="btn btn-success" style="margin:5px">Add Publication</a><br>
            <a href="<?php echo e(route('view_country')); ?>" class="btn btn-success" style="margin:5px">Add Country</a><br>
            <a href="<?php echo e(route('view_feature')); ?>" class="btn btn-success" style="margin:5px">View Feature</a><br>
          </div>

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <?php if(Auth::user()->status=='admin'): ?>
                        <table style="border-collapse: collapse;width: 100%;">
                        <tr style="border: 1px solid #dddddd;text-align: left;padding: 8px;font-size:20px;color: gray">
                            <th>ISBN</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Publication</th>
                            <th>Price</th>
                            <th>Book Number</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th><?php echo e($data->book_isbn); ?></th>
                            <th><?php echo e($data->book_title); ?></th>
                            <th><?php echo e($data->book_author); ?></th>
                            <th><?php echo e($data->publication); ?></th>
                            <th><?php echo e($data->book_price); ?></th>
                            <th><?php echo e($data->book_number); ?></th>
                            <th><a class="btn btn-success" href="<?php echo e(route('edit_books',$data->id)); ?>">Edit</a></th>
                            <th><a class="btn btn-success" href="<?php echo e(route('delete_books',$data->id)); ?>">Delete</a></th>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>

                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>