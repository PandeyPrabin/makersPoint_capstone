@extends('layout.mainlayout')

@section('content')


<table class ="MWO" >
<tr>
<!--         <th >Employee Details:<br></th>-->
      <button><a href="/addNewCustomer" class="">Add new</a></button>  
</tr>
 <tr>
         <th >Employee Id:</th>
         <th >Firstname:</th>
        <th >Lastname:</th>
         <th >Email:</th>
         <th >Phoneno:</th>
        <th >Address:</th>
        <th >Action:</th>
</tr>
@foreach($employee as $employee)

<tr>
   <td>{{$employee->employeeid}}</td>
    <td><a href="/workDetail" class="header-link">{{$employee->firstname}}</a></td>
   <td>{{$employee->lastname}}</td>
   <td>{{$employee->email}}</td>
   <td>{{$employee->phoneno}}</td>
   <td>{{$employee->address}}</td>
   <td>
   <a href="#">view</a>|
   <a href="{{url('/edit-employee/'.$employee->employeeid)}}">Edit</a>|
   <a href="/delete-employee">Delete</a></td>

</tr>
 @endforeach
</table>
    

 
  
@endsection
