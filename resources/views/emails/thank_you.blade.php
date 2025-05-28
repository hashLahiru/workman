<div
    style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; border: 1px solid #eee; padding: 20px; background: #ffffff;">
    <h2 style="background: #ff6a00; color: white; padding: 12px 16px; border-radius: 6px 6px 0 0; margin: 0 0 20px;">
        Thank You for Reaching Out</h2>

    <p>Hello {{ $data['name'] }},</p>

    <p>Thank you for contacting us. We have received your message and will get back to you shortly.</p>

    <p><strong style="color: #333;">Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong style="color: #333;">Your Message:</strong> {{ $data['message'] }}</p>

    <p style="margin-top: 20px;">Best regards,<br>The Team</p>
</div>
