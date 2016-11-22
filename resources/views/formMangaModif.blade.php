@extends('layouts.master')
@section('content')
<div>
    <br><br>
    <br><br>
    <div class="container">
        <div class="blanc">
            <h1>Modification d'un Manga</h1>
        </div>
    </div>
    <div class='well'>
        {!! Form::open(array('route' => array('postmodifierManga',$unManga->id_manga), 'method' => 'post')) !!}  
        <div class='form-group'>
            <BR> <BR>
            <div class="col-md-12  col-sm-12 well well-md">
                <div class='form-group'>
                    <label class='col-md-3 control-label'>Titre : </label> 
                    <div class='col-md-3'>
                        <input type='hidden' name='id_manga' value="{{$unManga->id_manga or ''}} ">
                        <input type='text' name='titre' value='{{$unManga->titre or ''}}'
                               class='form-control' required autofocus>
                    </div>
                </div>
                <BR> <BR>

                <label class='col-md-3 control-label'>Genre : </label>
                <div class='col-md-3'>
                    <select class='form-control' name='cbGenres' required>
                        <OPTION VALUE=0>Sélectionner un genre</option>
                        @foreach ($mesGenres as $unG) 
                        selected=""
                        {
                        <OPTION VALUE="{{ $unG->id_genre }}"
                                @if ($unG->id_genre == $unManga->id_genre)
                                selected="selected"
                                @endif
                                > {{$unG->lib_genre }}</OPTION>
                        }
                        @endforeach                                           
                        </select>
                </div>
                <BR> <BR>
                <div class='form-group'>
                    <label class='col-md-3 control-label'>Couverture : </label>
                    <div class='col-md-3'>
                        <input type='hidden' name="couverture" value=""/>
                        <input type='hidden' name="MAX_FILE_SIZE" value="204800"/>
                        <input type='file' name="couverture" class="btn btn-default pull-left"/>
                        @if ($unManga->id_manga=='')
                        @endif
                    </div>
                </div>
                <BR> <BR>
                <BR> <BR>
                <div class="form-group">
                    <label class='col-md-3 control-label'>Dessinateur : </label>
                    <div class='col-md-3'>
                        <select class='form-control' name='cbDessinateur' required>
                        <OPTION VALUE=0>Sélectionner un dessinateur</option>
                        @foreach ($mesDessinateurs as $unD) 
                        selected=""
                        {
                        <OPTION VALUE="{{ $unD->id_dessinateur }}"
                                @if ($unD->id_dessinateur == $unManga->id_dessinateur)
                                selected="selected"
                                @endif
                                > {{$unD->nom_dessinateur }}</OPTION>
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
                        <OPTION VALUE=0>Sélectionner un scénariste</option>
                        @foreach ($mesScenaristes as $unS) 
                        selected=""
                        {
                        <OPTION VALUE="{{ $unS->id_scenariste }}"
                                @if ($unS->id_scenariste == $unManga->id_scenariste)
                                selected="selected"
                                @endif
                                > {{$unS->nom_scenariste }}</OPTION>
                        }
                        @endforeach                                           
                        </select>
                    </div>
                </div>
                <BR> <BR>

                <div class='form-group'>
                    <label class='col-md-3 control-label'>Prix : </label>
                    <div class='col-md-3'>
                        <input type='text' name='prix' value="{{$unManga->prix or ''}}" class='form-control'>
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
</div>
{!! Form::close() !!}
@stop
