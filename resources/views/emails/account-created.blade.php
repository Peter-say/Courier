<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Your Application</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #e6e6e6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Application</h1>
        <p>Hello {{ $user->first_name }},</p>
        <p>Your account has been created. Here are your login details:</p>
        <ul>
            <li><strong>Email:</strong> {{ $user->email }}</li>
            <li><strong>Password:</strong> {{ $randomPassword }}</li>
        </ul>
        <p>You can log in to your account using the provided credentials.</p>
        <p>Thank you for joining us!</p>
        <p>If you have any questions or need assistance, please feel free to <a class="btn" href="{{route('web.contact-us')}}">contact us</a>.</p>
    </div>
</body>
</html>
