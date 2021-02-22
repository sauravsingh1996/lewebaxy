@extends('layout.frontend.master')
  
@section('content')
		<h2>Users</h2>

		<!-- TASK 1 - USER LISTING TABLE -->
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Created At</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $userdata)
					<tr>
						<td>{{$userdata["id"]}}</td>
						<td>{{$userdata["name"]}}</td>
						<td>{{$userdata["email"]}}</td>
						<td>{{$userdata["gender"]}}</td>
						<td>{{$userdata["created_at"]}}</td>
						<td>
						<a class="btn btn-primary todolist" data-toggle="modal" href='#todos-modal1' data-user_id="{{$userdata['id']}}">View Todos</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<!-- TASK 2 - TODO MODAL POPUP -->
		<div class="modal fade" id="todos-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Todos</h4>
					</div>
					<div class="modal-body">

						<!-- TODOS LISTING -->
						<ul>
						<!-- 	<li>Alter consequatur tristis odit deserunt sortitus.</li>
							<li>Corroboro comedo virga coaegresco taedium cornu fuga astrum ver cursim vilis.</li> -->
						</ul>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div> 
		</div>

		<!-- TASK 3 - PAGINATION -->
		<div class="container">
			<div class="col-md-12 text-center">
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					@for ($i = 1; $i <= $meta["pagination"]["pages"]; $i++)
					<li class="@if ($i == $meta['pagination']['page']) active @endif"><a href="users?page={{$i}}">{{$i}}</a></li>
				   @endfor 
				   <li><a href="#">&raquo;</a></li>
				</ul>
				<div class="user-count">Showing 1-20 of 500 users</div>
			</div>
		</div>
		<!-- /Main Wrapper --> 
		<!-- jQuery -->
@endsection
