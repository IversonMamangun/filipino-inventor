<nav id="navbar" class="bg-white bg-opacity-90 fixed transition-all duration-300 ease-in-out top-15 left-1/2 transform -translate-x-1/2 w-[95%] z-50 rounded-xl shadow-lg border border-gray-200">
<div class="max-w-screen mx-auto py-2 px-4 
            md:py-6 md:px-8 
            lg:py-3 lg:px-10
            flex items-center justify-between">
  
  <!-- 1st: Logo -->
  <div class="flex-shrink-0">
    <a href="./" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="public/assets/navlogo.png" class="h-12 md:h-25 lg:h-18 xl:h-18" alt="Logo of Filipino Investor">
    </a>
  </div>

  <!-- 2nd: Navigation Menu -->
  <div class="hidden xl:flex flex-grow justify-center" id="navbar-sticky">
<ul class="flex text-base space-x-2 xl:space-x-4 2xl:space-x-8 2xl:text-2xl xl:text-md font-medium">
      <li><a href="./" class="text-[#033E94] hover:text-fg-brand pl-1">Home</a></li>
      <li><a href="#" class="hover:text-fg-brand">About Us</a></li>
      <li><a href="#" class="hover:text-fg-brand">Program & Services</a></li>
      <li><a href="#" class="hover:text-fg-brand">Strategic Plans 2027-2028</a></li>
      <li><a href="#" class="hover:text-fg-brand">Testimonials</a></li>
      <li><a href="#" class="hover:text-fg-brand">News & Updates</a></li>
      <li><a href="#" class="hover:text-fg-brand">Gallery</a></li>
      <li><a href="#" class="hover:text-fg-brand">Contact Us</a></li>
    </ul>
  </div>

  <!-- 3rd: Login + Join Us + Mobile Menu -->
  <div class="flex items-center space-x-4">
    <a href="login" class="text-blue-900 rounded-md px-4 py-2 md:text-4xl xl:text-xl text-base font-medium hover:text-[#022e6f] transition">
      Log in
    </a>
    <button type="button" class="text-white bg-[#033E94] hover:bg-[#022e6f] rounded-lg xl:px-3 px-6 py-2 md:text-4xl xl:text-xl md:font-medium text-base font-semibold shadow-md transition">
      Join us
    </button>
    <!-- Mobile Menu Toggle -->
    <button data-collapse-toggle="navbar-sticky" type="button" class="xl:hidden p-2 w-10 h-10 md:w-20 md:h-20 flex items-center justify-center rounded-lg hover:bg-neutral-secondary-soft focus:ring-2 focus:ring-neutral-tertiary">
      <svg class="h-6 w-6 md:w-20 md:h-20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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
</script>