@extends('mail.layout', ['exclude_footer' => true])

@section('body')

    <div class="card">
        <p>Hi {{ $user->name }}</p>
        <p>
            Thank you for signing up! We need to verify your email address is correct.
            Please <a href="{{ url("?token={$user->token}") }}">click this link</a> to login and verify.
        </p>

        <p>Thank You,</p>
    </div>

@endsection
