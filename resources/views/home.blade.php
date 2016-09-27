
<div class="panel-heading">Dashboard</div>

    {{Auth::user()->name}} You are logged in!
    <br>
    <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>

    <a href="www.google.com">test</a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

</div>
