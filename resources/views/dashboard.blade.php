<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #f0f0f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .box-container {
            max-width: 50%;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px; 
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            font-size: 24px; 
            color: #222;
            margin-bottom: 25px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section h2 {
            font-size: 20px;
            color: #444;
            margin-bottom: 12px;
        }
        .section p {
            font-size: 15px;
            margin: 12px 0 12px;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 10px 18px;
            background-color: #007bff;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            margin: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        .button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .btn-main {
            background-color: #007bff;
        }
        .btn-main:hover {
            background-color: #0056b3;
        }
        .btn-alt {
            background-color: #6c757d;
        }
        .btn-alt:hover {
            background-color: #5a6268;
        }
        .btn-success {
            background-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        @media (max-width: 768px) {
            .box-container {
                width: 90%;
                padding: 15px;
            }
            .button {
                padding: 8px 16px;
                font-size: 13px;
            }
            h1 {
                font-size: 22px;
            }
            .section h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="box-container">
        <h1>Control Panel</h1>
        <div class="section">
            <h2>Invoices</h2>
            <p>Manage your invoices from here. You can create, view, edit, or delete them as needed.</p>
            <a href="{{ route('invoices.create') }}" class="button btn-main">Create Invoice</a>
        </div>
        <div class="section">
            <h2>Estimates</h2>
            <p>Handle your estimates here. Add new estimates, review existing ones, or make modifications.</p>
            <a href="{{ route('estimates.create') }}" class="button btn-main">Create Estimate</a>
        </div>
        <div class="section">
            <h2>Proposals</h2>
            <p>Oversee your proposals. You can create new ones or update existing proposals.</p>
            <a href="{{ route('proposals.create') }}" class="button btn-main">Create Proposal</a>
        </div>
        <div class="section">
            <h2>Leads</h2>
            <p>Track and manage your leads. Add new leads, check their status, and update details.</p>
            <a href="{{ route('leads.create') }}" class="button btn-main">Create Lead</a>
        </div>
    </div>
</body>
</html>
