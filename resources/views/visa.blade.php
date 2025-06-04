<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keyword" Content="Travel Agency, Tour, Flight Ticket, Hotel Booking">
    <meta name="Keyword" Description=" Travelling,Holiday Package,Ticketing, Airport Services">
    <meta name="Keyword" Author=" Wole George-Taylor">
    <link rel="icon" href="./img/spicy banner.jpg">
    <title>Spicy Travel n Tour Ltd</title>
    <link rel="stylesheet" href="{{asset('css/output.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">       
</head> 
 
<style>
/* CSS */
.button {
  align-items: center;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 19px 24px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
}

.button:active,
.button:hover {
  outline: 0;
}

@media (min-width: 768px) {
  .button {
    font-size: 24px;
    min-width: 196px;
  }
}

</style>

<body class="font-primary">
    <main class="w-full">
    <section class="w-full h-[100vh]  bg-header  bg-cover bg-no-repeat bg-center bg-color1 bg-blend-multiply bg-opacity-60 " >
        <section class="w-full flex flex-wrap justify-center ">
            <header 
            class="w-[85%]  xl:w-[73%]  container hidden lg:flex justify-between h-[60px]  items-center py-[45px] border-b-[1px] border-white border-opacity-40">
            <figure class="w-[140px]">
               <img src="img/spicy banner.jpg" alt="" class="w-[50%] text-white  bg-color1 p-3 rounded-[50%]" id="logo">
            </figure>
            <nav class="h-[100%] md:w-[70%]">
                <ul class="h-[100%] flex items-center gap-8 justify-end">
                    <li class="list-none"><a class="decoration-none text-white hover:text-color3 transition-all duration-500"
                            href="{{url('/') }}">Home</a></li> 
                    
                         
                </ul>
            </nav>
        </header>

        

        <!-- form -->
      <div>
         {!! session ('msg')!!}
         <br>
         <br>
         <form action="{{url('submit-visa-form') }}" method="post">
           @csrf
           <div>
           <strong>VISA CONSULTATION FORM</strong>
           </div> 
           <br> 
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
           <p>You will get 30 minutes of expert guidance for just ₦20,000.</p>
           <button type="submit" class="button" role="button">Book now</button>
           </div>
           <br> 
         </form>      
      </div>

      <!-- Footer -->

      </section>
    <section class="w-full flex justify-center h-auto  bg-color3" id="contact">
        <footer class="w-full container h-auto flex flex-col 2xl:px-36 ">
                <div class="flex justify-center border items-center boder-1 border-color5 my-10 flex-wrap mx-6 ">
                        <div class="w-full lg:w-[30%] flex  items-center py-2 lg:border-r-2 lg:border-r-color5 my-5 ps-8 lg:ps-0" >
                                <i class="bi bi-telephone-outbound text-4xl me-4 text-white bg-color1 p-3"></i>
                                <div class="w-full text-white"><p class="font-secondary">Call us</p><p>+234 9042153922</p></div>
                        </div>
                        <div class="w-full lg:w-[35%] flex items-center py-2 lg:border-r-2 lg:border-r-color5 my-5 ps-8" >
                                <i class="bi-envelope-paper text-4xl me-4 text-white bg-color1 p-3"></i>
                                <div class="w-full text-white"><p class="font-secondary">Send us an Email</p><p>info@spicytravelsntour.com</p></div>
                        </div>
                        <div class="w-full lg:w-[30%] flex items-center py-2 my-5 ps-8" >
                                <i class="bi bi-map text-4xl me-4 text-white bg-color1 p-3 "></i>
                                <div class="w-full text-white"><p class="font-secondary">Address</p><p>Nigeria </p></div>
                        </div>
                </div>
                <div class="flex  justify-between  my-10 flex-wrap  ">
                        <div class="w-full md:w-[30%] flex flex-col py-2  my-5 px-6 " >
                                <figure class="w-[80%]">
                                        <img src="./img/spicy banner.jpg" alt="" class="w-[50%] text-white  bg-color1 p-3 rounded-[50%]" id="logo4">
                                </figure>
                                <p class="text-color6 my-5">Social</p>
                                <ul class="flex  ">
                                <li class="me-5"><a href="https://www.facebook.com/spicytravelsntour"><i class="bi bi-facebook text-white  bg-color1 p-3 rounded-[50%]"></i></a></li>
                                        <li class="me-5"><a href="https://www.instagram.com/spicytravelsntour"><i class="bi bi-instagram text-white bg-color1 p-3 rounded-[50%]"></i></a></li>
                                        <!-- <li class="me-5"><a href=""><i class="bi bi-linkedin text-white  bg-color1 p-3 rounded-[50%]"></i></a></li> -->
                                </ul>
                        </div>
                        <div class="w-full md:w-[30%] flex flex-col py-2  my-5 md:ps-20 px-6 " >
                              <p class="font-secondary text-white text-xl xl:text-2xl">Quick Links</p>
                              <ul class="mt-7 px-6">
                                
                                 <li class="my-2 list-disc marker:text-color1"><a href="https://www.flightaware.com/live/findflight?origin=abuja&destination=lagos"  target="_blank" class="text-color6">Flight Tracker</a></li>
                                 <li class="my-2 list-disc marker:text-color1"><a href="https://www.timeanddate.com/worldclock/converter.html?iso=20241027T200000&p1=742&p2=776&p3=263" target=_blank class="text-color6">Time Zone Converter</a></li>
                                <li class="my-2 list-disc marker:text-color1"><a href="{{ url('/visa') }}" class="text-color6">Visa Consultation</a></li>
                                <li class="my-2 list-disc marker:text-color1"><a href="https://wa.me/+2349042153922" class="text-color6">Whatsapp</a></li>                                                   
                        </ul>
                        </div>
                        <div class="w-full md:w-[28%] flex flex-col  py-2 my-5 px-6 md:px-0 " >
                              <p class="font-secondary text-2xl text-white ">Subscribe</p>
                              <p class="text-color6 mt-5">Sign up for our monthly blogletter to stay informed about travels and tour</p>
                              <form action="{{url('submit-newsletter-form') }}" method="post"  class="mt-5 flex w-full flex-wrap">
                              @csrf
                              <input type="email" name="email" placeholder="Email Address" class="px-2 py-5">
                              <button type="submit" a href="" class="text-white bg-color4 py-5 px-3 flex mt-0 md:mt-2 lg:mt-0">Send</button>
                              {!! session ('msg')!!}
                             </form>
                        </div>  
                </div>
                <p style="padding:20px; color:white; text-align:center">© 2025 Spicy Travels n Tour Ltd. All Right Reserved | developed by <a href="https://wolegt.vercel.app/" target="_blank" style="text-decoration: underline;"> wolegtconsulting.dev</a></p>
        </footer>
    </section>
   
</body>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/master.js')}}"></script>
</html>
