<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{assetPath(setting()->image->path)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Ahd Admin</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> <span>Statistics</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Services</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('service/create')}}"><i class="fa fa-plus"></i> Add Service</a></li>
                    <li><a href="{{adminUrl('service')}}"><i class="fa fa-edit"></i> Show / Edit Slide</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-image-o"></i>
                    <span>Gallery</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('gallery/create')}}"><i class="fa fa-upload"></i> Upload To Gallery</a></li>
                    <li><a href="{{adminUrl('gallery')}}"><i class="fa fa-edit"></i> Show / Edit Gallery</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>Slider</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('slider/create')}}"><i class="fa fa-plus"></i> Add Slider</a></li>
                    <li><a href="{{adminUrl('slider')}}"><i class="fa fa-edit"></i> Show / Edit Slide</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-video-camera"></i>
                    <span>Video</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('video/create')}}"><i class="fa fa-plus"></i> Add Video</a></li>
                    <li><a href="{{adminUrl('video')}}"><i class="fa fa-edit"></i> Show / Edit Video</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Messages</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('message')}}"><i class="fa fa-edit"></i> Show Inbox</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-globe"></i>
                    <span>About</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('about/edit')}}"><i class="fa fa-edit"></i> Edit About Website</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-phone"></i>
                    <span>Contact</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('contact/edit')}}"><i class="fa fa-edit"></i> Edit Contact Info</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span>Setting</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{adminUrl('setting/edit')}}"><i class="fa fa-edit"></i> Edit Website Setting</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
