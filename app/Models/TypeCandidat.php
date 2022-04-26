<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCandidat extends Model
{
    use HasFactory;
    protected $table = 'type_candidats';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
}
