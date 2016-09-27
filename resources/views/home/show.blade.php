@extends('layouts.app')

<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="title-header" style="background-image: url(/img/job-2-2000x1327-14.jpg);">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-2 text-xs-right">

                    <h1 class="mbr-section-title display-1">Neendut</h1>
                    <p class="mbr-section-lead lead">“Shoot for the moon. Even if you miss, you’ll land among the stars.”&nbsp;<br>- Les Brown</p>
                    <div class="mbr-section-btn">
                      <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#register">Join us today!<br></button>
                      <button class="btn btn-lg btn-warning" data-toggle="modal" data-target="#login">Sign in<br></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#msg-box2-0"><i class="mbr-arrow-icon"></i></a></div>

</section>

@extends('home.modals.register')
@extends('home.modals.login')
