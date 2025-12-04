<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructureMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'division',   // contoh: 'Pimpinan', 'Sekretaris', dst
        'name',
        'photo'
    ];
}
