<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'price',
        'user_id',
    ];

    protected $attributes = [
        'enabled' => true,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $dates = [
        'started_at',
        'ended_at',
    ];
}
