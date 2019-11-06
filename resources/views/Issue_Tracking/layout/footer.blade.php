<!-- jQuery 3 -->
<script src="{{url('/')}}/frontend_plugins/js/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/')}}/frontend_plugins/js/bootstrap/bootstrap.min.js"></script>
<!-- datatables -->
<script src="{{url('/')}}/frontend_plugins/js/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/frontend_plugins/js/datatables/dataTables.bootstrap.min.js"></script>
<script src="{{url('/')}}/vendor/datatables/buttons.server-side.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.1/js/dataTables.buttons.min.js"></script>
<!-- Select2 -->
<script src="{{url('/')}}/frontend_plugins/select2/dist/js/select2.full.min.js"></script>
<!-- sweetalert -->
<script src="{{url('/')}}/frontend_plugins/js/sweetalert.min.js"></script>
<!-- CK Editor -->
<script src="{{url('/')}}/frontend_plugins/ckeditor/ckeditor.js"></script>
<!-- helper functions -->
@include('Issue_Tracking.layout.helper-functions-js')
@include('Issue_Tracking.layout.datatables-read')
@include('Issue_Tracking.layout.call-functions-js')

<script>
    $('.select2').select2();
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5();
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>

</body>
</html>