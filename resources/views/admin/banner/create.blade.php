@extends('layout.main')
@section('content')
    @if($errors->has('title'))
        <div class="alert alert-danger alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $errors->first('title') }}</div>
    @endif
    @if($errors->has('image'))
        <div class="alert alert-danger alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $errors->first('image') }}</div>
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div>
    @endif
    @if(session()->has('not_permitted'))
        <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div>
    @endif

    <section>
        <div class="table-responsive">
            <button class="btn btn-info" data-toggle="modal" data-target="#mainBannerAddModal"><i class="dripicons-plus"></i> {{trans('file.Main Banner Add')}} </button>&nbsp;
            <button class="btn btn-info" data-toggle="modal" data-target="#secondaryBannerAddModal"><i class="dripicons-plus"></i> {{trans('file.Secondary Banner Add')}} </button>&nbsp;
            <button class="btn btn-info" data-toggle="modal" data-target="#popupBannerAddModal"><i class="dripicons-plus"></i> {{trans('file.Popup Banner Add')}} </button>&nbsp;
            <button class="btn btn-primary" data-toggle="modal" data-target="#importBrand"><i class="dripicons-copy"></i> {{trans('file.Import Banner')}}</button>
        </div>
        <div class="table-responsive">
            <table id="banner-table" class="table" style="width: 100%">
                <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th>{{trans('file.Image')}}</th>
                    <th>{{trans('file.Banner Type')}}</th>
                    <th>{{trans('file.Published')}}</th>
                    <th class="not-exported">{{trans('file.action')}}</th>
                </tr>
                </thead>
            </table>
        </div>
    </section>

    <div id="mainBannerAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['route' => 'banners.store', 'method' => 'post', 'files' => true]) !!}
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Main Banner Add')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    <div class="form-group">
                        <label>{{trans('file.Url')}} *</label>
                        {{Form::text('url',null,array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Type banner url...'))}}
                    </div>
                    <input type="hidden" name="banner_type" value="Main Banner">
                    <div class="form-group">
                        <label>{{trans('file.Image')}}</label>
                        {{Form::file('image', array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <div id="secondaryBannerAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['route' => 'banners.store', 'method' => 'post', 'files' => true]) !!}
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Secondary Banner Add')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    <div class="form-group">
                        <label>{{trans('file.Url')}} *</label>
                        {{Form::text('url',null,array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Type banner url...'))}}
                    </div>
                    <input type="hidden" name="banner_type" value="Footer Banner">
                    <div class="form-group">
                        <label>{{trans('file.Image')}}</label>
                        {{Form::file('image', array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <div id="popupBannerAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['route' => 'banners.store', 'method' => 'post', 'files' => true]) !!}
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Popup Banner Add')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    <div class="form-group">
                        <label>{{trans('file.Url')}} *</label>
                        {{Form::text('url',null,array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Type banner url...'))}}
                    </div>
                    <input type="hidden" name="banner_type" value="Popup Banner">
                    <div class="form-group">
                        <label>{{trans('file.Image')}}</label>
                        {{Form::file('image', array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>




    <div id="importBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['route' => 'banner.import', 'method' => 'post', 'files' => true]) !!}
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('file.Import Banner')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    <p>{{trans('file.The correct column order is')}} (title*, image [file name]) {{trans('file.and you must follow this')}}.</p>
                    <p>{{trans('file.To display Image it must be stored in')}} images/brand {{trans('file.directory')}}</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{trans('file.Upload CSV File')}} *</label>
                                {{Form::file('file', array('class' => 'form-control','required'))}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> {{trans('file.Sample File')}}</label>
                                <a href="sample_file/sample_brand.csv" class="btn btn-info btn-block btn-md"><i class="dripicons-download"></i>  {{trans('file.Download')}}</a>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <div id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                {{ Form::open(['route' => ['banners.update', 1], 'method' => 'PUT', 'files' => true] ) }}
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"> {{trans('file.Update Banner')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    <div class="form-group">
                        <input type="hidden" name="banner_id">
                        <label>{{trans('file.Url')}} *</label>
                        {{Form::text('url',null, array('required' => 'required', 'class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        <label>{{trans('file.Image')}}</label>
                        {{Form::file('image', array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $("ul#setting").siblings('a').attr('aria-expanded','true');
        $("ul#setting").addClass("show");
        $("ul#setting #banner-menu").addClass("active");

        function confirmDelete() {
            if (confirm("If you delete category all products under this category will also be deleted. Are you sure want to delete?")) {
                return true;
            }
            return false;
        }

        var banner_id = [];
        var user_verified = <?php echo json_encode(env('USER_VERIFIED')) ?>;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('change', '.status', function () {
            var id = $(this).attr("id");
            if ($(this).prop("checked") == true) {
                var status = 1;
            } else if ($(this).prop("checked") == false) {
                var status = 0;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('status')}}",
                method: 'POST',
                data: {
                    id: id,
                    status: status
                },
                success: function (data) {
                    if (data == 1) {
                        toastr.success('Banner published successfully');
                    } else {
                        toastr.success('Banner unpublished successfully');
                    }
                }
            });
        });

        $(document).on("click", ".open-EditBannerDialog", function(){
            var url = "banners/"
            var id = $(this).data('id').toString();
            url = url.concat(id).concat("/edit");
            $.get(url, function(data){
                $("input[name='url']").val(data['url']);
                $("input[name='banner_id']").val(data['id']);
            });
        });

        $('#banner-table').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax":{
                url:"banner/banner-data",
                dataType: "json",
                type:"post"
            },
            "createdRow": function( row, data, dataIndex ) {
                $(row).attr('data-id', data['id']);
            },
            "columns": [
                {"data": "key"},
                {"data": "photo"},
                {"data": "banner_type"},
                {"data": "published"},
                {"data": "options"},
            ],
            'language': {
                'lengthMenu': '_MENU_ {{trans("file.records per page")}}',
                "info":      '<small>{{trans("file.Showing")}} _START_ - _END_ (_TOTAL_)</small>',
                "search":  '{{trans("file.Search")}}',
                'paginate': {
                    'previous': '<i class="dripicons-chevron-left"></i>',
                    'next': '<i class="dripicons-chevron-right"></i>'
                }
            },
            order:[['2', 'asc']],
            'columnDefs': [
                {
                    "orderable": false,
                    'targets': [0, 1, 3, 4]
                },
                {
                    'render': function(data, type, row, meta){
                        if(type === 'display'){
                            data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                        }

                        return data;
                    },
                    'checkboxes': {
                        'selectRow': true,
                        'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                    },
                    'targets': [0]
                }
            ],
            'select': { style: 'multi',  selector: 'td:first-child'},
            'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],

            dom: '<"row"lfB>rtip',
            buttons: [
                {
                    extend: 'pdf',
                    text: '{{trans("file.PDF")}}',
                    exportOptions: {
                        columns: ':visible:Not(.not-exported)',
                        rows: ':visible'
                    },
                    footer:true
                },
                {
                    extend: 'csv',
                    text: '{{trans("file.CSV")}}',
                    exportOptions: {
                        columns: ':visible:Not(.not-exported)',
                        rows: ':visible'
                    },
                    footer:true
                },
                {
                    extend: 'print',
                    text: '{{trans("file.Print")}}',
                    exportOptions: {
                        columns: ':visible:Not(.not-exported)',
                        rows: ':visible'
                    },
                    footer:true
                },
                {
                    text: '{{trans("file.delete")}}',
                    className: 'buttons-delete',
                    action: function ( e, dt, node, config ) {
                        if(user_verified == '1') {
                            banner_id.length = 0;
                            $(':checkbox:checked').each(function(i){
                                if(i){
                                    banner_id[i-1] = $(this).closest('tr').data('id');
                                }
                            });
                            if(banner_id.length && confirm("If you delete category all products under this category will also be deleted. Are you sure want to delete?")) {
                                $.ajax({
                                    type:'POST',
                                    url:'banner/deletebyselection',
                                    data:{
                                        bannerIdArray: banner_id
                                    },
                                    success:function(data){
                                        dt.rows({ page: 'current', selected: true }).deselect();
                                    }
                                });
                                dt.rows({ page: 'current', selected: true }).remove().draw(false);
                            }
                            else if(!banner_id.length)
                                alert('No category is selected!');
                        }
                        else
                            alert('This feature is disable for demo!');
                    }
                },
                {
                    extend: 'colvis',
                    text: '{{trans("file.Column visibility")}}',
                    columns: ':gt(0)'
                },
            ],
        } );

    </script>
@endsection
