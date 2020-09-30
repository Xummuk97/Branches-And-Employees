@extends('layouts.default')

@section('page_title', 'Добавить сотрудника')

@section('content')
    <h2>Добавить сотрудника</h2>
    <form action="/employee/add" method="POST">
        {{ csrf_field() }}

        <input type="hidden" name="h_branchId" value="{{ $branchId }}">

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Введите имя">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="surname" placeholder="Введите фамилию">
        </div>
        <div class="form-group">
            <select name="status">
                <option>Рядовой</option>
                <option>ИТР</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
