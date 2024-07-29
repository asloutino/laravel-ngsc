<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>First Name: {{ $details['contact-first-name'] }}</p>
    <p>Last Name: {{ $details['contact-last-name'] }}</p>
    <p>Email: {{ $details['contact-email'] }}</p>
    <p>Phone: {{ $details['contact-phone'] }}</p>
    <p>Inquiry: {{ $details['contact-subject'] }}</p>
    <p>Company: {{ $details['contact-company'] }}</p>
    <p>Position: {{ $details['contact-position'] }}</p>
    <p>Industry: {{ $details['contact-industry'] }}</p>
    <p>Message: {{ $details['contact-message'] }}</p>
</body>
</html>