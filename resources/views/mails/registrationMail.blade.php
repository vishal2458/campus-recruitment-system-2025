<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your OTP Code</title>
    <style>
        body {
            background: #f3f4f6;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
        }

        .header {
            background: linear-gradient(90deg, #4f46e5, #6366f1);
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            letter-spacing: 1.2px;
        }

        .content {
            padding: 35px;
            color: #111827;
            line-height: 1.7;
        }

        .content h2 {
            font-size: 20px;
            margin-top: 0;
        }

        .otp-box {
            font-size: 38px;
            font-weight: bold;
            text-align: center;
            letter-spacing: 10px;
            background: #e0e7ff;
            color: #1e3a8a;
            padding: 25px;
            border-radius: 12px;
            margin: 30px 0;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
            animation: pulse 1.5s infinite ease-in-out;
        }

        .footer {
            text-align: center;
            font-size: 13px;
            color: #6b7280;
            padding: 20px;
            background: #f9fafb;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.5); }
            70% { box-shadow: 0 0 0 10px rgba(99, 102, 241, 0); }
            100% { box-shadow: 0 0 0 0 rgba(99, 102, 241, 0); }
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="header">
        <h1>Welcome to Placement Point 🎓</h1>
    </div>
    <div class="content">
        <h2>Hi {{ $user->name }},</h2>

        <p>We're excited to have you join <strong>Placement Point</strong>! 🚀</p>

        <p>To complete your registration, use the following OTP to verify your email:</p>

        <div class="otp-box">
            {{ $user->email_verification_token }}
        </div>

        <p>This OTP is valid for <strong>10 minutes</strong>. Please do not share it with anyone.</p>

        <p>If you didn’t register with us, you can safely ignore this email.</p>

        <p>Cheers,<br><strong>The Placement Point Team ✨</strong></p>
    </div>
    <div class="footer">
        &copy; {{ now()->year }} Placement Point. All rights reserved.
    </div>
</div>
</body>
</html>
