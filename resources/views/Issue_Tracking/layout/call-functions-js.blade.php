<script type="text/javascript">
    $(document).ready(function () {
		// |-------Users-----
	  AddRecords("#create-user-form","{{route('admin.users.store')}}");
    UpdateRecords("#edit-user-form","{{route('admin.users.update')}}");
    deleteRecord('#users',"{!! route('admin.users.delete') !!}");
        // |-------Lists-----
    AddRecords("#create-list-form","{{route('lists.store')}}");
    deleteRecord('#lists',"{!! route('lists.delete') !!}");
        // |-------Issues-----
    AddRecords("#create-issue-form","{{route('issues.store')}}");
    UpdateRecords("#edit-issue-form","{{route('issues.update')}}");
    deleteRecord('#users',"{!! route('admin.users.delete') !!}");
		//------active navbar list------
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