@extends('layout')
@section('title', 'Registration | Rock-todos')

@section('main')
    <div class="w-30 bg-card-shadow" id="registration-form-container">
        <h1 class="title">Register Now</h1>
        <form action="/registration" method="post" class="signup-form">
            @csrf
            <div class="signup-form__name">
                <label for="userName">Your Name</label>
                <input type="text" name="userName" id="" placeholder="John Doe">
            </div>
            <div class="signup-form__phone">
                <label for="userPhone">Your Phone Number</label>
                <input type="text" name="userPhone" id="" placeholder="017XXXXXXXX">
            </div>
            <div class="signup-form__password">
                <label for="userPassword">Your Password</label>
                <input type="password" name="userPassword" id="" >
            </div>
            <button type="submit">Registration</button>
        </form>
    </div>
@endsection