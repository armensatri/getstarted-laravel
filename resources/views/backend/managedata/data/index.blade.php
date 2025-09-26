@extends('backend.template.main')

@section('content-backend')
  <div class="content">
    <div class="p-4 mx-auto">
      <section class="w-full px-2 mb-2">
        <div class="content-backend">
          <div class="content-backend-title">
            {{ $title }}
          </div>
        </div>
      </section>

      <section class="w-full px-3 mt-8 mb-5">
        <div class="breadcrumb">
          @include('backend.sbreadcrumb.data.index')
        </div>

        <div class="x-border">
          <div class="flex flex-col items-center text-center">
            <img src="/image/default.png"
              alt="data"
              class="w-24 h-24 border-4 border-green-500 rounded-full"
            />

            <div class="mt-2 text-xl font-semibold">
              Data count
            </div>

            <div class="text-base mt-1.5 text-gray-600">
              Jumlah data dalam system
            </div>
          </div>

          <div class="w-full mt-12 border-b border-gray-200"></div>

          <div class="max-w-6xl mx-auto">
            <div class="mt-16">
              <div class="content">
                <div class="max-w-screen-xl px-4 mx-auto text-center">
                  <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 xl:grid-cols-3">
                    {{-- <x-card-count
                      hover="users"
                      :route="route('users.index')"
                      img="/backend/img/menu/users.jpg"
                      alt="users"
                      data-name="Data users"
                      :data-count="$users"
                    /> --}}
                    <div class="p-3 text-center border border-gray-300 rounded-3xl bg-slate-50">
                      <div class="flex justify-end">
                        <div id="dropdownHoverButton-users"
                          data-dropdown-toggle="dropdownHover-users" data-dropdown-trigger="hover"
                          class="inline-flex items-center px-1 text-base font-medium text-center text-black border rounded-full hover:border-gray-400 hover:bg-gray-200 hover:cursor-pointer">
                          <i class="bi bi-three-dots-vertical"></i>
                        </div>

                        <div id="dropdownHover-users"
                          class="z-10 hidden p-3 mt-2 space-y-2 border border-gray-400 divide-y divide-gray-100 shadow-sm w-28 bg-slate-100 dark:bg-gray-700 rounded-2xl">
                          <span class="block mb-2.5 text-xs font-medium text-gray-600 uppercase">
                            Action
                          </span>

                          <div class="flex items-center justify-center gap-2">
                            <div>
                              <a href="{{ route('users.index') }}"
                                class="inline-flex items-center justify-center px-8 py-1.5 bg-green-700 rounded-xl hover:bg-green-800">
                                <i class="text-base text-white bi bi-eye"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="flex items-center justify-center">
                        <div class="flex items-center justify-center w-12 h-12 p-1 border border-gray-400 rounded-full">
                          <img src="backend/img/menu/users.jpg"
                            class="w-8 h-8 rounded-full"
                            alt="users"
                          />
                        </div>
                      </div>

                      <div class="mt-2 mb-1 text-lg font-semibold tracking-wide text-gray-800">
                        Data users
                      </div>

                      <div class="mt-2 mb-2 text-base font-medium text-gray-600">
                        {{ $users }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection
