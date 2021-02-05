<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {
    // Desnecessário pois é por padrão nome da classe minusculo no plural
    // protected $table = 'series';
    public $timestamps = false;
    protected $fillable = ['name'];
}