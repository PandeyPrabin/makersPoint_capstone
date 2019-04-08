@extends('layout.mainlayout')

@section('content')



<table class ="MWO" >
   
   <tr>
    <th>Work-id:</th>
    <td>{{$workorder->workid}}</td>
  </tr>
  <tr>
    <th >Title:</th>
    <td>{{$workorder->title}} </td>
  </tr>
    <tr>
    <th>Provider Name:</th>
    <td>{{$workorder->provider}}</td>
    </tr>
  <tr>
    <th >Customer</th>
    <td></td>
  </tr>
    <tr>
    <th>Order date</th>
    <td >{{$workorder->orderdate}}</td>
  </tr>
  <tr>
    <th >Deadline</th>
    <td> {{$workorder->deadline}}</td>
  </tr>
    <tr>
    <th> Reason for absolute deadline:</th>
        <td> {{$workorder->absolutedeadline}}</td>
       
  </tr>
    <tr>
    <th>Additional info:</th>
        <td> {{$workorder->additionalinfo}}</td>
       
  </tr>
  <tr>
    <th >material info</th>
    <td>{{$workorder->material}}</td>
  </tr>
    

    <tr>
    <th >Delivery by:</th>
    <td>{{$workorder->deliveryby}}</td>
    </tr>
    
</table>
   
@endsection






		
