<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$subject}}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Merriweather Sans', Tahoma, Arial, sans-serif; background-color: #ffffff; color: #363636;">
    <center>
        <div style="width: 100%; max-width: 600px; margin: 0 auto; overflow: hidden;">
            <!-- Header -->
            <div style="background-color: #351d14; padding: 0;">
                <div style="height: 3px; background-color: #ffb500; font-size: 1px; line-height: 1;"></div>
                <div style="padding: 10px 0 5px 0;">
                    <table style="width: 100%;" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="text-align: left; padding-left: 10px; height: 65px; vertical-align: middle;">
                                <img src="https://ci3.googleusercontent.com/meips/ADKq_NbZWWlUBIxiuFYRXt31DiicgfsVmKgO24aWz1vVszivGwZ9C9mJYJFnc_1-BdtVnzXwpBStfyZzlckq_0E1ePsESGXUvnX5ViRp76eXkDiEbA=s0-d-e1-ft#https://www.ups.com/assets/resources/images/UPS_logo_sm.png" alt="{{$templateName}} Logo" style="height: auto; max-width: 150px;">
                            </td>
                            <td style="font-family: Merriweather, Georgia, 'Times New Roman', sans-serif; font-size: 30px; font-weight: 100; line-height: 100%; text-align: right; color: #ffffff; padding: 0 10px; height: 65px; vertical-align: middle; min-width: 468px;">
                                <h1 style="margin: 0; font-family: Merriweather, Georgia, 'Times New Roman', sans-serif; font-size: 30px; font-weight: 100; line-height: 100%; color: #ffffff;"></h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Main Content -->
            <div style="background-color: #e8e8e6; padding: 10px 15px;">
                <table style="width: 100%;" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding: 5px;">
                            {!! html_entity_decode($message) !!}
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Footer -->
            <div style="background-color: #e8e8e6; border-top: 2px solid #22a28e; padding: 0;">
                <div style="font-family: 'Merriweather Sans', Tahoma, Arial, sans-serif; font-size: 12px; padding: 20px 15px; color: #363636;">
                    <p style="margin: 0;">© {{date('Y')}} {{$templateName}}. All rights reserved.<br><br>All trademarks, trade names, or service marks that appear in connection with {{$templateName}}'s services are the property of their respective owners.<br><br>Please do not reply directly to this e-mail. {{$templateName}} will not receive any reply message.</p>
                </div>
                <div style="font-family: 'Merriweather Sans', Tahoma, Arial, sans-serif; font-size: 12px; line-height: 200%; font-weight: bold; padding: 0 15px 20px 15px;">
                    <a href="#" style="color: #22a28e; text-decoration: none; line-height: 200%; font-weight: bold; display: block;">Review the Privacy Notice</a>
                    <a href="#" style="color: #22a28e; text-decoration: none; line-height: 200%; font-weight: bold; display: block;">For Questions, Visit Our Help and Support Centre</a>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
