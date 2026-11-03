<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbRegistration extends Model
{
    protected $fillable = [
    'reg_number', 'full_name', 'nisn', 'birth_place', 'birth_date', 'gender', 'address',
    'phone', 'email', 'previous_school', 'major_id', 'parent_name', 'parent_phone',
  ];
  // 'status' dan 'admin_note' sengaja TIDAK dimasukkan: hanya admin yang mengubahnya.

  protected function casts(): array
  {
    return ['birth_date' => 'date'];
  }

  public function major()
  {
    return $this->belongsTo(Major::class);
  }
}
