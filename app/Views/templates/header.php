<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> | Tasks for Today</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 25px;
            padding: 18px 8%;
            background: #0f172a;
        }

        .brand {
            margin-right: auto;
            color: #38bdf8;
            font-size: 21px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            color: #38bdf8;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            min-height: 520px;
            margin: 35px auto;
            padding: 35px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            color: #0f172a;
        }

        .date {
            color: #64748b;
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 13px;
            border: 1px solid #cbd5e1;
            text-align: left;
        }

        th {
            color: white;
            background: #2563eb;
        }

        tr:nth-child(even) {
            background: #f8fafc;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 13px;
            font-weight: bold;
        }

        .pending {
            color: #92400e;
            background: #fef3c7;
        }

        .in-progress {
            color: #1e40af;
            background: #dbeafe;
        }

        .completed {
            color: #166534;
            background: #dcfce7;
        }

        .profile-card {
            max-width: 650px;
            padding: 25px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
        }

        .profile-row {
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        footer {
            padding: 20px;
            color: #64748b;
            text-align: center;
        }

        @media (max-width: 700px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }

            .brand {
                margin-right: 0;
            }

            .container {
                overflow-x: auto;
                padding: 22px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <span class="brand">Tasks for Today</span>

        <a href="/">Welcome</a>
        <a href="/tasks">Task List</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
        <a href="/customers">Customer Accounts</a>
        <a href="/users">User Accounts</a>
    </nav>

    <main class="container">
