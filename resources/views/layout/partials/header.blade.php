<div class="container-fluid">
  	
	<div class="row bg-secondary text-white">
		<div class="col-md-1"></div>
  		<div class="col-md-3 form-inline">
    		<button class="btn btn-secondary my-2 my-sm-0 search-btn" type="submit">Search</button>
    		<input class="form-control mr-sm-2" type="search" placeholder="WORK ID" aria-label="Search">
  		</div>

  		<div class="col-md-4">
  			<a href="/"><img class="center-block" src="https://makerspoint.fi/wp-content/themes/twentyfourteen-child/img/logo.png"></a>
  		</div>

  		<div class="col-md-3 text-right">
  			<p>Hello Juuso <br><button type="button" class="btn btn-secondary">Sign out</button></p>
  		</div>
  		<div class="col-md-1"></div>
	</div>

	<div class="row grey-background">
		<div class="col-md-1"></div>
			<div class="table-responsive col-md-10">
				<table class="table">
					<thead>
						<tr>
							<th scope="col"><a href="{{ url('/')}}" class="header-link">Home</a></th>		
							<th scope="col"><a href= "{{ url('/makeWorkOrder') }}" class="header-link">Make work order</a></th>
							<th scope="col"><a href="{{ url('/workorders') }}" class="header-link">Work orders</a></th>
							<th scope="col"><a href="{{ url('/earlywarnings') }}" class="header-link">Early warnings</a></th>
							<th scope="col"><a href="{{ url('/machinetime') }}" class="header-link">Machine time</a></th>
							<th scope="col"><a class="header-link">
                                <div class="dropdown">
                                   <button class="dropbtn"><span class="header-link" >Reports </span>
                                     <i class="fa fa-caret-down"></i>
                                   </button>
                                   <div class="dropdown-content">
                                     <a href="{{ url('/subTask') }}">Sub-task</a>
                                     <a href="{{ url('/machineReport') }}">Machine time</a>
                                     <a href="{{ url('/materials') }}">Materials</a>
                                   </div>
                                 </div> </a></th>
							<th scope="col"><a href="{{ url('/control') }}" class="header-link">Control</a></th>
						</tr>
					</thead>
				</table>
			</div>
		<div class="col-md-1"></div>	
	</div>
</div>
<!-- Div that is included in every page 1/2 -->
<div class="container col-md-9">
