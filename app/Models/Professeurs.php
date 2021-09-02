<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Professeurs extends Model
{
    use HasFactory;
protected $fillable=[

'id_Professeurs',
'id_Spécialités',
'nom_prof',
'prénom_prof',
'CIN_prof',
'diplome',
'adresse',
'num_tél',

];
function Professeur() {
    return $this->belongsTo(Professeur::class);
    }
    function Spécialité() {
        return $this->belongsTo(Specialite::class);
    }
    function Modules() {
        return $this->belongsTo(Module::class);

}
}
 function rechercher($p,$m,$dd,$df,$c,$a,$f,$h) {
    $result=DB::table('id_Professeurs');
    if ($p!="") 
    $result=$result->where('id_Specialites','=',$p);
    if ($m!="") 
    $result=$result->where('id_Modules','=',$m);
    if ($dd!="") 
    $result=$result->where('nom_prof','=',$dd);
    if ($df!="") 
    $result=$result->where('prenom_prof','=',$df);
    if($c!="")
    $result=$result->where('CIN_prof','=',$c);
      if($a!="")
    $result=$result->where('diplome','=',$a);
      if($f!="")
    $result=$result->where('adresse','=',$f);
      if($h!="")
    $result=$result->where('num_tel','=',$h);
    return $result->get();
}


