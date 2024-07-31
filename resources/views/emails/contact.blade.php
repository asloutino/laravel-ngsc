<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>First Name: {{ $details['contact_first_name'] }}</p>
    <p>Last Name: {{ $details['contact_last_name'] }}</p>
    <p>Email: {{ $details['contact_email'] }}</p>
    <p>Phone: {{ $details['contact_phone'] }}</p>
    <p>Inquiry: {{ $details['contact_subject'] }}</p>
    <p>Company: {{ $details['contact_company'] }}</p>
    <p>Position: {{ $details['contact_position'] }}</p>
    <p>Industry: {{ $details['contact_industry'] }}</p>
    <p>Message: {{ $details['contact_message'] }}</p>
</body>
</html>