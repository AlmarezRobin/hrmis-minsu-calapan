<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once("includes/head.php"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once("includes/topbar.php"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once("includes/sidebar.php"); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <div class="container-fluid-xxl pb-2">

                    <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> User <small>Profile</small></h5>
                </div>
                <!-- end title -->
                <!-- <div class="container-fluid-xxl pb-2"> -->

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>


                        <div class="col-md-12 p-2 float-sm-start">
                            <form action="" method="post" class="outer-form" autocomplete="off" id="student-validate">


                                <!-- user profile -->
                                <div class="container rounded bg-white mb-5 ">
                                    <div class="row">
                                        <div class="col-md-3 border-right">
                                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                <img class="rounded-circle mt-5" width="150px" 
                                                src="">
                                                
                                                <span class="font-weight-bold">almarez robin</span><span class="text-black-50"> almarez@gmail.com.my</span><span> </span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 border-right">
                                            <div class="p-3 py-5">
                                                <div class="col-md-24 float-sm-start">
                                                    <div class="card">
                                                            <div class="card-header" data-bs-toggle="collapse"
                                                                data-bs-target="#collapsePersonal" aria-expanded="true"
                                                                aria-controls="collapsePersonal">
                                                                <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                                                User Profile<i class="fa fa-caret-down pull-right"></i>
                                                            </div>
                                                            <div class="card-body accordion-collapse collapse show"
                                                                id="collapsePersonal-disable">


                                                                <!-- Name -->
                                                                <div class="row mb-2">

                                                                    <div class="col-md-6">
                                                                        <label for="firstname" class="form-label">First Name*</label>
                                                                        <input type="text" class="form-control form-control-sm" name="fname"
                                                                            id="firstname" placeholder="" maxlength="50" size="50"
                                                                            data-toggle="tooltip" data-placement="right" title="First Name"
                                                                            required>
                                                                        <small class="form-text text-muted">
                                                                            Given Name
                                                                        </small>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="midddlename" class="form-label">Middle Name</label>
                                                                        <input type="text" class="form-control form-control-sm" name="mname"
                                                                            id="midddlename" placeholder="" maxlength="30" size="30"
                                                                            data-toggle="tooltip" data-placement="right" title="Middle Name">
                                                                    </div>
                                                                </div>


                                                                <div class="row mb-2">
                                                                    <div class="col-md-6">
                                                                        <label for="lastname" class="form-label">Last Name*</label>
                                                                        <input type="text" class="form-control form-control-sm" name="lname"
                                                                            id="lastname" placeholder="" maxlength="30" size="30"
                                                                            data-toggle="tooltip" data-placement="right" title="Last Name"
                                                                            required>
                                                                        <small class="form-text text-muted">
                                                                            Family Name
                                                                        </small>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="nameex" class="form-label">Name extension </label>
                                                                        <input type="text" class="form-control form-control-sm" name="xname"
                                                                            id="nameex" placeholder="" maxlength="3" size="3"
                                                                            data-toggle="tooltip" data-placement="right" title="Name Extension">
                                                                        <small class="form-text text-muted">
                                                                            ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <!-- end name -->




                                                                <div class="row mb-2">
                                                                    <div class="col-md-4">
                                                                        <label for="gender" class="form-label">Gender*</label>
                                                                        <select class="form-control form-control-sm" name="gender" id="gender"
                                                                            data-toggle="tooltip" data-placement="right" title="Gender"
                                                                            required>
                                                                            <option value="MALE">Male</option>
                                                                            <option value="FEMALE">Female</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label for="civilstatus" class="form-label">Civil Status*</label>
                                                                        <select class="form-control form-control-sm" name="civilstat"
                                                                            id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                                            title="Civil Status" required>
                                                                            <option value="single">Single</option>
                                                                            <option value="married">Married</option>
                                                                            <option value="seperated">Separated</option>
                                                                            <option value="widower">Widow/er</option>
                                                                        </select>
                                                                    </div>


                                                                    <div class="col-md-4">
                                                                        <label for="birthdate" class="form-label">Birthdate*</label>
                                                                        <input type="date" class="form-control form-control-sm" name="bday"
                                                                            id="birthdate" value="" data-date-format="dd/mm/yyyy"
                                                                            min="1960-12-31" max="2020-12-31" data-toggle="tooltip"
                                                                            data-placement="right" title="Birthdate" required />
                                                                        <small class="form-text text-muted">
                                                                            ex: 23/12/2000 (For December 23, 2000)
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <!-- Birth Place -->
                                                                <div class="col-md-12 mb-2">
                                                                    <label for="birthplace" class="form-label">Birth Place*</label>
                                                                    <hr>
                                                                    <small class="form-text text-muted">
                                                                        House No.
                                                                    </small>
                                                                    <input type="text" id="BRTHHOUSENO" name="BRTHHOUSENO"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="20" size="20" data-toggle="tooltip"
                                                                        data-placement="right" title="House No.">
                                                                    <small class="form-text text-muted">
                                                                        Street
                                                                    </small>
                                                                    <input type="text" id="BRTHSTREET" name="BRTHSTREET"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="50" size="50" data-toggle="tooltip"
                                                                        data-placement="right" title="Street">
                                                                    <small class="form-text text-muted">
                                                                        Barangay*
                                                                    </small>
                                                                    <input type="text" id="BRTHBRGY" name="BRTHBRGY"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Barangay" required>
                                                                    <small class="form-text text-muted">
                                                                        Town*
                                                                    </small>
                                                                    <input type="text" id="BRTHTOWN" name="BRTHTOWN"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Town" required>
                                                                    <small class="form-text text-muted">
                                                                        Zip Code*
                                                                    </small>
                                                                    <input type="text" id="BRTHZIPCODE" name="BRTHZIPCODE"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                                        title="Zip Code" required>
                                                                    <small class="form-text text-muted">
                                                                        Province*
                                                                    </small>
                                                                    <input type="text" id="BRTHPROVINCE" name="BRTHPROVINCE"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="150" size="150" data-toggle="tooltip"
                                                                        data-placement="right" title="Province" required>


                                                                    <div class="row mb-2">
                                                                        <div class="col-md-6">
                                                                        <small class="form-text text-muted">
                                                                            Country*
                                                                        </small>
                                                                            <select id="BRTHCOUNTRY" name="BRTHCOUNTRY"
                                                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right" title="Country" required>
                                                                                <option>select country</option>
                                                                                <option value="AF">Afghanistan</option>
                                                                                <option value="AX">Aland Islands</option>
                                                                                <option value="AL">Albania</option>
                                                                                <option value="DZ">Algeria</option>
                                                                                <option value="AS">American Samoa</option>
                                                                                <option value="AD">Andorra</option>
                                                                                <option value="AO">Angola</option>
                                                                                <option value="AI">Anguilla</option>
                                                                                <option value="AQ">Antarctica</option>
                                                                                <option value="AG">Antigua and Barbuda</option>
                                                                                <option value="AR">Argentina</option>
                                                                                <option value="AM">Armenia</option>
                                                                                <option value="AW">Aruba</option>
                                                                                <option value="AU">Australia</option>
                                                                                <option value="AT">Austria</option>
                                                                                <option value="AZ">Azerbaijan</option>
                                                                                <option value="BS">Bahamas</option>
                                                                                <option value="BH">Bahrain</option>
                                                                                <option value="BD">Bangladesh</option>
                                                                                <option value="BB">Barbados</option>
                                                                                <option value="BY">Belarus</option>
                                                                                <option value="BE">Belgium</option>
                                                                                <option value="BZ">Belize</option>
                                                                                <option value="BJ">Benin</option>
                                                                                <option value="BM">Bermuda</option>
                                                                                <option value="BT">Bhutan</option>
                                                                                <option value="BO">Bolivia</option>
                                                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                                <option value="BW">Botswana</option>
                                                                                <option value="BV">Bouvet Island</option>
                                                                                <option value="BR">Brazil</option>
                                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                                <option value="BN">Brunei Darussalam</option>
                                                                                <option value="BG">Bulgaria</option>
                                                                                <option value="BF">Burkina Faso</option>
                                                                                <option value="BI">Burundi</option>
                                                                                <option value="KH">Cambodia</option>
                                                                                <option value="CM">Cameroon</option>
                                                                                <option value="CA">Canada</option>
                                                                                <option value="CV">Cape Verde</option>
                                                                                <option value="KY">Cayman Islands</option>
                                                                                <option value="CF">Central African Republic</option>
                                                                                <option value="TD">Chad</option>
                                                                                <option value="CL">Chile</option>
                                                                                <option value="CN">China</option>
                                                                                <option value="CX">Christmas Island</option>
                                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                                <option value="CO">Colombia</option>
                                                                                <option value="KM">Comoros</option>
                                                                                <option value="CG">Congo</option>
                                                                                <option value="CD">Congo, Democratic Republic of the Congo</option>
                                                                                <option value="CK">Cook Islands</option>
                                                                                <option value="CR">Costa Rica</option>
                                                                                <option value="CI">Cote D'Ivoire</option>
                                                                                <option value="HR">Croatia</option>
                                                                                <option value="CU">Cuba</option>
                                                                                <option value="CW">Curacao</option>
                                                                                <option value="CY">Cyprus</option>
                                                                                <option value="CZ">Czech Republic</option>
                                                                                <option value="DK">Denmark</option>
                                                                                <option value="DJ">Djibouti</option>
                                                                                <option value="DM">Dominica</option>
                                                                                <option value="DO">Dominican Republic</option>
                                                                                <option value="EC">Ecuador</option>
                                                                                <option value="EG">Egypt</option>
                                                                                <option value="SV">El Salvador</option>
                                                                                <option value="GQ">Equatorial Guinea</option>
                                                                                <option value="ER">Eritrea</option>
                                                                                <option value="EE">Estonia</option>
                                                                                <option value="ET">Ethiopia</option>
                                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                                <option value="FO">Faroe Islands</option>
                                                                                <option value="FJ">Fiji</option>
                                                                                <option value="FI">Finland</option>
                                                                                <option value="FR">France</option>
                                                                                <option value="GF">French Guiana</option>
                                                                                <option value="PF">French Polynesia</option>
                                                                                <option value="TF">French Southern Territories</option>
                                                                                <option value="GA">Gabon</option>
                                                                                <option value="GM">Gambia</option>
                                                                                <option value="GE">Georgia</option>
                                                                                <option value="DE">Germany</option>
                                                                                <option value="GH">Ghana</option>
                                                                                <option value="GI">Gibraltar</option>
                                                                                <option value="GR">Greece</option>
                                                                                <option value="GL">Greenland</option>
                                                                                <option value="GD">Grenada</option>
                                                                                <option value="GP">Guadeloupe</option>
                                                                                <option value="GU">Guam</option>
                                                                                <option value="GT">Guatemala</option>
                                                                                <option value="GG">Guernsey</option>
                                                                                <option value="GN">Guinea</option>
                                                                                <option value="GW">Guinea-Bissau</option>
                                                                                <option value="GY">Guyana</option>
                                                                                <option value="HT">Haiti</option>
                                                                                <option value="HM">Heard Island and Mcdonald Islands</option>
                                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                                <option value="HN">Honduras</option>
                                                                                <option value="HK">Hong Kong</option>
                                                                                <option value="HU">Hungary</option>
                                                                                <option value="IS">Iceland</option>
                                                                                <option value="IN">India</option>
                                                                                <option value="ID">Indonesia</option>
                                                                                <option value="IR">Iran, Islamic Republic of</option>
                                                                                <option value="IQ">Iraq</option>
                                                                                <option value="IE">Ireland</option>
                                                                                <option value="IM">Isle of Man</option>
                                                                                <option value="IL">Israel</option>
                                                                                <option value="IT">Italy</option>
                                                                                <option value="JM">Jamaica</option>
                                                                                <option value="JP">Japan</option>
                                                                                <option value="JE">Jersey</option>
                                                                                <option value="JO">Jordan</option>
                                                                                <option value="KZ">Kazakhstan</option>
                                                                                <option value="KE">Kenya</option>
                                                                                <option value="KI">Kiribati</option>
                                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                                <option value="KR">Korea, Republic of</option>
                                                                                <option value="XK">Kosovo</option>
                                                                                <option value="KW">Kuwait</option>
                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                                <option value="LV">Latvia</option>
                                                                                <option value="LB">Lebanon</option>
                                                                                <option value="LS">Lesotho</option>
                                                                                <option value="LR">Liberia</option>
                                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                                <option value="LI">Liechtenstein</option>
                                                                                <option value="LT">Lithuania</option>
                                                                                <option value="LU">Luxembourg</option>
                                                                                <option value="MO">Macao</option>
                                                                                <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                                                                <option value="MG">Madagascar</option>
                                                                                <option value="MW">Malawi</option>
                                                                                <option value="MY">Malaysia</option>
                                                                                <option value="MV">Maldives</option>
                                                                                <option value="ML">Mali</option>
                                                                                <option value="MT">Malta</option>
                                                                                <option value="MH">Marshall Islands</option>
                                                                                <option value="MQ">Martinique</option>
                                                                                <option value="MR">Mauritania</option>
                                                                                <option value="MU">Mauritius</option>
                                                                                <option value="YT">Mayotte</option>
                                                                                <option value="MX">Mexico</option>
                                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                                <option value="MD">Moldova, Republic of</option>
                                                                                <option value="MC">Monaco</option>
                                                                                <option value="MN">Mongolia</option>
                                                                                <option value="ME">Montenegro</option>
                                                                                <option value="MS">Montserrat</option>
                                                                                <option value="MA">Morocco</option>
                                                                                <option value="MZ">Mozambique</option>
                                                                                <option value="MM">Myanmar</option>
                                                                                <option value="NA">Namibia</option>
                                                                                <option value="NR">Nauru</option>
                                                                                <option value="NP">Nepal</option>
                                                                                <option value="NL">Netherlands</option>
                                                                                <option value="AN">Netherlands Antilles</option>
                                                                                <option value="NC">New Caledonia</option>
                                                                                <option value="NZ">New Zealand</option>
                                                                                <option value="NI">Nicaragua</option>
                                                                                <option value="NE">Niger</option>
                                                                                <option value="NG">Nigeria</option>
                                                                                <option value="NU">Niue</option>
                                                                                <option value="NF">Norfolk Island</option>
                                                                                <option value="MP">Northern Mariana Islands</option>
                                                                                <option value="NO">Norway</option>
                                                                                <option value="OM">Oman</option>
                                                                                <option value="PK">Pakistan</option>
                                                                                <option value="PW">Palau</option>
                                                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                                                <option value="PA">Panama</option>
                                                                                <option value="PG">Papua New Guinea</option>
                                                                                <option value="PY">Paraguay</option>
                                                                                <option value="PE">Peru</option>
                                                                                <option value="PH">Philippines</option>
                                                                                <option value="PN">Pitcairn</option>
                                                                                <option value="PL">Poland</option>
                                                                                <option value="PT">Portugal</option>
                                                                                <option value="PR">Puerto Rico</option>
                                                                                <option value="QA">Qatar</option>
                                                                                <option value="RE">Reunion</option>
                                                                                <option value="RO">Romania</option>
                                                                                <option value="RU">Russian Federation</option>
                                                                                <option value="RW">Rwanda</option>
                                                                                <option value="BL">Saint Barthelemy</option>
                                                                                <option value="SH">Saint Helena</option>
                                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                                <option value="LC">Saint Lucia</option>
                                                                                <option value="MF">Saint Martin</option>
                                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                                <option value="WS">Samoa</option>
                                                                                <option value="SM">San Marino</option>
                                                                                <option value="ST">Sao Tome and Principe</option>
                                                                                <option value="SA">Saudi Arabia</option>
                                                                                <option value="SN">Senegal</option>
                                                                                <option value="RS">Serbia</option>
                                                                                <option value="CS">Serbia and Montenegro</option>
                                                                                <option value="SC">Seychelles</option>
                                                                                <option value="SL">Sierra Leone</option>
                                                                                <option value="SG">Singapore</option>
                                                                                <option value="SX">Sint Maarten</option>
                                                                                <option value="SK">Slovakia</option>
                                                                                <option value="SI">Slovenia</option>
                                                                                <option value="SB">Solomon Islands</option>
                                                                                <option value="SO">Somalia</option>
                                                                                <option value="ZA">South Africa</option>
                                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                                <option value="SS">South Sudan</option>
                                                                                <option value="ES">Spain</option>
                                                                                <option value="LK">Sri Lanka</option>
                                                                                <option value="SD">Sudan</option>
                                                                                <option value="SR">Suriname</option>
                                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                                <option value="SZ">Swaziland</option>
                                                                                <option value="SE">Sweden</option>
                                                                                <option value="CH">Switzerland</option>
                                                                                <option value="SY">Syrian Arab Republic</option>
                                                                                <option value="TW">Taiwan, Province of China</option>
                                                                                <option value="TJ">Tajikistan</option>
                                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                                <option value="TH">Thailand</option>
                                                                                <option value="TL">Timor-Leste</option>
                                                                                <option value="TG">Togo</option>
                                                                                <option value="TK">Tokelau</option>
                                                                                <option value="TO">Tonga</option>
                                                                                <option value="TT">Trinidad and Tobago</option>
                                                                                <option value="TN">Tunisia</option>
                                                                                <option value="TR">Turkey</option>
                                                                                <option value="TM">Turkmenistan</option>
                                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                                <option value="TV">Tuvalu</option>
                                                                                <option value="UG">Uganda</option>
                                                                                <option value="UA">Ukraine</option>
                                                                                <option value="AE">United Arab Emirates</option>
                                                                                <option value="GB">United Kingdom</option>
                                                                                <option value="US">United States</option>
                                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                                <option value="UY">Uruguay</option>
                                                                                <option value="UZ">Uzbekistan</option>
                                                                                <option value="VU">Vanuatu</option>
                                                                                <option value="VE">Venezuela</option>
                                                                                <option value="VN">Viet Nam</option>
                                                                                <option value="VG">Virgin Islands, British</option>
                                                                                <option value="VI">Virgin Islands, U.s.</option>
                                                                                <option value="WF">Wallis and Futuna</option>
                                                                                <option value="EH">Western Sahara</option>
                                                                                <option value="YE">Yemen</option>
                                                                                <option value="ZM">Zambia</option>
                                                                                <option value="ZW">Zimbabwe</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>




                                                                   
                                                                    
                                                                </div>
                                                                <!-- End Birth Place -->

                                                                <hr>

                                                                <!-- Permanent Address -->

                                                                <div class="col-md-12 mb-2">
                                                                    <label for="permanentaddress" class="form-label">Permanent
                                                                        Address*</label> /
                                                                    <label style="color: green;">
                                                                        <input type="checkbox" id="same" onchange="CopyAdd();"> Same as
                                                                        Birth Place
                                                                    </label>
                                                                    <hr>
                                                                    <small class="form-text text-muted">
                                                                        House No.
                                                                    </small>
                                                                    <input type="text" id="ADDHOUSENO" name="ADDHOUSENO"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="20" size="20" data-toggle="tooltip"
                                                                        data-placement="right" title="House No.">
                                                                    <small class="form-text text-muted">
                                                                        Street
                                                                    </small>
                                                                    <input type="text" id="ADDSTREET" name="ADDSTREET"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="50" size="50" data-toggle="tooltip"
                                                                        data-placement="right" title="Street">
                                                                    <small class="form-text text-muted">
                                                                        Barangay*
                                                                    </small>
                                                                    <input type="text" id="ADDBRGY" name="ADDBRGY"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Barangay" required>
                                                                    <small class="form-text text-muted">
                                                                        Town*
                                                                    </small>
                                                                    <input type="text" id="ADDTOWN" name="ADDTOWN"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Town" required>
                                                                    <small class="form-text text-muted">
                                                                        Zip Code*
                                                                    </small>
                                                                    <input type="text" id="ADDZIPCODE" name="ADDZIPCODE"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                                        title="Zip Code" required>
                                                                    <small class="form-text text-muted">
                                                                        Province*
                                                                    </small>
                                                                    <input type="text" id="ADDPROVINCE" name="ADDPROVINCE"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="150" size="150" data-toggle="tooltip"
                                                                        data-placement="right" title="Province" required>
                                                                    <small class="form-text text-muted">
                                                                        Country*
                                                                    </small>
                                                                    <input type="text" id="ADDCOUNTRY" name="ADDCOUNTRY"
                                                                        class="form-control form-control-sm mb-2" placeholder=""
                                                                        maxlength="80" size="80" data-toggle="tooltip"
                                                                        data-placement="right" title="Country" required>

                                                                </div>
                                                                <!-- End Permanent Address -->

                                                                <hr>
                                                                <div class="row mb-2">
                                                                    <div class="col-md-6">
                                                                        <label for="phonenumber" class="form-label">Contact Number*</label>
                                                                        <input type="text" class="form-control form-control-sm" name="PHONE1"
                                                                            id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                            data-toggle="tooltip" data-placement="right"
                                                                            title="Cellphone Number" required>
                                                                        <small class="form-text text-muted">
                                                                            ex: 9770011001
                                                                        </small>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="phonenumber" class="form-label">Contact Number*</label>
                                                                        <input type="text" class="form-control form-control-sm" name="PHONE1"
                                                                            id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                                            data-toggle="tooltip" data-placement="right"
                                                                            title="Cellphone Number" required>
                                                                        <small class="form-text text-muted">
                                                                            ex: 9770011001
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mb-2">
                                                                    <label for="emailaddress" class="form-label">Valid Email
                                                                        Address*</label>
                                                                    <input type="email" class="form-control form-control-sm" name="EMAIL1"
                                                                        id="emailaddress" placeholder="" maxlength="150" size="150"
                                                                        data-toggle="tooltip" data-placement="right" title="Email Address"
                                                                        required>
                                                                    <small class="form-text text-muted">
                                                                        Please input a valid email. Your username and password will send to
                                                                        your email address.
                                                                    </small>
                                                                </div>

                                                                <hr>

                                                                <div class="col-md-12 mb-2">
                                                                    <label for="religion" class="form-label">Religion*</label>
                                                                    <input type="text" class="form-control form-control-sm" name="RELIGION"
                                                                        id="religion" placeholder="" maxlength="150" size="150"
                                                                        data-toggle="tooltip" data-placement="right" title="Religion"
                                                                        required>

                                                                </div>

                                                                <div class="mt-5 text-center">
                                                                    <button class="btn btn-primary profile-button" type="button">Save User Profile</button>
                                                                </div> 

                                                            </div>
                                                            <!-- End Card Body -->
                                                        </div>
                                                        <!-- End card -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end user profile -->
                            </form>
                        </div>
                        <!-- End Col-12 -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End container-fluid -->

                <!-- Footer -->
                <?php require_once("includes/footbar.php"); ?>
                <!-- End Footer -->
            </main>
            <!-- End Main -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <script src="public/chart.js/chart.js"></script>

    <?php require_once("includes/footer.php"); ?>

<script>
        function consent() {
            //CONSENT
            var submit = document.getElementById('submit');
            var CONSENT = document.getElementById('CONSENT');
            if (CONSENT.checked) {
                submit.disabled = false;
            } else {
                submit.disabled = true;
            }
        }

        function CopyAdd() {

            var BRTHHOUSENO = document.getElementById('BRTHHOUSENO');
            var BRTHSTREET = document.getElementById('BRTHSTREET');
            var BRTHBRGY = document.getElementById('BRTHBRGY');
            var BRTHTOWN = document.getElementById('BRTHTOWN');
            var BRTHZIPCODE = document.getElementById('BRTHZIPCODE');
            var BRTHPROVINCE = document.getElementById('BRTHPROVINCE');
            var BRTHCOUNTRY = document.getElementById('BRTHCOUNTRY');

            var ADDHOUSENO = document.getElementById('ADDHOUSENO');
            var ADDSTREET = document.getElementById('ADDSTREET');
            var ADDBRGY = document.getElementById('ADDBRGY');
            var ADDTOWN = document.getElementById('ADDTOWN');
            var ADDZIPCODE = document.getElementById('ADDZIPCODE');
            var ADDPROVINCE = document.getElementById('ADDPROVINCE');
            var ADDCOUNTRY = document.getElementById('ADDCOUNTRY');

            var same = document.getElementById('same');
            if (same.checked) {
                ADDHOUSENO.value = BRTHHOUSENO.value;
                ADDSTREET.value = BRTHSTREET.value;
                ADDBRGY.value = BRTHBRGY.value;
                ADDTOWN.value = BRTHTOWN.value;
                ADDZIPCODE.value = BRTHZIPCODE.value;
                ADDPROVINCE.value = BRTHPROVINCE.value;
                ADDCOUNTRY.value = BRTHCOUNTRY.value;

            } else {
                ADDHOUSENO.value = '';
                ADDSTREET.value = '';
                ADDBRGY.value = '';
                ADDTOWN.value = '';
                ADDZIPCODE.value = '';
                ADDPROVINCE.value = '';
                ADDCOUNTRY.value = '';
            }
        }
    </script>