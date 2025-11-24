<div id="contact">
  <h1 class="text-4xl font-bold text-center my-10 text-[#033E94]">CONTACT US</h1>

  <!-- Parent column -->
  <div class="max-w-6xl mx-auto my-10 rounded-xl p-7
    lg:bg-gradient-to-r from-white from-[80%] to-transparent to-[70%]
     md:bg-none">
    <!-- Flex wrapper instead of grid -->
    <div class="flex flex-col lg:flex-row gap-8 lg:bg-transparent md:bg-white lg:p-1 md:p-10">

      <!-- LEFT SIDE: Contact Form -->
      <div class="flex-1">
        <form>
          <h3 class="text-2xl font-bold mb-6 text-[#033E94]">Send us a message</h3>
          <p class="text-lg mb-8 text-[#033E94]">
            We welcome inquiries from aspiring inventors, members, and partners.
          </p>

          <!-- Flex for inputs -->
          <div class="flex flex-wrap -mx-3 mb-5">
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label for="first_name" class="block text-sm font-medium text-[#033E94] mb-2">First Name</label>
              <input type="text" id="first_name" name="first_name"
                class="w-full rounded-3xl border border-gray-300 p-2 focus:border-[#033E94] focus:ring-[#033E94] shadow-sm" required />
            </div>
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label for="last_name" class="block text-sm font-medium text-[#033E94] mb-2">Last Name</label>
              <input type="text" id="last_name" name="last_name"
                class="w-full rounded-3xl border border-gray-300 p-2 focus:border-[#033E94] focus:ring-[#033E94] shadow-sm" required />
            </div>
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label for="email" class="block text-sm font-medium text-[#033E94] mb-2">Email</label>
              <input type="email" id="email" name="email"
                class="w-full rounded-3xl border border-gray-300 p-2 focus:border-[#033E94] focus:ring-[#033E94] shadow-sm" required />
            </div>
            <div class="w-full md:w-1/2 px-3 mb-4">
              <label for="contact" class="block text-sm font-medium text-[#033E94] mb-2">Contact</label>
              <input type="text" id="contact" name="contact"
                class="w-full rounded-3xl border border-gray-300 p-2 focus:border-[#033E94] focus:ring-[#033E94] shadow-sm"
                placeholder="Contact Details" required />
            </div>
          </div>

          <div class="mb-5">
            <label for="subject" class="block text-sm font-medium text-[#033E94] mb-2">Subject</label>
            <input type="text" id="subject" name="subject"
              class="w-full rounded-3xl border border-gray-300 p-2 focus:border-[#033E94] focus:ring-[#033E94] shadow-sm"
              required />
          </div>

          <div class="mb-5">
            <label for="message" class="block text-sm font-medium text-[#033E94] mb-2">Message</label>
            <textarea id="message" rows="4"
              class="w-full rounded-3xl border border-gray-300 p-3 focus:border-[#033E94] focus:ring-[#033E94] shadow-xl"
              placeholder="Message..."></textarea>
          </div>
          <div class="flex justify-end mt-4 relative">
            <button type="submit"
              class="text-white bg-[#033E94] hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 shadow-md font-larger rounded-3xl text-sm px-6 py-3 md:px-15 md:text-lg
                    lg:absolute lg:transform lg:-translate-y-1/10 lg:z-10
                    md:static md:transform-none md:translate-y-0">
              Send
            </button>
          </div>


        </form>
      </div>

      <!-- RIGHT SIDE: Event Card -->
  <div class="flex-1">
    <div class="bg-[#033E94] rounded-xl shadow-lg p-6 w-full max-w-md md:max-w-full">
          <p class="text-xl font-bold mb-8 text-white">
            Visit our office or drop us a line:
          </p>

          <!-- Phone block -->
          <div class="flex items-center gap-3 bg-[#829FCA] text-[#F3F6FA] rounded-lg shadow-md p-4 mb-5">
            <img src="./public/assets/mobile.png" alt="Phone Icon" class="w-10 h-10" />
            <div class="flex flex-col">
              <h3 class="text-lg font-semibold">Phone Number:</h3>
              <p>(+63) 233 456 7890</p>
            </div>
          </div>

          <!-- Email block -->
          <div class="flex items-center gap-3 bg-[#829FCA] text-[#F3F6FA] rounded-lg shadow-md p-4 mb-5">
            <img src="./public/assets/email.png" alt="Email Icon" class="w-10 h-6" />
            <div class="flex flex-col">
              <h3 class="text-lg font-semibold">Email Address:</h3>
              <p>info@fisinvestorscoop.org</p>
            </div>
          </div>

          <!-- Address block -->
          <div class="flex items-start gap-3 bg-[#829FCA] text-[#F3F6FA] rounded-lg shadow-md p-5 mb-5">
            <img src="./public/assets/address.png" alt="Address Icon" class="w-5 h-6" />
            <div class="flex flex-col">
              <h3 class="text-lg font-semibold">Address:</h3>
              <p>
                Unit 405, 4th floor, 821 Cortez Building, EDSA, South Triangle, Quezon City, Philippines
              </p>
            </div>
          </div>

          <!-- Social media section -->
          <p class="text-lg font-bold mt-8 mb-4 text-white">
            Follow us on social media for the latest updates!
          </p>
          <div class="flex flex-row gap-5">
            <img src="./public/assets/fb.png" alt="Facebook Icon" class="w-15 h-15" />
            <img src="./public/assets/yt.png" alt="Youtube Icon" class="w-15 h-15" />
            <img src="./public/assets/ig.png" alt="Instagram Icon" class="w-15 h-15" />
            <img src="./public/assets/x.png" alt="Twitter Icon" class="w-15 h-15" />
            <img src="./public/assets/tiktok.png" alt="TikTok Icon" class="w-15 h-15" />
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="bg-white shadow-md px-50 p-6 mt-6">
    <p class="text-gray-700 text-base leading-relaxed text-center">
      Feel free to visit our office hours during business days, or reach out by phone or email anytime for more information about membership, programs, or how to present your invention to the cooperative.
    </p>
  </div>
</div>