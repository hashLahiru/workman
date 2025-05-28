<div
    style="max-width: 600px; margin: auto; font-family: Arial, sans-serif; border: 1px solid #eee; padding: 20px; background: #ffffff;">
    <h2 style="background: #ff6a00; color: white; padding: 12px 16px; border-radius: 6px 6px 0 0; margin: 0 0 20px;">New
        Workman Inquiry</h2>

    <p><strong style="color: #333;">Workman Type:</strong> {{ $data['workman_type'] }}</p>
    <p><strong style="color: #333;">Name:</strong> {{ $data['name'] }}</p>
    <p><strong style="color: #333;">District:</strong> {{ $data['district'] }}</p>
    <p><strong style="color: #333;">Area:</strong> {{ $data['area'] }}</p>
    <p><strong style="color: #333;">Contact Number:</strong> {{ $data['contact_number'] }}</p>
    <p><strong style="color: #333;">Address:</strong> {{ $data['address'] }}</p>
    <p><strong style="color: #333;">Notes:</strong> {{ $data['notes'] ?? 'N/A' }}</p>
</div>
