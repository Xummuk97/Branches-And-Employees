@extends('layouts.default')

@section('page_title', 'Филиалы')

@section('content')
    <a class="btn btn-success" href="/branch/add">Добавить филиал</a>

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
            @forelse ($branches as $branch)
                <tr>
                    <th scope="row">{{ $branch->id }}</th>
                    <td>{{ $branch->name  }}</td>
                    <td>
                        <form>
                            {{ csrf_field() }}
                            <input type="hidden" name="_id" value="{{ $branch->id }}">
                            <button type="submit" class="btn btn-primary">Подробнее</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Филиалов нет!</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
