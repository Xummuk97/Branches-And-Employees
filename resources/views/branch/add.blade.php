@extends('layouts.default')

@section('page_title', 'Добавить филиал')

@section('content')
    <h2>Добавить филиал</h2>
    <form action="/branch/add" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Введите название">
        </div>
        <div class="form-group">
            <textarea name="description" cols="64" rows="10" placeholder="Введите описание"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
