@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a> <!-- De active-klasse is toegevoegd aan Teams -->
        <a href="/players">Spelers</a>
    </nav>
@endsection
@section('content')
    @if($errors-> any())
        <ul class="errors">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>@endforeach</ul>
    @endif
    <h1>Nieuw teams</h1>
    <form action="{{ route('teams.create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Naam team</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="date">soort</label>
            <select name="soort" id="soort">
                <option value="School">School</option>
                <option value="Country">Country</option>
                <option value="Commercial">Commercial</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Herkomst"> Herkomst</label>
            <input type="text" id="Herkomst" name="Herkomst" class="form-control">
        </div>
        <button type="submit">Opslaan</button>
    </form>
@endsection
