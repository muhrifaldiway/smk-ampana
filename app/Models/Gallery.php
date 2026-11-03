<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $fillable = ['title', 'caption', 'image', 'sort_order', 'is_active'];

  protected function casts(): array
  {
    return ['is_active' => 'boolean'];
  }
}
