<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cattle extends Model
{
    const CATTLE_TYPE_1 = 'Karve';
    const CATTLE_TYPE_2 = 'Buliukas';
    const CATTLE_TYPE_3 = 'Telycaite';
    const CATTLE_V_Y = 'Taip';
    const CATTLE_V_N = 'Ne';
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'GalvijoNr',
        'MotinosNr',
        'Tipas',
        'GimimoData',
        'Amzius',
        'Veisl',
        'PM',
        'Versing',
        'VersData',
        'SeklData',
        'LastVers',
        'AtsivestVers',
    ];

}
