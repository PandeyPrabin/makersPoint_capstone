@extends('layout.mainlayout')

@section('content')

       


    


<table class ="MWO" >
  <tr>
    <th>Work-id:</th>
    <td contenteditable="true"></td>
  </tr>
  <tr>
    <th >Title:</th>
    <td contenteditable="true"></td>
  </tr>
    <tr>
    <th rowspan="2">Provider</th>
    <td  ><input class="radio" type="radio" name="Y/N" value="Yes" contenteditable="false">Yes
         <input  class="radio" type="radio" name="Y/N" value="No" contenteditable="false"> No 
      <tr> <td > <span margin-left= "5px" contenteditable="false">Provider Name:</span>
          <span contenteditable="true"></span></td>
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
    <td> <input class="date" type="date" name="orderdate"></td>
  </tr>
    <tr>
    <th rowspan="2">Absolute deadline</th>
    <td ><input class="date" type="date" name="orderdate">
        <tr>
        <td ><span contenteditable="false">Reason for absolute deadline:</span>
            <span contenteditable="true"></span></td>
        </tr>
  </tr>
  <tr>
    <th >Additional info:</th>
    <td contenteditable="true"></td>
  </tr>
    <tr>
    <th>No material</th>
    <td ><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
  <tr>
    <th >Add material</th>
    <td><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
    <tr>
    <th>Wetransfer</th>
    <td > <span contenteditable="false"><input class="radio"  type="radio" name="N/Y" value=""></span>
         <span contenteditable="true"> link here</span>
        </td>
  </tr>
  <tr>
    <th >Existing material</th>
    <td><input class="radio" type="radio" name="N/Y" value=""></td>
  </tr>
    <tr>
    <th rowspan ="4">Delivery by:</th>
    <td><input class="radio" type="radio" name="y/n" value=""> Customer retrives</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="y/n" value=""> Mail:</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="y/n" value=""> Matkahuolto</td>
    </tr>
    
    <tr>
    <td><input class="radio" type="radio" name="y/n" value=""> Other</td>
  </tr>

</table>
    <button class="button" type="submit" value="Submit">Submit</button>  
    





		
@endsection