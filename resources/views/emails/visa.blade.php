<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 <h2>Dear Admin</h2>
 <h2>Kindly find below new Consultation Booking Session details for your action.</h2>
<p><strong>Name:</strong> {{ $visa->name }}</p>
<p><strong>Email:</strong> {{ $visa->email }}</p>
<p><strong>Phone Number:</strong> {{ $visa->phone_number }}</p>
<p><strong>Visa Type:</strong> {{ $visa->visa_type }}</p>
<p><strong>Date:</strong> {{ $visa->date }}</p>
<p><strong>Time:</strong> {{ $visa->time }}</p>

<p>Thank you</p>

<a>Warm regards, <br> IT Dept.</a>



 </body>
 </html>