<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    use HasFactory;
    public function barangdb()
    {
        return $this->hasMany(barangdb::class);
    }
}
