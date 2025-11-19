<div class="relative bg-[#829FCA] w-[29rem] px-6 py-3 rounded-br-[40px]
            before:content-[''] before:absolute before:top-0 before:left-0 
            before:bg-[#033E94] before:rounded-br-[40px] before:h-full before:w-[27.5rem] before:z-0
            after:content-[''] after:absolute after:top-0 after:left-0 
            after:bg-[#D70328] after:rounded-br-[40px] after:h-full after:w-[25.5rem] after:z-0">
  <span class="relative z-10 text-white font-bold text-2xl">
    NEWS & UPDATES
  </span>
</div>

<div class="flex justify-center p-8 px-[10rem] bg-gray-100">
  <!-- 2 column grid -->
  <div class="grid grid-cols-2 w-full">

    <!-- Column 1: whole highlight card -->
    <div class="col-span-1 px-8">
      <div class="bg-white block rounded-3xl shadow-xs">
        <a href="#" class="relative">
          <img class="rounded-t-2xl w-auto h-75" src="./public/assets/n1.jpg" alt="" />
          <div class="absolute -ml-5 top-5 left-0 bg-gradient-to-tr 
              from-yellow-600 via-yellow-400 to-yellow-600
              text-white pl-10 pr-20 py-1 rounded-br-3xl text-3xl font-semibold text-left">
            HIGHLIGHTS
          </div>
        </a>
        <div class="p-6 text-start">
          <h2 class="text-xl font-bold text-[#D70328]">Ongoing</h2>
          <h2 class="mt-2 text-[#033E94] font-semibold">New Partnerships</h2>
          <p>FISMPC continues to collaborate with government and academic partners. We work closely with DOST, DTI, IPOPHL, and local governments to expand opportunities for inventors. Stay tuned to this section for monthly newsletters, grant announcements, and upcoming event schedules.</p>
          <div class="flex justify-center pb-5 mt-6">
            <button onclick="toggleDetails(event, 'detail')"
              class="text-white rounded-xl bg-[#033E94] hover:bg-blue-600 shadow-md text-xl px-40 py-1">
              View
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Column 2: stack of cards -->
    <!-- ✨ Added fixed height + scroll -->
    <div class="col-span-1 space-y-3 h-[600px] overflow-y-auto pr-2">
      <!-- Card 1 -->
      <div class="bg-white rounded-3xl shadow-xs flex flex-row max-w-xl">
        <img class="object-cover w-44 h-44 rounded-3xl" src="./public/assets/n2.jpg" alt="">
        <div class="p-2 text-start flex flex-col justify-between">
          <h2 class="text-xl font-bold text-[#D70328]">Jan 2025</h2>
          <h2 class="mt-2 text-[#033E94] font-semibold">Green Tech Initiative:</h2>
          <p id="detail_1" class="pr-8 text-gray-700 h-13 overflow-hidden transition-all duration-300">
            Under the Green Innovation and Renewable Systems program, FISMPC installed solar microgrid systems and water purifiers in 10 rural barangays, bringing clean energy and water solutions to these communities.
          </p>
          <button onclick="toggleDetails(event, 'detail_1')"
            class="text-white rounded-xl bg-[#033E94] hover:bg-blue-600 shadow-md text-xl px-40 py-1">
            View
          </button>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-3xl shadow-xs flex flex-row max-w-xl">
        <img class="object-cover w-44 h-44 rounded-3xl" src="./public/assets/n3.jpg" alt="">
        <div class="p-2 text-start flex flex-col justify-between">
          <h2 class="text-xl font-bold text-[#D70328]">March 2025</h2>
          <h2 class="mt-2 text-[#033E94] font-semibold">National Inventors Week 2025:</h2>
          <p id="detail_2" class="pr-8 text-gray-700 h-13 overflow-hidden transition-all duration-300">
            Our annual innovation festival attracted over 5,000 participants. Inventors nationwide showcased their inventions and attended seminars on patent filing and business development. Youth inventor awards were given to 
          </p>
          <button onclick="toggleDetails(event, 'detail_2')"
            class="text-white rounded-xl bg-[#033E94] hover:bg-blue-600 shadow-md text-xl px-40 py-1">
            View
          </button>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-3xl shadow-xs flex flex-row max-w-xl">
        <img class="object-cover w-44 h-44 rounded-3xl" src="./public/assets/n4.jpg" alt="">
        <div class="p-2 text-start flex flex-col justify-between">
          <h2 class="text-xl font-bold text-[#D70328]">May 2025</h2>
          <h2 class="mt-2 text-[#033E94] font-semibold">Digital Member Portal Goes Live:</h2>
          <p id="detail_3" class="pr-8 text-gray-700 h-13 overflow-hidden transition-all duration-300">
            We launched our new online portal and blockchain-based IP timestamping system, making it easier for members to register, pay dues, and access learning resources from anywhere.
          </p>
          <button onclick="toggleDetails(event, 'detail_3')"
            class="text-white rounded-xl bg-[#033E94] hover:bg-blue-600 shadow-md text-xl px-40 py-1">
            View
          </button>
        </div>
      </div>

      <!-- Card 4 (✨ removed hidden so it shows when scrolling) -->
      <div class="bg-white rounded-3xl shadow-xs flex flex-row max-w-xl" id="hiddenCard">
        <img class="object-cover w-44 h-44 rounded-3xl" src="./public/assets/p5.jpg" alt="">
        <div class="p-2 text-start flex flex-col justify-between">
          <h2 class="text-xl font-bold text-[#D70328]">July 2025</h2>
          <h2 class="mt-2 text-[#033E94] font-semibold">Launch of NICCH:</h2>
          <p id="detail_4" class="pr-8 text-gray-700 h-13 overflow-hidden transition-all duration-300">
            FISMPC opened the NICCH in Quezon City as a one-stop innovation center for Filipino inventors. The facility features an innovation showroom, co-working and prototyping spaces, and an online marketplace.
          </p>
          <button onclick="toggleDetails(event, 'detail_4')"
            class="text-white rounded-xl bg-[#033E94] hover:bg-blue-600 shadow-md text-xl px-40 py-1">
            View
          </button>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
  function toggleDetails(event, detailId) {
    const detail = document.getElementById(detailId);
    const button = event.target;

    // Toggle only the clicked detail
    const isHidden = detail.classList.toggle("h-13");
    detail.classList.toggle("overflow-hidden", isHidden);

    // Update button text
    button.textContent = isHidden ? "View" : "Hide";

    // ✨ Optional: auto-scroll into view if expanded
    if (!isHidden) {
      detail.scrollIntoView({ behavior: "smooth", block: "nearest" });
    }
  }
</script>
