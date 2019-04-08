@extends('layout.mainlayout')

@section('content')

       <div class="row">
         <h1>Edit User Information</h1>
		</div>

			<div class="profile-layout">
				
				<form>
					<img class="profile-pic" src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1576&q=80">
					<p>
						First Name:
						<input class="profile-info-edit" type="text" name="fname">
					</p>
					<p>
						Last Name:
						<input class="profile-info-edit" type="text" name="lname">
					</p>
					<p>
						Username:
						<input class="profile-info-edit" type="text" name="uname">
					</p>
					<p>
						E-mail:
						<input class="profile-info-edit" type="text" name="email">
					</p>
					<p>
						Phone number:
						<input class="profile-info-edit" type="text" name="phone">
					</p>
					<p>
						User level:
						
						<span class="profile-info-edit">Cannot be changed</span>
					</p>
				</form>
			</div><br><br>
			<a href="/profile"><i class="fas fa-save fa-2x save-profile-info header-link"></i></a>

		 





@endsection