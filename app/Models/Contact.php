<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'github_profile'
    ];

    protected $visible = [
        'user_id',
        'name',
        'email',
        'phone',
        'github_profile'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
