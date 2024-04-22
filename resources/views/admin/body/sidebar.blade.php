<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<aside class="main-sidebar sidebar-dark-lightblue elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/assets/dist/img/woodify-fav.png" alt="Woodify Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-dark">WOODIFY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        {{-- @php
            $id = Auth::user()->id;
            $profileData = App\Models\User::find($id);
        @endphp --}}

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                {{-- <img class="img-circle elevation-2" style="width: 35px;height: 35px;"
                    src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.png') }}"
                    alt="Profile Picture"> --}}
            </div>
            {{-- <div class="info">
                <a href="{{ route('admin.profile') }}" class="d-block"><span style="font-size: medium">
                        {{ Auth::user()->name }}</span></a>
            </div> --}}
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-header mb-2">MAIN</li>

                <li class="nav-item">
                    <a href="3"
                        class="nav-link ">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Overview
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('manage.all.products') }}"
                        class="nav-link {{ Route::is('manage.all.products') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-bars"></i>
                        <p>
                            Product Manage
                        </p>
                    </a>
                </li>



                <li
                    class="nav-item {{ Route::is('all.category.list') || Route::is('add.category.list') || Route::is('edit.category.list') || Route::is('all.post') || Route::is('add.post') || Route::is('edit.post') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Route::is('all.category.list') || Route::is('all.post') ? 'active' : '' }} "
                        style="{{ Route::is('all.category.list') || Route::is('edit.category.list') || Route::is('add.category.list') || Route::is('all.post') || Route::is('add.post') || Route::is('edit.post') ? 'background-color: #3c8dbc;' : '' }}">
                        <i class="nav-icon fas fa-receipt"></i>
                        <p>
                            Inventory
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('all.category.list') }}"
                                class="nav-link {{ Route::is('all.category.list') ? 'active' : '' }} {{ Route::is('edit.category.list') ? 'active' : '' }} {{ Route::is('add.category.list') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-list-alt"></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('all.post') }}"
                                class="nav-link {{ Route::is('all.post') ? 'active' : '' }} {{ Route::is('edit.post') ? 'active' : '' }} {{ Route::is('add.post') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-blog"></i>
                                <p>
                                    Posts
                                </p>
                            </a>
                        </li>




                    </ul>
                </li>






                <li
                    class="nav-item {{ Route::is('all.admin') || Route::is('all.seller') || Route::is('all.customer') || Route::is('add.users') || Route::is('edit.admin') || Route::is('edit.seller') || Route::is('edit.customer') || Route::is('edit.users') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Route::is('all.admin') ? 'active' : '' }} {{ Route::is('all.seller') ? 'active' : '' }} {{ Route::is('all.customer') ? 'active' : '' }} {{ Route::is('add.users') ? 'active' : '' }} {{ Route::is('edit.admin') ? 'active' : '' }} {{ Route::is('edit.seller') ? 'active' : '' }} {{ Route::is('edit.customer') ? 'active' : '' }} {{ Route::is('edit.users') ? 'active' : '' }}"
                        style="{{ Route::is('all.admin') || Route::is('all.seller') || Route::is('all.customer') || Route::is('add.users') ? 'background-color: #3c8dbc;' : '' }}">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            Manage Users
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('all.admin') }}"
                                class="nav-link {{ Route::is('all.admin') || Route::is('edit.admin') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>
                                    Manage Admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('all.seller') }}"
                                class="nav-link {{ Route::is('all.seller') || Route::is('edit.seller') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    Manage Sellers
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('all.customer') }}"
                                class="nav-link {{ Route::is('all.customer') || Route::is('edit.customer') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Manage Customers
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('add.users') }}"
                                class="nav-link {{ Route::is('add.users') || Route::is('edit.users') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>
                                    Add Users
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>






                <li class="nav-header mt-3 mb-2">ACTIONS</li>
                <li class="nav-item">
                    <a href="{{ route('database.export') }}" class="nav-link ">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Backup Database
                        </p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon fa fa-power-off"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li> --}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
