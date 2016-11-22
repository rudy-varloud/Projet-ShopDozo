<?php

namespace App\metier;
use Illuminate\Database\Eloquent\Model;
use DB;

class Scenariste extends Model{
    protected $table = 'visiteur';
    public $timestamps = false;
    protected $fillable = [
        'id_scenariste',
         'nom_scenariste',
        'prenom_scenariste',
    ];
    
    public function __construct(){
        $this->id_scenariste= 0;
    }
    public function getIScenariste(){
        return $this->getKey();
    }
    
    public function getListeScenaristes(){
        $query = DB::table('scenariste')->get();
        return $query;
    }
    
    public function getScenariste($id){
        $query = DB::table('scenariste')
                ->Select()
                ->where('scenariste.id_scenariste', '=', $id)
                ->first();
        return $query;
    }
}
