<?php

namespace App\metier;
use Illuminate\Database\Eloquent\Model;
use DB;

class Dessinateur extends Model{
    protected $table = 'dessinateur';
    protected $primaryKey = 'id_dessinateur';
    public $timestamps = false;
    protected $fillable = [
         'id_dessinateur',
        'nom_dessinateur',
         'prenom_dessinateur',
    ];
    
    public function __construct(){
        $this->id_dessinateur= 0;
    }
    
    public function getListeDessinateurs(){
        $query = DB::table('dessinateur')
                ->get();
        return $query;       
    }
    
    public function getIDessinateur(){
        return $this->getKey();
    }
    
    public function getAuteur($id){
        $query = DB::table('dessinateur')
                ->select()
                ->where('id_dessinateur', '=', $id)
                -> first();
        return $query;
    }
}