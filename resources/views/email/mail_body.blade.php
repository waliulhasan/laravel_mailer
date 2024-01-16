<!DOCTYPE html>
<html>

<head>
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }
    </style>
</head>

<body>
    <p><strong>Subject:</strong> {{ $details['subject'] }}</p>
    <p>{{ $details['body'] }}</p>

    <p>We hope this email finds you well. This is an example of a professional email body created using Laravel's mail
        service.</p>



    <p>If you have any questions or concerns, please feel free to reach out to us. Thank you for your time and
        attention.</p>

    <p>Best regards,<br>
        <strong>Waliul Hasan</strong>
    </p>

</body>

</html>
