@extends('layouts.master')
@section('content')
<div>
    <br><br>
    <br><br>
    <div class="container">
        <div class="blanc">
            <h1>Ajout d'un Manga</h1>
        </div>
    </div>
        {!! Form::open(['url' => 'ajoutManga', 'files' => true]) !!}  
        <div class='form-group'>
            <BR> <BR>
            <div class="col-md-12  col-sm-12 well well-md">
                <div class='form-group'>
                    <label class='col-md-3 control-label'>Titre : </label>
                    <div class='col-md-3'>
                        <input type='text' name='titre'
                               value='Titre du Manga a ajouter' class='form-control' required autofocus>
                    </div>
                </div>
                <BR> <BR>

                <label class='col-md-3 control-label'>Genre : </label>
                <div class='col-md-3'>
                    <select class='form-control' name='cbGenres' required>
                        <OPTION VALUE=0>Sélectionner un genre</option>
                        @foreach ($mesGenres as $unG)
                        {
                        <OPTION VALUE=' {{ $unG->id_genre }}'> {{ $unG->lib_genre }}</OPTION>
                        }
                        @endforeach
                    </select>
                </div>
                <BR> <BR>
                <BR> <BR>
                <div class='form-group'>
                    <label class='col-md-3 control-label'>Couverture : </label>
                    <div class='col-md-3'>
                        <input type='hidden' name="couverture" value=""/>
                        <input type='hidden' name="MAX_FILE_SIZE" value="204800"/>
                        <input type='file' name="couverture" class="btn btn-default pull-left"/>
                    </div>
                </div>
                <BR> <BR>
                <BR> <BR>
                <div class="form-group">
                    <label class='col-md-3 control-label'>Dessinateur : </label>
                    <div class='col-md-3'>
                        <select class='form-control' name='cbDessinateur' required>
                            <OPTION VALUE=0>Sélectionner un Dessinateur</option>
                            @foreach ($mesDessinateurs as $unD)
                            {
                            <OPTION VALUE=' {{ $unD->id_dessinateur }}'> {{ $unD->nom_dessinateur }}</OPTION>
                            }
                            @endforeach
                        </select>
                    </div>
                </div>
                <BR> <BR>
                <div class="form-group">
                    <label class='col-md-3 control-label'>Scénariste : </label>
                    <div class='col-md-3'>
                        <select class='form-control' name='cbScenariste' required>
                            <OPTION VALUE=0>Sélectionner un Scenariste</option>
                            @foreach ($mesScenaristes as $unS)
                            {
                            <OPTION VALUE=' {{ $unS->id_scenariste }}'> {{ $unS->nom_scenariste }}</OPTION>
                            }
                            @endforeach
                        </select>
                    </div>
                </div>
                <BR> <BR>

                <div class='form-group'>
                    <label class='col-md-3 control-label'>Prix : </label>
                    <div class='col-md-3'>
                        <input type='text' name='prix' value='0' class='form-control'>
                    </div>
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
{!! Form::close() !!}
@stop
