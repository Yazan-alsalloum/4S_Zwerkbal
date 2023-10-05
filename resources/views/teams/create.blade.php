@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a>
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

    <h1>Nieuw team</h1>
    <form action="{{ route('teams.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Naam team</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="type">Soort</label>
            <select name="type" id="type">
                <option value="School">School</option>
                <option value="Country">Country</option>
                <option value="Commercial">Commercial</option>
            </select>
        </div>
        <div class="form-group">
            <label for="origin">Herkomst</label>
            <input type="text" id="origin" name="origin" class="form-control">
        </div>
        <button type="submit">Opslaan</button>
    </form>
@endsection
