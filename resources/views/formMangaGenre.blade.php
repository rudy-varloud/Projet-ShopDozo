@extends('layouts.master')
@section('content')
<div>
    <br><br>
    <br><br>
    <div class="container">
        <div class="blanc">
            <h1>Liste des Mangas d'un genre</h1>
        </div>
    </div>
    <div class='well'>
        {!! Form::open(array('route' => array('postAfficherManga','cbGenres'), 'method' => 'post')) !!}  
        <div class='form-group'>
            <BR> <BR>
                <label class='col-md-3 control-label'>Genre : </label>
                <div class='col-md-3'>
                    <select class='form-control' name='cbGenres' required>
                        <OPTION VALUE=0>Sélectionner un genre</option>
                        @foreach ($mesGenres as $unG) 
                        {
                        <OPTION VALUE="{{ $unG->id_genre }}"> {{$unG->lib_genre }}</OPTION>
                        }
                        @endforeach                                           
                        </select>
                </div>
                <BR> <BR> <BR> 
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-default btn-primary">
                            <span class="glyphicon glyphicon-ok"></span> Valider
                        </button>
                        &nbsp;
                        <button type="button" class="btn btn-default btn-primary" 
                                onclick="javascript: window.location = '{{url('/')}}';">
                            <span class="glyphicon glyphicon-remove" ></span> Annuler</button>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
