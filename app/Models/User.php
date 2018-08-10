<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $fillable = ['name', 'username', 'email', 'password'];

    public function Achievements() {
      return $this->hasMany(Achievement::class);
    }
    public function Follows() {
      return $this->hasMany(User::class, "follow", "user_id_1", "user_id_2");
    }
    public function Friends() {
      return $this->belongsToMany(User::class, "friend", "user_id_1", "user_id_2");
    }
    public function Levels() {
      return $this->hasOne(Level::class);
    }
    public function Posts() {
      return $this->hasMany(Post::class);
    }
}
