<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class Track extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'device_id',
        'lat',
        'lng'
    ];


    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
