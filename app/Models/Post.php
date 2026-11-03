<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = ['type', 'title', 'slug', 'excerpt', 'body', 'thumbnail', 'status', 'published_at', 'user_id'];

  protected function casts(): array
  {
    return ['published_at' => 'datetime'];
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
