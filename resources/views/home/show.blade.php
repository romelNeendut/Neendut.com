@extends('layouts.app')

@include('home.common.menu')

<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="title-header"
style="background-image: url(/img/desktop-2000x1333-93.jpg);">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-2 text-xs-right">

                    <h1 class="mbr-section-title display-1">Neendut</h1>
                    <p class="mbr-section-lead lead">“Shoot for the moon. Even if you miss, you’ll land among the stars.”&nbsp;<br>- Les Brown</p>
                    <div class="mbr-section-btn">
                      @if (Auth::guest())
                      <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#register">Join us today!<br></button>
                      <button class="btn btn-lg btn-warning" data-toggle="modal" data-target="#login">Sign in<br></button>
                      @else
                          <button class="btn btn-lg btn-warning"  onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Logout as {{ Auth::user()->name }}<br></button>
                           <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                               {{ csrf_field() }}
                           </form>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#msg-box2-0"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-info mbr-section mbr-section-md-padding" id="msg-box2-0" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">


    <div class="container">
        <div class="row">

            <div class="mbr-table-md-up">
              <div class="mbr-table-cell col-md-4">
                  <div class="text-xs-center"><a class="btn btn-primary" href="#header3-0">Why Choose us?</a></div>
              </div>
              <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                  <h3 class="mbr-info-title mbr-section-title display-2">Grow your business with us.</h3>
                  <h2 class="mbr-info-subtitle mbr-section-subtitle">Be found by customers and prospects</h2>
                  <h2 class="mbr-info-subtitle mbr-section-subtitle">Get stats on who is visiting your profile</h2>
                  <h2 class="mbr-info-subtitle mbr-section-subtitle">Promote and drive traffic to your business</h2>
                  <h2 class="mbr-info-subtitle mbr-section-subtitle">Make business connections</h2>
                  <h2 class="mbr-info-subtitle mbr-section-subtitle">We help you find your profitable peice of the pie.</h2>
              </div>
            </div>



        </div>
    </div>
</section>


@include('home.common.gallery')
@include('home.common.steps')
@include('home.common.pricing')


@include('home.modals.register')
@include('home.modals.login')
