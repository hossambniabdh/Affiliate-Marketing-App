@extends('layouts.app')

@section('content')
    <title>Laravel 8 Datatable Example</title>
    <link rel="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <table id="users" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th> registered date</th>
                <th>Total income</th>
                <th>Total expenses</th>
                <th>Wallet balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users_data as $users_data)
                <tr>
                    <td>{{ $users_data->name }}</td>
                    <td>{{ $users_data->email }}</td>
                    <td>{{ $users_data->created_at }}</td>
                    <td>{{ $users_data->total_income }}</td>
                    <td>{{ $users_data->total_expeses }}</td>
                    <td>{{ $users_data->balance }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>

    <script>
        $(document).ready(function() {
            $('#users').DataTable();
        });
    </script>
@endsection
