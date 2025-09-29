<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$getTemplate->name}}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f7f7f7;
            color: #141414;
        }
        .email-container {
            width: 100%;
            max-width: 614px;
            margin: 0 auto;
            background-color: #f7f7f7;
        }
        .header {
            background-color: #ffffff;
            text-align: center;
            padding: 32px 0;
        }
        .logo {
            width: 200px;
            height: auto;
        }
        .hero {
            background-color: #00243d;
            border-radius: 4px;
            padding: 60px 40px;
            text-align: center;
            margin: 24px 0;
        }
        .hero h1 {
            color: #ffffff;
            font-size: 26px;
            margin: 0;
            font-weight: normal;
            line-height: 1.1;
        }
        .content {
            background-color: #ffffff;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            padding: 40px;
            margin: 0 0 24px 0;
        }
        .content h2 {
            font-size: 20px;
            font-weight: bold;
            margin: 16px 0 24px 0;
        }
        .content p {
            font-size: 16px;
            line-height: 1.45;
            margin: 0 0 12px 0;
        }
        .content ul {
            margin: 12px 0;
            padding-left: 20px;
        }
        .content li {
            font-size: 16px;
            line-height: 1.45;
            margin: 4px 0;
        }
        .cta-button {
            display: inline-block;
            background-color: #00243d;
            color: #ffffff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            margin: 12px 0;
        }
        .cta-button:hover {
            background-color: #003d5c;
        }
        .url-fallback {
            font-size: 14px;
            color: #545454;
            margin: 12px 0;
            word-break: break-all;
        }
        .url-fallback a {
            color: #0073ab;
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .footer p {
            font-size: 14px;
            color: #545454;
            margin: 12px 0;
        }
        .footer-links {
            margin: 24px 0;
        }
        .footer-links a {
            color: #0073ab;
            text-decoration: underline;
            font-size: 14px;
            padding: 0 16px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header with Logo -->
        <div class="header">
            <img src="https://ci3.googleusercontent.com/meips/ADKq_NbLiM4HRvzukAnzrj13QElqNVKd-HpYuKx5U6ZwtajftKYypey-1vUFw69812H1VyWORSOBDMjmEEPn3y6zvP5nLFXdo7_JmuuAVcUQ4bzA_ZOSwjZl6_Fec3qvhmKl=s0-d-e1-ft#https://image.e.maersk.com/lib/fe3d11727164047c741071/m/1/Maersk_Logo.png" alt="{{$getTemplate->name}} Logo" class="logo">
        </div>

        <!-- Hero Section -->
        <div class="hero">
            <h1>{{$getMail->name}}</h1>
        </div>

        <!-- Main Content -->
        <div class="content">
            {!!  html_entity_decode($getMail->message) !!}

            <p>Best Regards,</p>
            <p style="font-weight: bold;">The {{$getTemplate->name}} team</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Please do not reply to this email, as we are unable to respond from this email address.</p>
            <p>© {{$getTemplate->name}}</p>

            <div class="footer-links">
                <a href="">Contact Customer Care</a>
                <a href="">Terms & Conditions</a>
                <a href="">Follow us</a>
                <a href="">Visit our website</a>
            </div>
        </div>
    </div>
</body>
</html>
