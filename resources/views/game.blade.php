@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-three-quarters">
            <img class='image' src="{{ Storage::url(Storage::files('public/training')[0]) }}">
        </div>

        <div class="column is-one-quarter">
            <form action="">
                <p style="padding-bottom: 2em">
                    <b>Select one of the options:</b>
                </p>
                <div class="field">
                    <button class="button is-fullwidth">Highway 🛣️</button>
                </div>
                <div class="field">
                    <button class="button is-fullwidth">Sea 🌊</button>
                </div>
                <div class="field">
                    <button class="button is-fullwidth">City/Buildings 🏢</button>
                </div>
                <div class="field">
                    <button class="button is-fullwidth">Forest 🌲</button>
                </div>
                <div class="field">
                    <button class="button is-fullwidth">Desert 🌵</button>
                </div>
                <div class="field">
                    <button class="button is-fullwidth is-warning">Settlement 🆘</button>
                </div>
            </form>
        </div>
    </div>
@endsection