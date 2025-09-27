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
            <x-md-header
              :image="asset('/image/default.png')"
              alt="visitor"
              title="Data count"
              description="Jumlah data dalam system"
            />
          </div>

          <div class="w-full mt-12 border-b border-gray-200"></div>

          <div class="max-w-6xl mx-auto">
            <div class="mt-16">
              <div class="content">
                <div class="max-w-screen-xl px-4 mx-auto text-center">
                  <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 xl:grid-cols-3">
                    <x-data-card-count
                      hover="users"
                      :route="route('users.index')"
                      img="/backend/img/menu/users.jpg"
                      alt="users"
                      data-name="Data users"
                      :data-count="$users"
                    />

                    <x-data-card-count
                      hover="roles"
                      :route="route('roles.index')"
                      img="/backend/img/menu/roles.jpg"
                      alt="roles"
                      data-name="Data roles"
                      :data-count="$roles"
                    />

                    <x-data-card-count
                      hover="permissions"
                      :route="route('permissions.index')"
                      img="/backend/img/menu/permissions.jpg"
                      alt="permissions"
                      data-name="Data permissions"
                      :data-count="$permissions"
                    />

                    <x-data-card-count
                      hover="menus"
                      :route="route('menus.index')"
                      img="/backend/img/menu/menus.jpg"
                      alt="menus"
                      data-name="Data menus"
                      :data-count="$menus"
                    />

                    <x-data-card-count
                      hover="submenus"
                      :route="route('submenus.index')"
                      img="/backend/img/menu/submenus.jpg"
                      alt="submenus"
                      data-name="Data submenus"
                      :data-count="$submenus"
                    />

                    <x-data-card-count
                      hover="explores"
                      :route="route('explores.index')"
                      img="/backend/img/menu/explores.png"
                      alt="explores"
                      data-name="Data explores"
                      :data-count="$explores"
                    />

                    <x-data-card-count
                      hover="navigations"
                      :route="route('navigations.index')"
                      img="/backend/img/menu/navigations.png"
                      alt="navigations"
                      data-name="Data navigations"
                      :data-count="$navigations"
                    />

                    <x-data-card-count
                      hover="statuses"
                      :route="route('statuses.index')"
                      img="/backend/img/menu/statuses.jpg"
                      alt="statuses"
                      data-name="Data statuses"
                      :data-count="$statuses"
                    />
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
