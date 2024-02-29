<html>
    <head>
        <title>User | Category</title>
    </head>
    <body>
        <h1>User Profile</h1>
        <ul>
            <li>Username: {{ $user['username'] }}</li>
            <li>Email: {{ $user['email'] }}</li>
            <li>Registered at: {{ $user['created_at'] }}</li>
        </ul>
    </body>
</html>
