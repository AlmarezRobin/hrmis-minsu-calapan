<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\head.php'); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\topbar.php'); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\sidebar.php'); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> User  <small>Profile</small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">
                    <!-- COL 12 -->
                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start p-2">
                            <!-- Alert -->
                        </div>

                        <!-- Form -->
                        <form action="" method="post" class="outer-form" autocomplete="off" id="student-validate">

                        <!-- col -->
                            <div class="col-md-12 float-sm-start">

                                <div class="col-md-12 p-2 float-sm-start">
                                    <div class="card">
                                        <div class="card-header" data-bs-toggle="collapse"
                                            data-bs-target="#collapsePersonal" aria-expanded="true"
                                            aria-controls="collapsePersonal">
                                            <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                            Personal Information<i class="fa fa-caret-down pull-right"></i>
                                        </div>
                                        <div class="card-body accordion-collapse collapse show"
                                            id="collapsePersonal-disable">


                                            <!-- Name -->
                                            <div class="row mb-2">
                                                <!-- Uploaded image area-->
                                                <div class="col-md-3">
                                                    <div class="profile-img">
                                                        <!-- <div  class="image-area"> -->
                                                            <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" 
                                                            style="width: 15em;height:15em;">
                                                        <!-- </div> -->
                                                        <div class="file btn btn-lg btn-primary" >

                                                            <input id="upload" type="file" data-toogle="tooltip" title="Edit Your Picture" onchange="readURL(this);"/>
                                                            <i class="fa fa-camera"  aria-hidden="true"></i>

                                                        </div>
                                                        <h6>UPLOAD YOUR PHOTO</h6>
                                                    </div>
                                                </div>

                                            
                                                <div class="col-md-3">
                                                    <label for="firstname" class="form-label">First Name*</label>
                                                    <input type="text" class="form-control form-control-sm" name="STUDNAM3"
                                                        id="firstname" placeholder="" maxlength="50" size="50"
                                                        data-toggle="tooltip" data-placement="right" title="First Name"
                                                        required>
                                                    <small class="form-text text-muted">
                                                        Given Name
                                                    </small>
                                                   
                                                    <br>
                                                    <label for="nameex" class="form-label">Name extension </label>
                                                    <input type="text" class="form-control form-control-sm" name="STUDNAM4"
                                                        id="nameex" placeholder="" maxlength="3" size="3"
                                                        data-toggle="tooltip" data-placement="right" title="Name Extension">
                                                    <small class="form-text text-muted">
                                                        ex: (Sr., Jr., I, II, etc.) leave it blank if none
                                                    </small>
                                                    <br>
                                                    <label for="civilstatus" class="form-label">Civil Status*</label>
                                                    <select class="form-control form-control-sm" name="STUDCIVILSTAT"
                                                        id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                        title="Civil Status" required>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                        <option value="seperated">Separated</option>
                                                        <option value="widower">Widow/er</option>
                                                    </select>
                                                    
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="lastname" class="form-label">Last Name*</label>
                                                    <input type="text" class="form-control form-control-sm" name="STUDNAM1"
                                                        id="lastname" placeholder="" maxlength="30" size="30"
                                                        data-toggle="tooltip" data-placement="right" title="Last Name"
                                                        required>
                                                    <small class="form-text text-muted">
                                                        Family Name
                                                    </small>
                                                    <br>
                                                    <label for="birthdate" class="form-label">Birthdate*</label>
                                                    <input type="date" class="form-control form-control-sm" name="STUDBDAY"
                                                        id="birthdate" value="" data-date-format="dd/mm/yyyy"
                                                        min="1960-12-31" max="2020-12-31" data-toggle="tooltip"
                                                        data-placement="right" title="Birthdate" required />
                                                    <small class="form-text text-muted">
                                                        ex: 23/12/2000 (For December 23, 2000)
                                                    </small>
                                                    <br>
                                                    <label for="civilstatus" class="form-label">Citezenship *</label>
                                                    <select class="form-control form-control-sm" name=""
                                                        id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                        title=" Citezenship" required>
                                                            <option value="">-- select one --</option>
                                                            <option value="afghan">Afghan</option>
                                                            <option value="albanian">Albanian</option>
                                                            <option value="algerian">Algerian</option>
                                                            <option value="american">American</option>
                                                            <option value="andorran">Andorran</option>
                                                            <option value="angolan">Angolan</option>
                                                            <option value="antiguans">Antiguans</option>
                                                            <option value="argentinean">Argentinean</option>
                                                            <option value="armenian">Armenian</option>
                                                            <option value="australian">Australian</option>
                                                            <option value="austrian">Austrian</option>
                                                            <option value="azerbaijani">Azerbaijani</option>
                                                            <option value="bahamian">Bahamian</option>
                                                            <option value="bahraini">Bahraini</option>
                                                            <option value="bangladeshi">Bangladeshi</option>
                                                            <option value="barbadian">Barbadian</option>
                                                            <option value="barbudans">Barbudans</option>
                                                            <option value="batswana">Batswana</option>
                                                            <option value="belarusian">Belarusian</option>
                                                            <option value="belgian">Belgian</option>
                                                            <option value="belizean">Belizean</option>
                                                            <option value="beninese">Beninese</option>
                                                            <option value="bhutanese">Bhutanese</option>
                                                            <option value="bolivian">Bolivian</option>
                                                            <option value="bosnian">Bosnian</option>
                                                            <option value="brazilian">Brazilian</option>
                                                            <option value="british">British</option>
                                                            <option value="bruneian">Bruneian</option>
                                                            <option value="bulgarian">Bulgarian</option>
                                                            <option value="burkinabe">Burkinabe</option>
                                                            <option value="burmese">Burmese</option>
                                                            <option value="burundian">Burundian</option>
                                                            <option value="cambodian">Cambodian</option>
                                                            <option value="cameroonian">Cameroonian</option>
                                                            <option value="canadian">Canadian</option>
                                                            <option value="cape verdean">Cape Verdean</option>
                                                            <option value="central african">Central African</option>
                                                            <option value="chadian">Chadian</option>
                                                            <option value="chilean">Chilean</option>
                                                            <option value="chinese">Chinese</option>
                                                            <option value="colombian">Colombian</option>
                                                            <option value="comoran">Comoran</option>
                                                            <option value="congolese">Congolese</option>
                                                            <option value="costa rican">Costa Rican</option>
                                                            <option value="croatian">Croatian</option>
                                                            <option value="cuban">Cuban</option>
                                                            <option value="cypriot">Cypriot</option>
                                                            <option value="czech">Czech</option>
                                                            <option value="danish">Danish</option>
                                                            <option value="djibouti">Djibouti</option>
                                                            <option value="dominican">Dominican</option>
                                                            <option value="dutch">Dutch</option>
                                                            <option value="east timorese">East Timorese</option>
                                                            <option value="ecuadorean">Ecuadorean</option>
                                                            <option value="egyptian">Egyptian</option>
                                                            <option value="emirian">Emirian</option>
                                                            <option value="equatorial guinean">Equatorial Guinean</option>
                                                            <option value="eritrean">Eritrean</option>
                                                            <option value="estonian">Estonian</option>
                                                            <option value="ethiopian">Ethiopian</option>
                                                            <option value="fijian">Fijian</option>
                                                            <option value="filipino">Filipino</option>
                                                            <option value="finnish">Finnish</option>
                                                            <option value="french">French</option>
                                                            <option value="gabonese">Gabonese</option>
                                                            <option value="gambian">Gambian</option>
                                                            <option value="georgian">Georgian</option>
                                                            <option value="german">German</option>
                                                            <option value="ghanaian">Ghanaian</option>
                                                            <option value="greek">Greek</option>
                                                            <option value="grenadian">Grenadian</option>
                                                            <option value="guatemalan">Guatemalan</option>
                                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                            <option value="guinean">Guinean</option>
                                                            <option value="guyanese">Guyanese</option>
                                                            <option value="haitian">Haitian</option>
                                                            <option value="herzegovinian">Herzegovinian</option>
                                                            <option value="honduran">Honduran</option>
                                                            <option value="hungarian">Hungarian</option>
                                                            <option value="icelander">Icelander</option>
                                                            <option value="indian">Indian</option>
                                                            <option value="indonesian">Indonesian</option>
                                                            <option value="iranian">Iranian</option>
                                                            <option value="iraqi">Iraqi</option>
                                                            <option value="irish">Irish</option>
                                                            <option value="israeli">Israeli</option>
                                                            <option value="italian">Italian</option>
                                                            <option value="ivorian">Ivorian</option>
                                                            <option value="jamaican">Jamaican</option>
                                                            <option value="japanese">Japanese</option>
                                                            <option value="jordanian">Jordanian</option>
                                                            <option value="kazakhstani">Kazakhstani</option>
                                                            <option value="kenyan">Kenyan</option>
                                                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                            <option value="kuwaiti">Kuwaiti</option>
                                                            <option value="kyrgyz">Kyrgyz</option>
                                                            <option value="laotian">Laotian</option>
                                                            <option value="latvian">Latvian</option>
                                                            <option value="lebanese">Lebanese</option>
                                                            <option value="liberian">Liberian</option>
                                                            <option value="libyan">Libyan</option>
                                                            <option value="liechtensteiner">Liechtensteiner</option>
                                                            <option value="lithuanian">Lithuanian</option>
                                                            <option value="luxembourger">Luxembourger</option>
                                                            <option value="macedonian">Macedonian</option>
                                                            <option value="malagasy">Malagasy</option>
                                                            <option value="malawian">Malawian</option>
                                                            <option value="malaysian">Malaysian</option>
                                                            <option value="maldivan">Maldivan</option>
                                                            <option value="malian">Malian</option>
                                                            <option value="maltese">Maltese</option>
                                                            <option value="marshallese">Marshallese</option>
                                                            <option value="mauritanian">Mauritanian</option>
                                                            <option value="mauritian">Mauritian</option>
                                                            <option value="mexican">Mexican</option>
                                                            <option value="micronesian">Micronesian</option>
                                                            <option value="moldovan">Moldovan</option>
                                                            <option value="monacan">Monacan</option>
                                                            <option value="mongolian">Mongolian</option>
                                                            <option value="moroccan">Moroccan</option>
                                                            <option value="mosotho">Mosotho</option>
                                                            <option value="motswana">Motswana</option>
                                                            <option value="mozambican">Mozambican</option>
                                                            <option value="namibian">Namibian</option>
                                                            <option value="nauruan">Nauruan</option>
                                                            <option value="nepalese">Nepalese</option>
                                                            <option value="new zealander">New Zealander</option>
                                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                            <option value="nicaraguan">Nicaraguan</option>
                                                            <option value="nigerien">Nigerien</option>
                                                            <option value="north korean">North Korean</option>
                                                            <option value="northern irish">Northern Irish</option>
                                                            <option value="norwegian">Norwegian</option>
                                                            <option value="omani">Omani</option>
                                                            <option value="pakistani">Pakistani</option>
                                                            <option value="palauan">Palauan</option>
                                                            <option value="panamanian">Panamanian</option>
                                                            <option value="papua new guinean">Papua New Guinean</option>
                                                            <option value="paraguayan">Paraguayan</option>
                                                            <option value="peruvian">Peruvian</option>
                                                            <option value="polish">Polish</option>
                                                            <option value="portuguese">Portuguese</option>
                                                            <option value="qatari">Qatari</option>
                                                            <option value="romanian">Romanian</option>
                                                            <option value="russian">Russian</option>
                                                            <option value="rwandan">Rwandan</option>
                                                            <option value="saint lucian">Saint Lucian</option>
                                                            <option value="salvadoran">Salvadoran</option>
                                                            <option value="samoan">Samoan</option>
                                                            <option value="san marinese">San Marinese</option>
                                                            <option value="sao tomean">Sao Tomean</option>
                                                            <option value="saudi">Saudi</option>
                                                            <option value="scottish">Scottish</option>
                                                            <option value="senegalese">Senegalese</option>
                                                            <option value="serbian">Serbian</option>
                                                            <option value="seychellois">Seychellois</option>
                                                            <option value="sierra leonean">Sierra Leonean</option>
                                                            <option value="singaporean">Singaporean</option>
                                                            <option value="slovakian">Slovakian</option>
                                                            <option value="slovenian">Slovenian</option>
                                                            <option value="solomon islander">Solomon Islander</option>
                                                            <option value="somali">Somali</option>
                                                            <option value="south african">South African</option>
                                                            <option value="south korean">South Korean</option>
                                                            <option value="spanish">Spanish</option>
                                                            <option value="sri lankan">Sri Lankan</option>
                                                            <option value="sudanese">Sudanese</option>
                                                            <option value="surinamer">Surinamer</option>
                                                            <option value="swazi">Swazi</option>
                                                            <option value="swedish">Swedish</option>
                                                            <option value="swiss">Swiss</option>
                                                            <option value="syrian">Syrian</option>
                                                            <option value="taiwanese">Taiwanese</option>
                                                            <option value="tajik">Tajik</option>
                                                            <option value="tanzanian">Tanzanian</option>
                                                            <option value="thai">Thai</option>
                                                            <option value="togolese">Togolese</option>
                                                            <option value="tongan">Tongan</option>
                                                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                            <option value="tunisian">Tunisian</option>
                                                            <option value="turkish">Turkish</option>
                                                            <option value="tuvaluan">Tuvaluan</option>
                                                            <option value="ugandan">Ugandan</option>
                                                            <option value="ukrainian">Ukrainian</option>
                                                            <option value="uruguayan">Uruguayan</option>
                                                            <option value="uzbekistani">Uzbekistani</option>
                                                            <option value="venezuelan">Venezuelan</option>
                                                            <option value="vietnamese">Vietnamese</option>
                                                            <option value="welsh">Welsh</option>
                                                            <option value="yemenite">Yemenite</option>
                                                            <option value="zambian">Zambian</option>
                                                            <option value="zimbabwean">Zimbabwean</option>


                                                    </select>
                                                    

                                                </div>
                                                <div class="col-md-3">
                                                    <label for="midddlename" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control form-control-sm" name="STUDNAM2"
                                                        id="midddlename" placeholder="" maxlength="30" size="30"
                                                        data-toggle="tooltip" data-placement="right" title="Middle Name">
                                                    <br>
                                                    <label for="gender" class="form-label">Gender*</label>
                                                    <select class="form-control form-control-sm" name="GENDER" id="gender"
                                                        data-toggle="tooltip" data-placement="right" title="Gender"
                                                        required>
                                                        <option value="MALE">Male</option>
                                                        <option value="FEMALE">Female</option>
                                                    </select>
                                                    <br>

                                                    <label for="" class="form-label">Citezenship Country *</label>
                                                    <select class="form-control form-control-sm" name=""
                                                        id="civilstatus" data-toggle="tooltip" data-placement="right"
                                                        title="Citezenship Country" required>
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
                                            <!-- end name -->
                                            <div class="row mb-2">
                                                
                                                <div class="col-md-3">
                                                <label for="phonenumber" class="form-label">Contact Number*</label>
                                                    <input type="text" class="form-control form-control-sm" name="PHONE1"
                                                        id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                        data-toggle="tooltip" data-placement="right"
                                                        title="Cellphone Number" required>
                                                    <small class="form-text text-muted">
                                                        ex: 9770011001
                                                    </small>
                                                   
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="phonenumber" class="form-label">Contact Number*</label>
                                                    <input type="text" class="form-control form-control-sm" name="PHONE1"
                                                        id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                        data-toggle="tooltip" data-placement="right"
                                                        title="Cellphone Number" required>
                                                    <small class="form-text text-muted">
                                                        ex: 9770011001
                                                    </small>
                                                    </div>
                                                    <div class="col-md-3">
                                                    <label for="phonenumber" class="form-label">Contact Number*</label>
                                                    <input type="text" class="form-control form-control-sm" name="PHONE1"
                                                        id="phonenumber" placeholder="" pattern="[0-9]{10}"
                                                        data-toggle="tooltip" data-placement="right"
                                                        title="Cellphone Number" required>
                                                    <small class="form-text text-muted">
                                                        ex: 9770011001
                                                    </small>
                                                    
                                                </div>
                                                <div class="col-md-3">
                                                <label for="emailaddress" class="form-label">Valid Email
                                                        Address*</label>
                                                    <input type="email" class="form-control form-control-sm" name="EMAIL1"
                                                        id="emailaddress" placeholder="" maxlength="150" size="150"
                                                        data-toggle="tooltip" data-placement="right" title="Email Address"
                                                        required>
                                                    <small class="form-text text-muted">
                                                        Please input a valid email. 
                                                    </small>
                                                </div>


                                            </div> 
                                            <hr>
                                            

                                            
                                        </div>
                                        <!-- End Card Body -->
                                    </div>
                                    <!-- End card -->
                                </div>
                            </div>
                            <!-- end col- -->
                            <!-- col -->
                            <div class="col-md-12 float-sm-start">

                              <div class="col-md-6 p-2 float-sm-start">
                                  <div class="card">
                                      <div class="card-header" data-bs-toggle="collapse"
                                          data-bs-target="#collapsePersonal" aria-expanded="true"
                                          aria-controls="collapsePersonal">
                                          <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                          RESIDENTIAL ADDRESS 
                                          <a href="#"> <i class="fa fa-icon fa-edit fa-lg float-sm-end" data-toogle="tooltip" title="EDIT RESIDENTIAL ADDRESS"></i> </a>
                                      </div>
                                      <div class="card-body accordion-collapse collapse show"
                                          id="collapsePersonal-disable">
                                           <!-- Birth Place -->
                                           <div class="col-md-12 mb-2">

                                            <small class="form-text text-muted">
                                                Country*
                                            </small>
                                            <input type="text" id="BRTHCOUNTRY" name="BRTHCOUNTRY"
                                                class="form-control form-control-sm mb-2" placeholder=""
                                                maxlength="80" size="80" data-toggle="tooltip"
                                                data-placement="right" title="Country" required>
                                            <small class="form-text text-muted">
                                                Province*
                                            </small>
                                            <input type="text" id="BRTHPROVINCE" name="BRTHPROVINCE"
                                                class="form-control form-control-sm mb-2" placeholder=""
                                                maxlength="150" size="150" data-toggle="tooltip"
                                                data-placement="right" title="Province" required>
                                                <small class="form-text text-muted">
                                                Zip Code*
                                            </small>
                                            <input type="text" id="BRTHZIPCODE" name="BRTHZIPCODE"
                                                class="form-control form-control-sm mb-2" placeholder=""
                                                maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                title="Zip Code" required>

                                            <small class="form-text text-muted">
                                                Town*
                                            </small>
                                            <input type="text" id="BRTHTOWN" name="BRTHTOWN"
                                                class="form-control form-control-sm mb-2" placeholder=""
                                                maxlength="80" size="80" data-toggle="tooltip"
                                                data-placement="right" title="Town" required>
                                            <small class="form-text text-muted">
                                                Barangay*
                                            </small>
                                            <input type="text" id="BRTHBRGY" name="BRTHBRGY"
                                                class="form-control form-control-sm mb-2" placeholder=""
                                                maxlength="80" size="80" data-toggle="tooltip"
                                                data-placement="right" title="Barangay" required>

                                            <small class="form-text text-muted">
                                                Street
                                            </small>
                                            <input type="text" id="BRTHSTREET" name="BRTHSTREET"
                                                class="form-control form-control-sm mb-2" placeholder=""
                                                maxlength="50" size="50" data-toggle="tooltip"
                                                data-placement="right" title="Street">
                                            <small class="form-text text-muted">
                                                House No.
                                            </small>
                                            <input type="text" id="BRTHHOUSENO" name="BRTHHOUSENO"
                                                class="form-control form-control-sm mb-2" placeholder=""
                                                maxlength="20" size="20" data-toggle="tooltip"
                                                data-placement="right" title="House No.">
                                          </div>
                                          <!-- End Birth Place -->
                                      </div>
                                      
                                      <!-- End Card Body -->
                                  </div>
                                  <!-- End card -->
                              </div>
                              <div class="col-md-6 p-2 float-sm-start">
                                  <div class="card">
                                      <div class="card-header" data-bs-toggle="collapse"
                                          data-bs-target="#collapsePersonal" aria-expanded="true"
                                          aria-controls="collapsePersonal">
                                          <span class="card-icon"><i class="fa fa-graduation-cap"></i></span>
                                          PERMANENT ADDRESS
                                          <a href="#"> <i class="fa fa-icon fa-edit fa-lg float-sm-end" data-toogle="tooltip" title="EDIT PERMANENT ADDRESS"></i> </a>
                                      </div>
                                      <div class="card-body accordion-collapse collapse show"
                                          id="collapsePersonal-disable">
                                          <!-- Permanent Address -->

                                          <div class="col-md-12 mb-2">

                                                <small class="form-text text-muted">
                                                    Country*
                                                </small>
                                                <input type="text" id="ADDCOUNTRY" name="ADDCOUNTRY"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Country" required>

                                                    <small class="form-text text-muted">
                                                    Province*
                                                </small>
                                                <input type="text" id="ADDPROVINCE" name="ADDPROVINCE"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="150" size="150" data-toggle="tooltip"
                                                    data-placement="right" title="Province" required>
                                                    <small class="form-text text-muted">
                                                    Zip Code*
                                                </small>
                                                <input type="text" id="ADDZIPCODE" name="ADDZIPCODE"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="4" size="4" data-toggle="tooltip" data-placement="right"
                                                    title="Zip Code" required>
                                                
                                                
                                                <small class="form-text text-muted">
                                                    Town*
                                                </small>
                                                <input type="text" id="ADDTOWN" name="ADDTOWN"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Town" required>
                                                

                                                    <small class="form-text text-muted">
                                                    Barangay*
                                                </small>
                                                <input type="text" id="ADDBRGY" name="ADDBRGY"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="80" size="80" data-toggle="tooltip"
                                                    data-placement="right" title="Barangay" required>
                                               
                                                    <small class="form-text text-muted">
                                                    Street
                                                </small>
                                                <input type="text" id="ADDSTREET" name="ADDSTREET"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="50" size="50" data-toggle="tooltip"
                                                    data-placement="right" title="Street">

                                                    <small class="form-text text-muted">
                                                    House No.
                                                </small>
                                                <input type="text" id="ADDHOUSENO" name="ADDHOUSENO"
                                                    class="form-control form-control-sm mb-2" placeholder=""
                                                    maxlength="20" size="20" data-toggle="tooltip"
                                                    data-placement="right" title="House No.">

                                            </div>
                                            <!-- End Permanent Address -->

                                          
                                      </div>
                                      
                                      <!-- End Card Body -->
                                  </div>
                                  <!-- End card -->
                              </div>


                              <div class="col-md-3 float-sm-end">
                                                <div class="profile-img">
                                                    <!-- <div  class="image-area"> -->
                                                        <img id="SignimageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" style="width: 15em;height:15em;">
                                                    <!-- <h3>SIGNATURE</h3> -->
                                                    <!-- </div> -->
                                                    <div class="file btn btn-lg btn-primary" >

                                                        <input id="signature" type="file" data-toogle="tooltip" title="Upload your signature" onchange="readURL(this);"/>
                                                        <i class="fa fa-camera"  aria-hidden="true"></i>
                                                        
                                                    </div>
                                                </div>
                                            </div>



                            </div>
                            <!-- end col- -->

                            <!-- Col- -->
                            <div class="col-md-12 p-2 float-sm-start pb-5">
                                <div class="card" style="border-bottom: none">
                                    <div class="card-header" style="border: none">
                                        <label style="color: green;">
                                            <input type="checkbox" value="YES" id="CONSENT" name="CONSENT"
                                                onchange="consent();" />
                                            I hereby give my consent for lawful processing of personal information
                                            contained herein
                                            in accordance with Data Privacy Act of 2012.
                                        </label>
                                        <hr>
                                        <input type="submit" id="submit" disabled="disabled" value="Submit"
                                            class="btn btn-sm btn-success">
                                        By clicking Submit, you agree to our <a href="" target="_blank">Terms, Data
                                            Policy and Condition</a>.

                                    </div>
                                    <!-- End Card Body -->
                                </div>
                                <!-- End card -->
                            </div>
                            <!-- end col- -->


                        
                        
                          </form>
                        <!-- End Form -->


                    </div>
                    <!-- END COL 12 -->
                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footbar.php'); ?>
                <!-- End Footer -->



            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->





    <?php require_once('C:\xampp\htdocs\a2\app\views\emp\includes\footer.php'); ?>


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

    /*  ==========================================
            SHOW UPLOADED IMAGE
        * ========================================== */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#SignimageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(function () {
            $('#signature').on('change', function () {
                readURL(input);
            });
        });
    </script>


<style>
                                                           /*
                                                    *
                                                    * ==========================================
                                                    * CUSTOM UTIL CLASSES
                                                    * ==========================================
                                                    *
                                                    */
                                                    #signature {
                                                        opacity: 0;
                                                    }

                                                    #upload-label, {
                                                        position: absolute;
                                                        top: 50%;
                                                        transform: translateY(-50%);
                                                    }
                                                  

                                                    .profile-img{
                                                            text-align: center;
                                                        }
                                                        
                                                        .profile-img .file {
                                                            position: relative;
                                                            overflow: hidden;
                                                            margin-top: -25%;
                                                            /* width: 70%; */
                                                            border: none;
                                                            border-radius: 0;
                                                            font-size: 15px;
                                                            background: #212529b8;
                                                        }
                                                        .profile-img .file input {
                                                            position: absolute;
                                                            opacity: 0;
                                                            right: 0;
                                                            top: 0;
                                                        }
                                                </style>
                                                 
                                                