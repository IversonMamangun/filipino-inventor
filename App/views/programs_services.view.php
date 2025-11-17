<!-- Programs & Services Section -->
<div class="relative">
    <img src="public/assets/productsandservices.jpg" alt="" class="w-full h-auto">

    <div class="absolute inset-0 flex flex-col items-center justify-end px-2 text-center mb-2">
        <h1 class="text-white text-3xl md:text-5xl font-bold drop-shadow-lg mb-4">
            PROGRAMS & SERVICES
        </h1>
        <p class="text-white text-lg md:text-lg max-w-2xl drop-shadow-md mb-5">
            FISMPC offers a wide range of programs and services to support our members at every stage of innovation.
        </p>
    </div>
</div>

<!-- Carousel + Text Wrapper with sharp 50/50 split background -->
<div class="relative mt-5 px-10"
     style="background: linear-gradient(to bottom, white 0 35%, #033E94 35% 100%);">

    <!-- Carousel Track -->
    <div id="carousel"
        class="flex overflow-hidden scroll-smooth gap-10 py-10 px-25 mr-4">

        <!-- Card 1 -->
        <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-1/3">
            <a href="#">
                <img class="rounded-t-3xl w-full" src="public/assets/p1.jpg" alt="Invention Development & Commercialization" />
            </a>
            <a href="#">
                <h5 class="p-5 text-2xl font-bold tracking-tight text-[#033E94]">
                    Invention Development & Commercialization
                </h5>
            </a>
            <p class="mb-6 px-5 text-body">
                We help inventors refine their prototypes and provide assistance with intellectual property registration and patent facilitation.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-1/3">
            <a href="#">
                <img class="rounded-t-3xl w-full" src="public/assets/p2.jpg" alt="Cooperative Enterprise Development" />
            </a>
            <a href="#">
                <h5 class="p-5 text-2xl font-bold tracking-tight text-[#033E94]">
                    Cooperative Enterprise Development
                </h5>
            </a>
            <p class="mb-6 px-5 text-body">
                We provide access to cooperative credit and livelihood programs so that innovators can turn their ideas into sustainable business.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-1/3">
            <a href="#">
                <img class="rounded-t-3xl w-full" src="public/assets/p3.jpg" alt="Research and Innovation Hubs" />
            </a>
            <a href="#">
                <h5 class="p-5 text-2xl font-bold tracking-tight text-[#033E94]">
                    Research and Innovation Hubs
                </h5>
            </a>
            <p class="mb-6 px-5 text-body">
                We establish shared laboratories and fabrication centers where members can collaborate, experiment, and build their technologies together.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-1/3">
            <a href="#">
                <img class="rounded-t-3xl w-full" src="public/assets/p4.jpg" alt="National Innovation Advocacy" />
            </a>
            <a href="#">
                <h5 class="p-5 text-2xl font-bold tracking-tight text-[#033E94]">
                    National Innovation Advocacy
                </h5>
            </a>
            <p class="mb-6 px-5 text-body">
                We engage with policymakers and run awareness campaigns to promote the importance of invention in national development.
            </p>
        </div>

        <!-- Card 5 -->
        <div class="bg-white block rounded-3xl shadow-2xl transform transition duration-300 hover:scale-105 flex-shrink-0 w-1/3">
            <a href="#">
                <img class="rounded-t-3xl w-full" src="public/assets/p5.jpg" alt="Trade Fairs and Exhibitions" />
            </a>
            <a href="#">
                <h5 class="p-5 text-2xl font-bold tracking-tight text-[#033E94]">
                    Trade Fairs and Exhibitions
                </h5>
            </a>
            <p class="mb-6 px-5 text-body">
                We host events like the National Inventors Week to showcase Filipino-made technologies, connect inventors with industry partners, and celebrate our community's achievements.
            </p>
        </div>

    </div>

    <!-- Navigation Buttons -->
    <button onclick="scrollCarousel(-1)"
        class="absolute left-14 top-1/2 -translate-y-7/3 bg-white rounded-full shadow-lg">
        <img src="./public/assets/leftarrow.png" alt="Previous" class="w-15 h-15" />
    </button>

    <button onclick="scrollCarousel(1)"
        class="absolute right-0 top-1/2 -translate-y-7/3 bg-white rounded-full shadow-lg">
        <img src="./public/assets/rightarrow.png" alt="Next" class="w-15 h-15" />
    </button>

    <!-- Text directly under the carousel, inside the same background -->
    <div class="px-25 p-10">
        <p class="text-white text-lg">
            Through these programs, FISMPC ensures that the resources needed for invention,
            from training and mentorship to funding and market access are available to our members.
            We also work closely with partners such as the Department of Science and Technology, DTI,
            the Intellectual Property Office, and various universities to deliver these services.
            Our cooperative model ensures that the benefits of innovation are shared equitably among
            all members and communities.
        </p>
    </div>
</div>

<script>
    const carousel = document.getElementById('carousel');
    const cardWidth = carousel.querySelector('.bg-white').offsetWidth + 24; // card width + gap
    const visibleCards = 3;

    function scrollCarousel(direction) {
        carousel.scrollBy({
            left: direction * cardWidth * visibleCards,
            behavior: 'smooth'
        });
    }
</script>
