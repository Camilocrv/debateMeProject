<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function Users() {
      return $this->hasMany(User::class);
    }
}
