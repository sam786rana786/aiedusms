<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function academicYears()
    {
        return $this->hasMany(AcademicYear::class, 'school_id', 'id');
    }
}
