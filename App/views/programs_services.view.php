<div id="program-services">
    <div class="relative">
        <img src="public/assets/productsandservices.jpg" alt="" class="w-full h-auto md:h-[12rem]">

        <div class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center">
            <h1 class="text-white text-xl sm:text-2xl md:text-5xl 2xl:text-4xl xl:text-4xl font-bold drop-shadow-lg mb-1 sm:mb-2 md:mb-3">
                PROGRAMS & SERVICES
            </h1>
            <p class="text-white text-xs sm:text-sm md:text-xl 2xl:text-2xl 2xl:max-w-[80%] xl:max-w-[55%] xl:text-xl lg:text-xl max-w-sm sm:max-w-md md:max-w-3xl drop-shadow-md mb-2 sm:mb-4 md:mb-6">
                FISMPC offers a wide range of programs and services to support our members at every stage of innovation.
            </p>
        </div>
    </div>


    <!-- Carousel + Text Wrapper with sharp 50/50 split background -->
    <div class="relative"
        style="background: linear-gradient(to bottom, white 0 35%, #033E94 35% 100%);">

        <!-- Carousel Track -->
<div id="carousel"
     class="owl-carousel p-10 md:px-12 lg:px-6 flex justify-center xl:px-[8rem]">

    <!-- Card 1 -->
    <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 
                flex-shrink-0 w-80 md:w-96 xl:w-auto mx-auto text-center">
        <a href="#">
            <img class="rounded-t-3xl w-full" src="public/assets/p1.jpg" alt="Invention Development & Commercialization" />
        </a>
        <a href="#">
            <h5 class="p-5 text-xl sm:text-2xl font-bold tracking-tight text-[#033E94]">
                Invention Development & Commercialization
            </h5>
        </a>
        <p class="mb-6 px-5 text-sm sm:text-base">
            We help inventors refine their prototypes and provide assistance with intellectual property registration and patent facilitation.
        </p>
    </div>

    <!-- Card 2 -->
    <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 
                flex-shrink-0 w-80 md:w-96 xl:w-auto mx-auto text-center">
        <a href="#">
            <img class="rounded-t-3xl w-full" src="public/assets/p2.jpg" alt="Cooperative Enterprise Development" />
        </a>
        <a href="#">
            <h5 class="p-5 text-xl sm:text-2xl font-bold tracking-tight text-[#033E94]">
                Cooperative Enterprise Development
            </h5>
        </a>
        <p class="mb-6 px-5 text-sm sm:text-base">
            We provide access to cooperative credit and livelihood programs so that innovators can turn their ideas into sustainable business.
        </p>
    </div>

    <!-- Card 3 -->
    <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 
                flex-shrink-0 w-80 md:w-96 xl:w-auto mx-auto text-center">
        <a href="#">
            <img class="rounded-t-3xl w-full" src="public/assets/p3.jpg" alt="Research and Innovation Hubs" />
        </a>
        <a href="#">
            <h5 class="p-5 text-xl sm:text-2xl font-bold tracking-tight text-[#033E94]">
                Research and Innovation Hubs
            </h5>
        </a>
        <p class="mb-6 px-5 text-sm sm:text-base">
            We establish shared laboratories and fabrication centers where members can collaborate, experiment, and build their technologies together.
        </p>
    </div>

    <!-- Card 4 -->
    <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 
                flex-shrink-0 w-80 md:w-96 xl:w-auto mx-auto text-center">
        <a href="#">
            <img class="rounded-t-3xl w-full" src="public/assets/p4.jpg" alt="National Innovation Advocacy" />
        </a>
        <a href="#">
            <h5 class="p-5 text-xl sm:text-2xl font-bold tracking-tight text-[#033E94]">
                National Innovation Advocacy
            </h5>
        </a>
        <p class="mb-6 px-5 text-sm sm:text-base">
            We engage with policymakers and run awareness campaigns to promote the importance of invention in national development.
        </p>
    </div>

    <!-- Card 5 -->
    <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 
                flex-shrink-0 w-80 md:w-96 xl:w-auto mx-auto text-center">
        <a href="#">
            <img class="rounded-t-3xl w-full" src="public/assets/p5.jpg" alt="Trade Fairs and Exhibitions" />
        </a>
        <a href="#">
            <h5 class="p-5 text-xl sm:text-2xl font-bold tracking-tight text-[#033E94]">
                Trade Fairs and Exhibitions
            </h5>
        </a>
        <p class="mb-6 px-5 text-sm sm:text-base">
            We host events like the National Inventors Week to showcase Filipino-made technologies, connect inventors with industry partners, and celebrate our community's achievements.
        </p>
    </div>
    
</div>


        <!-- Navigation Buttons -->
        <button id="prevBtn"
            class="absolute left-2 md:left-4 top-1/2 -translate-y-1/2 rounded-full p-2 md:p-3">
            <img src="./public/assets/leftarrow.png" alt="Previous" class="w-12 h-12 md:w-16 md:h-16" /> </button>

        <button id="nextBtn"
            class="absolute right-2 md:right-4 top-1/2 -translate-y-1/2 rounded-full p-2 md:p-3">
            <img src="./public/assets/rightarrow.png" alt="Next" class="w-12 h-12 md:w-16 md:h-16" />
        </button>

        <!-- Text under carousel -->
        <div class="px-6 md:px-12 lg:px-25 py-10">
            <p class="text-white text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed">
                Through these programs, FISMPC ensures that the resources needed for invention,
                from training and mentorship to funding and market access are available to our members.
                We also work closely with partners such as the Department of Science and Technology, DTI,
                the Intellectual Property Office, and various universities to deliver these services.
                Our cooperative model ensures that the benefits of innovation are shared equitably among
                all members and communities.
            </p>
        </div>
    </div>
</div>

<style>
    /* Active card style */
    .active {
        transform: scale(1.1);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    #prevBtn,
    #nextBtn {
        z-index: 50;
        /* ensures buttons are above carousel items */
    }
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    $("#carousel").owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsive: {
            0: { items: 1 },
            640: { items: 1 },
            1024: { items: 2 },
            1280: { items: 3 }
        }
    });

    $("#nextBtn").click(() => $("#carousel").trigger('next.owl.carousel'));
    $("#prevBtn").click(() => $("#carousel").trigger('prev.owl.carousel'));
});

</script>