
<?php $__env->startSection('title','Roll Number'); ?>
<?php $__env->startSection('content'); ?>
<style>
        .card {
            display: inline-block !important;
        }
      
        .form-group input{
          width: 400px !important;
        }
    </style>
<section>
        <div class="container pt-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row pb-4">
                                <div class="col-md-6">
                                    <a href="<?php echo e(route('student_rollno')); ?>"> <button class="btn btn-default" style="width:100%; background:#003452; color:white">Roll Number</button></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo e(route('student_name')); ?>"><button class="btn btn-default" style="width:100%;">Name</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3 ">
                            <form method="post" action="<?php echo e(route('rollno_store')); ?>" class="text-left" style="display:inline-grid;">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="pwd">Roll No:</label>
                                    <input type="number" class="form-control" id="pwd" placeholder="Enter roll no" name="rollno">
                                </div>
                                <br>
                                <button style="background-color:#003452; border:none;" type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="card-footer ">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            <?php if(session('error')): ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?php echo e(session('error')); ?>'
                });
            <?php endif; ?>
        });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sh\Desktop\Result-Portal\resources\views/Student/rollno.blade.php ENDPATH**/ ?>