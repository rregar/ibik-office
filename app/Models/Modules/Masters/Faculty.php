<?php

namespace App\Models\Modules\Masters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $table = 'faculties';
    protected $fillable = [
        'name',
    ];
}
