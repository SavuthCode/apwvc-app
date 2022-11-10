<?php $general_setting = DB::table('general_settings')->find(1); ?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{url('logo', $general_setting->site_logo)}}" />
    <title>{{$general_setting->site_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{url('manifest.json')}}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/dripicons/webfont.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,500,700">
    <link rel="stylesheet" href="<?php echo asset('css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/keyboard/css/keyboard.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/daterange/css/daterangepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('vendor/datatable/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/dropzone.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>">
    <style type="text/css">
        
        body {
            font-family: "Khmer OS Content";
        }
        .logo {
            padding: 10px;
            margin: 0 auto;
            background: #2640a0;
        }
        .logo img {
            border-radius: 100px;
            text-align: center;
            width: 10%;
            height: 10%;
        }

        .logo .logo-name {
            color: #fff;
            float: right;
            font-family: "khmer OS Muol",sans-serif;
            text-align: center;
            font-size: 11px;
        }

        .title {
            color: #fff;
            text-align: center;
            font-family: "khmer OS Muol",sans-serif;
            background: #1c225d;
            padding: 10px;
        }

        .profile-image {
            margin: 0 auto;
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-image img {
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 150px;
            height: 150px;
        }

        .table {
            color: #111;
            text-transform: uppercase;
        }

        .table th {
            vertical-align: middle;
            width: 50%;
        }

        .table td {
            vertical-align: middle;
            width: 50%;
        }

    </style>

</head>
<body>
    <div class="logo">
              <div class="logo-name">
                សាមគមលើកកម្ពស់ពលករ អតីតពលករដើម្បីសប្បុរសធម៌ 
                <br/>
                Association for the Promotion of Workers and Veterans for Charity
            </div>
            <img src="http://192.168.0.103:8000/logo/20221026080732.jpg"/>
    </div>
    <div class="title">
        {{ trans("file.id_card") }}
    </div>
    <br>
    <div class="container-fluid">
        <div class="card">
            <div style="width:100%;display: inline;">
                <a class="btn btn-success" style="width:50%;float: left;border-radius: 0px;" href="{{ url('language_switch/kh') }}" class="btn btn-link"> ភសាខ្មែរ</a>
                <a class="btn btn-primary" style="width:50%;float: left;border-radius: 0px;" href="{{ url('language_switch/en') }}" class="btn btn-link"> English</a>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div>
            <div>
                <div class="profile-image">
                    <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"/>
                </div>
            </div>
            <div style="border-left: 1px solid #eee;border-right: 1px solid #eee;border-bottom: 1px solid #eee;background: #fff;">
                <table class="table tabl">
                    <tbody>
                        <tr>
                            <th>{{ trans("file.name") }}</th>
                            <td>{{ $employee->first_name }} {{ $employee->last_name }} </td>
                        </tr>
                        <tr>
                            <th>{{ trans("file.position") }}</th>
                            <td>{{ $employee->position }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans("file.email") }}</th>
                            <td>{{ $employee->gender }}</td>
                        </tr>
                         <tr>
                            <th>{{ trans("file.nationality") }}</th>
                            <td>Khmer</td>
                        </tr>
                        <tr>
                            <th>{{ trans("file.dob") }}</th>
                            <td>{{ $employee->dob }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans("file.address") }}</th>
                            <td>{{ $employee->position }}</td>
                        </tr>
                           <tr>
                            <th>{{ trans("file.code") }}</th>
                            <td>{{ $employee->code }}</td>
                        </tr>
                         <tr>
                            <th>{{ trans("file.phone") }}</th>
                            <td>{{ $employee->phone }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans("file.created_at") }}</th>
                            <td>{{ date("d-m-Y",strtotime($employee->created_at)) }}</td>
                        </tr>
                         <tr>
                            <th>{{ trans("file.date_expiry") }}</th>
                            <td>{{ $employee->date_expiry }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br/>
            <div class="alert alert-danger text-center">
                {{ trans("file.warning") }}
                <br>
                <a href="#" class="text-info">
                     <b>WWW.APWVC.COM</b>
                </a>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>
