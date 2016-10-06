

<!-- Navigation-->
<div class="header">
    <div class="wrapper">
        <div class="brand">
            <a href="/newsfeed"><img src="/img/logo.png" alt="logo" height="50"></a>
        </div>
        <nav class="navigation-items">
            <div class="wrapper">
                <ul class="main-navigation navigation-top-header"></ul>
                <ul class="user-area">
                    <li><a href="/profile/1"><strong>{{Auth::user()->name}} </strong></a></li>
                    <li><a href="/mybusiness">My Businesses</a></li>
                    <li>
                      <a href="#"
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
                <a href="/submit" class="submit-item">
                    <div class="content"><span>Add a Business</span></div>
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
