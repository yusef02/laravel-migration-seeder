@extends('layouts.app')


@section('main-content')
<h1>Trains</h1>
@forelse($trains as $train)
<ul>
  <li>id: {{$train['id']}}</li>
  <li>azienda: {{$train['azienda']}}</li>
  <li>proveniente da: {{$train['stazione_di_partenza']}}</li>
  <li>arrivo a: {{$train['stazione_di_arrivo']}}</li>
  <li>partenza alle: {{$train['orario_di_partenza']}}</li>
  <li>arrivo alle: {{$train['orario_di_arrivo']}}</li>
  <li>code: {{$train['codice_treno']}}</li>
  <li>numero carozze: {{$train['numero_carrozze']}}</li>
  <li>in orario: {{$train['in_orario']??'false'}}</li>
  <li>cancellato: {{$train['cancellato']??'false'}}</li>
</ul>
@empty <span>non ci sono treni</span>
@endforelse
@endsection