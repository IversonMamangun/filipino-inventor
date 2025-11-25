<nav id="navbar" class="bg-white bg-opacity-90 fixed transition-all duration-300 ease-in-out top-15 left-1/2 transform -translate-x-1/2 w-[95%] z-50 rounded-xl shadow-lg border border-gray-200">
<div class="max-w-screen mx-auto py-2 px-4 
            md:py-6 md:px-8 
            lg:py-3 lg:px-10
            lx:py-3 xl:px-8
            flex lg:items-start xl:items-center justify-between">
  
  <!-- 1st: Logo -->
  <div class="flex-shrink-0">
    <a href="./" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="public/assets/navlogo.png" class="h-12 md:h-20 lg:h-15 xl:h-13" alt="Logo of Filipino Investor">
    </a>
  </div>

  <!-- 2nd: Navigation Menu -->
  <div class="hidden flex-col xl:flex xl:flex-row flex-grow justify-center" id="navbar-sticky">
  <ul id="nav" class="flex flex-col xl:flex-row space-y-2 xl:space-y-0 lg:space-y-8 md:space-y-10 xl:space-x-4 font-medium xl:mt-0 lg:mt-20 md:mt-22 lg:align-center">
  <li><a href="./" class="nav-link text-[#033E94] hover:text-fg-brand pl-1">Home</a></li>
  <li><a href="#about" class="nav-link hover:text-fg-brand">About Us</a></li>
  <li><a href="#program-services" class="nav-link hover:text-fg-brand">Program & Services</a></li>
  <li><a href="#strategic-plans" class="nav-link hover:text-fg-brand">Strategic Plans 2026-2028</a></li>
  <li><a href="#testimonials" class="nav-link hover:text-fg-brand">Testimonials</a></li>
  <li><a href="#news-updates" class="nav-link hover:text-fg-brand">News & Updates</a></li>
  <li><a href="#gallery" class="nav-link hover:text-fg-brand">Gallery</a></li>
  <li><a href="#contact" class="nav-link hover:text-fg-brand">Contact Us</a></li>
</ul>
  </div>

  <!-- 3rd: Login + Join Us + Mobile Menu -->
  <div class="flex items-center md:items-start space-x-4">
    <a href="login" class="text-blue-900 rounded-md px-4 py-2 md:text-4xl xl:text-lg text-base font-medium hover:text-[#022e6f] transition">
      Log in
    </a>
    <button type="button" class="text-white bg-[#033E94] hover:bg-[#022e6f] rounded-lg xl:px-3 px-6 py-2 md:text-4xl xl:text-lg md:font-medium text-base font-semibold shadow-md transition">
      Join us
    </button>
    <!-- Mobile Menu Toggle -->
<button id="menu-toggle" data-collapse-toggle="navbar-sticky" 
        type="button" 
        class="xl:hidden p-2 w-10 h-10 md:w-20 md:h-20 flex items-center justify-center rounded-lg hover:bg-neutral-secondary-soft focus:ring-2 focus:ring-neutral-tertiary">
  <svg id="menu-icon" 
       class="h-6 w-6 md:w-20 md:h-20 transition-transform duration-500 ease-in-out" 
       xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
  </svg>
</button>
  </div>

</div>
</nav>

<script>
  window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
      navbar.classList.remove("top-15");
      navbar.classList.add("top-4");
    } else {
      navbar.classList.remove("top-4");
      navbar.classList.add("top-15");
    }
  });

    const menuToggle = document.getElementById("menu-toggle");
  const menuIcon = document.getElementById("menu-icon");

  menuToggle.addEventListener("click", () => {
    menuIcon.classList.toggle("rotate-90");
  });

    const links = document.querySelectorAll("#nav .nav-link");
  links.forEach(link => {
    link.addEventListener("click", function() {
      links.forEach(l => l.classList.remove("text-[#033E94]"));
      this.classList.add("text-[#033E94]"); // active style
    });
  });
</script>