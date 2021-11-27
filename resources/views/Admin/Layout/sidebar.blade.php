 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <p>
                {{session('email')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" onclick="return confirm('Bạn có chắc muốn thoát')" class="nav-link">
                 <i class="fas fa-sign-out-alt"></i> &nbsp; &nbsp;
                 <p>Đăng xuất</p>
               </a>
             </li>
           </ul>
           <hr>
         </li>
         <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Danh mục
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('listcategory')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('addcategory')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới danh mục</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Sản phẩm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('listproduct') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('addproduct')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới sản phẩm</p>
              </a>
            </li>

          </ul>

        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Tin tức - Sự kiện
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('listblogs')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách tin tức</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('addblog')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm tin tức</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Tài khoản người dùng
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('list_user')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách tài khoản</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <p>
              Admin
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('addadmin')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('listadmin')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách Admin</p>
              </a>
            </li>
          </ul>
        </li>

      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <p>
            Banner
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('listBanner')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách banner</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('addbanner')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm mới banner</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <p>
            Phương thức thanh toán
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('listaddmethodpay')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách phương thức</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('getaddmethodpay')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm mới phương thức</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <p>
            Địa chỉ
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('listcontact')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Địa chỉ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('contact')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm địa chỉ</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <p>
            Đơn hàng
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('list_order')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách đơn hàng</p>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <p>
            comments
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('listcomment')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>comments</p>
            </a>
          </li>

        </ul>
        
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
