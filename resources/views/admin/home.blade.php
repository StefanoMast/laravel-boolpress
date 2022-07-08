@extends('layouts.dashboard')

@section('content')
    <h1>ciao {{ $user->name }}! pagina amministratore</h1>
    @if ($userInfo)
        <p>Indirizzo: {{ $userInfo->address}}</p>
        <p>Telefono: {{ $userInfo->phone}}</p>
    @endif
    
@endsection