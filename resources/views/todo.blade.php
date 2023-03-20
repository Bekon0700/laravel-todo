@extends('layout')
@section('title', 'Rock-todos')

@section('main')
    <div class="main-todo-container">
        <p class="title">Manage Your Daily Todos Here!</p>
        <div class="todo-container">
            <div class="input-container">
                <input placeholder="Enter your todo here...." type="text" class="input-box">
                <button class="add-btn">Add</button>
            </div>
            <div class="todos">
                <p class="single-todo">Sleep</p>
                <p class="single-todo">Sing for the moment</p>
                <p class="single-todo">Learn Laravel</p>
                <p class="single-todo">Sleep</p>
                <p class="single-todo">Sing for the moment</p>
            </div>
        </div>
    </div>
@endsection


{{-- @foreach ($todos as $todo)
        <p>Id = {{ $todo->id }}</p>
        <p>Todo  = {{ $todo->todo }}</p>
        <p>createdAt = {{ $todo->created_at }}</p>
        <br />
    @endforeach --}}
