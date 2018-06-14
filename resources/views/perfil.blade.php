@extends('layout')
@section ('content')
<h1>Perfil pagina </h1>
<h3> {{ Auth::user()->name}} </h3>

<h3> {{ Auth::user()->email}} </h3>

  @stop
