@extends('layouts.app')

@section('content')
    <div id="app">
        <show-pokemon v-bind:index="{{ $id }}"/>
    </div>
@endsection
