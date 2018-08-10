@extends('body/generic')

@section('content')
  <main>

  <div class="row" style="margin-bottom:0px; position:relative;">
    <div class="col s12 parallax-container" style="height:400px;">
      <div class="parallax"><img src="{{ URL::asset('images/pexels-photo-1278541.jpeg') }}"></div>
      <img src="{{ URL::asset('images/profile_picture.jpg') }}" class="responsive-img circle right" style="padding:10px; width:7em; position:absolute; right:10px; bottom:10px;">
        <span class="tooltiptext">{{-- Auth::user()->name --}}</span>
      </img>
    </div>


    <div class="col s2" style="margin-top:30px;">
      <div class="card-panel teal">
        <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
        </span>
      </div>
    </div>
  <div class="col s12 m8">
    @include('body/main')
  </div>


  </div>
</main>
    @include('body/footer');
  <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);
  });
  </script>
@endsection
