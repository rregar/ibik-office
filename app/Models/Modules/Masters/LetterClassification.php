<?php

namespace App\Models\Modules\Masters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterClassification extends Model
{
    use HasFactory;
    protected $table = 'letter_classifications';
    protected $fillable = [
        'name',
    ];
}
