<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>LANDINGPAGE</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BenchNine:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;500;600;700&family=Palanquin:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
            <style>
    /* CSS untuk efek hover berwarna pada semua gambar */
    img {
        /* Properti gambar */
        width: auto;
        height: auto;
        max-width: 100%; /* Membuat gambar responsif */
        display: block;
        border-radius: 3px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Efek hover */
    img:hover {
        transform: scale(1.05); /* Memperbesar gambar */
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); /* Menambahkan bayangan */
    }

        .img-responsive {
            width: 100%;
            height: auto;
        }
        .LoginAdminBox {
            width: 223px;
            height: 54px;
            position: absolute;
            left: 1148px;
            top: 833px;
            background: linear-gradient(135deg, #FFD700, #FFA500);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .LoginAdminText {
            font-size: 24px;
            font-weight: bold;
            color: black;
            font-family: 'Montserrat', sans-serif;
        }
        /* Keyframes for the background animation */
        @keyframes background-rgb {
            0% { background-color: #000000; }  /* Black */
            33% { background-color: #555637; } /* Gray */
            66% { background-color: #383846; } /* Yellow */
            100% { background-color: #000000; }  /* Black */
        }

        /* Tailwind utility class for the animation */
        .animate-background-rgb {
            animation: background-rgb 7s infinite;
        }
        
        
    </style>
</head>

<body>
    <div class="Home w-[1520px] h-[2267px] relative animate-background-rgb rounded-[10px]">
        <div class="Rectangle65 w-[1520px] h-[120px] left-0 top-0 absolute bg-black"></div>
        <div class="Home left-[800px] top-[54px] absolute text-white text-base font-normal font-['Palanquin Dark']">HOME</div>
        <button class="Portofolio left-[929px] top-[54px] absolute text-neutral-50 text-base font-normal font-['Palanquin Dark']">PORTOFOLIO</button>
        <button class="Photographer left-[1111px] top-[54px] absolute text-white text-base font-normal font-['Palanquin Dark']">PHOTOGRAPHER</button>
        <button class="Contact left-[1320px] top-[54px] absolute text-neutral-50 text-base font-normal font-['Palanquin Dark']">CONTACT</button>
        <img class="carousel-img w-[1343px] h-[756px] left-[87px] top-[133px] absolute rounded-[3px] shadow-black" src="{{ asset('images/fotohomepage.png') }}" />
        <img class="carousel-img w-[1343px] h-[756px] left-[87px] top-[133px] absolute rounded-[3px] shadow-black" src="{{ asset('images/fotohomepage2.png') }}" />
        <img class="carousel-img w-[1343px] h-[756px] left-[87px] top-[133px] absolute hidden-[3px] shadow-black" src="{{ asset('images/fotohomepage3.png') }}" />
        <img class="Rectangle34 w-[309px] h-[166px] left-[805px] top-[997px] absolute rounded-[15px]" src="{{ asset('images/abou4.png') }}" />
        <img class="Rectangle35 w-[123px] h-[155px] left-[804px] top-[1166px] absolute rounded-[15px]" src="{{ asset('images/about2.png') }}" />
        <img class="Rectangle36 w-[350px] h-[155px] left-[931px] top-[1166px] absolute rounded-[15px]" src="{{ asset('images/about.png') }}" />
        <img class="Rectangle38 w-[146px] h-[155px] left-[1284px] top-[1166px] absolute rounded-[15px]" src="{{ asset('images/about5.png') }}" />
        <img class="Rectangle40 w-[312px] h-[166px] left-[1118px] top-[997px] absolute rounded-[15px]" src="{{ asset('images/about3.png') }}" />
        <div class="AboutUs left-[82px] top-[934px] absolute text-center text-white text-[44px] font-normal font-['BenchNine']">About Us</div>

        <div class="StudioSnapshots left-[804px] top-[945px] absolute text-center text-yellow-400 text-[32px] font-normal font-['BenchNine']">Studio snapshots</div>
        <div class="OurLatestWork left-[82px] top-[1353px] absolute text-center text-white text-[42px] font-normal font-['Bebas Neue']">Our latest work</div>
        <div class="TeamDescription w-[659px] h-[174px] left-[82px] top-[990px] absolute text-white text-2xl font-normal font-['BenchNine']">
            Tam story is a professional photography team located in Malang, East Java. We have a team consisting of experienced photographers and videographers who are ready to help you capture your special moments. We have served a variety of clients, from individuals, families, to companies. We always try to provide the best results by using sophisticated equipment and innovative techniques. For us, photography is not just about taking pictures, but about telling your story through the camera lens. We want to help you create beautiful memories that will last forever.
        </div>
        <div class="Rectangle41 w-2.5 h-2.5 left-[88px] top-[1252px] absolute bg-yellow-400"></div>
        <div class="Rectangle68 w-2.5 h-2.5 left-[88px] top-[1286px] absolute bg-yellow-400"></div>
        <div class="Rectangle66 w-2.5 h-2.5 left-[305px] top-[1252px] absolute bg-yellow-400"></div>
        <div class="Rectangle69 w-2.5 h-2.5 left-[305px] top-[1286px] absolute bg-yellow-400"></div>
        <div class="Rectangle67 w-2.5 h-2.5 left-[513px] top-[1252px] absolute bg-yellow-400"></div>
        <button class="GraduationPhotography w-[200px] h-[17px] left-[103px] top-[1245px] absolute text-white text-base font-normal font-['Palanquin']">Graduation Photography</button>
        <button class="PreweddingPhotography w-[200px] h-2.5 left-[528px] top-[1245px] absolute text-white text-base font-normal font-['Palanquin']">Prewedding Photography</button>
        <button class="ProductPhotography w-[180px] h-[17px] left-[103px] top-[1278px] absolute text-white text-base font-normal font-['Palanquin']">Product Photography</button>
        <button class="FoodPhotography w-[150px] h-[17px] left-[321px] top-[1278px] absolute text-white text-base font-normal font-['Palanquin']">Food Photography</button>
        <button class="WeddingPhotography w-[200px] h-[17px] left-[313px] top-[1245px] absolute text-white text-base font-normal font-['Palanquin']">Wedding Photography</button>
        <img class="Rectangle46 w-[562px] h-[197px] left-[82px] top-[1424px] absolute rounded-[3px]" src="{{ asset('images/our7.png') }}" />
        <img class="Rectangle47 w-[180px] h-[351px] left-[82px] top-[1628px] absolute rounded-[3px]" src="{{ asset('images/our2.png') }}" />
        <img class="Rectangle48 w-[681px] h-[351px] left-[273px] top-[1628px] absolute rounded-[3px]" src="{{ asset('images/our1.png') }}" />
        <img class="Rectangle49 w-[298px] h-[197px] left-[655px] top-[1424px] absolute rounded-[3px]" src="{{ asset('images/our6.png') }}" />
        <img class="Rectangle50 w-[259px] h-[355px] left-[962px] top-[1424px] absolute rounded-[3px]" src="{{ asset('images/our5.png') }}" />
        <img class="Rectangle51 w-[468px] h-[191px] left-[962px] top-[1788px] absolute rounded-[3px]" src="{{ asset('images/our.png') }}" />
        <img class="Rectangle52 w-[199px] h-[114px] left-[1231px] top-[1424px] absolute" src="{{ asset('images/our4.png') }}" />
        <img class="Rectangle53 w-[199px] h-[114px] left-[1231px] top-[1544px] absolute rounded-[3px]" src="{{ asset('images/our8.png') }}" />
        <img class="Rectangle54 w-[199px] h-[114px] left-[1231px] top-[1665px] absolute rounded-[3px]" src="{{ asset('images/our3.png') }}" />
        <div class="Line3 w-[450px] h-[0px] left-[970px] top-[974px] absolute border-4 border-yellow-400"></div>
        <div class="Rectangle86 w-[1520px] h-6 left-0 top-[2243px] absolute bg-yellow-400"></div>
        <img class="Logo w-[202px] h-[122px] left-[24px] top-[-1px] absolute" src="{{ asset('images/logoal.png') }}" />
        <div class="ContactInfo left-[29px] top-[2135px] absolute text-white text-xl font-normal font-['Palanquin']">
            <div>tamstory@gmail.com</div>
            <div>Tel: +628923890987</div>
        </div>
        <div class="TamStory2024 left-[680px] top-[2240px] absolute text-black text-xl font-bold font-['Palanquin']">TAM STORY 2024</div>
        <div class="Frame5 w-[1350px] h-[764px] left-[48px] top-[131px] absolute">
        </div>
        <div class="CaptureTheLight left-[400px] top-[384px] absolute text-center">
            <span class="text-white text-[100px] font-normal font-['BenchNine']">“Capture the light, </span><br>
            <span class="text-white text-[35px] font-normal font-['BenchNine']"> capture the moment,."</span>
        </div>
        <button  class="LoginAdminBox">
            <div class="LoginAdminText">Login Admin</div>
        </button>
    </div>
    
</body>

<script>
    
    document.querySelector('.Portofolio').addEventListener('click', function() {
         window.location.href = "{{ route('portofolio') }}";
         });

document.querySelector('.Photographer').addEventListener('click', function() {
         window.location.href = "{{ route('photographer') }}";
         });

document.querySelector('.Contact').addEventListener('click', function() {
         window.location.href = "{{ route('contact1') }}";
         });



document.querySelectorAll('.LoginAdminBox').forEach(el => {
       el.addEventListener('click', function() {
         window.location.href = "{{ route('loginadmin') }}";
         });
         });

document.querySelectorAll('.GraduationPhotography').forEach(el => {
       el.addEventListener('click', function() {
         window.location.href = "{{ route('graduation') }}";
         });
         });

document.querySelectorAll('.PreweddingPhotography').forEach(el => {
       el.addEventListener('click', function() {
         window.location.href = "{{ route('prewedding') }}";
         });
         });

document.querySelectorAll('.ProductPhotography').forEach(el => {
       el.addEventListener('click', function() {
         window.location.href = "{{ route('product') }}";
         });
         });

document.querySelectorAll('.FoodPhotography').forEach(el => {
       el.addEventListener('click', function() {
         window.location.href = "{{ route('food') }}";
         });
         });

document.querySelectorAll('.WeddingPhotography').forEach(el => {
       el.addEventListener('click', function() {
         window.location.href = "{{ route('wedding') }}";
         });
         });


    let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-img');
const totalSlides = slides.length;

function showSlide(n) {
    slides.forEach((slide, index) => {
        if(index === n) {
            slide.classList.remove('hidden');
        } else {
            slide.classList.add('hidden');
        }
    });
}

// Show the first slide initially
showSlide(currentSlide);

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

// Mengatur interval untuk berganti slide setiap beberapa detik (misalnya 5 detik)
setInterval(nextSlide, 3000); // 3000 milidetik = 3 detik
    
    
    

</script>

</html>

