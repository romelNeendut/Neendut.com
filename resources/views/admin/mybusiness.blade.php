@extends('layouts.spotter')

@section('content')
<div id="outer-wrapper">
    <!-- Inner Wrapper -->
    <div id="inner-wrapper">


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
                            <li class="active"><a href="/profile/1"><h1 class="page-title">{{Auth::user()->name}}</h1></a></li>
                            <li class="active"><a href="my-items.html"><h1 class="page-title">My Businesses</h1></a></li>
                        </ul>
                    </header>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <aside id="sidebar">
                                <ul class="navigation-sidebar list-unstyled">
                                    <li class="active">
                                        <a href="#">
                                            <i class="fa fa-folder"></i>
                                            <span>All Businesses</span>
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
                                    <a href="/sites/belle-spa">
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

@stop
