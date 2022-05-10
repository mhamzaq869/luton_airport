<?php
if(!auth()->user()->hasPermission('admin.logs.index')) {
    abort(403);
}
?>
@extends('admin.index')

@section('title', trans('logs.page_title'))
@section('subtitle', /*'<i class="fa fa-file-text-o"></i> '.*/ trans('logs.page_title') )

@section('subheader')
    <link rel="stylesheet" href="{{ asset_url('plugins','data-tables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset_url('plugins','data-tables/extensions/Buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset_url('plugins','data-tables/extensions/Buttons/css/buttons.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset_url('plugins','data-tables/extensions/ColReorder/css/colReorder.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset_url('plugins','data-tables/extensions/ColReorder/css/colReorder.bootstrap.min.css') }}">

    <style>
        .stack {
            font-size: 0.85em;
        }

        .date {
            min-width: 75px;
        }

        .text {
            word-break: break-all;
        }

        a.llv-active {
            z-index: 2;
            background-color: #f5f5f5;
            border-color: #777;
        }

        .list-group-item {
            word-wrap: break-word;
            display: initial;
            margin-bottom: initial;
        }

        .folder {
            padding-top: 15px;
        }

        /*.div-scroll {*/
        /*    height: 80vh;*/
        /*    overflow: hidden auto;*/
        /*}*/
        .nowrap {
            white-space: nowrap;
        }

    </style>
@endsection

@section('subcontent')
    <div class="box-header" style="left: -6px;">
        <h4 class="box-title">
            {{ trans('logs.page_title') }}
        </h4>

        <div class="box-tools pull-right" style="right: 0;">
            <div class="eto-field eto-field-search" style="display: inline;">
                <div class="eto-field-value clearfix">
                    <input style="border: 1px solid #ccc;padding: 4px 12px;" id="search" class="eto-js-inputs eto-js-search" data-eto-name="search" value="" placeholder=" {{ trans('activity.form.search') }}" type="text">
                </div>
                <div class="eto-field-placeholder hidden" style="top: -19px;"> {{ trans('activity.form.search') }}</div>
            </div>
        </div>
    </div>

<div class="log-manager">
  <div class="row">
    <div class="col-sm-12">
        @foreach($folders as $folder)
            <a href="?f={{ \Illuminate\Support\Facades\Crypt::encrypt($folder) }}" class="btn btn-xs btn-default">
              <span class="fa fa-folder"></span> {{$folder}}
            </a>
            @if ($current_folder == $folder)
              <div class="list-group folder">
                @foreach($folder_files as $file)
                  <a href="?l={{ \Illuminate\Support\Facades\Crypt::encrypt($file) }}&f={{ \Illuminate\Support\Facades\Crypt::encrypt($folder) }}"
                     class="btn btn-xs @if ($current_file == $file) btn-success @else btn-default @endif">
                    {{$file}}
                  </a>
                @endforeach
              </div>
            @endif
        @endforeach
        @foreach($files as $file)
          <a href="?l={{ \Illuminate\Support\Facades\Crypt::encrypt($file) }}"
             class="btn btn-xs @if ($current_file == $file) btn-success @else btn-default @endif">
            {{$file}}
          </a>
        @endforeach
    </div>
    <div class="col-sm-12">
      @if ($logs === null)
        <div>
          Log file >50M, please download it.
        </div>
      @else
        <table id="table-log" class="table table-hover" data-ordering-index="{{ $standardFormat ? 2 : 0 }}">
          <thead>
          <tr>
            @if ($standardFormat)
              <th>Level</th>
              <th>Context</th>
              <th>Date</th>
            @else
              <th>Line number</th>
            @endif
            <th>Content</th>
          </tr>
          </thead>
          <tbody>

          @foreach($logs as $key => $log)
            <tr data-display="stack{{{$key}}}">
              @if ($standardFormat)
                <td class="nowrap text-{{{$log['level_class']}}}">
                  <span class="fa fa-{{{$log['level_img']}}}" aria-hidden="true"></span>&nbsp;&nbsp;{{$log['level']}}
                </td>
                <td class="text">{{$log['context']}}</td>
              @endif
              <td class="date">{{{$log['date']}}}</td>
              <td class="text">
                @if ($log['stack'])
                  <button type="button"
                          class="float-right expand btn btn-outline-dark btn-sm mb-2 ml-2"
                          data-display="stack{{{$key}}}">
                    <span class="fa fa-search"></span>
                  </button>
                @endif
                {{{$log['text']}}}
                @if (isset($log['in_file']))
                  <br/>{{{$log['in_file']}}}
                @endif
                @if ($log['stack'])
                  <div class="stack" id="stack{{{$key}}}"
                       style="display: none; white-space: pre-wrap;">{{{ trim($log['stack']) }}}
                  </div>
                @endif
              </td>
            </tr>
          @endforeach

          </tbody>
        </table>
      @endif
      <div class="p-3">

      </div>
    </div>
  </div>
</div>
@stop

@section('subfooter')
<script src="{{ asset_url('plugins','data-tables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset_url('plugins','data-tables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset_url('plugins','data-tables/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset_url('plugins','data-tables/extensions/Buttons/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset_url('plugins','data-tables/extensions/Buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset_url('plugins','data-tables/extensions/Buttons/js/buttons.server-side.js') }}"></script>
<script src="{{ asset_url('plugins','data-tables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
@include('layouts.eto-js')

<script>
$(document).ready(function () {
    var initialize = false;
    if (ETO.model === false) {
        ETO.init({config: [''], lang: ['user']}, 'log_manager');
    }

    ETO.updateFormPlaceholderInit($('.eto-field-search'));

    $('#table-log tr').on('click', function () {
        $('#' + $(this).data('display')).toggle();
    });

    var datatable = $('#table-log').DataTable({
        order: [$('#table-log').data('orderingIndex'), 'desc'],
        stateSave: true,
        stateSaveCallback: function (settings, data) {
            window.localStorage.setItem("ETO_Log_Datatable", JSON.stringify(data));
        },
        stateLoadCallback: function (settings) {
            var data = JSON.parse(window.localStorage.getItem("ETO_Log_Datatable"));
            if (data) { data.start = 0; }
            return data;
        },
        pagingType: 'full_numbers',
        // dom: ETO.datatable.domWithSearch,
        dom: '<"row topContainer"<"col-xs-12 col-sm-12 col-md-12 dataTablesHeaderLeft">' +
            '<"col-xs-12 col-sm-6 col-md-5 dataTablesHeaderRight">><"dataTablesBody"rt>' +
            '<"row bottomContainer"<"col-xs-12 col-sm-4 col-md-5 pull-right dataTablesFooterRight"p>' +
            '<"col-xs-12 col-sm-3 col-md-3 pull-right dataTablesFooterRight">' +
            '<"col-xs-12 col-sm-5 col-md-4 dataTablesFooterLeft"lB>>',
        buttons: ETO.datatable.buttons(),
        language: ETO.datatable.language(),
        @if ($standardFormat)
        columnDefs: [{
            targets:  [ 1 ],
            visible: false,
        }],
        @endif
        // colReorder: true,
        paging: true,
        scrollX: true,
        searching: true,
        ordering: true,
        lengthChange: true,
        info: true,
        autoWidth: false,
        stateDuration: 0,
        pageLength: 10,
        lengthMenu: [5, 10, 25, 50],
        drawCallback: function(settings) {
            @if($current_file)
            if (initialize === false) {
                $('.dt-buttons').append('<a class="btn btn-default buttons-reload btn-datatable btn-sm" href="?dl={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}">' +
                    '<span class="fa fa-download" title="Download file"></span>' +
                    '</a>' +
                    '<a class="btn btn-default buttons-reload btn-datatable btn-sm" id="clean-log" href="?clean={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}">' +
                    '<span class="fa fa-pencil-square-o" title="Clean file"></span>' +
                    '</a>' +
                    '<a class="btn btn-default buttons-reload btn-datatable btn-sm" id="delete-log" href="?del={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}">' +
                    '<span class="fa fa-trash" title="Delete file"></span>' +
                    '</a>' +
                        @if(count($files) > 1)
                            '<a class="btn btn-default buttons-reload btn-datatable btn-sm" id="delete-all-log" href="?delall=true{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}">' +
                    '<span class="fa fa-trash" title="Delete all files"> +</span>' +
                    '</a>' +
                        @endif
                            '');
            }
            @endif
       }
    });
    $('#delete-log, #clean-log, #delete-all-log').click(function () {
        return confirm('Are you sure?');
    });

    $('.eto-js-search').on('keyup', function(e) {
        datatable.search($(this).val()).draw();
    });

    initialize = true;
});
</script>
@stop
