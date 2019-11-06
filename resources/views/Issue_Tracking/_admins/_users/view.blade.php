@extends('Issue_Tracking._admins.index')
@section('content')
<section class="content">
  <div class="users-tables">
  	<table class="table table-bordered" id="users">
        <thead>
          <tr>
          	<th>Name</th>
          	<th>Email</th>
          	<th>Delete</th>
          	<th>Edit</th>
          </tr>
        </thead>
        <tbody></tbody>
  	</table>
  </div>	
</section>
@endsection