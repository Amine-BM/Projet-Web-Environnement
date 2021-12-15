@extends('dashboard')
@section('content')

<style>
    .boutonv {
        display: flex;
        justify-content: space-between;
        background-color: #9ACD32;
        border-radius: 6px;
        color: white;
        padding: 10px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .boutonr {
        display: flex;
        justify-content: space-between;
        background-color: #fd5c63;
        border-radius: 6px;
        color: white;
        padding: 10px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .boutonv :checked {
        background-color: blue;
    }

    .hide {
        outline: none;
    }
</style>

@if ($appareils==null)
<h2>Vous n'avez aucun appareil enregistré</h2>
<h3>Veuillez d'abord ajouter un appareil pour pouvoir faire une simulation</h3>
@else
<SELECT name="appareils" size="1">
    @foreach ($appareils as $app)
    <OPTION id="{{$app->idAppareil}}">{{$app->emplacement}}
        @endforeach
</SELECT>
<h2>Vous pouvez ajouter un appareil</h2>
@endif



<script>
    function getTime() {
        var date = new Date();
        document.getElementById("hide").value = date.toLocaleDateString() + " " + date.toLocaleTimeString();
    }

    function getTime2() {
        var date = new Date();
        document.getElementById("hide2").value = date.toLocaleDateString() + " " + date.toLocaleTimeString();
    }
</script>

<form method="POST" action="{{ route('storeSimulation') }}">
    @csrf
    <div>
        <a class="boutonv" onclick="getTime()">ON</a>
        <a class="boutonr" onclick="getTime2()">OFF</a>
        <textarea name="hide" id="hide" cols="0" rows="0"></textarea>
        <textarea name="hide2" id="hide2" cols="0" rows="0"></textarea>
    </div>
</form>




@endsection