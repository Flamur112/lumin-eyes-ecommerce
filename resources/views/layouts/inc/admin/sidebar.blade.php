<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/styles.admin.sidebard.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="material-icons" id="btnSales" style="margin-right: 16px;">home</i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="material-icons" id="btnSales" style="margin-right: 16px;">sell</i>
                <span class="menu-title">Sales</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-category">
                <i class="material-icons" id="btnSales" style="margin-right: 16px;">category</i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href={{ url('admin/category/create') }}>Add Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">View Category</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-products" aria-expanded="false" aria-controls="ui-products">
                <i class="material-icons" id="btnSales" style="margin-right: 16px;">add_circle_outline</i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/create')}}">Add Products</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products')}}">View Product</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Brands</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-users" aria-expanded="false" aria-controls="ui-users">
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
            <a class="nav-link" href="documentation/documentation.html">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>

<script>
    $(document).ready(function () {
        // Add click event to toggle sub-menus
        $('.nav-link[data-toggle="collapse"]').on('click', function () {
            $(this).find('.menu-arrow').toggleClass('rotate-icon');

            // Manually toggle the collapse element
            $($(this).attr('href')).toggleClass('show');
        });
    });
</script>
