@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Мои задачи</h2>
        <ul class="list group">
            @foreach($tasks as $task)
                <li class="list-group-item">{{ $task->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection