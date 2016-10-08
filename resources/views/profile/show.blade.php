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
                <section class="container" id="profile-page">
                    <header>
                        <ul class="nav nav-pills">
                            <li class="active"><a href="/profile/1"><h1 class="page-title">{{Auth::user()->name}}</h1></a></li>
                            <li><a href="/mybusiness"><h1 class="page-title">My Businesses</h1></a></li>
                        </ul>
                    </header>
                    <div class="row">
                        <div class="col-md-9">
                              {!! Form::open(['url' => 'profile/update', 'id' => 'profile_form']) !!}

                              <input type="hidden" id="profile_id" value="{{$profile->id}}">
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
                                            <h3><i class="fa fa-user"></i> Personal Info </h3>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" readonly="true">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly="true">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="mobile">Mobile</label>
                                                        <input type="text" class="form-control" id="mobile" name="mobile" pattern="\d*" value="{{$profile->mobile}}" readonly="true">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" id="phone" name="phone" pattern="\d*" value="{{$profile->phone}}" readonly="true">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-3-->
                                            </div>
                                        </section>
                                        <section>
                                            <h3><i class="fa fa-map-marker"></i>Address</h3>
                                            <div class="form-group">
                                                <label for="state">State / Municipality</label>
                                                <input type="text" class="form-control" id="state" name="state" value="{{$profile->state}}" readonly="true">
                                            </div>
                                            <!--/.form-group-->
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city" value="{{$profile->city}}" readonly="true">
                                            </div>
                                            <!--/.form-group-->
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="form-group">
                                                        <label for="street">Street</label>
                                                        <input type="text" class="form-control" id="street" name="street" value="{{$profile->street}}" readonly="true">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                                <!--/.col-md-8-->
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="zip">ZIP</label>
                                                        <input type="text" class="form-control" id="zip" name="zip" pattern="\d*" value="{{$profile->zip}}" readonly="true">
                                                    </div>
                                                    <!--/.form-group-->
                                                </div>
                                            </div>
                                        </section>
                                        <section>
                                            <h3><i class="fa fa-info-circle"></i>About Me</h3>
                                            <div class="form-group">
                                                <label for="about-me">Some Words About Me</label>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="about_me" rows="3" name="about_me" required  readonly="true">{{$profile->about_me}}</textarea>
                                                </div>
                                                <!--/.form-group-->
                                            </div>
                                            <!--/.form-group-->
                                        </section>
                                        <!-- <div class="form-group">
                                            <button type="button" class="btn btn-large btn-default" id="submit_profile_form">Save Changes</button>
                                        </div> -->
                                        <!-- /.form-group -->
                                    </div>
                                    <!--/.col-md-6-->
                                </div>
                                {!! Form::close() !!}
                        </div>
                        <!--Password-->
                        <div class="col-md-3 col-sm-9">
                            <h3><i class="fa fa-asterisk"></i>Manage Account</h3>
                            <form class="framed" id="form-password" role="form" method="post" action="?" >
                                <!--/.form-group-->
                                <div class="form-group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#update-profile"><i class="fa fa-pencil-square-o"></i> Update Personal Info</button>
                                </div>
                                <!-- /.form-group -->
                                <!--/.form-group-->
                                <div class="form-group">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#register"><i class="fa fa-pencil-square-o"></i> Change Password</button>
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


@include('profile.modals.update-profile')

@stop
