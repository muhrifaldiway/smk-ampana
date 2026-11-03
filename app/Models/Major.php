<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
  protected $fillable = ['name', 'slug', 'short_name', 'description', 'icon', 'image', 'sort_order', 'is_active'];

protected function casts(): array
{
  return ['is_active' => 'boolean'];
}

}
