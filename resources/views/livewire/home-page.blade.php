<div>
  <!-- Slider -->
  <div>
    <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
            "isAutoPlay": true
          }' class="relative">
      <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
          @foreach ($sliders as $slider)
            <div class="hs-carousel-slide">
              <div class="relative flex justify-center items-center h-full bg-gray-100 dark:bg-neutral-900">
                <!-- Gambar Slider -->
                <img src="{{ asset('storage/' . $slider->image_path) }}" alt="{{ $slider->title }}" class="rounded-lg object-cover w-full h-full">
                
                <!-- Overlay Title and Subtitle -->
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black/50 text-white text-center p-4">
                  <h2 class="text-3xl font-bold">{{ $slider->title }}</h2>
                  <p class="mt-2 text-lg">{{ $slider->subtitle }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <!-- Navigation Buttons -->
      <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
        <span class="text-2xl" aria-hidden="true">
          <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m15 18-6-6 6-6"></path>
          </svg>
        </span>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
          <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </span>
      </button>

      <!-- Pagination Dots -->
      <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
    </div>

  </div>
  <!-- End Slider -->

  <!-- Kategori -->
  <div class="bg-white py-20">
    <div class="max-w-xl mx-auto">
      <div class="text-center">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl font-bold dark:text-gray-200 mb-8">Kategori Produk</h1>
        </div>
      </div>
    </div>

    <!-- Jarak antar teks "Kategori Produk" dan card -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto mt-8">
      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($categories as $category)
        <a 
          href="/products?pilih_kategori[0]={{ $category->id }}" 
          wire:key="{{ $category->id }}" 
          class="flex flex-col items-center bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
          style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
          <div class="p-4">
            <img 
              class="h-24 w-24 object-cover rounded-full" 
              src="{{ url('storage', $category->image) }}" 
              alt="{{ $category->name }}" />
          </div>
          <div class="w-full text-center py-2 rounded-b-xl" style="background-color: #FFD700; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <h3 class="text-lg font-semibold text-black">
              {{ $category->name }}
            </h3>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Kategori End -->

  <!-- Keunggulan Kami -->
  <div class="bg-white py-20">
    <div class="max-w-xl mx-auto">
      <div class="text-center">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl font-bold dark:text-gray-200 mb-12">Keunggulan Kami</h1>
        </div>
      </div>
    </div>

  <!-- Cards Section -->
  <div class="flex justify-center items-center bg-white dark:bg-neutral-800 flex-wrap">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <!-- Card 1: Banyak Varian -->
      <div class="max-w-xs w-full flex flex-col bg-white border border-t-4 border-t-[#ACCDFF] shadow-[0_4px_8px_rgba(0,0,0,0.2)] rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
        <div class="p-4 md:p-5 flex flex-col items-center">
          <!-- Icon -->
          <div class="mb-3 text-[#ACCDFF]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 20l9-12H3l9 12z" />
            </svg>
          </div>
          <!-- Title -->
          <h3 class="text-lg font-bold text-gray-800 dark:text-white text-center">
            Banyak Varian
          </h3>
          <!-- Description -->
          <p class="mt-2 text-gray-500 dark:text-neutral-400 text-center">
            Toko kami mempunyai varian produk yang bermacam-macam, mulai dari nastar dan putri salju hingga kastengel dan lidah kucing.
          </p>
        </div>
      </div>

      <!-- Card 2: Dibuat dengan Bahan Berkualitas -->
      <div class="max-w-xs w-full flex flex-col bg-white border border-t-4 border-t-[#ACCDFF] shadow-[0_4px_8px_rgba(0,0,0,0.2)] rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
        <div class="p-4 md:p-5 flex flex-col items-center">
          <!-- Icon -->
          <div class="mb-3 text-[#ACCDFF]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m-6 6h7"></path>
            </svg>
          </div>
          <!-- Title -->
          <h3 class="text-lg font-bold text-gray-800 dark:text-white text-center">
            Dibuat dengan Bahan Berkualitas
          </h3>
          <!-- Description -->
          <p class="mt-2 text-gray-500 dark:text-neutral-400 text-center">
            Kami menggunakan bahan baku terbaik untuk menjaga cita rasa dan kualitas setiap produk yang dihasilkan.
          </p>
        </div>
      </div>

      <!-- Card 3: Harga Bersaing -->
      <div class="max-w-xs w-full flex flex-col bg-white border border-t-4 border-t-[#ACCDFF] shadow-[0_4px_8px_rgba(0,0,0,0.2)] rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
        <div class="p-4 md:p-5 flex flex-col items-center">
          <!-- Icon -->
          <div class="mb-3 text-[#ACCDFF]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 21V3M5 21h8"></path>
            </svg>
          </div>
          <!-- Title -->
          <h3 class="text-lg font-bold text-gray-800 dark:text-white text-center">
            Harga Bersaing
          </h3>
          <!-- Description -->
          <p class="mt-2 text-gray-500 dark:text-neutral-400 text-center">
            Produk kami dijual dengan harga yang bersahabat, cocok untuk segala kalangan.
          </p>
        </div>
      </div>

      <!-- Card 4: Dibuat Langsung dengan Tangan -->
      <div class="max-w-xs w-full flex flex-col bg-white border border-t-4 border-t-[#ACCDFF] shadow-[0_4px_8px_rgba(0,0,0,0.2)] rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
        <div class="p-4 md:p-5 flex flex-col items-center">
          <!-- Icon -->
          <div class="mb-3 text-[#ACCDFF]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 16h16M4 12h8m-8-4h16"></path>
            </svg>
          </div>
          <!-- Title -->
          <h3 class="text-lg font-bold text-gray-800 dark:text-white text-center">
            Dibuat Langsung dengan Tangan
          </h3>
          <!-- Description -->
          <p class="mt-2 text-gray-500 dark:text-neutral-400 text-center">
            Setiap produk dibuat langsung dengan tangan oleh tenaga ahli, menghasilkan cita rasa yang khas dan berkualitas.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Card END -->

  <!-- Keunggulan Kami END -->

</div>