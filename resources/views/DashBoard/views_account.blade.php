<<<<<<< Updated upstream
@include('DashBoard.sidebarpro')
@include('DashBoard.topbar')

<style>
.views_account {

     float: right;
     height: 860px;
     width: 1600px;
}

.navbar{
    width: 1600px;
}

</style>

<div class="views_account">

<h2>Views Account</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>{{ $account->id }}</td>
                <td>{{ $account->name }}</td>
                <td>{{ $account->email }}</td>
                <td>{{ $account->role }}</td>
                <td>{{ $account->created_at }}</td>
                <td>{{ $account->updated_at }}</td>
            </tr>
        @endforeach
        {{ $accounts->links() }}
    </tbody>
</table>

</div>
=======
<!-- resources/views/dashboard/views_account.blade.php -->
@extends('dashboard.main')

@section('content')
    <h2>Views Account</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <!-- Thêm các cột khác tùy ý -->
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
                <tr>
                    <td>{{ $account->id }}</td>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->email }}</td>
                    <!-- Hiển thị các thông tin khác của tài khoản -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
>>>>>>> Stashed changes
