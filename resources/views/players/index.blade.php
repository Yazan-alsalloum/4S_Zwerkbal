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

        <h1>Spelers</h1>

        <a href="{{ route('players.create') }}" class="btn btn-primary">+ nieuwe speler aanmaken</a>

        <table class="table">
            <thead>
                <tr>

                    <th>Naam</th>
                    <th>Type</th>
                    <th>Team</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($player as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->type }}</td>
                        <td>{{ $player->team->name }}</td>
                        <td><a href="{{ route('players.edit', $player->id) }}">Aanpassen</a></td>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
