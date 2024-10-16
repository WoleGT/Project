<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body style="background-color:skyblue">
  <div style="text-align:justify; border:1px white solid; padding: 50px; width:30%; color:blue; font-size:bolder; margin:30px">
    {!! session ('msg')!!}
    <br>
    <br>
    <form action="{{url('submit-visa-form') }}" method="post">
        @csrf
        <div>
            <lable for="name">Name</label>
            <br>
            <input type="text" name="name" id="name"  placeholder="enter your full name">
        </div>
        <br>
        <div>
            <lable>Email</label>
            <br>
            <input type="email" name="email" placeholder=" e.g email@example.com">
        </div>
        <br>
        <div>
            <lable>Phone Number</label>
            <br>
            <input type="text" name="phone_number" placeholder="e.g +234 8023000000">
        </div>
        <br>
        <div>
            <lable>Visa Type</label>
            <br>
            <input type="text" name="visa_type" placeholder="e.g Visitor or Work">
        </div> 
        <br>
        <div>
            <lable>Date</label>
            <br>
            <input type="date" name="date">
        </div>
        <br>
        <div>
            <lable>Time</label>
            <br>
            <input type="time" name="time">
        </div>
        <br>
        <div>
        <button type="submit" style="background-color:green; border-radius:5px; border-color:white; cursor:pointer">Submit</button>
        </div>
        <br>
        <marquee direction="left" scrolldelay="110">30mins per session at a fee of 20,000 Naira </marquee>
    </form>
  <div>

       
</body>
</html>
