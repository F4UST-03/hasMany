<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    public function instructors(): BelongsToMany {
        return $this->belongsToMany(Instructor::class);
    }
}
