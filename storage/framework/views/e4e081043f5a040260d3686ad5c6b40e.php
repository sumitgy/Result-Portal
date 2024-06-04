
<?php $__env->startSection('title','Faculty Registration'); ?>
<?php $__env->startSection('content'); ?>
<style>
        .card {
            display: inline-block !important;
        }
        .form-group input{
          width: 300px !important;
        }
    </style>
<div class="container pt-5 text-center">
        <div class="card">
            <div class="card-header">
                <h3 style="color:#003452; margin:0">REGISTRATION</h3>
            </div>
            <div class="card-body p-3">
                <form id="create" method="post" class="text-start" style="display:grid;" action="<?php echo e(route('store')); ?>">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  autocomplete="off">
                    </div>
                  
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
                    </div>
                    
                    <div class="form-group">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                    </div>
                    <br>
                    <button style="background-color:#003452; border:none;" type="submit" name="submitBtn" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-footer">
                <p style="color:#003452; margin:0;">Don't have an account <span><a href="<?php echo e(route('login')); ?>"> Login!</a></span></p>
            </div>
        </div>
    </div>
    
    <script>
$(document).ready(function() {
  // Handle form validation using AJAX
  $('#create').submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    // Clear previous error messages
    $('.form-error').remove();

    // Check if the required fields are not empty
    let errorCount = 0;
   
   

    if (!$('#name').val()) {
      errorCount++;
      $('#name').after('<div class="form-error" style="color:red">This feild is required.</div>');
    }

    if (!$('#email').val()) {
      errorCount++;
      $('#email').after('<div class="form-error" style="color:red">This feild is required.</div>');
    }
    else
    {
        let user_list = <?php echo json_encode($user_list, 15, 512) ?>;
        const email = user_list.map(item => item.email);
        // Replace each sequence of backslashes with double backslashes
        if(email.includes($('#email').val()))
        {
          errorCount++;
          $('#email').after('<div class="form-error" style="color:red">This email already exists.</div>'); 
        }
    }

    if (!$('#password').val()) {
      errorCount++;
      $('#password').after('<div class="form-error" style="color:red">This feild is required.</div>');
    }

    
    

    // If there are errors, stop form submission
    if (errorCount > 0) {
      return;
    }
   
    // Now, you can submit the form through the route using the following code:
     document.getElementById('create').submit();
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sh\Desktop\Result-Portal\resources\views/Faculty/registration.blade.php ENDPATH**/ ?>