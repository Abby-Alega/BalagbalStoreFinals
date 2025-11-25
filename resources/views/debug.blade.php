<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers List</title>
    @vite(['resources/css/debug.css'])
</head>
<body>
    <div class="container">
        <h1>All Customers</h1>
        
        @if($customers->isEmpty())
            <p class="no-data">No customers found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->username }}</td>
                            <td>{{ $customer->first_name }}</td>
                            <td>{{ $customer->last_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
