<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>

</head>

<body>
    <style>
        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .contact-info .title {
            width: 35%;
        }

        .contact-info .info {
            width: 65%;
        }
    </style>
    <h2>Contact Form</h2>
    <div class="contact-info">
        <div class="title">Name</div>
        <div class="info">{{ $emailData['name'] }}</div>
    </div>
    <div class="contact-info">
        <div class="title">Email</div>
        <div class="info">{{ $emailData['email'] }}</div>
    </div>
    <div class="contact-info">
        <div class="title">Phone</div>
        <div class="info">{{ $emailData['phone'] }}</div>
    </div>
    <div class="contact-info">
        <div class="title">Message</div>
        <div class="info">{{ $emailData['message'] }}</div>
    </div>

</body>

</html>
