<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Container styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f4f8fb;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .success-container {
            background-color: #ffffff;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            max-width: 500px;
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }
        .success-container:hover {
            transform: scale(1.02);
        }
        /* Title and paragraph styling */
        h1 {
            color: #28a745;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        p {
            color: #555555;
            font-size: 1.1rem;
            margin-top: 0.5rem;
            margin-bottom: 1.5rem;
        }
        /* Button styling */
        .btn-primary {
            background-color: #28a745;
            color: #ffffff;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #218838;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
        }
        /* Icon styling */
        .checkmark-icon {
            font-size: 4rem;
            color: #28a745;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="checkmark-icon">✔</div>
        <h1>Thank You for Your Purchase!</h1>
        <p>Your payment was successful. You can now enjoy your subscription.</p>
        <a href="{{ url('add-story') }}" class="btn btn-primary">Go to Add Story</a>
    </div>
</body>
</html>
