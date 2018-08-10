<ul id="nav-mobile" class="col s3 sidenav sidenav-fixed hide-on-small-and-down" style="transform: translateX(0%); padding:0px; background-color:#00695c;"/>

  @if (Auth::check())
    <div id="logedView" style="display:block; height:100%; background-color:#e0e0e0;">
      @include('body.sidenav.user')
    </div>
  @else
    <div id="accessView" style="display:block; height:100%;">
      @include('body/sidenav/access')
    </div>
  @endif

<script type="text/javascript"></script>
