<!DOCTYPE html>
<html>
<head>
    <title>Leads List</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 70%;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            font-size: 26px;
            color: #343a40;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #dee2e6;
            font-size: 15px; 
            text-align: left;
        }
        th {
            background-color: #e9ecef;
            color: #495057;
        }
        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tbody tr:hover {
            background-color: #e2e6ea;
        }
        a, .btn {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            text-align: center;
            margin-right: 5px;
        }
        a:hover, .btn:hover, button:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
        button {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            padding: 10px 20px;
            text-align: center;
        }
        button:hover {
            background-color: #c82333; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Leads List</h1>
        <a href="{{ route('leads.create') }}" class="btn">Create New Lead</a>
        <table>
            <thead>
                <tr>
                    <th>Lead Number</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leads as $lead)
                    <tr>
                        <td>{{ $lead->lead_number }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->details }}</td>
                        <td>{{ $lead->status }}</td>
                        <td>
                            <a href="{{ route('leads.show', $lead->id) }}" class="btn">View</a>
                            <a href="{{ route('leads.edit', $lead->id) }}" class="btn">Edit</a>
                            <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
