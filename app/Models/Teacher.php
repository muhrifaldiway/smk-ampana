<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $fillable = ['name', 'nip', 'position', 'subject', 'photo', 'major_id', 'sort_order', 'is_active'];

  protected function casts(): array
  {
    return ['is_active' => 'boolean'];
  }

  public function major()
  {
    return $this->belongsTo(Major::class);
  }

}
