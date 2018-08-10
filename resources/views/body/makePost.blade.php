<div class="row" style="padding:10px; margin-top:10px;">
  <div class="content-box col s12" style="padding:20px; margin-top:40px; background: #f2f2f2; border-radius:10px;">
    <div class="i_title" style="text-align:center; margin: -57px 0 0 0;">
      <img class="responsive-img circle" src="images/profile_picture.jpg" style="width:60px; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2);">
    </div>
    <form class="col s12" method="POST" action="{{ route('makePost') }}">
       @csrf
       <input type="hidden" name="_token" value="{{ Session::token() }}">
      <div class="row" style="border-radius:5px;">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="posteo"></textarea>
          <label for="textarea1">Postear</label>
        </div>
        <button class="col s2 btn waves-effect #4db6ac teal lighten-2" type="submit" name="action" style="margin-bottom:20px; margin-left:10px;">Send
          <i class="material-icons"></i>
        </button>
      </div>
    </form>
  </div>
</div>
