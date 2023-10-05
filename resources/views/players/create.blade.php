@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players" class="active">Spelers</a>
        <a href="/upcoming">Upcoming</a>
    </nav>
@endsection

@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Nieuw Speler</h1>
        <form action="{{ route('players.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Naam team:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Soort:</label>
                <select name="type" id="type" class="form-control">
                    <option value="keeper" selected>keeper</option>
                    <option value="seeker">seeker</option>
                    <option value="chaser">chaser</option>
                </select>
            </div>
            <div class="form-group">
                <label for="team_id">Team:</label>
                <select name="team_id" id="team_id" class="form-control">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>

    </div>
@endsection
