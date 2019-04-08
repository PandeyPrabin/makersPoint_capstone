@extends('layout.mainlayout')

@section('content')


<table class ="MWO" >
<tr>
<!--         <th >Employee Details:<br></th>-->
      <button><a href="/addNewCustomer" class="">Add new</a></button>  
</tr>
 <tr>
         <th >Customer Id:</th>
         <th >Firstname:</th>
        <th >Lastname:</th>
         <th >Email:</th>
         <th >Phoneno:</th>
        <th >Address:</th>
        <th >Action:</th>
</tr>
@foreach($customer as $customer)

<tr>
   <td>{{$customer->customerid}}</td>
    <td><a href="/workDetail" class="header-link">{{$customer->firstname}}</a></td>
   <td>{{$customer->lastname}}</td>
   <td>{{$customer->email}}</td>
   <td>{{$customer->phoneno}}</td>
   <td>{{$customer->address}}</td>
   <td><a href="#">view</a>|<a href="#">Edit</a>|<a href="#">Delete</a></td>

</tr>
 @endforeach
</table>
    

 
  
@endsection
