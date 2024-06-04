@extends('layout.app')
@section('title','Name')
@section('content')
<style>
        .card {
            display: inline-block !important;
        }
        .form-group input{
          width: 400px !important;
        }
    </style>
    @if(session('success'))                
                <script>
                    window.onload = function() {
                        Swal.fire({
                        width: '400px',
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        icon: 'success'
                    }).then(function() {
                            window.location.reload();
                        });
                    }
                </script>
            @endif
            @if(session('errors'))                
                <script>
                    window.onload = function() {
                        Swal.fire({
                        width: '400px',
                        title: 'Errors!',
                        text: '{{ session('errors') }}',
                        icon: 'error'
                    }).then(function() {
                            window.location.reload();
                        });
                    }
                </script>
            @endif
<section>
        <div class="container pt-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-headers">
                            <div class="row pb-4">
                                <div class="col-md-6">
                                    <a href="{{route('student_rollno')}}"> <button class="btn btn-default" style="width:100%">Roll Number</button></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('student_name')}}"><button class="btn btn-info" style="width:100%; background:#003452; color:white">Name</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <form method="post" class="text-left" style="display:inline-grid;" action="{{route('name_store')}}">
                            @csrf
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
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('error') }}'
                });
            @endif
        });
    </script>
    @endsection