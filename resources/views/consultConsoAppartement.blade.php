@extends('dashboard')
@section('content')
    <h1>Je consulte conso Appartement</h1>
    {{$chart->container()}}
    <script src="{{$chart->cdn()}}"></script>
    {{$chart->script()}}
@endsection