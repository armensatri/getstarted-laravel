@extends('backend.template.main')

@section('content-backend')
  <div class="content">
    <div class="p-4 mx-auto">
      <section class="w-full px-4 mb-2">
        <div class="app-content">
          <div class="app-content-title">
            {{ $title }}
          </div>
        </div>
      </section>

      @if (session()->has('alert'))
        @include('sweetalert::alert')
      @endif

      <section class="w-full px-4 mt-8 mb-5">
        <div class="max-w-[85rem] mx-auto">
          <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto min-w-full">
              <div class="p-1.5 inline-block xl:max-w-full align-middle leading-none">
                @include('backend.sbreadcrumb.statuses.index')

                <div class="overflow-hidden app-table-border">
                  <div class="grid app-table-grid">
                    <x-description
                      table-name="Statuses"
                      :page-data="$statuses"
                    />

                    <div class="table-header">
                      <div class="inline-flex items-center gap-x-2">
                        <div class="refresh">
                          <x-refresh
                            :route="route('statuses.index')"
                          />
                        </div>

                        <div class="search">
                          <form action="/statuses">
                            <x-search
                              search="statuses"
                              placeholder="Search data statuses"
                            />
                          </form>
                        </div>

                        <div class="backup">
                          <x-backup
                            table-name="statuses"
                          />
                        </div>

                        <div class="button-create">
                          <x-button-create
                            :route="route('statuses.create')"
                            button-name="status"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                      <tr>
                        <x-th
                          name="no"
                        />
                        <x-th
                          name="id"
                        />
                        <x-th
                          name="ss"
                        />
                        <x-th
                          name="name"
                        />
                        <x-th
                          name="description"
                        />
                        <x-th
                          name="url"
                        />
                        <x-th-action/>
                      </tr>
                    </thead>

                    <tbody class="tbody">
                      @foreach ($statuses as $status)
                        <tr>
                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$loop->iteration . '.'"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$status->id"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$status->ss"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <x-td-var-bg
                              :bg="$status->bg"
                              :text="$status->text"
                              :var="$status->name"
                            />
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <x-td-var
                              :var="$status->description"
                            />
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <x-td-var
                              :var="$status->url"
                            />
                          </td>

                          <td class="size-px whitespace-nowrap">
                            <x-td-action
                              :id="$status->id"

                              :show="route(
                                'statuses.show', $status->url
                              )"

                              :edit="route(
                                'statuses.edit', $status->url
                                )"

                              :delete="route(
                                'statuses.destroy', $status->url
                              )"
                            />
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <div class="grid app-table-footer">
                    @if ($statuses->lastPage() > 1)
                      <x-pagination
                        :pagination="$statuses"
                      />
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endSection
