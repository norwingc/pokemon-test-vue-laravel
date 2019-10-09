@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Create Pokemon</h1>

        <form action="{{ route('pokemon.save') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Habilites</label>
                <textarea name="habilites" class="form-control"></textarea>
            </div>

            <div class="text-center">
                <button class="btn btn-primary btn-lg">Save</button>
            </div>
        </form>
    </div>
@endsection
