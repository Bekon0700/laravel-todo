@extends('layout')
@section('title', 'Log In | Rock-todos')

@section('main')
    <div class="w-30 bg-card-shadow" id="login-form-container">
        <h1 class="title">Login Now</h1>
        <form action="/login" method="post" class="signup-form">
            @csrf
            <div class="signup-form__phone">
                <label for="userPhone">Your Phone Number</label>
                <input type="text" name="userPhone" id="" placeholder="017XXXXXXXX">
            </div>
            <div class="signup-form__password">
                <label for="userPassword">Your Password</label>
                <input type="password" name="userPassword" id="" >
            </div>
            <button type="submit">Log In</button>
        </form>
    </div>
@endsection