<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'location', 'price'];

    public function destinations()
    {
        return $this->hasMany('Destinations');
    }
}
