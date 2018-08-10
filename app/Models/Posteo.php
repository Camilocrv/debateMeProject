<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    public function Users() {
      return $this->hasOne(User::class);
    }
}
