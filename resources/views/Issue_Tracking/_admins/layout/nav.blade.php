<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="">
                    <i class="fa fa-users"></i>Users
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('admin.users.create')}}"><i class="fa fa-plus"></i> Add User</a></li>
                    <li><a href="{{route('admin.users.view')}}"><i class="fa fa-eye"></i> View</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>