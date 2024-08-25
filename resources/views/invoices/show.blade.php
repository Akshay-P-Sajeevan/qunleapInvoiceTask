<!DOCTYPE html>
<html>
<head>
    <title>Invoice Details</title>
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
            color: #343a40;
            margin-bottom: 20px;
            text-align: center;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        p {
            font-size: 15px;
            margin: 10px 0;
        }
        strong {
            color: #495057;
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
        a, button {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
            margin: 5px;
        }
        a {
            background-color: #007bff;
        }
        a:hover {
            background-color: #0056b3;
        }
        button {
            background-color: #dc3545;
            border: none;
        }
        button:hover {
            background-color: #c82333; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="invoice-details">
            <h1>Invoice #{{ $invoice->invoice_number }}</h1>
            <p><strong>Details:</strong> {{ $invoice->details }}</p>
            <p><strong>Amount:</strong> {{ $invoice->amount }}</p>
            <p><strong>Status:</strong> {{ $invoice->status }}</p>
            <p><strong>Created At:</strong> {{ $invoice->created_at }}</p>
            <p><strong>Updated At:</strong> {{ $invoice->updated_at }}</p>
            <div class="actions">
                <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
                <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('invoices.index') }}">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
