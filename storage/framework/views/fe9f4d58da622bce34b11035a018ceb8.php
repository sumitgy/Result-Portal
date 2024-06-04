
<?php $__env->startSection('title','Name'); ?>
<?php $__env->startSection('content'); ?>
<style>
        .card {
            display: inline-block !important;
        }
        .form-group input{
          width: 400px !important;
        }
    </style>
    <?php if(session('success')): ?>                
                <script>
                    window.onload = function() {
                        Swal.fire({
                        width: '400px',
                        title: 'Success!',
                        text: '<?php echo e(session('success')); ?>',
                        icon: 'success'
                    }).then(function() {
                            window.location.reload();
                        });
                    }
                </script>
            <?php endif; ?>
            <?php if(session('errors')): ?>                
                <script>
                    window.onload = function() {
                        Swal.fire({
                        width: '400px',
                        title: 'Errors!',
                        text: '<?php echo e(session('errors')); ?>',
                        icon: 'error'
                    }).then(function() {
                            window.location.reload();
                        });
                    }
                </script>
            <?php endif; ?>
<section>
        <div class="container pt-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-headers">
                            <div class="row pb-4">
                                <div class="col-md-6">
                                    <a href="<?php echo e(route('student_rollno')); ?>"> <button class="btn btn-default" style="width:100%">Roll Number</button></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo e(route('student_name')); ?>"><button class="btn btn-info" style="width:100%; background:#003452; color:white">Name</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <form method="post" class="text-left" style="display:inline-grid;" action="<?php echo e(route('name_store')); ?>">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="pwd">Name:</label>
                                    <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
                                </div>
                                <br>
                                <button style="background-color:#003452; border:none;" type="submit" name="submit" class="btn btn-primary">Submit</button>                            
                            </form>
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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sh\Desktop\Result-Portal\resources\views/Student/name.blade.php ENDPATH**/ ?>