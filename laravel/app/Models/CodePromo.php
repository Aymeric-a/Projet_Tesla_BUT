<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodePromo extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'montant'
    ];

    public function accessoires(){
        return $this->hasMany(Accessoire::class);
    }
}
