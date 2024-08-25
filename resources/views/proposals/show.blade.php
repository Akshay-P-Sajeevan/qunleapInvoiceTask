<!DOCTYPE html>
<html>
<head>
    <title>View Proposal</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%; 
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
        p {
            margin: 10px 0;
            font-size: 16px;
        }
        p strong {
            color: #444;
            display: inline-block;
            width: 150px;
        }
        .value {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
        }
        .actions {
            margin-top: 20px;
            text-align: center;
        }
        a, .btn {
            padding: 10px 15px;
            background-color: #17a2b8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            margin: 5px;
        }
        a:hover, .btn:hover {
            background-color: #138496;
        }
        button {
            padding: 10px 15px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin: 5px;
            display: inline-block;
            text-align: center;
        }
        button:hover {
            background-color: #c82333;
        }
        a.back-btn {
            background-color: #007bff;
        }
        a.back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Proposal Details</h1>
        <p><strong>Proposal Number:</strong> {{ $proposal->proposal_number }}</p>
        <p><strong>Details:</strong> {{ $proposal->details }}</p>
        <p><strong>Amount:</strong> {{ $proposal->amount }}</p>
        <p><strong>Status:</strong> {{ $proposal->status }}</p>
        <div class="actions">
            <a href="{{ route('proposals.edit', $proposal->id) }}" class="btn">Edit</a>
            <form action="{{ route('proposals.destroy', $proposal->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            <a href="{{ route('proposals.index') }}" class="back-btn">Back to List</a>
        </div>
    </div>
</body>
</html>
