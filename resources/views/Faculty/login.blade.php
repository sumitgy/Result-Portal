
@extends('layout.app')
@section('title','Faculty Login')
@section('content')
<style>
        .card {
            display: inline-block !important;
        }
        .form-group input{
          width: 300px !important;
        }
    </style>
<section>
        <div class="container pt-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="color:#003452; margin:0">LOGIN</h3>
                        </div>
                        <div class="card-body p-3">
                            <form id="create" method="post" class="text-start" style="display:grid;" action="{{route('loginpost')}}">
                            @csrf
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control"  id="email" placeholder="Enter email" name="email" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password:</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                                </div>
                                <br>
                                <button style="background-color:#003452; border:none;" type="submit" name="submitbtn" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <p style="color:#003452; margin:0;">Don't have an account <span><a href="{{route('registration')}}"> Sign Up!</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <script>
$(document).ready(function() {
  // Handle form validation using AJAX
  $('#create').submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    // Clear previous error messages
    $('.form-error').remove();

    // Check if the required fields are not empty
    let errorCount = 0;
   
   


    if (!$('#email').val()) {
      errorCount++;
      $('#email').after('<div class="form-error" style="color:red">This feild is required.</div>');
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
@endsection