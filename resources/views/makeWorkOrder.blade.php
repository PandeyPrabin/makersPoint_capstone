@extends('layout.mainlayout')

@section('content')

       

@if($errors->any())
     <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>
@endif


<form action="store" method="post" >

<table class ="MWO" >
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    
   <tr>
    <th>Work-id:</th>
    <td> <input type="text" name="workid" id="workid"></td>
  </tr>
  <tr>
    <th >Title:</th>
    <td> <input type="text" name="title" id="title"> </td>
  </tr>
    <tr>
    <th rowspan="2">Provider</th>
    <td  ><input class="radio" type="radio" name="provider" value="Yes" contenteditable="false">Yes
         <input  class="radio" type="radio" name="provider" value="No provider" contenteditable="false"> No 
      <tr> <td > <span margin-left= "5px" contenteditable="false">Provider Name:</span>
          <span>  <input type="text" name="provider" id="provider"></span></td>
        </tr>
        
  </tr>
  <tr>
    <th >Customer</th>
    <td></td>
  </tr>
    <tr>
    <th>Order date</th>
    <td ><input class="date" type="date" name="orderdate"></td>
  </tr>
  <tr>
    <th >Deadline</th>
    <td> <input class="date" type="date" name="deadline"></td>
  </tr>
    <tr>
    <th rowspan="2">Absolute deadline</th>
    <td ><input class="date" type="date" name="absolutedeadline">
        <tr>
        <td ><span contenteditable="false">Reason for absolute deadline:</span>
            <span contenteditable="true"></span></td>
        </tr>
  </tr>
  <tr>
    <th >Additional info:</th>
    <td><input type="text" contenteditable="true" name="additionalinfo" id="additionalinfo"></td>
  </tr>
    <tr>
    <th>No material</th>
    <td ><input class="radio" type="radio" name="material" value="No material"></td>
  </tr>
  <tr>
    <th >Add material</th>
    <td><input class="radio" type="radio" name="material" value="Add material"></td>
  </tr>
    <tr>
    <th>Wetransfer</th>
    <td > <span contenteditable="false"><input class="radio"  type="radio" name="material" value="Wetransfer"></span>
         <span contenteditable="true"> link here</span>
        </td>
  </tr>
  <tr>
    <th >Existing material</th>
    <td><input class="radio" type="radio" name="material" value="Existing material"></td>
  </tr>
    <tr>
    <th rowspan ="4">Delivery by:</th>
    <td><input class="radio" type="radio" name="deliveryby" value="Customer retrives"> Customer retrives</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="deliveryby" value="Mail"> Mail:</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="deliveryby" value="Matkahuolto"> Matkahuolto</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="deliveryby" value="Other"> Other</td>
  </tr>

</table>
    <button class="button" type="submit" value="Submit">Submit</button>  
</form>







		
@endsection