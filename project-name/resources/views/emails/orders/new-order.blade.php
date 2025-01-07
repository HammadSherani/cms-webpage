<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 1px solid #dddddd;
            padding-bottom: 20px;
        }
        .header h1 {
            color: #333333;
        }
        .content {
            margin: 30px 0;
        }
        .order-details {
            margin: 20px 0;
        }
        .order-details th, .order-details td {
            padding: 12px;
            border-bottom: 1px solid #eeeeee;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #888888;
        }
        .button {
            background-color: #28a745;
            color: #ffffff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Order Received</h1>
        </div>
        <div class="content">
            <p>Dear {{ $order->marketer->name }},</p>
            <p>You have received a new order. Please review the order details below:</p>

            <table class="order-details" width="100%">
                <tr>
                    <th>Order No:</th>
                    <td>{{ $order->amz_order_no }}</td>
                </tr>
                <tr>
                    <th>Product:</th>
                    <td>{{ $order->product->name }}</td>
                </tr>
                <tr>
                    <th>Customer Email:</th>
                    <td>{{ $order->customer_email }}</td>
                </tr>
                <tr>
                    <th>Buyer Profile:</th>
                    <td>{{ $order->buyer_profile ?? 'N/A' }}</td>
                </tr>
            </table>

            <p>To view the full order, please click the button below:</p>
            <p style="text-align: center;">
                <a href="{{ url('/marketer/orders/' . $order->id) }}" class="button">View Order</a>
            </p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
