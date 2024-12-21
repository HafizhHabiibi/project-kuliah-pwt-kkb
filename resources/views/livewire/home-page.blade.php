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
          <div class="hs-carousel-slide">
            <div class="flex justify-center h-full bg-gray-100 p-6 dark:bg-neutral-900">
              <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">First slide</span>
            </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center h-full bg-gray-200 p-6 dark:bg-neutral-800">
              <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Second slide</span>
            </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center h-full bg-gray-300 p-6 dark:bg-neutral-700">
              <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Third slide</span>
            </div>
          </div>
        </div>
      </div>

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

  <!-- Semua Produk -->
  <div class="bg-white py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold dark:text-gray-200 mb-8">Populer</h1>
      </div>
    </div>
  </div>
  <!-- Semua Produk END -->

</div>
