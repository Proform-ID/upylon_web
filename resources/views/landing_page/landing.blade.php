<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Upylon Dev</title>
    <link rel="icon" type="image/png" href="image/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    <nav class="fixed w-full h-[80px] bg-[#ffffff] flex items-center justify-between px-[40px] items-center">
        <div class="flex items-center">
            <img src="{{ asset('image/logo.jpg') }}" alt="logo" class="h-[65px]">
            <h1 class="text-[35px] font-bold text-[#02363C]" >pylon</h1>
        </div>
        
        <div class="flex gap-[50px] text-lg font-normal">
            <a class="hover:text-[#02363C]" href="">Home</a>
            <a class="hover:text-[#02363C]" href="">Developer</a>
            <a class="hover:text-[#02363C]" href="">Paket</a>
            <a class="hover:text-[#02363C]" href="">Media</a>
        </div>
        <Button class="px-[50px] py-[11px] rounded bg-[#02363C] text-[#ffffff] text-[13px] font-semibold">ORDER NOW</Button>
    </nav>

    <img class="pt-[80px] absolute z-[-1]" src="{{ asset("image/bg_1.png") }}" alt="">

    <div class="flex flex-col justify-center h-screen w-[53%] px-[80px] gap-[10px]">
        <h1 class="text-[56px] font-bold">Enhance Your Business By Building an Information System.</h1>
        <p class="text-[17px]" >Upylon is a technology service provider specializing in comprehensive digital solutions, including web development, desktop applications, IoT, and mobile applications. We cater to various needs ranging from individuals and personal portfolios to businesses and groups, focusing on creating professional, innovative, and tailored solutions to help our clients achieve their digital goals.</p>
        <div class="flex gap-[20px]">
            <button class="px-[50px] py-[13px] rounded bg-[#02363C] text-[#ffffff] border-[1px] border-[#02363C] text-[14px] font-semibold" >CONTACT US</button>
            <button class="px-[50px] py-[13px] rounded bg-[#ffffff] text-[#02363C] border-[1px] border-[#02363C] text-[14px] font-semibold" >OUR PROJECT</button>
        </div>
    </div>

    <div class="flex bg-[#02363C] px-[80px] py-[60px]">
        <h1 class="text-[55px] flex w-1/2  font-bold text-[#ffffff]">One stop of IT for your Bussiness needs</h1>
        <div class="flex flex-col border-l-2 text-[#ffffff] pl-[100px] w-1/2 text-[25px]">
            <h1 class="" >Create Your Website with Us</h1>
            <h1 class="" >Build Mobile Apps with Ease</h1>
            <h1 class="" >Boost Your Kost Business with SIMKO</h1>
        </div>
    </div>

    
        

    
    
      
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">

            <div class="flex h-[550px] w-full justify-center items-center">
                <div class="w-1/2 px-[50px] flex flex-col gap-[15px]">
                    <h1 class="text-[50px] font-semibold">What a Simko?</h1>
                    <p class="text-[20px] mb-[10px]">Enjoy the convenience of managing boarding houses with our integrated web application. Every feature listed in this brochure can be purchased according to your needs, whether software or hardware. We have served dozens of clients across various cities, and they have experienced the benefits of our efficient and innovative system.</p>
                    <div class="flex justify-around items-center space-x-8 ">
                        <!-- Views -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">60<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Users</p>
                        </div>
                        <!-- Creative Talents -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">18<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Top Features</p>
                        </div>
                        <!-- Brands Collaboration -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">150<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Brands</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div 
                    class="h-[450px] w-[650px] rounded-[20px] bg-cover bg-center relative" 
                    style="background-image: url('{{ asset('image/kamar1.png') }}');"> 
                    <h1 class="w-[600px] h-[400px] flex items-center justify-center text-[45px] text-white font-semibold">For Your Bussiness Kost</h1>
                </div>
                </div>
            </div>
            
          </div>
          <div class="swiper-slide">

            <div class="flex h-[550px] w-full justify-center items-center">
                <div class="w-1/2 px-[50px] flex flex-col gap-[15px]">
                    <h1 class="text-[50px] font-semibold">What a Simko?</h1>
                    <p class="text-[20px] mb-[10px]">Enjoy the convenience of managing boarding houses with our integrated web application. Every feature listed in this brochure can be purchased according to your needs, whether software or hardware. We have served dozens of clients across various cities, and they have experienced the benefits of our efficient and innovative system.</p>
                    <div class="flex justify-around items-center space-x-8 ">
                        <!-- Views -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">60<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Users</p>
                        </div>
                        <!-- Creative Talents -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">18<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Top Features</p>
                        </div>
                        <!-- Brands Collaboration -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">150<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Brands</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div 
                    class="h-[450px] w-[650px] rounded-[20px] bg-cover bg-center relative" 
                    style="background-image: url('{{ asset('image/kamar1.png') }}');"> 
                    <h1 class="w-[600px] h-[400px] flex items-center justify-center text-[45px] text-white font-semibold">For Your Bussiness Kost</h1>
                </div>
                </div>
            </div>

          </div>
          <div class="swiper-slide">

            <div class="flex h-[550px] w-full justify-center items-center">
                <div class="w-1/2 px-[50px] flex flex-col gap-[15px]">
                    <h1 class="text-[50px] font-semibold">What a Simko?</h1>
                    <p class="text-[20px] mb-[10px]">Enjoy the convenience of managing boarding houses with our integrated web application. Every feature listed in this brochure can be purchased according to your needs, whether software or hardware. We have served dozens of clients across various cities, and they have experienced the benefits of our efficient and innovative system.</p>
                    <div class="flex justify-around items-center space-x-8 ">
                        <!-- Views -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">60<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Users</p>
                        </div>
                        <!-- Creative Talents -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">18<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Top Features</p>
                        </div>
                        <!-- Brands Collaboration -->
                        <div class="text-center pt-[50px] border-t border-gray-300">
                            <h2 class="text-4xl font-bold text-gray-800">150<span class="text-black">+</span></h2>
                            <p class="text-gray-500">Brands</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div 
                    class="h-[450px] w-[650px] rounded-[20px] bg-cover bg-center relative" 
                    style="background-image: url('{{ asset('image/kamar1.png') }}');"> 
                    <h1 class="w-[600px] h-[400px] flex items-center justify-center text-[45px] text-white font-semibold">For Your Bussiness Kost</h1>
                </div>
                </div>
            </div>

          </div>
          
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
</body>
</html>