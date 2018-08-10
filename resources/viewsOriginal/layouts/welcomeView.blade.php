<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <ul>
      @foreach ($posts as $post)
        <li>{{$posts->post}}</li>
      @endforeach
      @foreach ($users as $user)
        <li>{{$user->username}}</li>
      @endforeach
    </ul>
  </body>
</html>
