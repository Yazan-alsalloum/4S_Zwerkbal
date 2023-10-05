<!-- Hier komt een lijst van teams -->
@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a> <!-- De active-klasse is toegevoegd aan Teams -->
        <a href="/players">Spelers</a>
        <a href="/upcoming">upcoming</a>
    </nav>
@endsection

@section('content')
    @if($errors->any())
        <ul class="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h1>Teams</h1>
    <a href="{{ route('teams.create') }}">+ nieuw team</a>
    <table class="table">
        <tr>
            <th>Team</th>
            <th>Soort</th>
            <th>Herkomst</th>
            <th>Spelers</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->type }}</td>
                <td>{{ $team->origin }}</td>
                <td>
                    <ul>
                        @foreach($team->players->groupBy('type') as $type => $players)
                            <li><strong>{{ $type }}:</strong></li>
                            <ul>
                                @foreach($players->sortBy('name') as $player)
                                    <li>{{ $player->name }} ({{ $player->type }})</li>
                                @endforeach
                            </ul>
                        @endforeach
                    </ul>

                </td>
            </tr>
            
        @endforeach
    </table>
@endsection
