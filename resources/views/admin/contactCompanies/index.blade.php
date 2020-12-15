@extends('layouts.admin')
@section('content')
@can('contact_company_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.contact-companies.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.contactCompany.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.contactCompany.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ContactCompany">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.head_office') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.factory') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.thana') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.district') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.company_website') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.facbook') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactCompany.fields.source') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                 @php
                                 $thanas=DB::table('upazilas')->get()
                                 @endphp
                                @foreach($thanas as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                 @php
                                 $districts=DB::table('cities')->get()
                                 @endphp
                                {{-- {{$district->name ?? '' }} --}}
                                @foreach($districts as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @php
                                 $countries=DB::table('countries')->get()
                                 @endphp
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\ContactCompany::TYPE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\ContactCompany::SOURCE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactCompanies as $key => $contactCompany)
                        <tr data-entry-id="{{ $contactCompany->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $contactCompany->id ?? '' }}
                            </td>
                            <td>
                                {{ $contactCompany->company_name ?? '' }}
                            </td>
                            <td>
                                {{ $contactCompany->company_address ?? '' }}
                            </td>
                            <td>
                                {{ $contactCompany->head_office ?? '' }}
                            </td>
                            <td>
                                {{ $contactCompany->company_email ?? '' }}
                            </td>
                            <td>
                                {{ $contactCompany->factory ?? '' }}
                            </td>
                            <td>
                            @php
                               $thana=DB::table('upazilas')->where('id',$contactCompany->thana)->first()
                            @endphp

                                {{$thana->name ?? '' }}
                               
                            </td>
                            <td>
                            @php
                               $district=DB::table('cities')->where('id',$contactCompany->district)->first()
                            @endphp
                                {{$district->name ?? '' }}
                            </td>
                            <td>
                                @php
                               $country=DB::table('countries')->where('id',$contactCompany->country)->first()
                            @endphp
                                {{$country->name ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\ContactCompany::TYPE_SELECT[$contactCompany->type] ?? '' }}
                            </td>
                            <td>
                                {{ $contactCompany->company_website ?? '' }}
                            </td>
                            <td>
                                {{ $contactCompany->facbook ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\ContactCompany::SOURCE_SELECT[$contactCompany->source] ?? '' }}
                            </td>
                            <td>
                                @can('contact_company_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.contact-companies.show', $contactCompany->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('contact_company_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.contact-companies.edit', $contactCompany->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('contact_company_delete')
                                    <form action="{{ route('admin.contact-companies.destroy', $contactCompany->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('contact_company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.contact-companies.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-ContactCompany:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value
      table
        .column($(this).parent().index())
        .search(value, strict)
        .draw()
  });
})

</script>
@endsection