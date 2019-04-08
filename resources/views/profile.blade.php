@extends('layout.mainlayout')

@section('content')

       <div class="row">
         <h1>Mickey Mouse</h1>

		</div>

			<div class="profile-layout">
				<a href="/profile-edit"><i class="fas fa-pen fa-2x edit-profile-info header-link "></i></a>

				<table class="profile-info">
					<img class="profile-pic" src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1576&q=80">
					<tr>
						<th>Name:</th>
						<td class="profile-info-data">Mickey Mouse</td>
					</tr>
					<tr>
						<th>Username:</th>
						<td class="profile-info-data">MicMouse</td>
					</tr>
					<tr>
						<th>E-mail:</th>
						<td class="profile-info-data">mickey.mouse@wipii.ei</td>
					</tr>
					<tr>
						<th>Phone number:</th>
						<td class="profile-info-data">123456789</td>
					</tr>
					<tr>
						<th>User level:</th>
						<td class="profile-info-data">Yes</td>
					</tr>
				</table>
			</div>




@endsection