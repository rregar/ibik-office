<?php

namespace App\Models\Modules\Masters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'user_details';
    protected $fillable = [
        'user_id',
        'npm',
        'brith_date',
        'gender',
        'phone_number',
        'profile_picture',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
