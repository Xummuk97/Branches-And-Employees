@extends('layouts.default')

@section('page_title', 'Подробнее о филиале')

@section('content')

    <h2>Описание</h2>
    <hr>
    <p>Идентификатор: <strong>{{ $branch->id  }}</strong></p>
    <p>Название: <strong>{{ $branch->name  }}</strong></p>
    <p>Описание: <strong>{{ $branch->description  }}</strong></p>

    <h2>Список сотрудников</h2>
    <hr>
    <a class="btn btn-success" href="/{{ $branch->id }}/employee/add">Добавить сотрудника</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Статус</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($branch->employees as $employee)
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                <td>{{ $employee->name  }}</td>
                <td>{{ $employee->surname  }}</td>
                <td>{{ $employee->status }}</td>
            </tr>
        @empty
            <tr><td colspan="4">Сотрудников нет!</td></tr>
        @endforelse
        </tbody>
    </table>
@endsection
