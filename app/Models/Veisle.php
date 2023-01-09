<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veisle extends Model
{
    use HasFactory;
    protected $table = "veisle";
    protected $fillable = [
        
        'veislname',
];
 
}
