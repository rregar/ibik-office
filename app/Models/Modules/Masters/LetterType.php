<?php

namespace App\Models\Modules\Masters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterType extends Model
{
    use HasFactory;
    protected $table = 'letter_types';
    protected $fillable = [
        'name',
    ];
}
