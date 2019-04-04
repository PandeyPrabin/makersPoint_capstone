@extends('layout.mainlayout')

@section('content')


<table class ="MWO" >
<tr>
         <th >Employee Details:<br></th>
    <th>  <button><a href="/addNewCustomer" class="header-link">Add new</a></button>  </th>
</tr>
 <tr>
         <th >Employee Id:</th>
         <th >Firstname:</th>
        <th >Lastname:</th>
         <th >Email:</th>
         <th >Phoneno:</th>
        <th >Address:</th>
</tr>
@foreach($employee as $employee)

<tr>
   <td>{{$employee->employeeid}}</td>
    <td><a href="/workDetail" class="header-link">{{$employee->firstname}}</a></td>
   <td>{{$employee->lastname}}</td>
   <td>{{$employee->email}}</td>
   <td>{{$employee->phoneno}}</td>
   <td>{{$employee->address}}</td>

</tr>
 @endforeach
</table>
    

 
  
@endsection
