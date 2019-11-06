@extends('Issue_Tracking.index')
@section('content')
<section class="content">
<div class="row">
    <div class="col-md-12">
      <div class="create-issue" style="float: right">
        <a data-toggle="modal" data-target="#IssueModel" class="btn btn-brimary" style="background:#3c8dbc;color: #fff;border: 1px solid;">New Task</a>
      </div>
   </div>
 </div>
<hr>
<div class="lists" id="tracking-lists" style="border: 1px solid #000;margin:10px;padding: 10px;    overflow-x: scroll;">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered" id="issues" style="width:100%;table-layout:fixed;">
		        <thead>
		          <tr>
		          	<th width="180px">
		          		{{$TODOList->name}}<br>{{$TODOList->counter}}
		          	</th>
		          	<th width="180px">
		          		{{$InPreogressList->name}}<br>{{$InPreogressList->counter}}
		          	</th>
		          	@foreach($OntherLists as $list)
		          	<th width="180px">
		          		{{$list->name}}<br>{{$list->counter}}
		          	</th>
		          	@endforeach;
		          	<th width="180px">
		          		{{$DoneList->name}}<br>{{$DoneList->counter}}
		            </th>
		          </tr>
		        </thead>
		        <tbody>
		        	<tr>
		        		<td id="TODO">
		        			<div id="TODO-Issue">
		        				@foreach($TODOIssus as $todo)
		        				<a data-toggle="modal" data-target="#TODOModel{{$todo->id}}">
		        			    <div class="card" style="width: 18rem;">
								     <div class="card-body">
								      <h5 class="card-title">{{$todo->title}}</h5>
								      <h6 class="card-subtitle mb-2 text-muted">{{$todo->due_date}}</h6>
								      <p class="card-text" style="overflow-y: scroll;height: 100px;">{{$todo->description}}</p>
								  	  </div>
								</div>
								</a>
								 @include('Issue_Tracking._issues.edit-TODO-list')
								<hr>
		          			@endforeach
		        			</div>
		        		</td>
		        		<td id="IN-PROGRESS">
		        			<div id="IN-PROGRESS-Issue">
		        				@foreach($InPreogressIssus as $inProgress)
		        			    <div class="card" style="width: 18rem;">
								     <div class="card-body">
								      <h5 class="card-title">{{$inProgress->title}}</h5>
								      <h6 class="card-subtitle mb-2 text-muted">{{$inProgress->due_date}}</h6>
								      <p class="card-text">{{$inProgress->description}}</p>
								  	  </div>
								</div>
								<hr>
		          				@endforeach;
		        			</div>
		        		</td>
		        		<td>zzz</td>
		        		<td id="DONE">
		        			<div id="DONE-Issue">
		        				@foreach($DoneIssus as $done)
		        			    <div class="card" style="width: 18rem;">
								     <div class="card-body">
								      <h5 class="card-title">{{$done->title}}</h5>
								      <h6 class="card-subtitle mb-2 text-muted">{{$done->due_date}}</h6>
								      <p class="card-text">{{$done->description}}</p>
								  	  </div>
								</div>
								<hr>
		          				@endforeach;
		        			</div>
		        		</td>
		        	</tr>
		        </tbody>
		</table>
		</div>
	</div>
</div>
</section>
 @include('Issue_Tracking._issues.create')
@endsection