@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" >Teams</a> 
        <a href="/players">Spelers</a>
        <a href="/upcoming" class="active">upcoming</a>
    </nav>
@endsection

@section('content')


<h1>Eerstvolgende toernooi</h1>
<div class="tournament-container">
    <div class="tournament-info">
        <h2 class="tournament-name">{{$result->name}}</h2>
        <p class="tournament-date"><em>{{$result->date}}</em></p>
    </div>
    <img class="tournament-image" src="/img/snitch.png">
</div>

@endsection
