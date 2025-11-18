<div class="relative">
  <img src="public/assets/gallery.jpg" alt="Gallery background" class="w-full h-auto object-cover">

  <!-- Overlay Title -->
  <div class="absolute inset-0 flex items-start justify-center text-center pt-8">
    <h1 class="text-white text-xl md:text-4xl font-semibold drop-shadow-lg">
      TESTIMONIALS
    </h1>
  </div>
</div>

<div class="relative -mt-32 px-20 ml-5">
  <!-- Carousel Track -->
  <!-- <div id="carousel" class="flex overflow-hidden scroll-smooth gap-10 mb-8"> -->
  <div id="carousel" class="flex overflow-hidden scroll-smooth gap-10 mb-8 max-w-full md:max-w-[1400px]">


    <!-- Card 1 -->
    <div class="flex bg-white p-4 rounded-xl shadow-lg w-[450px] h-[290px]">
      <!-- Left Column -->
      <div class="flex flex-col justify-between items-center w-[30%] mr-2">
        <img class="object-cover w-24 h-24 rounded-full"
          src="public/assets/marisol.png" alt="Marisol D.">
        <i>
          <div class="text-[14rem] font-extrabold text-[#D70328] -mt-[6rem] pr-[3rem] rotate-180 ">"</div>
        </i>
      </div>
      <!-- Right Column -->
      <div class="flex flex-col w-[65%] leading-normal">
        <h5 class="text-xl font-bold text-[#033E94]">Marisol D.</h5>
        <i class="text-[#033E94]">Teacher and FISMPC Member</i>
        <p class="mt-3 text-gray-700">
          Joining FISMPC was the turning point for my invention.
          The mentorship and funding I received helped me refine my solar irrigation prototype
          and bring it to rural farmers. Now it's making a real impact in our community!
        </p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="flex bg-white p-4 rounded-xl shadow-lg w-[450px] h-[290px]">
      <div class="flex flex-col justify-between items-center w-[30%] mr-2">
        <img class="object-cover w-24 h-24 rounded-full"
          src="public/assets/juan.png" alt="Juan Carlo R.">
        <i>
          <div class="text-[14rem] font-extrabold text-[#D70328] -mt-[6rem] pr-[3rem] rotate-180 ">"</div>
        </i>
      </div>
      <div class="flex flex-col w-[65%] leading-normal">
        <h5 class="text-xl font-bold text-[#033E94]">Juan Carlo R.</h5>
        <i class="text-[#033E94]">Renewable Energy Innovator</i>
        <p class="mt-3 text-gray-700">
          Thanks to FISMPC’s training programs, I was able to file a patent for my low-cost water purifier and connect with manufacturing partners. Their support opened doors I never knew existed.
        </p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="flex bg-white p-4 rounded-xl shadow-lg w-[450px] h-[290px]">
      <div class="flex flex-col justify-between items-center w-[30%] mr-2">
        <img class="object-cover w-24 h-24 rounded-full"
          src="public/assets/lani.png" alt="Lani P.">
        <i>
          <div class="text-[14rem] font-extrabold text-[#D70328] -mt-[6rem] pr-[3rem] rotate-180 ">"</div>
        </i>
      </div>
      <div class="flex flex-col w-[65%] leading-normal">
        <h5 class="text-xl font-bold text-[#033E94]">Lani P.</h5>
        <i class="text-[#033E94]">Tech Startup Co-founder</i>
        <p class="mt-3 text-gray-700">
          FISMPC is like a family of inventors. We share ideas, resources, and celebrate each other’s successes. At Inventors Demo Day, our team even found an investor who believes in our project
        </p>
      </div>
    </div>

        <!-- Card 4 -->
    <!-- <div class="flex bg-white p-4 rounded-xl shadow-lg w-[450px] h-[290px]">
      <div class="flex flex-col justify-between items-center w-[30%] mr-2">
        <img class="object-cover w-24 h-24 rounded-full"
          src="public/assets/miguel.png" alt="Miguel S.">
        <i>
          <div class="text-[14rem] font-extrabold text-[#D70328] -mt-[6rem] pr-[3rem] rotate-180 ">"</div>
        </i>
      </div>
      <div class="flex flex-col w-[65%] leading-normal">
        <h5 class="text-xl font-bold text-[#033E94]">Miguel S.</h5>
        <i class="text-[#033E94]">Agritech Entrepreneur</i>
        <p class="mt-3 text-gray-700">
          Our cooperative has truly empowered me. From workshops on business planning to access to cooperative loans, FISMPC has provided everything I needed to turn my prototype into a social enterprise.
        </p>
      </div>
    </div> -->
  </div>

  <!-- Navigation Buttons -->
  <button onclick="scrollCarousel(-1)"
    class="-mx-10 absolute left-5 top-1/2 -translate-y-1/2 rounded-full p-2">
    <img src="public/assets/leftarrow.png" alt="Previous" class="w-20 h-20" />
  </button>

  <button onclick="scrollCarousel(1)"
    class="-mx-8 absolute right-5 top-1/2 -translate-y-1/2 rounded-full p-2">
    <img src="public/assets/rightarrow.png" alt="Next" class="w-20 h-20" />
  </button>
</div>

<!-- Carousel Script -->
<script>
  const carousel = document.getElementById('carousel');
  const cardWidth = carousel.querySelector('.bg-white').offsetWidth + 40; // 40px gap from gap-10
  const visibleCards = 1; // scroll one card per click

  function scrollCarousel(direction) {
    carousel.scrollBy({
      left: direction * cardWidth * visibleCards,
      behavior: 'smooth'
    });
  }

</script>