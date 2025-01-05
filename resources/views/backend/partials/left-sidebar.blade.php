<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{ asset('admin/dashboard') }}">
                <img class="main-logo size-logo" src="img/logo/logo.ico" alt="Logo" />
            </a>
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
                        <a href="{{ Route('Index_Customer_Management') }}" aria-expanded="false">
                            <span class="fa fa-users icon-wrap"></span>
                            <span class="mini-click-non">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-envelope icon-wrap"></span>
                            <span class="mini-click-non">Contact</span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li>
                                <a href="{{ Route('Index_Contact_Management') }}"><span class="mini-sub-pro">Contact Management</span></a>
                            </li>
                            <li>
                                <a href="{{ Route('Index_Response_Contact_Management') }}"><span class="mini-sub-pro">Respone Contact Management</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-file icon-wrap"></span>
                            <span class="mini-click-non">Bill</span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li>
                                <a href="{{ Route('Index_Bill_Management') }}"><span class="mini-sub-pro">Bill Management</span></a>
                            </li>
                            <li>
                                <a href="{{ Route('Index_Bill_Detail_Management') }}"><span class="mini-sub-pro">Bill Detail Management</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-newspaper icon-wrap"></span>
                            <span class="mini-click-non">Blog</span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li>
                                <a href="{{ Route('Index_Blog_Management') }}"><span class="mini-sub-pro">Blog Management</span></a>
                            </li>
                            <li>
                                <a href="{{ Route('Index_Add_Blog_Management') }}"><span class="mini-sub-pro">Add Blog</span></a>
                            </li>
                            <li>
                                <a href="{{ Route('Index_Edit_Blog_Management') }}"><span class="mini-sub-pro">Edit Blog</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('admin/statistic') }}" aria-expanded="false">
                            <span class="fa fa-chart-bar icon-wrap"></span>
                            <span class="mini-click-non">Statistics</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ Route('Index_Comments_Management') }}" aria-expanded="false">
                            <span class="fa fa-comments icon-wrap"></span>
                            <span class="mini-click-non">Comments</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="bi bi-person-gear icon-wrap"></span>
                            <span class="mini-click-non">Staff </span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li>
                                <a href="{{ Route('Index_Staff_Management') }}"><span class="mini-sub-pro">Staff Management</span></a>
                            </li>
                            <li>
                                <a href="{{ Route('Index_Add_Staff_Management') }}"><span class="mini-sub-pro">Add Staff Management</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="bi bi-box icon-wrap"></span>
                            <span class="mini-click-non">Category</span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a href="{{ asset('admin/category') }}"><span class="mini-sub-pro">Category
                                        List</span></a></li>
                            <li><a href="{{ asset('admin/add-category') }}"><span class="mini-sub-pro">Add
                                        Category</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-list icon-wrap"></span>
                            <span class="mini-click-non">Product List</span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a href="{{ asset('admin/product') }}"><span class="mini-sub-pro">Product
                                        List</span></a></li>
                            <li><a href="{{ asset('admin/add-product') }}"><span class="mini-sub-pro">Add
                                        Product</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-tags icon-wrap"></span>
                            <span class="mini-click-non">Discount Products </span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a href="{{ Route('Index_Discount') }}"><span class="mini-sub-pro">Discount List</span></a></li>
                            <li><a href="{{ Route('Index_Add_Discount') }}"><span class="mini-sub-pro">Add Discount Product</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-list icon-wrap"></span>
                            <span class="mini-click-non">Goods-Receipt</span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a href="{{ Route('Index_Goods') }}"><span class="mini-sub-pro">Goods-Receipt</span></a></li>
                            <li><a href="{{ Route('Add_Index') }}"><span class="mini-sub-pro">Add Goods-Receipt</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-microphone icon-wrap"></span>
                            <span class="mini-click-non">Band/Singer</span>
                        </a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a href="{{ asset('admin/band-singer') }}"><span
                                        class="mini-sub-pro">Band/Singer</span></a></li>
                            <li><a href="{{ route('Index_Add_Band') }}"><span class="mini-sub-pro">Add
                                        Band/Singer</span></a></li>
                        </ul>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="educate-icon educate-pages icon-wrap"></span>
                            <span class="mini-click-non">Pages</span>
                        </a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            <li><a href="{{ asset('admin/login') }}"><span class="mini-sub-pro">Login</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
