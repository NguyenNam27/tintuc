<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="{{route('admin.user.index')}}">
            <i class="fa fa-user"></i> <span >QUẢN LÝ NGƯỜI DÙNG</span>
          </a>
        </li>
          <li class="active">
              <a href="{{route('admin.category.index')}}">
                  <i class="fa fa-user"></i> <span >QUẢN LÝ DANH MỤC</span>
              </a>
          </li>
          <li class="active">
              <a href="{{route('admin.subcategory.index')}}">
                  <i class="fa fa-user"></i> <span >QUẢN LÝ LOẠI TIN</span>
              </a>
          </li>
          <li class="active">
              <a href="{{route('admin.post.index')}}">
                  <i class="fa fa-user"></i> <span >QUẢN LÝ BÀI VIẾT</span>
              </a>
          </li>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
