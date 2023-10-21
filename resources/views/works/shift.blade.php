<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>シフト一覧</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>日付</th>
                    <th>従業員</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach($works as $work)
                <tr>
                    <td>{{$work->date}}</td>
                    <td>{{$work->employee_id}}</td>
                    <td>{{$work->work_place}}</td>
                </tr>
            @endforeach
        </table>
    </body>