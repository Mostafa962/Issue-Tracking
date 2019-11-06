@extends('Issue_Tracking._admins.index')
@section('content')
  <div class="form-user-create">
      {{Form::open(['id'=>'create-user-form'])}}
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('name', 'Name',['style'=>'float:left'])}}
              {{Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Name...','minLength'=>'3','maxLength'=>'20'])}}
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('email', 'Email',['style'=>'float:left'])}}
              {{Form::email('email',old('email'),['class'=>'form-control','placeholder'=>'Email...'])}}
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              {{Form::label('password', 'Password',['style'=>'float:left'])}}
              {{Form::password('password',['class'=>'form-control','placeholder'=>'Password...','required'=>'','minLength'=>'6'])}}
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          {!!Form::submit('Save',['class'=>'btn btn-brimary'])!!}
        </div>
      </div>
    {{Form::close()}}
  </div>
@endsection