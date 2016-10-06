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
                  <div class="row">
                      <!--Content-->
                      <div class="col-md-9">
                          <header>
                              <h1 class="page-title">Add a Business</h1>
                              <br>
                              <div>
                                <img src="/img/facebook_connect_vector.png" width="200" style="cursor:pointer" />
                              </div>
                          </header>
                          <form id="form-submit" role="form" method="post" action="?" enctype="multipart/form-data">
                              <section>
                                  <div class="form-group large">
                                      <label for="title">Title</label>
                                      <input type="text" class="form-control" id="title" name="title">
                                  </div>
                              </section>
                              <section>
                                  <h3>Address & Contact</h3>
                                  <div class="row">
                                      <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                              <label for="state">State</label>
                                              <input type="text" class="form-control" id="state" name="state">
                                          </div>
                                      </div>
                                      <!--/.col-md-4-->
                                      <div class="col-md-4 col-sm-4">
                                          <div class="row">
                                              <div class="col-md-8 col-sm-8">
                                                  <div class="form-group">
                                                      <label for="city">City</label>
                                                      <input type="text" class="form-control" id="city" name="city">
                                                  </div>
                                              </div>
                                              <div class="col-md-4 col-sm-4">
                                                  <div class="form-group">
                                                      <label for="zip">ZIP</label>
                                                      <input type="text" class="form-control" id="zip" name="zip" pattern="\d*">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!--/.col-md-4-->
                                      <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                              <label for="street">Street</label>
                                              <input type="text" class="form-control" id="street" name="street">
                                          </div>
                                      </div>
                                      <!--/.col-md-4-->
                                  </div>
                                  <!--/.row-->
                                  <div class="row">
                                      <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                              <label for="phone-number">Phone Number</label>
                                              <input type="text" class="form-control" id="phone-number" name="phone-number" pattern="\d*">
                                          </div>
                                      </div>
                                      <!--/.col-md-4-->
                                      <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                              <label for="email">E-mail</label>
                                              <input type="email" class="form-control" id="email" name="email">
                                          </div>
                                      </div>
                                      <!--/.col-md-4-->
                                      <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                              <label for="website">Website</label>
                                              <input type="text" class="form-control" id="website" name="website">
                                          </div>
                                      </div>
                                      <!--/.col-md-4-->
                                  </div>
                                  <!--/.row-->
                              </section>
                              <!--/#address-contact-->
                              <!-- <section>
                                  <h3>Map</h3>
                                  <div id="map-simple" class="map-submit"></div>
                              </section> -->

                              <!--Gallery-->
                              <section>
                                  <h3>Gallery</h3>
                                  <div id="file-submit" class="dropzone">
                                      <input name="file" type="file" multiple>
                                      <div class="dz-default dz-message"><span>Click or Drop Images Here</span></div>
                                  </div>
                              </section>
                              <!--end Gallery-->
                              <!--Opening Hours-->
                              <section>
                                  <h3>Opening Hours</h3>
                                  <div class="opening-hours">
                                      <div class="table-responsive">
                                          <table class="table">
                                              <tbody>
                                              <tr class="day">
                                                  <td class="day-name">Monday</td>
                                                  <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                                  <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                                  <td class="non-stop"><div class="checkbox">
                                                      <label>
                                                          <input type="checkbox">Non-stop
                                                      </label>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <!--/.day-->
                                              <tr class="day">
                                                  <td class="day-name">Tuesday</td>
                                                  <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                                  <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                                  <td class="non-stop"><div class="checkbox">
                                                      <label>
                                                          <input type="checkbox">Non-stop
                                                      </label>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <!--/.day-->
                                              <tr class="day">
                                                  <td class="day-name">Wednesday</td>
                                                  <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                                  <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                                  <td class="non-stop"><div class="checkbox">
                                                      <label>
                                                          <input type="checkbox">Non-stop
                                                      </label>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <!--/.day-->
                                              <tr class="day">
                                                  <td class="day-name">Thursday</td>
                                                  <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                                  <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                                  <td class="non-stop"><div class="checkbox">
                                                      <label>
                                                          <input type="checkbox">Non-stop
                                                      </label>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <!--/.day-->
                                              <tr class="day">
                                                  <td class="day-name">Friday</td>
                                                  <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                                  <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                                  <td class="non-stop"><div class="checkbox">
                                                      <label>
                                                          <input type="checkbox">Non-stop
                                                      </label>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <!--/.day-->
                                              <tr class="day weekend">
                                                  <td class="day-name">Saturday</td>
                                                  <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                                  <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                                  <td class="non-stop"><div class="checkbox">
                                                      <label>
                                                          <input type="checkbox">Non-stop
                                                      </label>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <!--/.day-->
                                              <tr class="day weekend">
                                                  <td class="day-name">Sunday</td>
                                                  <td class="from"><input class="oh-timepicker" type="text" placeholder="From" name="open-hour-from[]"></td>
                                                  <td class="to"><input class="oh-timepicker" type="text" placeholder="To" name="open-hour-to[]"></td>
                                                  <td class="non-stop"><div class="checkbox">
                                                      <label>
                                                          <input type="checkbox">Non-stop
                                                      </label>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <!--/.day-->
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </section>
                              <!--end Opening Hours-->
                              <hr>
                              <section>
                                  <figure class="pull-left margin-top-15">
                                      <p>By clicking “Submit & Pay” button you agree with <a href="terms-conditions.html" class="link">Terms & Conditions</a></p>
                                  </figure>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-default pull-right" id="submit">Submit & Pay</button>
                                  </div>
                                  <!-- /.form-group -->
                              </section>
                          </form>
                          <!--/#form-submit-->
                      </div>
                      <!--/.col-md-9-->
                      <!--Sidebar-->
                      <div class="col-md-3">
                          <aside id="sidebar">
                              <div class="sidebar-box">
                                  <h3>Payment</h3>
                                  <div class="form-group">
                                      <label for="package">Your Package</label>
                                      <select name="package" id="package" class="framed">
                                          <option value="">Select your package</option>
                                          <option value="1">Free</option>
                                          <option value="2">Silver</option>
                                          <option value="3">Gold</option>
                                          <option value="4">Platinum</option>
                                      </select>
                                  </div>
                                  <!-- /.form-group -->
                                  <h4>This package includes</h4>
                                  <ul class="bullets">
                                      <li>1 Property</li>
                                      <li>1 Agent Profile</li>
                                      <li class="disabled">Agency Profile</li>
                                      <li class="disabled">Featured Properties</li>
                                  </ul>
                              </div>
                          </aside>
                          <!-- /#sidebar-->
                      </div>
                      <!-- /.col-md-3-->
                      <!--end Sidebar-->
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
