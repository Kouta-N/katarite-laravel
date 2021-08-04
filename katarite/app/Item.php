<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = [
        'title',
        'img_path',
        'body',
        'price',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}