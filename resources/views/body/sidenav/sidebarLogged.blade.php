<ul id="nav-mobile" class="col s3 sidenav sidenav-fixed hide-on-small-and-down" style="transform: translateX(0%); padding:0px; background-color:white;"/>

    <div id="logedView" style="display:block; height:100%; background-color:#e0e0e0;">
      @if (Auth::check())
        @include('body.sidenav.user')
      @else
        @include('body.sidenav.access')
      @endif
    </div>

<script type="text/javascript"></script>
