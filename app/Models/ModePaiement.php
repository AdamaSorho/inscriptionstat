<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModePaiement extends Model
{
    use HasFactory;
    protected $table = 'mode_paiements';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
}
