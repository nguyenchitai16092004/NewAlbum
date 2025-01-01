<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header" style="background-color: black; padding: 0.5px; text-align: center;">
            <a href="{{ asset('admin/dashboard') }}"><img class="main-logo size-logo" src="img/logo/logo.ico" alt="" /></a>
            <strong><a href="{{ asset('admin/dashboard') }}"></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a href="{{ asset('admin/dashboard') }}" aria-expanded="false">
                            <span class="fa fa-home icon-wrap"></span> 
                            <span class="mini-click-non">Dashboard</span>
                        </a>                        
                    </li>
                    <li>
                        <a href="{{ asset('admin/contact') }}" aria-expanded="false">
                            <span class="fa fa-envelope icon-wrap"></span>
                            <span class="mini-click-non">Contact</span>
                        </a>                        
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Edit Library" href="{{ asset('admin/contact') }}">
                            <span class="mini-sub-pro">Contact</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('admin/bill') }}" aria-expanded="false">
                            <span class="fa fa-file icon-wrap"></span>
                            <span class="mini-click-non">Bill Management</span>
                        </a>                                                                      
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Departments List" href="{{ asset('admin/bill') }}">
                                <span class="mini-sub-pro">Bill Management</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('admin/statistic') }}" aria-expanded="false">
                            <span class="fa fa-chart-bar icon-wrap"></span>
                            <span class="mini-click-non">Statistics</span>
                        </a>                        
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/statistic') }}"><span
                                        class="mini-sub-pro">Statistics</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ asset('admin/category') }}" aria-expanded="false">
                            <span class="bi bi-box icon-wrap"></span>
                            <span class="mini-click-non">Category</span>
                        </a>                                                                    
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/category') }}"><span
                                        class="mini-sub-pro">Category List</span></a></li>
                        </ul>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/add-category') }}"><span
                                        class="mini-sub-pro">Add Category</span></a></li>

                        </ul

                        </ul>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/edit-category') }}"><span
                                        class="mini-sub-pro">Edit Category</span></a></li>
                        </ul>

                    </li>
                    <li>
                        <a class="has-arrow" href="{{ asset('admin/product') }}" aria-expanded="false">
                            <span class="fa fa-list icon-wrap"></span>
                            <span class="mini-click-non">Product List</span>
                        </a>                                                
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/product') }}"><span
                                        class="mini-sub-pro">Product List</span></a></li>
                        </ul>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/add-product') }}"><span
                                        class="mini-sub-pro">Add Product</span></a></li>
                        </ul>


                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/edit-product') }}"><span
                                        class="mini-sub-pro">Edit Product</span></a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="{{ asset('admin/comments') }}" aria-expanded="false">
                            <span class="fa fa-comments icon-wrap"></span>
                            <span class="mini-click-non">Comments</span>
                        </a>                        
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/comments') }}"><span
                                        class="mini-sub-pro">Comments</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{ asset('admin/employee-management') }}" aria-expanded="false">
                            <span class="fa fa-users icon-wrap"></span>
                            <span class="mini-click-non">Customers</span>
                        </a>                        
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/employee-management') }}"><span
                                        class="mini-sub-pro">Customers Management</span></a></li>
                        </ul>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/add-employee-management') }}"><span
                                        class="mini-sub-pro">Add Customers Management</span></a></li>
                        </ul>

                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/edit-employee-management') }}"><span
                                        class="mini-sub-pro">Edit Customers Management</span></a></li>
                        </ul>

                    </li>
                    <li>
                        <a class="has-arrow" href="{{ asset('admin/staff-management') }}" aria-expanded="false">
                            <span class="bi bi-person-gear icon-wrap"></span>
                            <span class="mini-click-non">Staff </span>
                        </a>                                             
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/staff-management') }}"><span
                                        class="mini-sub-pro">Staff Management</span></a></li>
                        </ul>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/add-staff-management') }}"><span
                                        class="mini-sub-pro">Add Staff Management</span></a></li>
                        </ul>

                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/edit-staff-management') }}"><span
                                        class="mini-sub-pro">Edit Staff Management</span></a></li>
                        </ul>

                    </li>
                    <li>
                        <a class="has-arrow" href="{{ asset('admin/band-singer') }}" aria-expanded="false">
                            <span class="fa fa-microphone icon-wrap"></span>
                            <span class="mini-click-non">Band/Singer</span>
                        </a>                        
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ asset('admin/band-singer') }}"><span
                                        class="mini-sub-pro">Band/Singer</span></a></li>
                        </ul>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Rounded Charts" href="{{ route('Index_Add_Band') }}"><span
                                        class="mini-sub-pro">Add Band/Singer</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><span
                                class="educate-icon educate-pages icon-wrap"></span> <span
                                class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            <li><a title="Login" href="{{ asset('admin/login') }}"><span
                                        class="mini-sub-pro">Login</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
