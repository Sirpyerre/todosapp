@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 col-lg-offset-3">
        <form action="{{ route('todos.save', ['id'=> $todo->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}">
        </form>
        <hr>
    </div>
</div>

@stop
