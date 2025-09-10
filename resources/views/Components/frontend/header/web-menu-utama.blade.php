<span class="ms-2.5 mb-6 tracking-wide font-bold text-base
  uppercase text-gray-800 text-center mt-4">
  menu utama
</span>

<div class="flex px-5 py-3 rounded-2xl gap-x-4
  hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">

  <img src="{{ $img }}"
    alt="{{ $alt }}"
    class="size-5"
  />

  <div class="grow">
    <div class="text-base font-bold text-gray-800 mb-1">
      {{ $menu }}
    </div>

    <div class="text-[15px] font-medium lg:line-clamp-2 xl:line-clamp-none text-gray-600">
      {{ $description }}
    </div>

    <div class="inline-flex items-center px-2 py-1 mt-2
      text-xs font-medium border border-gray-500 hover:border-gray-600 rounded-[9px] leading-1 drop-shadow-sm tracking-wider
      {{ $route
          ? 'bg-blue-200 text-black hover:bg-blue-700
          hover:text-white hover:drop-shadow-lg'
          : 'bg-red-200 text-black hover:bg-red-700
          hover:text-white pointer-events-none'
      }}">
      <a href="{{ $route ?? '' }}">
        {{ $buttonName }}
        @if ($route)
          <i class="ml-1 bi bi-box-arrow-up-right text-xs"></i>
        @else
          <i class="ml-1 text-xs bi bi-x-circle"></i>
        @endif
      </a>
    </div>
  </div>
</div>
