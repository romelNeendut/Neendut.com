@extends('layouts.admin')
<div id="outer-wrapper">
    <!-- Inner Wrapper -->
    <div id="inner-wrapper">
        <!-- Navigation-->
        <div class="header">
            <div class="wrapper">
                <div class="brand">
                    <a href="/"><img src="/img/logo.png" alt="logo" height="50"></a>
                </div>
                <nav class="navigation-items">
                    <div class="wrapper">
                        <ul class="main-navigation navigation-top-header"></ul>
                        <ul class="user-area">
                            <li><a href="/profile"><strong>{{Auth::user()->name}} </strong></a></li>
                            <li><a href="/mybusiness">My Items</a></li>
                            <li>
                              <a href="{{ url('/logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>
                              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                            </li>
                            <li class="pop-navigation"><a href="#options" data-toggle="collapse" aria-expanded="false" aria-controls="options"><i class="fa fa-cog"></i></a>
                                <div class="collapse" id="options">
                                    <ul class="">
                                        <li><a href="#">About Me</a></li>
                                        <li><a href="#">My Ads</a></li>
                                        <li><a href="#">Favorites</a></li>
                                        <li><a href="#">Payments</a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">Profile Settings</a></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a href="submit.html" class="submit-item">
                            <div class="content"><span>Submit Your Item</span></div>
                            <div class="icon">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a>
                        <div class="toggle-navigation">
                            <div class="icon">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end Navigation-->


        <!-- Page Canvas-->
        <div id="page-canvas">
            <!--Off Canvas Navigation-->
            <nav class="off-canvas-navigation">
                <header>Navigation</header>
                <div class="main-navigation navigation-off-canvas"></div>
            </nav>
            <!--end Off Canvas Navigation-->

            <!--Sub Header-->
            <section class="sub-header">
                <div class="search-bar horizontal collapse" id="redefine-search-form"></div>
                <!-- /.search-bar -->
                <div class="breadcrumb-wrapper">
                    <div class="container">
                        <div class="redefine-search">
                            <a href="#redefine-search-form" class="inner" data-toggle="collapse" aria-expanded="false" aria-controls="redefine-search-form">
                                <span class="icon"></span>
                                <span>Redefine Search</span>
                            </a>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="index-directory.html"><i class="fa fa-home"></i></a></li>
                            <li><a href="#">Page</a></li>
                            <li class="active">Detail</li>
                        </ol>
                        <!-- /.breadcrumb-->
                    </div>
                    <!-- /.container-->
                </div>
                <!-- /.breadcrumb-wrapper-->
            </section>
            <!--end Sub Header-->

            <!--Page Content-->
            <div id="page-content">
                <section class="container">
                    <header>
                        <ul class="nav nav-pills">
                            <li><a href="profile.html"><h1 class="page-title">John Doe</h1></a></li>
                            <li class="active"><a href="my-items.html"><h1 class="page-title">My Items</h1></a></li>
                        </ul>
                    </header>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <aside id="sidebar">
                                <ul class="navigation-sidebar list-unstyled">
                                    <li class="active">
                                        <a href="#">
                                            <i class="fa fa-folder"></i>
                                            <span>All Items</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check"></i>
                                            <span>Approved</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o"></i>
                                            <span>In Queue</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-eye-slash"></i>
                                            <span>Hidden</span>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <section id="items">
                              <div class="item list">
                                <div class="image">
                                    <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                    <a href="/belle-spa">
                                        <div class="overlay">
                                            <div class="inner">
                                                <div class="content">
                                                    <h4>Description</h4>
                                                    <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-specific">
                                            <span title="Bedrooms"><img src="/img/bedrooms.png" alt="">2</span>
                                            <span title="Bathrooms"><img src="/img/bathrooms.png" alt="">2</span>
                                            <span title="Area"><img src="/img/area.png" alt="">240m<sup>2</sup></span>
                                            <span title="Garages"><img src="/img/garages.png" alt="">1</span>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div>
                                        <img src="/img/items/beauty/beauty.jpg" alt="">
                                    </a>
                                </div>
                                <div class="wrapper">
                                    <a href="/belle-spa"><h3>Belle's Beauty and wellness Spa</h3></a>
                                    <figure>21 St. Makati City</figure>
                                    <div class="info">
                                        <div class="type">
                                            <i><img src="/img/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                            <span>Restaurant</span>
                                        </div>
                                        <div class="rating" data-rating="4"></div>
                                    </div>
                                </div>
                            </div>
                                <!-- /.item-->
                            </section>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->
    </div>
    <!-- end Inner Wrapper -->
</div>
