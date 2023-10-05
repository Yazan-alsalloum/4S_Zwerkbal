@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" >Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players"class="active">Spelers</a>
        <a href="/upcoming">upcoming</a>
    </nav>
@endsection

@section('content')
    <div class="container">
        <h1>Speler aanpassen</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('players.update', $player) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Naam team:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $player->name }}">
            </div>
            <div class="form-group">
                <label for="type">Soort:</label>
                <select name="type" id="type" class="form-control">
                    <option value="keeper" {{ $player->type === 'keeper' ? 'selected' : '' }}>keeper</option>
                    <option value="seeker" {{ $player->type === 'seeker' ? 'selected' : '' }}>seeker</option>
                    <option value="chaser" {{ $player->type === 'chaser' ? 'selected' : '' }}>chaser</option>
                </select>
            </div>
            <div class="form-group">
                <label for="team_id">Team:</label>
                <select name="team_id" id="team_id" class="form-control">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $team->id === $player->team_id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
