<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilaiPeserta extends Model
{
    protected $table = 'nilaipeserta';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nopeserta',
        'nilaiteori',
        'nilaipraktek',
        ];
    protected $timestamps = false;
}
