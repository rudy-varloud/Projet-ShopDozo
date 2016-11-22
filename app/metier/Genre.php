<?php

namespace App\metier;
use Illuminate\Database\Eloquent\Model;
use DB;

class Genre extends Model {
    protected $table = 'visiteur';
    public $timestamps = false;
    protected $fillable = [
        'id_genre',
         'lib_genre',
    ];
    
    public function __construct(){
        $this->id_genre= 0;
    }
    
    
    
    public function getGenre($id_genre){
        $lesGenres = DB::table('genre')
                ->Select()
                ->where('genre.id_genre', '=', $id_genre)
                ->get();
        return $lesGenres;
    }
    
    public function getIdGenre(){
        return $this->getKey();
    }
    
    public function getListeGenres(){
        $query = DB::table('genre')
                ->get();
        return $query;
    }
    
    public function getLibGenre($id){
        $lib_genre = DB::table('genre')
                ->Select('lib_genre')
                ->where('genre.id_genre','=',$id)
                ->first();
        return $lib_genre;
    }
}
