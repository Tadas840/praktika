<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cattle extends Model
{
    const CATTLE_TYPE_1 = 'Jautis';
    const CATTLE_TYPE_2 = 'Jautukas';
    const CATTLE_TYPE_3 = 'Telycaite';
    use HasFactory;
    public $timestamps=false;
    
}
