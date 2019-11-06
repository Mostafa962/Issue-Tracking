 @extends('Issue_Tracking.index')
@section('content')
<section class="content">
         <div class="row">
           {!!Form::open(['id'=>'create-list-form'])!!}
            <div class="col-md-6 col-xs-12">
                <div class="from-group">
                  {{Form::text('name',old('name'),['class'=>'form-control name','placeholder'=>'Title....'])}}
                </div>
            </div>
           <div class="col-md-6 col-xs-12">
          	 <div class="from-group">
           	 {!!Form::submit('save',['class'=>'btn btn-info','id'=>'Save','style'=>'float: left;'])!!}
           	  </div>
            </div>
        </div>
        <hr>
        <div class="row">
           <div class="col-md-12">
           	  <div class="lists-tables">
				  	<table class="table table-bordered" id="lists">
				        <thead>
				          <tr>
				          	<th>List</th>
				          	<th>Delete</th>
				          </tr>
				        </thead>
				        <tbody></tbody>
				  	</table>
				  </div>	
           </div>
        </div>
@endsection