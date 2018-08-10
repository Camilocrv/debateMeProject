@extends('body/generic')

@section('content')
  <main>

  <div class="row" style="margin-bottom:0px; position:relative;">
    <div class="col s12 parallax-container" style="height:400px;">
      <div class="parallax"><img src="{{ URL::asset('images/pexels-photo-1278541.jpeg') }}"></div>
      <img src="{{ URL::asset('images/profile_picture.jpg') }}" class="responsive-img circle right" style="padding:10px; width:7em; position:absolute; right:10px; bottom:10px;">
    </div>

    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s4 card">HOLAA</div>
            </div>
          </div>
        </div>
      </div>
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
