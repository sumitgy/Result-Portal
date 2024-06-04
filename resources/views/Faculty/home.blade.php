@extends('layout.app')
@section('title','Home')
@section('content')
<section class="mt-4">
        <div class="container pt-3">
            <div class="flow pt-4 pb-4">
                  <div class="title">
                       <h1  style="color:#003452;">List of the <span style="color:#ffc800;">Students!</span></h1>
                    </div>
                    <div>
                        <a href="{{route('marks_form')}}"><button class="btn btn-default" style="background:#003452; color:white;">Add Student</button></a>
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
            
                        @foreach($student_list as $list)
                            <tr>
                                <td>
                                {{$list->id}}
                                </td>
                                <td>
                                <a href="{{route('roll_no',$list->roll_no)}}">{{$list->name}}</a>
                                    </td>
                                <td>
                                {{$list->father_name}}
                                </td>
                                <td>
                                {{$list->roll_no}}
                                </td>
                                <td><a href="{{route('marks_edit',$list->id)}}"><i class="fa-solid fa-pen-to-square" style="color: #ffc800;"></i></a></td>
                            </tr>

                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection