<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 <h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $visa->name }}</p>
<p><strong>Email:</strong> {{ $visa->email }}</p>
<p><strong>Phone Number:</strong> {{ $visa->phone_number }}</p>
<p><strong>Visa Type:</strong> {{ $visa->visa_type }}</p>
<p><strong>Date:</strong> {{ $visa->date }}</p>
<p><strong>Time:</strong> {{ $visa->time }}</p>


 </body>
 </html>