@extends('layout.mainlayout')

@section('content')

       <table class ="WO">
           <col width="25">
           <col width="200">
           <col width="10">
           <col width="1">
           <col width="0.5">
           
  <tr>
    <th>WORK ID:</th>
    <th>Title</th> 
    <th>status</th>
    <th>info</th> 
    <th>??</th>
  </tr>

           
           @foreach($workorder as $workorder)
           @if($workorder->material == 'No material')
            
  <tr>
      
    <td>{{$workorder->workid}}</td>
    <td><a href="/workDetail/{{$workorder->workid}}" class="header-link">{{$workorder->title}}</a></td>
   <td>
        
    <select>
      <div class="dropdown-content">
      <option id="Not processing" >Not processing</option>
      <option id="processing" >processing</option>
      <option id="ready" >ready</option>

          
    </div>
        </select>
       </td>
    <td>
        <div class="dropdown"><button class="dropbtn" >
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
      <a href="#">{{$workorder->provider}}</a>
      <a href="#">{{$workorder->material}}</a>
     
    </div>
        </div>
      </td>
    <td></td>
  </tr> 
           @endif

@endforeach
           
  

@endsection