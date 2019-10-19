@extends('emails.layout')

@section('body')

    <div class="article center">
        <p>
            {{ __('common.hi', ['name' => $user->name]) }}
            <br>
            {{ __('passwords.new') }}
        </p>
        <div class="highlight">{{ $password }}</div>
    </div>

@endsection
