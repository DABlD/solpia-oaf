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
        <title>{{ $title }} | SOLPIA</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('online/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/temposdusmus-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/icheck-boostrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/overlayScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('online/css/custom.css') }}">

        <style>
            .main-header, .content-wrapper{
                margin-left: 0px !important;
            }

            .main-header{
                background-color: #009cd5;
            }

            p{
                text-indent: 30px;
            }
        </style>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <div class="preloader"></div>

            <div class="content-wrapper">

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <section class="col-lg-8 offset-lg-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title" style="text-align: center; float: unset; font-size: 25px;">
                                            <b>Privacy Policy</b>
                                            <br>
                                            <b>Established : Oct 24, 2019</b>
                                        </h3>
                                    </div>

                                    <div class="card-body">
                                        {{-- START --}}
                                        <p>In compliance with the Data Privacy Act of 2012 otherwise known as Republic Act 10173 and its Implementing Rules and Regulations (IRR), this Privacy Notice of Solpia Marine & Ship Management, Inc. (“Solpia Marine,” “the “Company” (PIC’s or PIP’s) as controller and processor of your personal data explains how we process and manage the information that we collect, use, retain, disclose and dispose from you, our data subjects (applicants, candidates, employed and vacationing crew). It also imparts guidance on how to contact the Company should you have any concern with regard to the management of your information.</p>

                                        <p>The Company respect your privacy, and we understand the importance of protecting your personal data. This Privacy Policy describes the practices concerning the information collected through the use of the Company website.</p>

                                        <p>We encourage you to read this Privacy Policy carefully. If you have any questions about our privacy practices, please refer to the end of this Privacy Policy for information on how to contact us.</p>


                                        <b>I. Collection and use of personal data</b>
                                        <p>The “Company” (PIC’s or PIP’s) may collect and process our needed personal information from you. This is the information that may identify you such as the number of your page views, link clicks, and login times. Your information may be kept in an identifiable format, or in an aggregate format which means that you cannot reasonably be identified from it. We provide further detail on the type of info we collect, and how we collect and store any information which may include among others:</p>

                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-11">
                                                A. Personal Information
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li>Full Name(Surname, First, Middle)</li>
                                                            <li>Birth Place</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li>Rank</li>
                                                            <li>Contact Numbers</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li>Home Address</li>
                                                            <li>Email Address</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                B. Sensitive Personal Information
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li>Birthdate / Age</li>
                                                            <li>Nationality</li>
                                                            <li>Religion</li>
                                                            <li>Gender</li>
                                                            <li>BMI</li>
                                                            <li>Blood Type</li>
                                                            <li>Educational Attainment & Records</li>
                                                            <li>Marital Status</li>
                                                            <li>Medical Records & Vaccination</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li>Flag State Documents/Information</li>
                                                            <li>Employment & Sea Service Records</li>
                                                            <li>Travel Visa Information</li>
                                                            <li>Training Certificates/Information</li>
                                                            <li>COC/COE and/or STCW Certificates</li>
                                                            <li>Signature</li>
                                                            <li>Photo</li>
                                                            <li>NBI Clearance</li>
                                                            <li>Personal Bank Details</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li>
                                                                Information about your next of kin / family members / dependents / allottees / beneficiaries
                                                            </li>
                                                            <li>
                                                                Information of government issued Identification Cards such as Passport Number, Seaman's Book Number, SSS Number, Pag-Ibig Number, PhilHealth Number, and TIN Number
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                C. Other Information
                                                <br>
                                                The Company may request other information that will help in the improvement of our services
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li>Evaluation/Appraisal Report</li>
                                                            <li>Background Employment Checking</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul>
                                                            <li>Images via CCTV</li>
                                                            <li>Other similar recording devices</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                {{-- END INDENTED --}}
                                            </div>
                                        </div>

                                        <b>II. Purpose / Method of Use</b>
                                        <br>

                                        <p>We may use information that we collect about you to address your needs and provide you with better service based on the following legitimate purposes:</p>

                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-11">
                                                A. Primary Purposes
                                                <br>
                                                As a manning company, personal information is collected and processed for employment and deployment purposes.

                                                <ul>
                                                    <li>
                                                        Recruitment
                                                        <br>
                                                        <ul>
                                                            <li>Establish your identity and qualification as a job applicant/candidate;</li>
                                                            <li>Obtain approval and acceptance from our principal for your employment;</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        Education
                                                        <br>
                                                        <ul>
                                                            <li>Training and Development Processes</li>
                                                            <li>Process application, registration or enquiries</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        Deployment
                                                        <br>
                                                        <ul>
                                                            <li>Preparation of all joining formalities</li>
                                                            <li>Comply with statutory and regulatory regulations on crew certification as well as specific principal/shipowner's requirements;</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        Planning & Rotation
                                                        <br>
                                                        <ul>
                                                            <li>Preparation of Crew list and vessel's Crew Replacement Plan;</li>
                                                            <li>Provide monitoring mechanisms for assuring readiness and completion of embarking crew;</li>
                                                            <li>Support for crew career development and promotional procedures;</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        Accounting
                                                        <br>
                                                        <ul>
                                                            <li>Preparation and computation of allotment remittances, crew salary and pay slips.</li>
                                                            <li>Remittance and updating of crew provident fund</li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                B. Secondary Purposes
                                                <br>
                                                Secondary purposes are those which are supplementary to the primary purpose and which are necessary to process the information.

                                                <ul>
                                                    <li>
                                                        Administrative
                                                        <br>
                                                        <ul>
                                                            <li>Referral to Protection & Indemnity Clubs/Correspondents, if necessary;</li>
                                                            <li>Contact you for queries and requests as well as to your family members especially in cases deemed emergency;</li>
                                                            <li>Comply with the reportorial obligations of the POEA, OWWA, DOLE and other concerned government bodies and self-regulating organizations;</li>
                                                            <li>For internal, secondary and third party organization audit</li>
                                                            <li>Comply with and respond to legal processes or lawful orders of any judicial or quasi-judicial bodies;</li>
                                                            <li>Comply with the requirements of regulatory agencies of the government including, but not limited, to the Social Security System (SSS), Philippine Health Insurance Corporation (PhilHealth), and Home Development Mutual Fund (HDMF or Pag-Ibig);</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                        </div>

                                        <b>III. Security</b>

                                        <p>The Company has adequate and suitable measures and procedures intended to lower the risks of accidental destruction or loss or the unauthorized disclosure or access to such information which are appropriate and adequate to the nature of the personal information we collect as follows:</p>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul>
                                                    <li>Organizational Security</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li>Physical Security</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul>
                                                    <li>Technical Security</li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <p>Security policies of the Company with regards to the above mentioned security measures are readily available upon request.</p>

                                        <b>III. RETENTION & DISPOSAL</b>
                                        <br>
                                        <p>We may retain your personal information only for as long as necessary based on the Retention Policy of the Company which is five (5) years for legitimate business purposes, to comply with laws, regulations, or lawful court order, or to establish or defend a legal action. However, we may dispose either immediately or earlier the personal information we collected and stored in cases such as:</p>

                                        <ul>
                                            <li>Rejected or unsuitable first time applicants/candidates of the Company</li>
                                            <li>Five (5) years of inactive service with the company</li>
                                            <li>When immediate disposal was requested by the data subject</li>
                                            <li>Disposal method is done through deletion, while digital files shall be anonymized.</li>
                                        </ul>
                                        
                                        <b>V. DISCLOSURE OF PERSONAL DATA</b>
                                        <br>
                                        <p>We may share with or disclose your personal information to:</p>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Company Principals and Subsidiaries / Affiliate</li>
                                                    <li>Accredited Suppliers</li>
                                                    <li>Appointed Port Agents</li>
                                                    <li>Accredited Travel Agents</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Accredited Medical Clinic</li>
                                                    <li>Foreign Flag Authorities</li>
                                                    <li>Foreign Embassies</li>
                                                    <li>Concerned Government Agencies</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>Accredited Protection & Indemnity (P&I) Health Clinics and Correspondence</li>
                                                    <li>Any court of law or administrative agency of the government pursuant to a lawful order issued in relation to a pending case or proceeding before such court or agency;</li>
                                                    <li>Any regulatory, quasi-judicial or judicial authority, or as otherwise considered necessary or appropriate for our legitimate business purposes.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <p>Access to your personal information will be restricted only to the person who requires your personal data to perform the functions thereby fulfill the purpose for which personal information has been collected, and as required or allowed by law.</p>

                                        <p>We do not sell, trade, or otherwise transfer your personal data to third parties. If shared, we will, at your request, provide you with details of the companies with whom we have shared your personal data.</p>

                                        <b>VI. NOTIFICATION OF CHANGES</b>
                                        <br>
                                        <p>We may modify or update this Privacy Notice from time to time as may be necessary. We recommend that you check this privacy notice every time we advise you of any change.</p>

                                        <b>VII. DATA SUBJECT’S RIGHTS</b>
                                        <br>
                                        <p>The Company respects and acknowledges your rights as data subjects and as owners of the personal information we collected in accordance with the mandate and provisions provided for by the Data Privacy Act of 2012 and its Implementing Rules and Regulations. To become fully aware of your rights as data subjects as follows:</p>

                                        <ol>
                                            <li>Access – you may request access to your information and receive copies of it.</li>
                                            <li>Correction – to have inaccurtate/incomplete information corrected and updated.</li>
                                            <li>Object to, or Limit or Restrict, Use of your Information: You can ask us to stop using all or some of your information or to limit our use of it.</li>
                                            <li>Deletion – in certain circumstances, you can request a right to be forgotten (this is a right to have your information deleted or our use of your information restricted, including for example, a right to not have a user’s name appear in a search result). We will honor such request unless we have to retain this information to comply with a legal obligation.</li>
                                            <li>Portability – in certain circumstances, exercise the right to data portability (this is a right to obtain a transferrable version of your information to transfer to another provider)</li>
                                        </ol>

                                        <b>VIII. REQUESTS, ACCESS, RECOURSE AND QUESTIONS</b>
                                        <br>
                                        <p>You are entitled to request that we:</p>

                                        <ul>
                                            <li>
                                                Provide you with a copy of your Personal Data that we hold and inform you of:
                                                <ul>
                                                    <li>(a) the source of your Personal Data;</li>
                                                    <li>(b) the purpose and method of processing;</li>
                                                    <li>(c) the Company data controller's identity; and</li>
                                                    <li>(d) the entities or categories of entity with whom your Personal Data may be shared;</li>
                                                </ul>
                                            </li>
                                            <li>Cease processing your Personal Data, in whole or in part, as you direct us, for any purpose, save to the extent it is lawful to do so without consent under the Data Privacy Act of 2012;</li>
                                            <li>Do not transfer your Personal Data to third parties for the purpose of direct marketing or any other purposes you have not consented to;</li>
                                            <li>Correct any errors in your Personal Data; and</li>
                                            <li>Update your Personal Data as required</li>
                                        </ul>
                                        
                                        <b>IX. SECURITY INCIDENT MANAGEMENT</b>
                                        <br>
                                        <p>The Company conducts Privacy Impact Assessments to identify attendant risks in the processing of personal data and to implement necessary security measures for data protection as well as to prevent the occurrence of a data breach</p>

                                        <p>In the event that a data breach occurs, the Company has placed a Security Incident Management Policy and Data Privacy Response Team where you can approach and report suspected data breaches for immediate appropriate action and investigation.</p>

                                        <p>If you have questions, concerns or complaints regarding our compliance with the Data Privacy Act of 2012 and its Implementing Rules and Regulation or if you wish to exercise your rights to access, rectification, object, portability or deletion in instances allowed under the law, you may contact us through our Data Protection Officer by way of any of the following channels:</p>

                                        <div style="margin-left: 30px;">
                                            Mail: SOLPIA MARINE & SHIP MANAGEMENT, INC.<br>
                                            Address: No. 2019 Solpia Building, San Marcelino St., Malate, Manila<br>
                                            Email: dpo@solpiamarine.com<br>
                                            Mob No. : 09196906619<br>
                                            Tel. No.: (632) 8567-1730<br>
                                        </div>

                                        <br>

                                        <p>We will make every reasonable effort to correct, update and respond to your request promptly, unless we require further information from you in order to fulfill your request</p>
                                        {{-- END --}}
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
        <script src="{{ asset('online/js/temposdusmus-bootstrap.min.js') }}"></script>
        <script src="{{ asset('online/js/overlayScrollbar.min.js') }}"></script>
        <script src="{{ asset('online/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('online/js/custom.js') }}"></script>
    </body>
</html>