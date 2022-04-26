<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleFormation extends Model
{
    use HasFactory;
    protected $table = 'module_formations';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
