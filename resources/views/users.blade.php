
<!DOCTYPE html>
<html>
<head>
    <title>Laravel POS - Users</title>
</head>
<body>
    <h1>User Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customers</a> |
        <a href="/users">Users</a>
    </nav>

    <hr>

    <h2>User List</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->full_name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
