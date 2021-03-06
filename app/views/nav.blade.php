<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

<div class="container">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{URL::to('/')}}">StoreName</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li><a href="#">{{Auth::user()->firstname}}</a></li>
                <li>{{link_to('/signout','Sign Out')}}</li>
                @if(Auth::user()->admin == 1)
                    <li>{{link_to('/admin/products', 'Manage Products')}}</li>
                @endif
            @else
                <li>{{link_to('/signin','Sign In')}}</li>
                <li>{{link_to('/signup','Sign Up')}}</li>
            @endif
            <li>
                <a href="{{URL::to('/cart')}}" class="btn btn-default btn-default" role="button">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <span class="badge">{{Cart::totalItems()}}</span>
                </a>
            </li>
        </ul>
    </div>

</div>

</nav>
