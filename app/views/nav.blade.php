<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{URL::to('/')}}">NotWoot</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

        <!--<li class="active"><a href="#">Home</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>-->
        </ul>

        <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
            <li><a href="#">{{Auth::user()->firstname}}</a></li>
            <li>{{link_to('/users/signout','sign out')}}</li>
        @else
            <li>{{link_to('/users/signin','sign in')}}</li>
            <li>{{link_to('/users/signup','sign up')}}</li>
        @endif
        <!--
        <li><button type="button" class="btn btn-default navbar-btn">Sign in</button></li>
        -->
        <li>
        <button type="button" class="btn btn-default navbar-btn">
            <span class="glyphicon glyphicon-shopping-cart"></span>
            <span class="badge">0</span>
        </button>
        </li>
        </ul>

    </div>
    </div>
</nav>
