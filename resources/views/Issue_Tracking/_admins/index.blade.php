@include('Issue_Tracking._admins.layout.header')
<div class="page-content">
    <div class="Messages">
        @include('Issue_Tracking._admins.layout.messages')
    </div>
    <div class="row">
        @include('Issue_Tracking._admins.layout.nav')
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->
@include('Issue_Tracking._admins.layout.footer')