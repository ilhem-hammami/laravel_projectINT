<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Modules extends Model
{
    use HasFactory;
    protected $fillable=[
   'id_Modules',
   'id_Specialites',
    'niveau',
    'cof',
    'semest',
    'cours',

    ];
function Module() {
    return $this->belongsTo(Module::class);
    }
    function Spécialité() {
        return $this->belongsTo(Spécialité::class);
    }
    function cours() {
        return $this->hasMany(cours::class);

}
}
 function rechercher($p,$m,$dd,$df,$c) {
    $result=DB::table('Modules');
    if ($p!="") 
    $result=$result->where('id_Modules','=',$p);
    if ($m!="") 
    $result=$result->where('id_Specialites','=',$m);
    if ($dd!="") 
    $result=$result->where('niveau','=',$dd);
    if ($df!="") 
    $result=$result->where('semst','=',$df);
    if($c!="")
    $result=$result->where('cours','=',$c);
    return $result->get();
}