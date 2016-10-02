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
                            <li><a href="/admin"><i class="fa fa-home"></i></a></li>
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
                            <li class="active"><a href="/profile"><h1 class="page-title">Belle Yap</h1></a></li>
                            <li><a href="/mybusiness"><h1 class="page-title">My Items</h1></a></li>
                        </ul>
                    </header>
                    <div class="row">
                        <div class="col-md-9">
                            <form id="form-profile" role="form" method="post" action="?" enctype="multipart/form-data">
                                <div class="row">
                                    <!--Profile Picture-->
                                    <div class="col-md-3 col-sm-3">
                                        <section>
                                            <h3><i class="fa fa-image"></i>Profile Picture</h3>
                                            <div id="profile-picture" class="profile-picture dropzone">
                                                <input name="file" type="file">
                                                <div class="dz-default dz-message"><span>Click or drop picture here</span></div>
                                                <img src="/img/belle.jpg" alt="">
                                            </div>
                                        </section>
                                    </div>
                                    <!--/.col-md-3-->

                                    <!--Contact Info-->
                                    <div class="col-md-9 col-sm-9">
                                        <section>
                                            <h3><i class="fa fa-user"></i>Personal Info</h3>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="Belle Yap">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" value="belle@example.com">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="mobile">Mobile</label>
                                                        <input type="text" class="form-control" id="mobile" name="mobile" pattern="\d*" value="903-675-5323">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" id="phone" name="phone" pattern="\d*" value="(0)123 456 7890">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                            </div>
                                        </section>
                                        <section>
                                            <h3><i class="fa fa-map-marker"></i>Address</h3>
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" class="form-control" id="state" name="state" value="Ohio">
                                            </div>
                                            <!--/.form-group-->
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city" value="Georgetown">
                                            </div>
                                            <!--/.form-group-->
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="form-group">
                                                        <label for="street">Street</label>
                                                        <input type="text" class="form-control" id="street" name="street" value="2050 Sampson Street">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-8-->
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="zip">ZIP</label>
                                                        <input type="text" class="form-control" id="zip" name="zip" pattern="\d*" value="80444">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                            </div>
                                            <!--/.col-md-3-->
                                            <div class="form-group">
                                                <label for="additional-address">Additional Address Line</label>
                                                <input type="text" class="form-control" id="additional-address" name="additional-address">
                                            </div>
                                            <!--/.form-group-->
                                        </section>
                                        <section>
                                            <h3><i class="fa fa-info-circle"></i>About Me</h3>
                                            <div class="form-group">
                                                <label for="about-me">Some Words About Me</label>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="about-me" rows="3" name="about-me" required></textarea>
                                                </div>
                                                <!--/.form-group-->
                                            </div>
                                            <!--/.form-group-->
                                        </section>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-large btn-default" id="submit">Save Changes</button>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!--/.col-md-6-->
                                </div>
                            </form>
                        </div>
                        <!--Password-->
                        <div class="col-md-3 col-sm-9">
                            <h3><i class="fa fa-asterisk"></i>Password Change</h3>
                            <form class="framed" id="form-password" role="form" method="post" action="?" >
                                <div class="form-group">
                                    <label for="current-password">Current Password</label>
                                    <input type="password" class="form-control" id="current-password" name="current-password">
                                </div>
                                <!--/.form-group-->
                                <div class="form-group">
                                    <label for="new-password">New Password</label>
                                    <input type="password" class="form-control" id="new-password" name="new-password">
                                </div>
                                <!--/.form-group-->
                                <div class="form-group">
                                    <label for="confirm-new-password">Confirm New Password</label>
                                    <input type="password" class="form-control" id="confirm-new-password" name="confirm-new-password">
                                </div>
                                <!--/.form-group-->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Change Password</button>
                                </div>
                                <!-- /.form-group -->
                            </form>
                        </div>
                        <!-- /.col-md-3-->
                    </div>
                </section>
            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->
    </div>
    <!-- end Inner Wrapper -->
</div>
