 <style type="text/css">
   .col-md-6{
      height: 90px;
   }
   .select2-container {
    width: 80% !important ;
   }
 </style>
 <div id="IssueModel" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new issue</h4>
        </div>
        <div class="modal-body">
         <div class="row">
           {!!Form::open(['id'=>'create-issue-form','files' => true])!!}
            <div class="col-md-12 col-xs-12">
              <ul id="validation-errors" style="list-style-type: none;"></ul>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="from-group">
                  {{Form::label('title', 'Title',['style'=>'float:left'])}}
                  {{Form::text('title',old('title'),['class'=>'form-control name','placeholder'=>'Title....'])}}
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="from-group">
                  {{Form::label('description', 'Description',['style'=>'float:left'])}}
                  {{Form::textarea('description',old('description'),['class'=>'form-control description','rows'       => 2, 'placeholder'=>'Description....',])}}
                </div>
            </div> 
            <div class="col-md-6 col-xs-12">
                <div class="from-group">
                  {{Form::label('due_date', 'Due Date',['style'=>'float:left'])}}
                  {{Form::date('due_date',old('due_date'),['class'=>'form-control','placeholder'=>'Due Date....'])}}
                </div>
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
                  {{Form::textarea('comments',old('comments'),['class'=>'form-control','rows'=> 2, 'placeholder'=>'Comments....'])}}
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
  </div>