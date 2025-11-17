<div class="relative">
  <img src="public/assets/gallery.jpg" alt="" class="w-full h-auto">

  <div class="absolute inset-0 flex flex-col items-center justify-end px-2 text-center mb-2">
    <h1 class="text-white text-3xl md:text-5xl font-bold drop-shadow-lg mb-4">
      Gallery
    </h1>
    <p class="text-white text-lg md:text-lg max-w-5xl drop-shadow-md mb-5">
      Our photo and video gallery showcase the vibrant life of our cooperative. Browse through pictures from past National Inventors Weeks, Inventors Demo Days, training workshops, and product launch events. You'll see smiling inventors, hands-on demonstrations in our labs, and highlights of the innovations developed by our members.
    </p>
  </div>
</div>

<div class="max-w-6xl mx-auto flex items-center justify-between gap-4">
  <!-- Search -->
  <form class="mt-6">
    <label for="search" class="sr-only">Search</label>
    <div class="flex items-center rounded-full overflow-hidden shadow-md border border-gray-300">
      <input
        type="search"
        id="search"
        class="w-80 px-5 py-2 text-sm text-heading placeholder:text-gray-400 
               focus:outline-none focus:ring-2 focus:ring-blue-400 border-none"
        placeholder="Search ..."
        required />
      <button
        type="button"
        class="flex items-center gap-2 px-4 py-2 bg-[#033E94] hover:bg-blue-700 
               text-white font-medium rounded-full focus:ring-2 focus:ring-blue-400 
               transition-colors duration-200">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-width="2"
            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
        </svg>
        Search
      </button>
    </div>
  </form>

  <!-- Right controls -->
  <div class="flex items-center mt-6 gap-3">
    <!-- View toggle -->
    <div class="flex items-center gap-1 bg-gray-100 rounded-full p-1 shadow-md">
      <button class="p-2 rounded-full hover:bg-blue-100 focus:bg-blue-200 transition-colors duration-200">
        <svg class="w-5 h-5 text-gray-600 hover:text-blue-600 transition-colors duration-200"
          xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <button class="p-2 rounded-full hover:bg-blue-100 focus:bg-blue-200 transition-colors duration-200">
        <svg class="w-5 h-5 text-gray-600 hover:text-blue-600 transition-colors duration-200"
          xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-width="2"
            d="M4 4h6v6H4V4zm10 0h6v6h-6V4zM4 14h6v6H4v-6zm10 0h6v6h-6v-6z" />
        </svg>
      </button>
    </div>

    <!-- Sort -->
    <div class="w-40">
      <label for="sort" class="sr-only">Sort By:</label>
      <select
        id="sort"
        class="block w-full rounded-full border border-gray-300 bg-white px-4 py-2 
               text-sm text-gray-700 shadow-md focus:outline-none focus:ring-2 
               focus:ring-blue-400">
        <option value="date">Sort by Date</option>
        <option value="name">Sort by Name</option>
        <option value="recent">Most Recent</option>
        <option value="popular">Most Popular</option>
      </select>
    </div>
  </div>
</div>

<h1 class="text-5xl font-bold mx-[8%] my-10 text-[#033E94]">Video</h1>

<!-- ✅ Centered Carousel -->
<div class="relative max-w-7xl mx-auto overflow-hidden">
  <!-- Carousel wrapper -->
  <div class="flex overflow-x-auto snap-x px-13 snap-mandatory scroll-smooth">

    <!-- Slide 1 -->
    <div class="block w-full md:w-4/3 p-6 rounded-xl shadow-lg mx-2 bg-white snap-center">
      <a href="#" class="relative block">
        <img class="rounded-xl shadow-lg w-full" src="./public/assets/v1.jpg" alt="Green Tech Initiative" />
        <img class="absolute inset-0 m-auto w-20 h-20 rounded-full shadow-lg" src="./public/assets/video.png" alt="Green Tech Initiative Icon" />
      </a>
      <h5 class="mt-6 mb-2 text-xl tracking-tight text-heading flex justify-between items-center">
        <strong>Green Tech Initiative:</strong>
        <span class="">Jan 2025</span>
      </h5>

      <p class="mb-6 text-body">
        Under the Green Innovation and Renewable System program, FISMPC installed solar microgrid system and water purifiers in 10 rural barangays.
      </p>
    </div>


    <!-- Slide 2 -->
    <div class="block w-full md:w-4/3 p-6 rounded-xl shadow-lg mx-2 bg-white snap-center">

      <a href="#" class="relative block">
        <img class="rounded-xl shadow-lg w-full" src="./public/assets/v1.jpg" alt="Green Tech Initiative" />
        <img class="absolute inset-0 m-auto w-20 h-20 rounded-full shadow-lg" src="./public/assets/video.png" alt="Green Tech Initiative Icon" />
      </a>
            <h5 class="mt-6 mb-2 text-xl tracking-tight text-heading flex justify-between items-center">
        <strong>Green Tech Initiative:</strong>
        <span class="">Jan 2025</span>
      </h5>
      <p class="mb-6 text-body">
        Under the Green Innovation and Renewable System program, FISMPC installed solar microgrid system and water purifiers in 10 rural barangays.
      </p>
    </div>

    <!-- Slide 3 -->
    <div class="block w-full md:w-4/3 p-6 rounded-xl shadow-lg mx-2 bg-white snap-center">

      <a href="#" class="relative block">
        <img class="rounded-xl shadow-lg w-full" src="./public/assets/v1.jpg" alt="Green Tech Initiative" />
        <img class="absolute inset-0 m-auto w-20 h-20 rounded-full shadow-lg" src="./public/assets/video.png" alt="Green Tech Initiative Icon" />
      </a>
           <h5 class="mt-6 mb-2 text-xl tracking-tight text-heading flex justify-between items-center">
        <strong>Green Tech Initiative:</strong>
        <span class="">Jan 2025</span>
      </h5>
      <p class="mb-6 text-body">
        Under the Green Innovation and Renewable System program, FISMPC installed solar microgrid system and water purifiers in 10 rural barangays.
      </p>
    </div>
  </div>

  <!-- Prev button -->
  <button class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800 rounded-full">
    <img src="./public/assets/leftarrow.png" alt="Previous" class="w-15 h-15" />
  </button>

  <!-- Next button -->
  <button class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800 rounded-full">
    <img src="./public/assets/rightarrow.png" alt="Next" class="w-15 h-15" />
  </button>
</div>
<div class="flex justify-center mt-6">
  <button type="submit"
    class="text-white bg-[#033E94] hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 
           shadow-md rounded-xl text-2xl px-8 py-3">
    View all
  </button>
</div>


<h1 class="text-5xl font-bold mx-[8%] my-10 text-[#033E94]">Photo</h1>

<div class="grid grid-cols-2 gap-4 h-screen-auto p-[6%] shadow-lg">
  <!-- First column: Whole size image -->
  <div class="relative w-full h-full">
    <img src="./public/assets/pp1.jpg" alt="Large Image"
      class="w-full h-full object-cover p-4 shadow-xl">

    <div class="absolute top-10 bg-yellow-500 bg-gradient-to-tr 
      from-yellow-500 via-yellow-300 to-yellow-600
      text-white px-15 py-2 rounded-br-4xl text-2xl font-bold">
      HIGHLIGHTS
    </div>
  </div>

  <!-- Second column: 4 smaller images -->
  <div class="grid grid-cols-2 grid-rows-2 gap-4">
    <img src="./public/assets/pp1.jpg" alt="Image 1" class="w-full h-full object-cover p-4 shadow-xl">
    <img src="./public/assets/pp1.jpg" alt="Image 2" class="w-full h-full object-cover p-4 shadow-xl">
    <img src="./public/assets/pp1.jpg" alt="Image 3" class="w-full h-full object-cover p-4 shadow-xl">
    <img src="./public/assets/pp1.jpg" alt="Image 4" class="w-full h-full object-cover p-4 shadow-xl">
  </div>

  <!-- Full-width row for button -->
  <div class="col-span-2 flex justify-center mt-6">
    <button type="submit"
      class="text-white bg-[#033E94] hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 
             shadow-md font-semibold rounded-xl text-xl px-8 py-3">
      View all
    </button>
  </div>
</div>