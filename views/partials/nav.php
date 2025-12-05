<nav id="navbar" class="bg-white bg-opacity-90 fixed transition-all duration-300 ease-in-out top-15 left-1/2 transform -translate-x-1/2 w-[95%] z-50 rounded-xl shadow-lg border border-gray-200">
  <div class="max-w-screen mx-auto py-2 px-4 
              md:py-6 md:px-8 
              lg:py-3 lg:px-10
              lx:py-3 xl:px-8
              flex lg:items-start xl:items-center justify-between">

    <!-- Logo -->
    <div class="flex-shrink-0">
      <a href="./" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="assets/navlogo.png" class="h-12 md:h-20 lg:h-15 xl:h-13" alt="Logo of Filipino Investor">
      </a>
    </div>

    <!-- Mobile Nav (animated dropdown) -->
    <!-- Navigation Menu (one list, responsive) -->
    <div id="navbar-sticky"
      class="max-h-0 opacity-0 translate-y-[-20px] overflow-hidden transition-all duration-700 ease-in-out 
            xl:max-h-none xl:opacity-100 xl:translate-y-0 xl:flex xl:flex-row flex-col flex-grow justify-center">
      <ul id="nav" class="flex flex-col xl:flex-row space-y-2 xl:space-y-0 xl:space-x-4 md:space-y-18 md:mt-25 font-medium xl:mt-0 ">
        <li><a href="#home" class="nav-link text-[#033E94] hover:text-fg-brand">Home</a></li>
        <li><a href="#about" class="nav-link hover:text-fg-brand">About Us</a></li>
        <li><a href="#program-services" class="nav-link hover:text-fg-brand">Program & Services</a></li>
        <li><a href="#strategic-plans" class="nav-link hover:text-fg-brand">Strategic Plans 2026-2028</a></li>
        <li><a href="#testimonials" class="nav-link hover:text-fg-brand">Testimonials</a></li>
        <li><a href="#news-updates" class="nav-link hover:text-fg-brand">News & Updates</a></li>
        <li><a href="#gallery" class="nav-link hover:text-fg-brand">Gallery</a></li>
        <li><a href="#contact" class="nav-link hover:text-fg-brand">Contact Us</a></li>
      </ul>
    </div>
    <el-dropdown class="relative ml-3 md:mt-3 xl:mt-0">
      <?php if ($_SESSION['user'] ?? false) : ?>
        <!-- 
        <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">Open user menu</span>
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
        </button> -->
      <?php else : ?>
        <!-- <a href="register" class="<"?= urlIs('/register') ?> nav-link hover:text-fg-brand">Register</a> -->
        <a href="login" class=" <?= urlIs('/login') ?>text-blue-900 rounded-md px-4 py-2 md:text-4xl xl:text-lg text-base font-medium hover:text-[#022e6f] transition">
          Log in
        </a>
      <?php endif; ?>

    </el-dropdown>
    <!-- Login + Join + Mobile Toggle -->
    <div class="flex items-center md:items-start space-x-4">

      <button type="button" class="text-white bg-[#033E94] hover:bg-blue-600 rounded-lg xl:px-3 px-6 py-2 md:mt-2 xl:mt-0 md:text-4xl xl:text-lg md:font-medium text-base font-semibold shadow-md transition">
        Join us
      </button>
      <!-- Mobile Menu Toggle -->
      <button id="menu-toggle" type="button" class="xl:hidden p-2 w-10 h-10 md:w-20 md:h-20 flex items-center justify-center rounded-lg hover:bg-neutral-secondary-soft focus:ring-2 focus:ring-neutral-tertiary">
        <svg id="menu-icon" class="h-6 w-6 md:w-20 md:h-20 transition-transform duration-500 ease-in-out" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
        </svg>
      </button>
    </div>
            <?php if ($_SESSION['user'] ?? false) : ?>
            <el-dropdown class="relative ml-3">
              <form action="/session" method="POST">
                  <input type="hidden" name="_method" value="DELETE"/>
                  <button class="nav-link text-[#033E94] hover:text-fg-brand">Log Out</button>
              </form>
            </el-dropdown>
            <?php endif;?>
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
  const navbarSticky = document.getElementById("navbar-sticky");

  menuToggle.addEventListener("click", () => {
    menuIcon.classList.toggle("rotate-90");
    navbarSticky.classList.toggle("max-h-0");
    navbarSticky.classList.toggle("max-h-screen");
    navbarSticky.classList.toggle("opacity-0");
    navbarSticky.classList.toggle("opacity-100");
    navbarSticky.classList.toggle("translate-y-[-20px]");
    navbarSticky.classList.toggle("translate-y-0");
  });


  const links = document.querySelectorAll("#nav .nav-link");
  links.forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault();


      links.forEach(l => l.classList.remove("text-[#033E94]"));
      this.classList.add("text-[#033E94]");


      const targetId = this.getAttribute('href').substring(1);
      const target = document.getElementById(targetId);
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }

      if (window.innerWidth < 1280) {
        menuIcon.classList.remove("rotate-90");
        navbarSticky.classList.add("max-h-0", "opacity-0", "translate-y-[-20px]");
        navbarSticky.classList.remove("max-h-screen", "opacity-100", "translate-y-0");
      }
    });
  });
</script>