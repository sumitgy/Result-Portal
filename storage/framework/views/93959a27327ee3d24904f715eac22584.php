
<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>
<section class="mt-4">
        <div class="container pt-3">
            <div class="flow pt-4 pb-4">
                  <div class="title">
                       <h1  style="color:#003452;">List of the <span style="color:#ffc800;">Students!</span></h1>
                    </div>
                    <div>
                        <a href="<?php echo e(route('marks_form')); ?>"><button class="btn btn-default" style="background:#003452; color:white;">Add Student</button></a>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sno.</th>
                                <th>Student name</th>
                                <th>Father name</th>
                                <th>Rollno.</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
            
                        <?php $__currentLoopData = $student_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                <?php echo e($list->id); ?>

                                </td>
                                <td>
                                <a href="<?php echo e(route('roll_no',$list->roll_no)); ?>"><?php echo e($list->name); ?></a>
                                    </td>
                                <td>
                                <?php echo e($list->father_name); ?>

                                </td>
                                <td>
                                <?php echo e($list->roll_no); ?>

                                </td>
                                <td><a href="<?php echo e(route('marks_edit',$list->id)); ?>"><i class="fa-solid fa-pen-to-square" style="color: #ffc800;"></i></a></td>
                            </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sh\Desktop\Result-Portal\resources\views/Faculty/home.blade.php ENDPATH**/ ?>