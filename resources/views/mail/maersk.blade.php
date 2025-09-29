<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$subject}}</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #f7f7f7; color: #141414;">
    <div style="width: 100%; max-width: 614px; margin: 0 auto; background-color: #f7f7f7;">
        <!-- Header with Logo -->
        <div style="background-color: #ffffff; text-align: center; padding: 32px 0;">
            <img src="https://ci3.googleusercontent.com/meips/ADKq_NbLiM4HRvzukAnzrj13QElqNVKd-HpYuKx5U6ZwtajftKYypey-1vUFw69812H1VyWORSOBDMjmEEPn3y6zvP5nLFXdo7_JmuuAVcUQ4bzA_ZOSwjZl6_Fec3qvhmKl=s0-d-e1-ft#https://image.e.maersk.com/lib/fe3d11727164047c741071/m/1/Maersk_Logo.png" alt="{{$templateName}} Logo" style="width: 200px; height: auto;">
        </div>

        <!-- Hero Section -->
        <div style="background-color: #00243d; border-radius: 4px; padding: 60px 20px; text-align: center; margin: 24px 0;">
            <h1 style="color: #ffffff; font-size: 26px; margin: 0; font-weight: normal; line-height: 1.1; word-wrap: break-word;">{{$subject}}</h1>
        </div>

        <!-- Main Content -->
        <div style="background-color: #ffffff; border: 1px solid #dbdbdb; border-radius: 4px; padding: 15px; margin: 0 0 24px 0;">
            {!! html_entity_decode($message) !!}

            <p>Best Regards,</p>
            <p style="font-weight: bold;">The {{$templateName}} team</p>
        </div>

        <!-- Footer -->
        <div style="text-align: center; padding: 16px 20px; margin: 16px 0;">
            <p style="font-size: 14px; color: #545454; margin: 12px 0;">Please do not reply to this email, as we are unable to respond from this email address.</p>
            <p style="font-size: 14px; color: #545454; margin: 12px 0; text-align: center;">© {{$templateName}}</p>

            <div style="margin: 24px 0;">
                <a href="" style="color: #0073ab; text-decoration: underline; font-size: 14px; padding: 0 16px; white-space: nowrap;">Contact Customer Care</a>
                <a href="" style="color: #0073ab; text-decoration: underline; font-size: 14px; padding: 0 16px; white-space: nowrap;">Terms & Conditions</a>
                <a href="" style="color: #0073ab; text-decoration: underline; font-size: 14px; padding: 0 16px; white-space: nowrap;">Follow us</a>
                <a href="" style="color: #0073ab; text-decoration: underline; font-size: 14px; padding: 0 16px; white-space: nowrap;">Visit our website</a>
            </div>
        </div>
    </div>
</body>
</html>
