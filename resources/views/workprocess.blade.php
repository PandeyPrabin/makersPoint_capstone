@extends('layout.mainlayout')

@section('content')


<table class ="MWO" >
<tr>
<!--         <th >Employee Details:<br></th>-->
      <button><a href="/addNewCustomer" class="">Add new</a></button>  
</tr>
 <tr>
         <th >Workprocess Id:</th>
         <th >WorkTitle:</th>
         <th >Taskname:</th>
         <th >Employee:</th>
         <th >MachineName:</th>
         <th>Action</th>
</tr>
@foreach($workprocess as $workprocess)

<tr>
   <td><a href="/workDetail" class="header-link">{{$workprocess->workprocessid}}</a></td>
   <td>Work Title</td>
   <td>@foreach($workprocess->tasks as $task)
   {{$task->taskname}}
   @endforeach</td>
   <td>@foreach($workprocess->employees as $employee)
   {{$employee->firstname}} {{$employee->lastname}}
   @endforeach
   </td>
   <td>@foreach($workprocess->machines as $machine)
   {{$machine->machinename}}
   @endforeach</td>
   <td>
   <a href="#">view</a>|
   <a href="{{url('/edit-employee/'.$workprocess->employeeid)}}">Edit</a>|
   <a href="/delete-employee">Delete</a></td>

</tr>
 @endforeach
</table>
    

 
  
@endsection
