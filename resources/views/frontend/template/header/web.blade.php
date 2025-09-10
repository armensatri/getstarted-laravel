<div class="hidden lg:flex lg:gap-x-4">
  <a href="{{ route('home') }}"
    class="tracking-wide justify-center px-3.5 py-[3px] text-base font-medium leading-6 text-black border border-gray-400
    rounded-[13px] bg-blue-200 hover:bg-blue-300 cursor-pointer">
    Home
  </a>

  <div>
    <div class="hs-dropdown [--strategy:static]
      md:[--strategy:absolute] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">

      <button type="button"
        id="hs-header-base-mega-menu-fullwidth"
        aria-haspopup="menu"
        aria-expanded="false"
        aria-label="Mega Menu"
        class="flex items-center w-auto p-2 tracking-wide justify-center
        px-3.5 py-[3px] text-lg font-medium leading-6 text-black border border-gray-400 rounded-[13px] bg-blue-200 cursor-pointer hs-dropdown-toggle hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">
        Menu
        <i class="ml-1 text-base bi bi-arrow-down-circle"></i>
      </button>

      <div role="menu"
        aria-orientation="vertical"   aria-labelledby="hs-header-base-mega-menu-fullwidth"
        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full min-w-60 hidden z-10 top-full start-0 before:absolute before:-top-5 before:start-0 before:w-full before:h-5" >

        <div class="bg-white md:mx-6 lg:mx-8 md:rounded-3xl">
          <div class="gap-4 py-1 md:p-4 md:grid md:grid-cols-2 lg:grid-cols-3">

            <div class="bg-sky-100 rounded-2xl">
              <div class="flex flex-col p-2">
                <x-web-default
                  nama-app="Nama app"
                  route="/"
                  :img="asset('image/default.png')"
                  alt="logo-app-content"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
                />
              </div>
            </div>

            <div class="bg-sky-100 rounded-l-2xl">
              <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                <x-web-menu-utama
                  route=""
                  :img="asset('/frontend/img/utama/home.png')"
                  alt="home"
                  menu="X-X"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
                  button-name="x-x"
                />
              </div>
            </div>

            <div class="bg-sky-100 rounded-l-2xl">
              <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                <x-web-explore-lainnya
                  route=""
                  :img="asset('/frontend/img/utama/home.png')"
                  alt="home"
                  menu="X-X"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
                  button-name="x-x"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="{{ route('home') }}"
    class="tracking-wide justify-center px-3.5 py-[3px] text-base font-medium leading-6 text-black border border-gray-400
    rounded-[13px] bg-blue-200 hover:bg-blue-300 cursor-pointer">
    About
  </a>
</div>
