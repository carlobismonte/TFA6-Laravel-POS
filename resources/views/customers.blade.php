<!DOCTYPE html>
<html>
<head>
    <title>Laravel POS - Customers</title>
</head>
<body>
    <h1>Customer Accounts</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customers</a> |
        <a href="/users">Users</a>
    </nav>

    <hr>

    <h2>Customer List</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer['id'] }}</td>
            <td>{{ $customer['name'] }}</td>
            <td>{{ $customer['email'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>