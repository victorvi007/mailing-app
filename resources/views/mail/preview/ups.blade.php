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
            font-family: 'Merriweather Sans', Tahoma, Arial, sans-serif;
            background-color: #ffffff;
            color: #363636;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            background-color: #351d14;
            padding: 0;
        }
        .header-accent {
            height: 3px;
            background-color: #ffb500;
            font-size: 1px;
            line-height: 1;
        }
        .header-content {
            padding: 10px 0 5px 0;
        }
        .header-table {
            width: 100%;
        }
        .logo-cell {
            text-align: left;
            padding-left: 10px;
            height: 65px;
            vertical-align: middle;
        }
        .logo {
            height: auto;
            max-height: 50px;
        }
        .header-title {
            font-family: Merriweather, Georgia, 'Times New Roman', sans-serif;
            font-size: 30px;
            font-weight: 100;
            line-height: 100%;
            text-align: right;
            color: #ffffff;
            padding: 0 10px;
            height: 65px;
            vertical-align: middle;
            min-width: 468px;
        }
        .content {
            background-color: #e8e8e6;
            padding: 10px 15px;
        }
        .content-inner {
            width: 100%;
        }
        .content p {
            text-align: left;
            font-family: 'Merriweather Sans', Tahoma, Arial, sans-serif;
            font-size: 12px;
            color: #363636;
            margin: 10px 0;
        }
        .content a {
            color: #363636;
            text-decoration: underline;
        }
        .footer {
            background-color: #e8e8e6;
            border-top: 2px solid #22a28e;
            padding: 0;
        }
        .footer-text {
            font-family: 'Merriweather Sans', Tahoma, Arial, sans-serif;
            font-size: 12px;
            padding: 20px 15px;
            color: #363636;
        }
        .footer-links {
            font-family: 'Merriweather Sans', Tahoma, Arial, sans-serif;
            font-size: 12px;
            line-height: 200%;
            font-weight: bold;
            padding: 0 15px 20px 15px;
        }
        .footer-links a {
            color: #22a28e;
            text-decoration: none;
            line-height: 200%;
            font-weight: bold;
            display: block;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <center>
        <div class="email-container">
            <!-- Header -->
            <div class="header">
                <div class="header-accent"></div>
                <div class="header-content">
                    <table class="header-table" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="logo-cell">
                                <img src="https://ci3.googleusercontent.com/meips/ADKq_NbZWWlUBIxiuFYRXt31DiicgfsVmKgO24aWz1vVszivGwZ9C9mJYJFnc_1-BdtVnzXwpBStfyZzlckq_0E1ePsESGXUvnX5ViRp76eXkDiEbA=s0-d-e1-ft#https://www.ups.com/assets/resources/images/UPS_logo_sm.png" alt="{{$getTemplate->name}} Logo" class="logo">
                            </td>
                            <td class="header-title">
                                <h1 style="margin: 0; font-family: Merriweather, Georgia, 'Times New Roman', sans-serif; font-size: 30px; font-weight: 100; line-height: 100%; color: #ffffff;"></h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content">
                <table class="content-inner" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding: 5px;">
                            {!!  html_entity_decode($getMail->message) !!}
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="footer-text">
                    <p style="margin: 0;">© {{date('Y')}} {{$getTemplate->name}}. All rights reserved.<br><br>All trademarks, trade names, or service marks that appear in connection with {{$getTemplate->name}}'s services are the property of their respective owners.<br><br>Please do not reply directly to this e-mail. {{$getTemplate->name}} will not receive any reply message.</p>
                </div>
                <div class="footer-links">
                    <a href="">Review the Privacy Notice</a>
                    <a href="">For Questions, Visit Our Help and Support Centre</a>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
