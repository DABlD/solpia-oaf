@php
    $input = function($col, $id, $name, $additional = null, $type = "text"){
        echo "
            <div class='col-md-$col'>
                <div class='form-group'>
                    <label for='$id'>$name</label>
                    <input type='$type' class='form-control' id='$id' placeholder='Enter $name' $additional>
                </div>
            </div>
        ";
    }
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Application Form | SOLPIA</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('online/fonts/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/temposdusmus-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/icheck-boostrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/overlayScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/flatpickr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/select2.min.css') }}">

        <style>
            .main-header, .content-wrapper{
                margin-left: 0px !important;
            }

            .main-header{
                background-color: #009cd5;
            }

            #table td, #table th{
                text-align: center;
            }

            .row-head{
                background-color: #E7E8D1;
                height: 40px;
            }

            hr{
                width: 100%;
            }
        </style>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div class="preloader"></div>

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <img src="{{ asset("images/logo.png") }}" alt="LOGO" height="45">
                    <li class="nav-item">
                        <a class="nav-link" role="button">
                            <b><h3 style="color: black; font-family: roboto;">SOLPIA MARINE</h3></b>
                        </a>
                    </li>
                </ul>

                {{-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" role="button" href="{{ url('/') }}">
                            <i class="fa-solid fa-right-from-bracket">
                                Exit
                            </i>
                        </a>
                    </li>
                </ul> --}}
            </nav>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                {{-- <h1 class="m-0">Personal Medical Record</h1> --}}
                            </div>
                            <div class="col-sm-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active">List</li>
                                </ol> -->
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <section class="col-lg-8 offset-lg-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title" style="text-align: center; float: unset; font-size: 25px;">
                                            <b>Online Application Form</b>
                                        </h3>
                                    </div>

                                    <div class="card-body">
                                        {{-- START --}}

                                        <div class="row">
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label for='rank-applied'>Rank Applied</label>

                                                    <select id="rank-applied" class="form-control">
                                                        <option></option>
                                                        @foreach($categories as $category => $ranks)
                                                            <optgroup label="{{ $category }}"></optgroup>
                                                            @foreach($ranks as $rank)
                                                                <option value="{{ $rank->id }}" data-category="{{ $rank->category }}">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                                    {{ $rank->name }} ({{ $rank->abbr }})
                                                                </option>
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left;">
                                                <b style="font-size: 1.5rem; text-decoration: underline;">
                                                    Personal Information
                                                </b>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            {{ $input(4, 'fname', 'First Name') }}
                                            {{ $input(4, 'mname', 'Middle Name') }}
                                            {{ $input(4, 'lname', 'Last Name') }}
                                            {{ $input(4, 'birthday', 'Birthday') }}
                                            {{ $input(4, 'place_of_birth', 'Place of Birth') }}
                                            {{ $input(4, 'religion', 'Religion') }}

                                            {{ $input(3, 'height', 'Height (cm)') }}
                                            {{ $input(3, 'weight', 'Weight (kg)') }}
                                            {{ $input(3, 'blood_type', 'Blood Type') }}
                                            {{ $input(3, 'civil_status', 'Civil Status') }}

                                            {{ $input(12, 'address', 'Metro Manila Address') }}
                                            {{ $input(12, 'provincial_address', 'Provincial Address') }}

                                            {{ $input(6, 'contact', 'Contact Number') }}
                                            {{ $input(6, 'provincial_contact', 'Provincial Contact Number') }}
                                        </div>

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left;">
                                                <b style="font-size: 1.5rem; text-decoration: underline;">
                                                    Travel Documents
                                                </b>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Passport</b>
                                                </h3>
                                            </div>

                                            {{ $input(3, 'p_number', 'Number') }}
                                            {{ $input(3, 'p_issue_date', 'Issue Date') }}
                                            {{ $input(3, 'p_expiry_date', 'Expiry Date') }}

                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Seaman's Book</b>
                                                </h3>
                                            </div>

                                            {{ $input(3, 'sb_number', 'Number') }}
                                            {{ $input(3, 'sb_issue_date', 'Issue Date') }}
                                            {{ $input(3, 'sb_expiry_date', 'Expiry Date') }}

                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>License</b>
                                                </h3>
                                            </div>

                                            {{ $input(3, 'l_number', 'Number') }}
                                            {{ $input(3, 'l_issue_date', 'Issue Date') }}
                                            {{ $input(3, 'l_expiry_date', 'Expiry Date') }}

                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>GOC</b>
                                                </h3>
                                            </div>

                                            {{ $input(3, 'g_number', 'Number') }}
                                            {{ $input(3, 'g_issue_date', 'Issue Date') }}
                                            {{ $input(3, 'g_expiry_date', 'Expiry Date') }}

                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Ratings COP</b>
                                                </h3>
                                            </div>

                                            {{ $input(3, 'cop_number', 'Number') }}
                                            {{ $input(3, 'cop_issue_date', 'Issue Date') }}
                                            {{ $input(3, 'cop_expiry_date', 'Expiry Date') }}

                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>US Visa</b>
                                                </h3>
                                            </div>

                                            {{ $input(3, 'usv_number', 'Number') }}
                                            {{ $input(3, 'usv_issue_date', 'Issue Date') }}
                                            {{ $input(3, 'usv_expiry_date', 'Expiry Date') }}
                                        </div>

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left;">
                                                <b style="font-size: 1.5rem; text-decoration: underline;">
                                                    Sea Service
                                                </b>

                                                <div class="float-right" style="margin-top: 5px;">
                                                    <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Add" onclick="addSS()">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row ssrows">
                                        </div>

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left;">
                                                <b style="font-size: 1.5rem; text-decoration: underline;">
                                                    Educational Background
                                                </b>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Elementary</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'eb-e-course', 'Course') }}
                                                    {{ $input(4, 'eb-e-year', 'Year') }}
                                                    {{ $input(4, 'eb-e-school', 'School') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'eb-e-address', 'Address') }}                                                    
                                                </div>
                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>High School</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'eb-hs-course', 'Course') }}
                                                    {{ $input(4, 'eb-hs-year', 'Year') }}
                                                    {{ $input(4, 'eb-hs-school', 'School') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'eb-hs-address', 'Address') }}                                                    
                                                </div>
                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>College</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'eb-c-course', 'Course') }}
                                                    {{ $input(4, 'eb-c-year', 'Year') }}
                                                    {{ $input(4, 'eb-c-school', 'School') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'eb-c-address', 'Address') }}                                                    
                                                </div>
                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left;">
                                                <b style="font-size: 1.5rem; text-decoration: underline;">
                                                    Family Information
                                                </b>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Father</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-f-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-f-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-f-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-f-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-f-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-f-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-f-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Mother</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-m-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-m-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-m-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-m-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-m-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-m-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-m-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Spouse</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-s-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-s-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-s-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-s-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-s-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-s-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-s-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Children/s</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-c1-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-c1-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-c1-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-c1-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-c1-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-c1-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-c1-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class='col-md-3' style="margin: auto; text-align: center;"><h3><b></b></h3></div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-c2-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-c2-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-c2-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-c2-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-c2-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-c2-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-c2-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class='col-md-3' style="margin: auto; text-align: center;"><h3><b></b></h3></div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-c3-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-c3-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-c3-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-c3-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-c3-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-c3-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-c3-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class='col-md-3' style="margin: auto; text-align: center;"><h3><b></b></h3></div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-c4-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-c4-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-c4-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-c4-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-c4-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-c4-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-c4-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row">
                                            <div class='col-md-3' style="margin: auto; text-align: center;">
                                                <h3>
                                                    <b>Beneficiary/s</b>
                                                </h3>
                                            </div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-b1-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-b1-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-b1-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-b1-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-b1-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-b1-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-b1-address', 'Address') }}
                                                </div>
                                            </div>

                                            <hr>

                                            <div class='col-md-3' style="margin: auto; text-align: center;"><h3><b></b></h3></div>

                                            <div class="col-md-9">
                                                <div class="row">
                                                    {{ $input(4, 'fd-b2-fname', 'First Name') }}
                                                    {{ $input(4, 'fd-b2-mname', 'Middle Name') }}
                                                    {{ $input(4, 'fd-b2-lname', 'Last Name') }}
                                                    {{ $input(4, 'fd-b2-birthday', 'Birthday') }}
                                                    {{ $input(4, 'fd-b2-contact', 'Contact (Email, Tel, Mobile, etc.)') }}
                                                    {{ $input(4, 'fd-b2-occupation', 'Occupation') }}
                                                </div>

                                                <div class="row">
                                                    {{ $input(12, 'fd-b2-address', 'Address') }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left;">
                                                <b style="font-size: 1.5rem; text-decoration: underline;">
                                                    Company Required Information
                                                </b>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            {{ $input(3, 'tin', 'TIN') }}
                                            {{ $input(3, 'sss', 'SSS') }}
                                            {{ $input(3, 'clothes_size', 'Coverall Size') }}
                                            {{ $input(3, 'shoe_size', 'Shoe Size') }}
                                            {{ $input(3, 'waist', 'Waist (Inch)') }}
                                            {{ $input(3, 'sid', 'SID') }}
                                            {{ $input(3, 'EREG', 'E-REG') }}
                                            {{ $input(3, 'PARKA', 'PARKA') }}
                                        </div>

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left; margin: auto;">
                                                <h6 style="font-weight: bold;">
                                                    Kindly provide the following information starting from the most recent vessel.
                                                </h6>
                                            </div>
                                        </div>

                                        <br>

                                        {{-- DECK RECENT VESSELS --}}
                                        @for($i = 1; $i <= 5; $i++)
                                            <div class="row deck">
                                                {{ $input(2, "dc-vname$i", "Vessel Name") }}
                                                {{ $input(2, "dc-vtype$i", "Type of Cargo") }}
                                                {{ $input(2, "dc-lport$i", "Loading Port") }}
                                                {{ $input(2, "dc-dport$i", "Discharging Port") }}
                                                {{ $input(2, "dc-smanager$i", "Ship Manager") }}
                                                {{ $input(2, "dc-charterer$i", "Charterer") }}

                                                <hr>
                                            </div>
                                        @endfor

                                        {{-- ENGINE RECENT VESSELS --}}
                                        @for($i = 1; $i <= 5; $i++)
                                            <div class="row engine">
                                                {{ $input(4, "ec-vname$i", "Vessel Name") }}
                                                {{ $input(4, "ec-engine$i", "Main Engine Type & Maker") }}
                                                {{ $input(4, "ec-auengine$i", "Auxiliary Engine / Generator") }}
                                                {{ $input(4, "ec-ballast$i", "Ballast Water Management System") }}
                                                {{ $input(4, "ec-smanager$i", "Ship Manager") }}
                                                {{ $input(4, "ec-charterer$i", "Charterer") }}

                                                <hr>
                                            </div>
                                        @endfor

                                        <div class="row row-head">
                                            <div class="col-md-12" style="text-align: left; margin: auto;">
                                                <h6 style="font-weight: bold;">
                                                    Contact Person/s for background check: Starting from the most recent manning agent.
                                                </h6>
                                            </div>
                                        </div>

                                        <br>

                                        {{-- BACKGROUND CHECK --}}
                                        @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                {{ $input(3, "bc-manning$i", "Manning Agent") }}
                                                {{ $input(3, "bc-name$i", "Contact Person") }}
                                                {{ $input(3, "bc-designation$i", "Designation") }}
                                                {{ $input(3, "bc-contact$i", "Contact Number") }}

                                                <hr>
                                            </div>
                                        @endfor

                                        {{-- END --}}

                                        <div class="float-right" style="margin-top: 5px;">
                                            <a class="btn btn-success" data-toggle="tooltip" title="Save" onclick="save()">
                                                <i class="fas fa-save"></i> Save
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </section>
            </div>
        </div>

        <script src="{{ asset('online/js/jquery.min.js') }}"></script>
        <script src="{{ asset('online/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('online/js/bootstrap-bundle.min.js') }}"></script>
        <script src="{{ asset('online/js/moment.min.js') }}"></script>
        <script src="{{ asset('online/js/temposdusmus-bootstrap.min.js') }}"></script>
        <script src="{{ asset('online/js/overlayScrollbar.min.js') }}"></script>
        <script src="{{ asset('online/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('online/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('online/js/custom.js') }}"></script>
        <script src="{{ asset('online/js/select2.min.js') }}"></script>
        <script src="{{ asset('online/js/flatpickr.min.js') }}"></script>

        <script>
            var ctr = 1; // FOR SS COUNTING
            var rankCategory = null;

            $(document).ready(() => {
                $('#rank-applied').select2({placeholder: "Select Rank"});

                $('#rank-applied').on('change', e => {
                    $('.deck').show();
                    $('.engine').show();

                    let category = $(e.target).find('option:selected').data('category');

                    if(category.includes("DECK")){
                        $('.engine').hide();
                        rankCategory = "Deck";
                    }
                    else if(category.includes("ENGINE")){
                        $('.deck').hide();
                        rankCategory = "Engine";
                    }
                    else{
                        $('.engine').hide();
                        $('.deck').hide();
                        rankCategory = "Galley";
                    }
                });

                let config = {
                };

                $("[id$=issue_date], [id$=expiry_date], [id$=birthday], #birthday").flatpickr({
                    altInput: true,
                    altFormat: 'F j, Y',
                    dateFormat: 'Y-m-d',
                });
            });

            function addSS(){
                let rows = [
                    ['Vessel Name', 'vname'],
                    ['Rank', 'rank'],
                    ['Vessel Type', 'vtype'],
                    ['Gross Tonnage', 'grt'],
                    ['Flag', 'flag'],
                    ['KW', 'kw'],
                    ['Trade Route', 'trade'],
                    ['Salary', 'salary'],
                    ['Manning Agent', 'manning'],
                    ['Principal', 'principal'],
                    ['Crew Nationality', 'nationality'],
                    ['Sign On', 'son'],
                    ['Sign Off', 'soff'],
                    ['Remarks', 'remarks'],
                ];

                let string = "";
                rows.forEach(row => {
                    string += `
                        <div class='col-md-3'>
                            <div class='form-group'>
                                <label for='${row[1]}'>${row[0]}</label>
                                <input type='text' class='form-control' id='ss-${row[1]}${ctr}' placeholder='Enter ${row[0]}'>
                            </div>
                        </div>
                    `;

                    if(row[0] == "Vessel Name"){
                        string += "<div class='col-md-9'></div>";
                    }
                });

                $('.ssrows').append(string + "<hr>");
                $(`#ss-son${ctr}, #ss-soff${ctr}`).flatpickr({
                    altInput: true,
                    altFormat: 'F j, Y',
                    dateFormat: 'Y-m-d'
                });

                ctr++; // +1 SS
            }

            function save(){
                Swal.fire({
                    icon: "info",
                    title: "Confirmation",
                    text: "Before proceeding, do you confirm that all info is accurate?",
                    confirmButtonText: "Yes",
                    confirmButtonColor: successColor,
                    showCancelButton: true,
                    cancelButtonColor: errorColor,
                    cancelButtonText: "Back"
                }).then(result => {
                    if(result.value){
                        checkInput();
                    }
                });
            }

            function checkInput(){
                let crew = getCrewInfo();
                let travelDocs = getTravelDocs();
                let seaService = getSeaService();
                let educBG = getEducBG();
                let familyData = getFamilyData();
                let additionalInfo = getadditionalInfo();
                let recentVessel = rankCategory == "Deck" ? deckData() : rankCategory == "Engine" ? engineData() : null;
                let bgCheck = getBgCheck();

                console.log(crew, travelDocs, seaService, familyData, additionalInfo, recentVessel, bgCheck);
                $.ajax({
                    url: "{{ route('online.store') }}",
                    type: "POST",
                    data: {
                        crew: crew,
                        travelDocs: travelDocs,
                        seaService: seaService,
                        educBG: educBG,
                        familyData: familyData,
                        additionalInfo: additionalInfo,
                        recentVessel: recentVessel,
                        bgCheck: bgCheck,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: result => {
                        console.log(result);

                        Swal.fire({
                            icon: "success",
                            title: "Success",
                            text: "Kindly ask for confirmation from our Recruitment Department"
                        });
                    }
                })
            }

            function getCrewInfo(){
                return {
                    fname: $('#fname').val(),
                    mname: $('#mname').val(),
                    lname: $('#lname').val(),
                    birthday: $('#birthday').val(),
                    address: $('#address').val(),
                    contact: $('#contact').val(),
                    birth_place: $('#place_of_birth').val(),
                    religion: $('#religion').val(),
                    height: $('#height').val(),
                    weight: $('#weight').val(),
                    blood_type: $('#blood_type').val(),
                    civil_status: $('#civil_status').val(),
                    provincial_address: $('#provincial_address').val(),
                    provincial_contact: $('#provincial_contact').val(),
                    rank_id: $('#rank-applied').val()
                };
            }

            function getTravelDocs(){
                return [
                    {
                        type: "PASSPORT",
                        number: $('#p_number').val(),
                        issue_date: $('#p_issue_date').val(),
                        expiry_date: $('#p_expiry_date').val(),
                    },
                    {
                        type: "SEAMAN'S BOOK",
                        number: $('#sb_number').val(),
                        issue_date: $('#sb_issue_date').val(),
                        expiry_date: $('#sb_expiry_date').val(),
                    },
                    {
                        type: "COC",
                        number: $('#l_number').val(),
                        issue_date: $('#l_issue_date').val(),
                        expiry_date: $('#l_expiry_date').val(),
                    },
                    {
                        type: "GMDSS/GOC",
                        number: $('#g_number').val(),
                        issue_date: $('#g_issue_date').val(),
                        expiry_date: $('#g_expiry_date').val(),
                    },
                    {
                        type: "COP",
                        number: $('#cop_number').val(),
                        issue_date: $('#cop_issue_date').val(),
                        expiry_date: $('#cop_expiry_date').val(),
                    },
                    {
                        type: "US-VISA",
                        number: $('#usv_number').val(),
                        issue_date: $('#usv_issue_date').val(),
                        expiry_date: $('#usv_expiry_date').val(),
                    }
                ]
            }

            function getSeaService(){
                let ss = [];

                for(let i = 1; i < ctr; i++){
                    ss.push({
                        vessel_name: $(`#ss-vname${i}`).val(),
                        rank: $(`#ss-rank${i}`).val(),
                        vessel_type: $(`#ss-vtype${i}`).val(),
                        gross_tonnage: $(`#ss-grt${i}`).val(),
                        flag: $(`#ss-flag${i}`).val(),
                        bhp_kw: $(`#ss-kw${i}`).val(),
                        trade: $(`#ss-trade${i}`).val(),
                        previous_salary: $(`#ss-salary${i}`).val(),
                        manning_agent: $(`#ss-manning${i}`).val(),
                        principal: $(`#ss-principal${i}`).val(),
                        crew_nationality: $(`#ss-nationality${i}`).val(),
                        sign_on: $(`#ss-son${i}`).val(),
                        sign_off: $(`#ss-soff${i}`).val(),
                        remarks: $(`#ss-remarks${i}`).val()
                    });
                }

                return ss;
            }

            function getEducBG(){
                return [
                    {
                        type: "Elementary",
                        course: $('#eb-e-course').val(),
                        year: $('#eb-e-year').val(),
                        school: $('#eb-e-school').val(),
                        address: $('#eb-e-address').val()
                    },
                    {
                        type: "High School",
                        course: $('#eb-hs-course').val(),
                        year: $('#eb-hs-year').val(),
                        school: $('#eb-hs-school').val(),
                        address: $('#eb-hs-address').val()
                    },
                    {
                        type: "College",
                        course: $('#eb-c-course').val(),
                        year: $('#eb-c-year').val(),
                        school: $('#eb-c-school').val(),
                        address: $('#eb-c-address').val()
                    },
                ];
            }

            function getFamilyData(){
                let fd = [
                    {
                        type: "Father",
                        fname: $('#fd-f-fname').val(),
                        mname: $('#fd-f-mname').val(),
                        lname: $('#fd-f-lname').val(),
                        birthday: $('#fd-f-birthday').val(),
                        contact: $('#fd-f-contact').val(),
                        occupation: $('#fd-f-occupation').val(),
                        address: $('#fd-f-address').val(),
                    },
                    {
                        type: "Mother",
                        fname: $('#fd-m-fname').val(),
                        mname: $('#fd-m-mname').val(),
                        lname: $('#fd-m-lname').val(),
                        birthday: $('#fd-m-birthday').val(),
                        contact: $('#fd-m-contact').val(),
                        occupation: $('#fd-m-occupation').val(),
                        address: $('#fd-m-address').val(),
                    },
                    {
                        type: "Spouse",
                        fname: $('#fd-s-fname').val(),
                        mname: $('#fd-s-mname').val(),
                        lname: $('#fd-s-lname').val(),
                        birthday: $('#fd-s-birthday').val(),
                        contact: $('#fd-s-contact').val(),
                        occupation: $('#fd-s-occupation').val(),
                        address: $('#fd-s-address').val(),
                    },
                ];

                for(let i = 1; i <= 4; i++){
                    fd.push({
                        type: "Children",
                        fname: $(`#fd-c${i}-fname`).val(),
                        mname: $(`#fd-c${i}-mname`).val(),
                        lname: $(`#fd-c${i}-lname`).val(),
                        birthday: $(`#fd-c${i}-birthday`).val(),
                        contact: $(`#fd-c${i}-contact`).val(),
                        occupation: $(`#fd-c${i}-occupation`).val(),
                        address: $(`#fd-c${i}-address`).val(),
                    });
                }

                for(let i = 1; i <= 2; i++){
                    fd.push({
                        type: "Beneficiary",
                        fname: $(`#fd-b${i}-fname`).val(),
                        mname: $(`#fd-b${i}-mname`).val(),
                        lname: $(`#fd-b${i}-lname`).val(),
                        birthday: $(`#fd-b${i}-birthday`).val(),
                        contact: $(`#fd-b${i}-contact`).val(),
                        occupation: $(`#fd-b${i}-occupation`).val(),
                        address: $(`#fd-b${i}-address`).val(),
                    });
                }

                return fd;
            }

            function getadditionalInfo(){
                return {
                    tin: $('#tin').val(),
                    sss: $('#sss').val(),
                    shoe_size: $('#shoe_size').val(),
                    clothes_size: $('#clothes_size').val(),
                    waistline: $('#waist').val(),
                    sid: $('#sid').val(),
                    ereg: $('#EREG').val(),
                    parka: $('#PARKA').val(),
                };
            }

            function deckData(){
                let dd = [];

                for(let i = 1; i <= 5; i++){
                    dd.push({
                        vessel_name: $(`#dc-vname${i}`).val(),
                        type_of_cargo: $(`#dc-vtype${i}`).val(),
                        loading_port: $(`#dc-lport${i}`).val(),
                        discharging_port: $(`#dc-dport${i}`).val(),
                        ship_manager: $(`#dc-smanager${i}`).val(),
                        charterer: $(`#dc-charterer${i}`).val(),
                    })
                };

                return dd;
            }

            function engineData(){
                let ed = [];

                for(let i = 1; i <= 5; i++){
                    ed.push({
                        vessel_name: $(`#ec-vname${i}`).val(),
                        main_engine: $(`#ec-engine${i}`).val(),
                        aux_engine: $(`#ec-auengine${i}`).val(),
                        ballast_system: $(`#ec-ballast${i}`).val(),
                        ship_manager: $(`#ec-smanager${i}`).val(),
                        charterer: $(`#ec-charterer${i}`).val(),
                    })
                };

                return ed;
            }

            function getBgCheck(){
                let bg = [];

                for(let i = 1; i <= 4; i++){
                    bg.push({
                        manning_agent: $(`#bc-manning${i}`).val(),
                        name: $(`#bc-name${i}`).val(),
                        designation: $(`#bc-designation${i}`).val(),
                        contact: $(`#bc-contact${i}`).val()
                    });
                }

                return bg;
            }
        </script>
    </body>
</html>