<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Spécialité extends Model
{
    use HasFactory;
    protected $fillable=[

'id_Specialites',
'nom_specialite',
'date_pub_jort',
'nbr_inscrit',
'type',
'charge_hedo_tolale',
'charge_hedo_teorie',
'charge_hedo_pratique',
'annee',
'niveau',

];
function Specialite() {
    return $this->belongsTo(Specialite::class);
    }
    function Modules() {
        return $this->hasMany(Module::class);
    }
    function Cours() {
        return $this->hasMany(Cour::class);
 }
    function Professeurs() {
        return $this->hasMany(Professeur::class);
         return $this->hasMany(Cour::class);

}
}
 function rechercher($p,$m,$dd,$df,$c,$a,$f,$h,$k) {
    $result=DB::table('id_Specialites');
    if ($p!="") 
    $result=$result->where('nom_specialite','=',$p);
    if ($m!="") 
    $result=$result->where('date_pub_jort','=',$m);
    if ($dd!="") 
    $result=$result->where('nomnbr_inscrit','=',$dd);
    if ($df!="") 
    $result=$result->where('type','=',$df);
    if($c!="")
    $result=$result->where('charge_hebdo_totale','=',$c);
      if($a!="")
    $result=$result->where('charge_hebdo_theorie','=',$a);
      if($f!="")
    $result=$result->where('charge_hebdo_pratique','=',$f);
      if($h!="")
    $result=$result->where('annee','=',$h);
    if($k!="")
    $result=$result->where('niveau','=',$h);
    return $result->get();
    
}
