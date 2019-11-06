<!-- jQuery 3 -->
<script src="{{url('/')}}/frontend_plugins/js/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/')}}/frontend_plugins/js/bootstrap/bootstrap.min.js"></script>
<!-- datatables  -->
<!-- DataTable Plugins -->
<script src="{{url('/')}}/frontend_plugins/js/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/frontend_plugins/js/datatables/dataTables.bootstrap.min.js"></script>
<script src="{{url('/')}}/vendor/datatables/buttons.server-side.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.1/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/frontend_plugins/js/sweetalert.min.js"></script>
<!-- helper functions -->
@include('Issue_Tracking.layout.helper-functions-js')
@include('Issue_Tracking.layout.datatables-read')
@include('Issue_Tracking.layout.call-functions-js')
<script>
</script>

</body>
</html>