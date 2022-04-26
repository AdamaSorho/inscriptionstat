<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class
Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscriptions';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];

    public function typeCandidat(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TypeCandidat::class);
    }

    public function prixFormation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PrixFormation::class);
    }

    public function formation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }

    public function moduleFormation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ModuleFormation::class);
    }

    public function paiement()
    {
        return $this->belongsTo(Paiement::class,  'code_paiement');
    }
}
