<div id="TODOModel'+issue['data'][0].id+'" class="modal fade" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Edit  issue</h4>
    </div>
    <div class="modal-body">
     <div class="row">
       {!!Form::open(['id'=>'edit-issue-form','files' => true])!!}
       {{Form::hidden('id','+issue['data'][0].id+')}}
        <div class="col-md-6 col-xs-12">
            <div class="from-group">
              {{Form::label('title', 'Title',['style'=>'float:left'])}}
              {{Form::text('title','+issue['data'][0].title+',['class'=>'form-control name','placeholder'=>'Title....'])}}
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="from-group">
              {{Form::label('description', 'Description',['style'=>'float:left'])}}
              {{Form::textarea('description','+issue['data'][0].description+',['class'=>'form-control description','rows'       => 2, 'placeholder'=>'Description....',])}}
            </div>
        </div> 
        <div class="col-md-6 col-xs-12">
            <div class="from-group">
              {{Form::label('due_date', 'Due Date',['style'=>'float:left'])}}
              {{Form::date('due_date','+issue['data'][0].due_date+',['class'=>'form-control','placeholder'=>'Due Date....'])}}
            </div>
        </div> 
         <div class="col-md-6 col-xs-12">
            <div class="from-group">
                {{Form::label('user', 'User',['style'=>'float:left;display:block'])}}
                <br>
                {{Form::select('user_id',$users,null,['class'=>'form-control select2','placeholder'=>'--Select User--','id'=>'user_id'])}}
              </div><br>
        </div> 
       <div class="col-md-6 col-xs-12">
            <div class="from-group">
               {{Form::label('attachments', 'Attachments',['style'=>'float:left'])}}
              {{Form::file('attachments[]',['class'=>'form-control','multiple'=>'multiple','id'=>'myFile'])}}
            </div>
        </div>   
        <div class="col-md-6 col-xs-12">
            <div class="from-group">
              {{Form::label('comments', 'Comments',['style'=>'float:left'])}}
              {{Form::textarea('comments','+issue['data'][0].comments+',['class'=>'form-control','rows'=> 2, 'placeholder'=>'Comments....'])}}
            </div>
        </div>  
      </div>
      </div>
    <div class="modal-footer">
      {!!Form::submit('save',['class'=>'btn btn-info','id'=>'Save','style'=>'float: left;'])!!}
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
      {!!Form::close()!!}
    </div>
  </div>
</div>
