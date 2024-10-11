<?php

namespace App\Models\Modules\Inbox;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;
    protected $table = 'inboxes';
    protected $fillable = [
        'prodi_id',
        'unit_id',
        'letter_type_id',
        'letter_classification_id',
        'faculty_id',
        'type',
        'name',
        'phone_number',
        'email',
        'address',
        'date',
        'number',
        'attachment',
        'subject',
        'file',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
    
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function letterType()
    {
        return $this->belongsTo(LetterType::class, 'letter_type_id');
    }

    public function letterClassification()
    {
        return $this->belongsTo(LetterClassification::class, 'letter_classification_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
