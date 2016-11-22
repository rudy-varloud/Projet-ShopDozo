<?php

namespace App\metier;
use Illuminate\Database\Eloquent\Model;
use DB;

class Manga extends Model {
    protected $table = 'visiteur';
    public $timestamps = false;
    protected $fillable = [
        'id_manga',
         'id_dessinateur',
        'id_scenariste',
         'prix',
        'titre',
        'couverture',
        'id_genre',
    ];
    
    public function __construct(){
        $this->id_manga= 0;
    }
    
    public function getIdManga() {
        return $this->getKey();
    }
    public function getListeManga(){
        $lesMangas = DB::table('manga')
                ->Select('id_manga','nom_dessinateur','nom_scenariste','prix','lib_genre','titre')
                ->join('genre','manga.id_genre','=','genre.id_genre')
                ->join('dessinateur','manga.id_dessinateur','=','dessinateur.id_dessinateur')
                ->join('scenariste','manga.id_scenariste','=','scenariste.id_scenariste')
                ->get();
        return $lesMangas;
    }
    public function getManga($id_manga){
        $lesMangas = DB::table('manga')
                ->Select()
                ->where('manga.id_manga', '=', $id_manga)
                ->first();
        return $lesMangas;
    }
    
    public function ajoutManga($code_d,$prix,$titre,$couverture,$code_ge,$id_scenariste){
        DB::table('manga')->insert(
                ['id_dessinateur' => $code_d, 'prix' => $prix,
                    'titre' => $titre, 'couverture' => $couverture, 'id_genre' => $code_ge, 'id_scenariste' => $id_scenariste]);
    }
    
    public function modificationManga($code,$code_d,$prix,$titre,$couverture,$code_ge,$id_scenariste){
         DB::table('manga')->where('id_manga', $code)
                 -> update(['id_dessinateur' => $code_d, 'id_scenariste' => $id_scenariste, 'prix' => $prix,
                    'titre' => $titre, 'couverture' => $couverture,
                     'id_genre' => $code_ge]);
    }
    
    public function getListeMangaGenre($code){
        $mesMangas = DB::table('manga')
                ->Select('id_manga','titre','genre.lib_genre','dessinateur.nom_dessinateur',
                        'scenariste.nom_scenariste','prix')
                ->join('Genre','manga.id_genre','=','genre.id_genre')
                ->join('Dessinateur','manga.id_dessinateur','=','dessinateur.id_dessinateur')
                ->join('Scenariste','manga.id_scenariste','=','scenariste.id_scenariste')
                ->where('genre.id_genre','=',$code)
                ->get();
        return $mesMangas;
    }
    
    
}

