@php
    $title = __('Edit').': '.$user->name;
@endphp
@extends('layouts.my')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('users/'.$user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">{{ __('名前') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">{{ __('メールアドレス') }}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required autofocus>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection
