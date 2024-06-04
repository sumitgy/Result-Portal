@extends('layout.app')
@section('title','Name List')
@section('content')
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
                          
                            @foreach($name_list as $list)
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
                            </tr>
                            @endforeach
                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @endsection