@extends('layouts.default')

@section('page_title', 'Филиалы')

@section('content')
    <button type="button" class="btn btn-success">Добавить филиал</button>

    <h2>Список филиалов</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Разработка сайтов</td>
            <td>
                <form>
                    <button type="submit" class="btn btn-primary">Подробнее</button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
