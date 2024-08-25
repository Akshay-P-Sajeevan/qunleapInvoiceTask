<!DOCTYPE html>
<html>
<head>
    <title>Lead Details</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .details {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            color: #444;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
        }
        button, .btn {
            padding: 10px 15px;
            background-color: #17a2b8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
            text-align: center;
        }
        button:hover, .btn:hover {
            background-color: #138496;
        }
        a.btn {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lead Details</h1>
        <div class="details">
            <label for="lead_number">Lead Number:</label>
            <div class="value">{{ $lead->lead_number }}</div>

            <label for="name">Name:</label>
            <div class="value">{{ $lead->name }}</div>

            <label for="details">Details:</label>
            <div class="value">{{ $lead->details }}</div>

            <label for="status">Status:</label>
            <div class="value">{{ $lead->status }}</div>
        </div>
        <a href="{{ route('leads.index') }}" class="btn">Back to List</a>
        <a href="{{ route('leads.edit', $lead->id) }}" class="btn">Edit</a>
        <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Delete</button>
        </form>
    </div>
</body>
</html>
