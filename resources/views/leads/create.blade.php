<!DOCTYPE html>
<html>
<head>
    <title>Create Lead</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #e9ecef;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 30%; 
            margin: 40px auto;
            background-color: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
        }
        h1 {
            font-size: 18px;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }
        form {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #444;
        }
        input, textarea {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px; 
            background-color: #f7f7f7;
            box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s ease;
        }
        input:focus, textarea:focus {
            background-color: #fff;
            border-color: #007bff;
            outline: none;
        }
        button {
            padding: 8px 12px;
            background-color: #17a2b8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px; 
            margin-top: 15px;
            width: 95%;
            text-align: center;
        }
        button:hover {
            background-color: #138496;
        }
        a {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            width: 90%;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Lead</h1>
        <form action="{{ route('leads.store') }}" method="POST">
            @csrf

            <label for="lead_number">Lead Number:</label>
            <input type="text" id="lead_number" name="lead_number" value="{{ old('lead_number') }}" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>

            <label for="details">Details:</label>
            <textarea id="details" name="details" rows="4" required>{{ old('details') }}</textarea>

            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ old('status') }}" required>

            <button type="submit">Create Lead</button>
        </form>
        <a href="{{ route('leads.index') }}">Back to List</a>
    </div>
</body>
</html>
