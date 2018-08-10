<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="styles/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/genericStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <title>DebateMe</title>
</head>

<body>
<!-- HEADER-->
<div class="row">
  @include('body/header')
  @include('body/sidenav/sidebarLogged')
</div>
<!-- MAIN -->
<div class="row">
  <div class="container col s12 m12 offset-l3 l7 offset-xl3 xl7" style="min-height:100vh; margin-top:40px;">
    @include('body/main')
  </div>
  <div class="col hide-on-med-and-down offset-m10 m2 " style="margin-left:0px; margin-top:20px;">
    <ul class="section table-of-contents">
      <li><a href="#introduction">Introduction</a></li>
      <li><a href="#structure">Structure</a></li>
      <li><a href="#initialization">Intialization</a></li>
    </ul>
  </div>
</div>
<!-- FOOTER -->
  <div class="row" style="margin-bottom:0px;">
    @include('body/footer')
  </div>
<!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="./js/materialize.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/init.js') }}"></script>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
    });

    $(document).ready(function() {
      $('.sidenav').sidenav();
    });

    $(document).ready(function(){
      $('.datepicker').datepicker();
    });

  </script>
</body>

</html>
