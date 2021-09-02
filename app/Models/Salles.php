<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Salles extends Model
{
    use HasFactory;


    protected $fillable=[

'id_Salles',
'id_Cours',
'masse_horaire',
'type',
'date',
];
function Salles() {
    return $this->belongsTo(Srofesseur::class);
    }
    function Cours() {
        return $this->belongsTo(Cours::class);
    }
}

 function rechercher($p,$m,$dd,$df,$c,$a,$f,$h) {
    $result=DB::table('id_Salles');
    if ($p!="") 
    $result=$result->where('id_Cours','=',$p);
    if ($m!="") 
    $result=$result->where('nom_cours','=',$m);
    if ($dd!="") 
    $result=$result->where('masse_horaire','=',$dd);
    if ($df!="") 
    $result=$result->where('type','=',$df);
    if($c!="")
    $result=$result->where('date','=',$c);
    return $result->get();
 }
