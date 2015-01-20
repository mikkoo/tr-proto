

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tarjousdemo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">
  
        @if (true)

        {{--@if ($currentUser)--}}

          <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img class="nav-gravatar" src="//www.gravatar.com/avatar/{{-- $currentUser->email --}}?s=30" alt="{{-- $currentUser->username --}}" />

              {{-- $currentUser->username --}}  Username<span class="caret"></span>
            
            </a>

            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings</a></li>
              <li><a href="#">Preferences</a></li>
              <li class="divider"></li>
              <li>{{-- link_to_route('logout_path', 'Log Out') --}}</li>
            </ul>
          </li>
  
        @else

          <li>{{-- link_to_route('register_path', 'Register') --}}</li>

          <li>{{-- link_to_route('login_path', 'Log In') --}}</li>

        @endif 

      </ul>












    </div><!-- /.navbar-collapse -->





  </div><!-- /.container-fluid -->
</nav>

