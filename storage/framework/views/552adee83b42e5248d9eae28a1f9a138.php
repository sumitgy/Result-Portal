
<?php $__env->startSection('title','Name List'); ?>
<?php $__env->startSection('content'); ?>
<section class="mt-4">
        <div class="container pt-3">
            <div class="row pt-4 pb-4">
                <div class="col-md-12">
                <div>
                    <h1 style="color:#016674;">Result of the <span style="color:#ffc800;">Search!</span></h1>
                </div>
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
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php $__currentLoopData = $name_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sh\Desktop\Result-Portal\resources\views/Student/name_list.blade.php ENDPATH**/ ?>