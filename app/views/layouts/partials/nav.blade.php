

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
      
      {{ link_to_route('home', 'KÄÄNNÖSPROTO', null, ['class' => 'navbar-brand']) }}
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        
        @if (Auth::check())

          <li>{{ link_to_route('translation_create', 'Lähetä käännös') }}</li>
          <li>{{ link_to_route('translation_index', 'Näytä käännökset') }}</li> 
      
        @endif


      </ul>
      
      <ul class="nav navbar-nav navbar-right">
  
        @if (Auth::check())

          <li class="dropdown">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img class="nav-gravatar" src="//www.gravatar.com/avatar/{{-- $currentUser->email --}}?s=30" alt="{{-- $currentUser->username --}}" />

              {{ Auth::user()->username }}<span class="caret"></span>
            
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>{{ link_to_route('profile_path', 'Profiili') }}</li>
              <li class="divider"></li>
              <li>{{ link_to_route('logout_path', 'Kirjaudu ulos') }}</li>
            </ul>
          </li>
  
        @else

          <li>{{ link_to_route('register_path', 'Luo käyttäjätunnus') }}</li>

          <li>{{ link_to_route('login_path', 'Kirjaudu sisään') }}</li>

        @endif 

      </ul>












    </div><!-- /.navbar-collapse -->





  </div><!-- /.container-fluid -->
</nav>

