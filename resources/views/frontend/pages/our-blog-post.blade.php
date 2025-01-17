@extends('frontend.layouts.master')
@section('title', 'Our Blog Post')
@section('main')
    <link rel="stylesheet" href="css/new-arrival.css">
    <div class="container-new-arrival">
        <h1>Our Blog Post</h1>
        <div class="container-th2-new-arrival">
            <div class="sidebar">
                <ul>
                    <li><b><span>View all collection</span></b></li>
                    <div class="menu">
                        <div class="menu-header" onclick="toggleMenu(this)">
                            <span>Shop</span>
                            <span><i class="fa-solid fa-angle-down" style="color: black;"></i></span>
                        </div>
                        <ul class="submenu">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>

                        <div class="menu-header" onclick="toggleMenu(this)">
                            <span>Boy Group</span>
                            <span><i class="fa-solid fa-angle-down" style="color: black;"></i></span>
                        </div>
                        <ul class="submenu">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>

                        <div class="menu-header" onclick="toggleMenu(this)">
                            <span>Girl Group</span>
                            <span><i class="fa-solid fa-angle-down" style="color: black;"></i></span>
                        </div>
                        <ul class="submenu">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>

                        <div class="menu-header" onclick="toggleMenu(this)">
                            <span>Male Solo</span>
                            <span><i class="fa-solid fa-angle-down" style="color: black;"></i></span>
                        </div>
                        <ul class="submenu">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>

                        <div class="menu-header" onclick="toggleMenu(this)">
                            <span>Female Solo</span>
                            <span><i class="fa-solid fa-angle-down" style="color: black;"></i></span>
                        </div>
                        <ul class="submenu">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>

                    <script>
                        function toggleMenu(header) {
                            // Close all open menus
                            document.querySelectorAll('.menu-header').forEach(h => {
                                if (h !== header) {
                                    h.classList.remove('open');
                                    h.nextElementSibling.style.display = 'none';
                                }
                            });

                            // Toggle the current menu
                            header.classList.toggle('open');
                            const submenu = header.nextElementSibling;
                            if (submenu.style.display === 'block') {
                                submenu.style.display = 'none';
                            } else {
                                submenu.style.display = 'block';
                            }
                        }
                    </script>
            </div>
            <hr>
            <div class="vertical-line"></div>
            <div class="products">
                <div class="product-new-arrival-col1">
                    <div class="container-pc">
                        <div class="product-card">
                            <img src="https://via.placeholder.com/350" alt="ATEEZ Official Light Stick Ver. 2">
                        </div>
                        <h3>ATEEZ Official Light Stick Ver. 2</h3>
                        <p>1,827,680 VNĐ</p>
                    </div>
                    <div class="container-pc">
                        <div class="product-card">
                            <img src="https://via.placeholder.com/350" alt="ATEEZ Official Light Stick Ver. 2">
                        </div>
                        <h3>ATEEZ Official Light Stick Ver. 2</h3>
                        <p>1,827,680 VNĐ</p>
                    </div>
                </div>
                <div class="product-new-arrival-col2">
                    <div class="container-pc">
                        <div class="product-card">
                            <img src="https://via.placeholder.com/350" alt="ATEEZ Official Light Stick Ver. 2">
                        </div>
                        <h3>ATEEZ Official Light Stick Ver. 2</h3>
                        <p>1,827,680 VNĐ</p>
                    </div>
                    <div class="container-pc">
                        <div class="product-card">
                            <img src="https://via.placeholder.com/350" alt="ATEEZ Official Light Stick Ver. 2">
                        </div>
                        <h3>ATEEZ Official Light Stick Ver. 2</h3>
                        <p>1,827,680 VNĐ</p>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="navigation" class="navigation">
            <ul class="pagination mt-50 mb-70">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">21</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
    </div>
    </div>


@stop
