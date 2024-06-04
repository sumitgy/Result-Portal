
<?php $__env->startSection('title','Result Portal'); ?>
<?php $__env->startSection('content'); ?>

<section class="main-section" id="main-section">
        <div class="container-fluid">
            <div class="rows">
                <div class="cols">
                    <div class="cards">
                        <div class="img">
                            <img class="width" src="../images/teacher.png" alt="teacher-image">
                        </div>
                        <div class="card-bodys">

                            <h4 class="card-title">Faculty Section</h4>
                            <div class="pt-2 pb-2">
                                <a href="<?php echo e(route('login')); ?>" class="btn btn-default" style="background:#003452; color:white;">Get
                                    start</a>
                            </div>
                            <div>
                                <p class="card-text">Some example text some example text. John Doe is an architect and
                                    engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <div class="img">
                            <img class="width" src="../images/student.png" alt="student-image">
                        </div>
                        <div class="card-bodys">

                            <h4 class="card-title">Student Section</h4>
                            <div class="pt-2 pb-2">
                                <a href="<?php echo e(route('student_rollno')); ?>" class="btn btn-default" style="background:#003452; color:white;">Get
                                    start</a>
                            </div>
                            <div>
                                <p class="card-text">Some example text some example text. John Doe is an architect and
                                    engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sh\Desktop\Result-Portal\resources\views/index.blade.php ENDPATH**/ ?>