<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Instructor extends Model
{
    public function students(): BelongsToMany {
        return $this->belongsToMany(Student::class);
    }
}
