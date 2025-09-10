<div class="flow-root mt-10">
  <div class="-my-2 divide-y divide-gray-500/10">
    <div class="py-1.5 bg-sky-100 rounded-3xl border border-gray-300">
      <x-mobile-default
        nama-app="Nama app"
        route="/"
        :img="asset('image/default.png')"
        alt="logo-app-content"
        description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
      />
    </div>
  </div>

  <div class="mt-4 -my-2 divide-y divide-gray-500/10">
    <x-mobile-menu-utama
      route=""
      :img="asset('/frontend/img/utama/home.png')"
      alt="home"
      menu="X-X"
      description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
      button-name="x-x"
    />
  </div>

  <div class="-my-2 divide-y divide-gray-500/10">
    <x-mobile-explore-lainnya
      route=""
      :img="asset('/frontend/img/utama/home.png')"
      alt="home"
      menu="X-X"
      description="Lorem ipsum dolor sit amet consectetur
      adipisicing elit."
      button-name="x-x"
    />
  </div>
</div>
