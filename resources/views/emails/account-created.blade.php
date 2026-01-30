<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Login Details</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">

    <h2>Welcome, {{ $user->name }} 🎉</h2>

    <p>Your account has been created successfully.</p>

    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Temporary Password:</strong> {{ $randomPassword }}</p>

    <p>
        Please log in and change your password immediately for security reasons.
    </p>

    <p>
        <a href="{{ url('/login') }}"
           style="display:inline-block;padding:10px 15px;background:#2563eb;color:#fff;text-decoration:none;border-radius:4px;">
            Login Now
        </a>
    </p>

    <hr>

    <p style="font-size: 12px; color: #777;">
        If you did not request this account, please contact support immediately.
    </p>

</body>
</html>
