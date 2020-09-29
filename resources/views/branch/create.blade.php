@extends('layouts.default')

@section('page_title', 'Добавить филиал')

@section('content')
    <h2>Добавить филиал</h2>
    <form action="/branch/add" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Введите название">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
