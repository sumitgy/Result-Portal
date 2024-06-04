@extends('layout.app')
@section('title','Marks')
@section('content')
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-card card pt-5 pr-5 pb-3 pl-5">
                        <form method="post" action="{{route('marks_update')}}" style="display: contents;">
                        @csrf
                      
                        <input type="hidden" name="id" value="{{$marks_edit->id}}">
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">Name :</label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Student name" value="{{$marks_edit->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">Father name :</label>
                                        <input class="form-control" type="text" name="fname" placeholder="Enter Father's name" value="{{$marks_edit->father_name}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pwd">College name :</label>
                                        <input class="form-control" type="text" name="clgname" placeholder="Enter college name" value="{{$marks_edit->college_name}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">Medium :</label>
                                        <input class="form-control" type="text" name="medium" placeholder="Enter your medium" value="{{$marks_edit->medium}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pwd">RollNo. :</label>
                                        <input class="form-control" type="number" name="rollno" placeholder="Enter rollno." value="{{$marks_edit->roll_no}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row card-body pt-0 pb-0">
                                <div class="col-md-6">  
                                    <div class="form-group">
                                        <label for="pwd">Branch :</label>
                                        
                                        <select class="form-control" name="branch" id="branch">
                                            <option valuue="bca">BCA</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="pwd">Year :</label>
                                        <input class="form-control" type="text" name="year" placeholder="Enter year" value="{{$marks_edit->year}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            @php
                            $marks = json_decode($marks_edit->subjects_marks,true);
                            @endphp
                            <div class="row card-footer">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">Java :</label>
                                        <input class="form-control" type="text" name="java" placeholder="Enter marks" value="{{$marks['java']}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">PHP :</label>
                                        <input class="form-control" type="text" name="php" placeholder="Enter marks"  value="{{$marks['php']}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">Data Structure :</label>
                                        <input class="form-control" type="text" name="dsa" placeholder="Enter marks"  value="{{$marks['dsa']}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">E-commerce :</label>
                                        <input class="form-control" type="text" name="ecom" placeholder="Enter marks"  value="{{$marks['ecom']}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">SDC :</label>
                                        <input class="form-control" type="text" name="sdc" placeholder="Enter marks"  value="{{$marks['sdc']}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pwd">Networking :</label>
                                        <input class="form-control" type="text" name="network" placeholder="Enter marks"  value="{{$marks['network']}}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" name="submit" value="Update" class="btn btn-default" style="background:#003452; color:white;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection