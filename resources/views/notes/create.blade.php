<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Notes</title>
    <style>
        /* Universal Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #2b5876, #4e4376); /* Cool gradient background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #f5f5f5;
        }

        /* Form Container */
        form {
            background: rgba(0, 0, 0, 0.7); /* Slight transparency for modern design */
            padding: 30px;
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease-in-out;
        }

        form:hover {
            transform: translateY(-10px);
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #e0e0e0;
            text-align: center;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
            font-weight: bold;
            color: #b3b3b3;
        }

        input[type="text"], input[type="url"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: #e0e0e0;
            font-size: 1rem;
            outline: none;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus, input[type="url"]:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
        }

        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #ff7e5f, #feb47b); /* Gradient button */
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background: linear-gradient(to right, #ff6a4f, #fd986a); /* Enhanced hover */
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media screen and (max-width: 480px) {
            form {
                width: 90%;
                padding: 20px;
                border-radius: 10px;
            }

            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('notes.store') }}" method="POST">
        <h1>Share Notes</h1>
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" required>

        <label for="batch">Batch:</label>
        <input type="text" name="batch" id="batch" required>

        <label for="semester">Semester:</label>
        <input type="text" name="semester" id="semester" required>

        <label for="drive_link">Drive Link:</label>
        <input type="url" name="drive_link" id="drive_link" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
