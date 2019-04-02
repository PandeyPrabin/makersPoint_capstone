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
  <tr>
    <td></td>
    <td></td>
   <td>
        <div class="dropdown"><button class="dropbtn" >
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
      <a href="#">Not processing</a>
      <a href="#">Processing</a>
      <a href="#">Ready</a>
    </div>
        </div></td>
    <td>
        <div class="dropdown"><button class="dropbtn" >
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
      <a href="#">Subcontractor</a>
      <a href="#">material info here</a>
     
    </div>
        </div>
      </td>
    <td></td>
  </tr>
           <tr>
        <td></td>
    <td></td>
   <td>
        <div class="dropdown"><button class="dropbtn" >
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
      <a href="#">Not processing</a>
      <a href="#">Processing</a>
      <a href="#">Ready</a>
    </div>
        </div></td>
    <td>
        <div class="dropdown"><button class="dropbtn" >
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-content">
      <a href="#">Subcontractor</a>
      <a href="#">material info here</a>
     
    </div>
        </div>
      </td>
    <td></td>
  </tr>
  

@endsection