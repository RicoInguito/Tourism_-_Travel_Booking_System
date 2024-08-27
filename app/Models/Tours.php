<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'destination_id'];
}
