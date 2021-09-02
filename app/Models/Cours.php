<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Cours extends Model
{
    use HasFactory;
    protected $fillable=[
        'id Specialites',
        'id Modules',
        'nom coure',
        'masse horaire',
        'type',
        'date',
    ];  
    
        function Spécialités() {
    return $this->hasMany(Spécialité::class);
    }
    function Modules() {
        return $this->hasMany(Module::class);
    }
    function salle() {
        return $this->belongsTo(Salle::class);
}
}
function rechercher($p,$m,$dd,$df,$c) {
    $result=DB::table('Cours');
    if ($p!="") 
    $result=$result->where('id_Specialites','=',$p);
    if ($m!="") 
    $result=$result->where('id_Modules','=',$m);
    if ($dd!="") 
    $result=$result->where('nom_cour','=',$dd);
    if ($df!="") 
    $result=$result->where('masse_horaire','=',$df);
    if($c!="")
    $result=$result->where('type','=',$c);
    return $result->get();
}