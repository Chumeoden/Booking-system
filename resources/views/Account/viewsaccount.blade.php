@include('DashBoard.sidebarpro')

<!DOCTYPE html>
<html>
<head>
    <title>Accounts List</title>
</head>
<body>
    <h1>Accounts List</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
        @foreach ($accounts as $account)
        <tr>
            <td>{{ $account->id }}</td>
            <td>{{ $account->name }}</td>
            <td>{{ $account->email }}</td>
            <td>{{ $account->created_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>


@include('DashBoard.topbar')