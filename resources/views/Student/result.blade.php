@extends('layout.app')
@section('title','Result')
@section('content')
<section class="mt-2 pt-3">
      <div class="container card cont">
          <div class="paddings">
              <div class="flexs">
                 <div class="result-name">
                      <ul>
                          <li>Name :</li>
                          <li>{{$result->name}}</li>
                      </ul>
                      <ul>
                          <li>Father name :</li>
                          <li>{{$result->father_name}}</li>
                      </ul>
                      <ul>
                          <li>College name :</li>
                          <li>{{$result->college_name}}</li>
                      </ul>
                      <ul>
                          <li>Branch :</li>
                          <li>{{$result->branch}}</li>
                      </ul>
                  </div>
                  <div class="result-name">
                      <ul>
                          <li>Rollno. :</li>
                          <li>{{$result->roll_no}}</li>
                      </ul>
                      <ul>
                          <li>Medium :</li>
                          <li>{{$result->medium}}</li>
                      </ul>
                      <ul>
                          <li>Year :</li>
                          <li>{{$result->year}}</li>
                      </ul>
                  </div>
          </div>
          @php
            $marks = json_decode($result->subjects_marks,true);
            $total_marks = $marks['java'] + $marks['php'] + $marks['dsa'] + $marks['ecom'] + $marks['sdc'] + $marks['network'];
            
            $percentage = $total_marks/6;
            

            if(($percentage>=60)&&($percentage<=100))
              {
              $division="First division with Dictetion";
              }
              else if(($percentage>=50)&&($percentage < 60))
              {
              $division="Second division";
              }
              else if(($percentage>=40)&&($percentage < 50))
              {
              $division="Third division";
              }
              else if(($percentage>=1)&&($percentage < 40))
              {
              $division="Fail";
              }
          @endphp
          <div class="row">
              <div class="col-md-12">
              <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Sno.</th>
                              <th>Subject</th>
                              <th>Total Marks</th>
                              <th>Your Marks</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1.</td>
                              <td>Java</td>
                              <td>100</td>
                              <td>{{$marks['java']}}</td>
                          </tr>
                          <tr>
                              <td>2.</td>
                              <td>PHP</td>
                              <td>100</td>
                              <td>{{$marks['php']}}</td>
                          </tr>
                          <tr>
                              <td>3.</td>
                              <td>Data Structure</td>
                              <td>100</td>
                              <td>{{$marks['dsa']}}</td>
                          </tr>
                          <tr>
                              <td>4.</td>
                              <td>E-commerce</td>
                              <td>100</td>
                              <td>{{$marks['ecom']}}</td>
                          </tr>
                          <tr>
                              <td>5.</td>
                              <td>SDC</td>
                              <td>100</td>
                              <td>{{$marks['sdc']}}</td>
                          </tr>
                          <tr>
                              <td>6.</td>
                              <td>Network</td>
                              <td>100</td>
                              <td>{{$marks['network']}}</td>
                          </tr>
                          <tr>
                              <th></th>
                              <th>{{$division}}</th>
                              <th>600</th>
                              <th>{{$total_marks}}</th>
                          </tr>
                      </tbody>
                  </table>
                  <div class="text-center">
                  <button class="btn btn-default" style="background:#003452; color:white;" onclick="printResult()">Print</button>
                  </div>
              </div>                    
          </div>
          </div>
      </div>
  </section>
  <script>
    function printResult() {
  window.print();
}
  </script>
  @endsection