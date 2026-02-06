<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'event_time',
    ];

    /**
     * Acara yang belum lewat (query)
     */
    public static function upcoming()
    {
        return self::where('event_time', '>=', Carbon::now())
                    ->orderBy('event_time', 'asc');
    }

    /**
     * Hitung acara aktif (untuk badge)
     */
    public static function activeCount()
    {
        return self::where('event_time', '>=', Carbon::now())->count();
    }
}
