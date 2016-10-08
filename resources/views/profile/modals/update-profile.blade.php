<div class="modal inmodal fade " id="update-profile" role="dialog" >
    <div class="modal-dialog modal-md">
        <div class="modal-content" style="height:400px; overflow-y: scroll">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{ _('Update Personal Info') }} </h4>
            </div>
            <div class="modal-body">
                  <div class="panel-body">
                    {!! Form::open(['url' => 'profile/update', 'id' => 'profile_form']) !!}

                      <div class="row">

                          <!--Contact Info-->
                          <div class="col-md-9 col-sm-9">
                              <section>
                                  <h3><i class="fa fa-user"></i> Personal Info </h3>
                                  <div class="row">
                                      <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                              <label for="name">Name</label>
                                              <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" >
                                          </div>
                                          <!--/.form-group-->
                                      </div>
                                      <!--/.col-md-3-->
                                      <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                              <label for="email">Email</label>
                                              <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" >
                                          </div>
                                          <!--/.form-group-->
                                      </div>
                                      <!--/.col-md-3-->
                                      <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                              <label for="mobile">Mobile</label>
                                              <input type="text" class="form-control" id="mobile" name="mobile" pattern="\d*" value="{{$profile->mobile}}" >
                                          </div>
                                          <!--/.form-group-->
                                      </div>
                                      <!--/.col-md-3-->
                                      <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                              <label for="phone">Phone</label>
                                              <input type="text" class="form-control" id="phone" name="phone" pattern="\d*" value="{{$profile->phone}}" >
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
                                      <input type="text" class="form-control" id="state" name="state" value="{{$profile->state}}" >
                                  </div>
                                  <!--/.form-group-->
                                  <div class="form-group">
                                      <label for="city">City</label>
                                      <input type="text" class="form-control" id="city" name="city" value="{{$profile->city}}" >
                                  </div>
                                  <!--/.form-group-->
                                  <div class="row">
                                      <div class="col-md-8 col-sm-8">
                                          <div class="form-group">
                                              <label for="street">Street</label>
                                              <input type="text" class="form-control" id="street" name="street" value="{{$profile->street}}" >
                                          </div>
                                          <!--/.form-group-->
                                      </div>
                                      <!--/.col-md-8-->
                                      <div class="col-md-4 col-sm-4">
                                          <div class="form-group">
                                              <label for="zip">ZIP</label>
                                              <input type="text" class="form-control" id="zip" name="zip" pattern="\d*" value="{{$profile->zip}}" >
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
                                          <textarea class="form-control" id="about_me" rows="3" name="about_me" required  >{{$profile->about_me}}</textarea>
                                      </div>
                                      <!--/.form-group-->
                                  </div>
                                  <!--/.form-group-->
                              </section>
                              <div class="form-group">
                                  <button type="button" class="btn btn-large btn-default" id="submit_profile_form">Save Changes</button>
                              </div>
                              <!-- /.form-group -->
                          </div>
                          <!--/.col-md-6-->
                      </div>
                      {!! Form::close() !!}
                  </div>
            </div>
        </div>
    </div>
</div>
