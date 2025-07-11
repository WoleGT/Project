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

::placeholder {
  font-size: 1rem; /* You can tweak this */
  color: #6c757d;  /* Slightly darker for better visibility */
  font-weight: 500;
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

      <!-- header mobile -->
   <header
     class="w-[95%] sm:w-[70%] md:w-[80%] container flex h-[60px] justify-between  items-center  lg:hidden  py-[45px] relative border-b-[1px] border-white border-opacity-40 ">
    <figure class="w-[140px]"> 
    <img src="./img/spicy banner.jpg" alt="" class="w-[50%] text-white  bg-color1 p-3 rounded-[50%]" id="logo">
    </figure>
    <div class=" w-1/2 h-full flex justify-end items-center ">
        <i class="bi bi-list text-3xl text-white cursor-pointer ham-menu-icon"></i>
    </div>
    <nav class="menu hidden h-[50px] w-full absolute bg-white left-0 top-[90px]   z-30 ">
      <ul class="h-full w-full flex flex-col  justify-center ms-6">
         <li class="list-none my-3"><a
                 class="decoration-none text-color2 flex hover:text-color4  transition-all duration-600"
                 href="{{url('/') }}">Home</a>
         </li>
      </ul>
    </nav>
  </header>      

        <!-- form -->
      <div class="w-full h-auto flex flex-col items-center justify-center 2xl:px-36 pt-10">
         <h1 class="text-2xl md:text-3xl lg:text-4xl text-color font-secondary">Visa Consultation Form</h1>
         <p class="text-color text-lg md:text-xl lg:text-2xl font-secondary justify-center">Fill the form below to book a consultation with our visa expert for a non-refundable fee of ₦20,000. </p>
         {{-- Success Message --}}
        {{-- ✅ Success Message --}}
        @if (session('msg'))
         <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 text-center" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{!! session('msg') !!}</span>
        </div>
        @endif

        {{-- ❌ Error Message --}}
        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4 text-center" role="alert">
        <strong class="font-bold">Oops!</strong>
        <span class="block sm:inline">{!! session('error') !!}</span>
        </div>
        @endif


         

        <form action="{{ url('submit-visa-form') }}" method="post">
        @csrf

        {{-- Name --}}
        <div>
                <label for="name" style="font-weight: bold">Name</label><br>
                <input type="text" 
                 name="name" 
                 placeholder="Enter your full name" 
                 required 
                 class="form-control w-full px-4 py-3 border border-gray-300 rounded-md text-lg placeholder-gray-500"
                 value="{{ old('name') }}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <br>

        {{-- Email --}}
        <div>
        <label for="email" style="font-weight: bold">Email</label><br>
        <input type="email" 
        name="email" 
        placeholder="enter your email address" 
        required 
        class="form-control w-full px-4 py-3 border border-gray-300 rounded-md text-lg placeholder-gray-500"
        value="{{ old('email') }}">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
         </div>
        <br>

        {{-- Phone Number --}}
        <div>
        <label for="phone_number" style="font-weight: bold">Phone Number</label><br>
        <input type="text" type="phone_number" 
        name="phone_number" 
        placeholder="enter your phone number" 
        value="{{ old('phone_number') }}" 
        required 
        class="form-control w-full px-4 py-3 border border-gray-300 rounded-md text-lg placeholder-gray-500">
        @error('phone_number')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <br>

        {{-- Visa Type --}}
        <div>
                <label for="visa_type" style="font-weight: bold">Visa Type</label><br>
                <select name="visa_type" id="visa_type" class="form-control" required class="form-control w-full px-4 py-3 border border-gray-300 rounded-md text-lg font-semibold text-gray-800">
                <option value="" disabled selected>-- Kindly select visa type --</option>
                <option value="Work" {{ old('visa_type') == 'Work' ? 'selected' : '' }}>Work</option>
                <option value="Study" {{ old('visa_type') == 'Study' ? 'selected' : '' }}>Study</option>
                <option value="Tourism" {{ old('visa_type') == 'Tourism' ? 'selected' : '' }}>Tourism</option>
                <option value="Business" {{ old('visa_type') == 'Business' ? 'selected' : '' }}>Business</option>
                </select>
                @error('visa_type')
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <br>

        {{-- Date --}}
         <div>
                <label for="date" style="font-weight: bold">Date</label><br>
                <input type="date" 
                 name="date" 
                 placeholder="Select date" 
                 required 
                 class="form-control w-full px-4 py-3 border border-gray-300 rounded-md text-lg placeholder-gray-500">
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <br>

        {{-- Time --}}
        <div>
                <label for="time" style="font-weight: bold">Time</label><br>
                <input type="time" 
                name="time" 
                placeholder="Select time" 
                required 
                class="form-control w-full px-4 py-3 border border-gray-300 rounded-md text-lg placeholder-gray-500">
                @error('time')
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <br>

        {{-- Submit --}}
        <div>
                <button type="submit" class="button" role="button">Book now</button>
        </div>
        <br>
        </form>
        </div>

      <!-- Footer -->

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
