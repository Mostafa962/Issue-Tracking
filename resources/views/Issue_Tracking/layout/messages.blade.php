    <!-- //show errors of form validation  -->
    @if(count($errors->all())>0)
      <div class="alert alert-danger">
      	 <ul style="list-style: none;">
          @foreach($errors->all() as $error)
            	<li>{{$error}}</li>
          @endforeach
          </ul>
      </div>
    @endif 
    <!-- Show error Message After user login failed -->
     @if(session()->has('error')>0)
      <div class="alert alert-danger">
	      <ul style="list-style: none;">
	            	<li>{{session('error')}}</li>
	       </ul>
      </div>
    @endif 