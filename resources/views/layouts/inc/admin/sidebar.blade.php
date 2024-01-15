<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styles.admin.sidebard.css') }}">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.3/dist/js/bootstrap.bundle.min.js"></script>


<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="material-icons" id="btnSales" style="margin-right: 16px;">home</i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="material-icons" id="btnSales" style="margin-right: 16px;">sell</i>
          <span class="menu-title">Sales</span>
        </a>
      </li>

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
                    <i class="material-icons" id="btnSales" style="margin-right: 16px;">category</i>
                    <span class="menu-title">Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-category">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Add Category</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">View Category</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-products" aria-expanded="false" aria-controls="ui-products">
                    <i class="material-icons" id="btnSales" style="margin-right: 16px;">add_circle_outline</i>
                    <span class="menu-title">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-products">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Add Products</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Delete Product</a></li>
                    </ul>
                </div>
            </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="material-icons" id="btnSales" style="margin-right: 16px;">toc</i>
          <span class="menu-title">Brands
          </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-users" aria-expanded="false" aria-controls="ui-users">
            <i class="material-icons" id="btnSales" style="margin-right: 16px;">group</i>
            <span class="menu-title">Users</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-users">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Add User</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Delete User</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="material-icons" id="btnSales" style="margin-right: 16px;">horizontal_rule</i>
            <span class="menu-title">Home Slider</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="material-icons" id="btnSales" style="margin-right: 16px;">settings</i>
            <span class="menu-title">Site Settings</span>
        </a>
    </li>


        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>
