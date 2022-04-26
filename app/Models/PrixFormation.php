<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrixFormation extends Model
{
    use HasFactory;
    protected $table = 'prix_formations';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];

    public function typeCandidat(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TypeCandidat::class);
    }

    public function moduleFormation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ModuleFormation::class);
    }

    public function modePaiement(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ModePaiement::class);
    }
}
