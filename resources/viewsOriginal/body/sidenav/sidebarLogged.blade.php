<ul id="nav-mobile" class="col s3 sidenav sidenav-fixed hide-on-small-and-down" style="transform: translateX(0%); padding:0px; background-color:white;"/>

  @if (Auth::check())
    <div id="logedView" style="display:block; height:100%; background-color:#e0e0e0;">
      @include('body.sidenav.user')
    </div>
  @else
    @include('auth.login')
  @endif

<script type="text/javascript"></script>
