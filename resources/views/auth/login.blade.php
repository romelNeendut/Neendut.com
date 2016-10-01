@extends('layouts.app')

@section('content')

<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id="header2-0" style="background-image: url(/img/landscape.jpg);">
    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
    </div>
    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">
            <div class="container">
                <div class="mbr-section row">
                    <div class="mbr-table-md-up">
                        <div class="mbr-table-cell mbr-left-padding-md-up col-md-6 text-xs-center text-md-left">
                          <h4 class="mbr-section-title mbr-left display-3">Login</h4>
                          <div class="mbr-section-text lead">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                                  {{ csrf_field() }}

                                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                      <div class="col-md-6">
                                                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                          @if ($errors->has('email'))
                                                              <span class="help-block">
                                                                  <strong>{{ $errors->first('email') }}</strong>
                                                              </span>
                                                          @endif
                                                      </div>
                                                  </div>

                                                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                      <label for="password" class="col-md-4 control-label">Password</label>

                                                      <div class="col-md-6">
                                                          <input id="password" type="password" class="form-control" name="password" required>

                                                          @if ($errors->has('password'))
                                                              <span class="help-block">
                                                                  <strong>{{ $errors->first('password') }}</strong>
                                                              </span>
                                                          @endif
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-md-6 col-md-offset-4">
                                                          <div class="checkbox">
                                                              <label>
                                                                  <input type="checkbox" name="remember"> Remember Me
                                                              </label>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-md-8 col-md-offset-4">
                                                          <button type="submit" class="btn btn-primary">
                                                              Login
                                                          </button>

                                                          <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                              Forgot Your Password?
                                                          </a>

                                                          <a href="redirect">FB Login</a>
                                                      </div>
                                                  </div>
                                              </form>
                          </div>
                        </div>
                        <div class="mbr-table-cell mbr-valign-top col-md-6">
                            <div class="mbr-figure">
                              <img src="/img/coworkers.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#next"><i class="mbr-arrow-icon"></i></a></div>
</section>

@endsection
