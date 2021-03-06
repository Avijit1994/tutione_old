<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Free Web tutorials" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="John Doe" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Join Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/intlTelInput.css" />
    <link rel="stylesheet" href="css/swiper.css" />
    <link rel="stylesheet" href="css/grt-youtube-popup.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/cropper.css" />
    <link rel="stylesheet" href="css/sweetalert2.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-2/css/all.min.css" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>


<header class="slide-nav transparent-bg homepages">
            <div class="container tutione-bg">
                <div class="tutione-header">
                    <a href="index.html" class="logo-img">
                        <img class="img-logo" src="images/logo-dark.png"
                        data-light-logo="images/logo-dark.png" data-dark-logo="images/logo-dark.png" alt="" />
                    </a>
                    <div class="responsive-menu">
                        <nav class="main-nav">
                            <ul class="web-menu fl-right">
                                <li>
                                    <a href="find-teacher.html">Teacher</a>
                                </li>
                                <li>
                                    <a href="success-stories.html">Success Stories</a>
                                </li>
                                <li>
                                    <a href="news.html">News</a>
                                </li>
                                <li>
                                    <a href="join-us.html">Join Us</a>
                                </li>
                                <li>
                                    <a href="book-demo.html">Trial Class</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu"><i class="fas fa-bars"></i></div>
                    <button type="button" class="btn login-btn openLogin">Login</button>
                </div>
            </div>
        </header>




    <div class="breadcrumb-container">
        <div class="container text-white breadcrumb-text">Home / Join Us / Step 1</div>
    </div>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h1>Join us as Teacher</h1>
                    <ul class="form-step">
                        <li><span class="step-text active">1</span><span class="step-desc">Personal Info</span></li>
                        <li><span class="step-text ">2</span><span class="step-desc">Upload Photo</span></li>
                        <li><span class="step-text">3</span><span class="step-desc">Education</span></li>
                        <li><span class="step-text">4</span><span class="step-desc">Teaching Details</span></li>
                        <li><span class="step-text">5</span><span class="step-desc">Public Profile</span></li>
                        <li><span class="step-text">6</span><span class="step-desc">Availablity</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="container contact-container">

        <div class="row">
            <div class="col-md-9 banner-box">
                <form action="https://tutione.com/join-us/detailsSave" id="form_teacher_personal" method="POST">
                    <input type="hidden" name="_token" value="eK9U7DyvVuyEAnnKkqIgUk9I8DcYkdT6952QnAoG">                    <input type="hidden" name="application_type" value="1">
                    <div class="banner-card row">

                            <div class="col-md-6 mb-2">
                                <label for="">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Phone No <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone"  class="form-control" placeholder="Please Enter Your Phone No">
                                <input type="hidden" name="country_code" id="country_code">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Your Email Id">
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="">WhatsApp No</label>
                                <input type="text" class="form-control" name="whatsapp" placeholder="Enter Your WhatsApp No">
                            </div>
                            <div class="col-md-6 mb-2 form-group">
                                <label for="">Country <span class="text-danger">*</span></label>
                                <select name="country" id="" class="form-control select2" data-placeholder="Select Country">
                                    <option value=""></option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">??land Islands</option>
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
                                    <option value="BO">Bolivia (Plurinational State of)</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory </option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="CV">Cabo Verde</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands (the)</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CD">Congo (The Democratic Republic of the)</option>
                                    <option value="CG">Congo </option>
                                    <option value="CK">Cook Islands </option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Cura??ao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czechia</option>
                                    <option value="CI">C??te d&#039;Ivoire</option>
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
                                    <option value="SZ">Eswatini</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands [Malvinas]</option>
                                    <option value="FO">Faroe Islands </option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories </option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia </option>
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
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See </option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran (Islamic Republic of Iran)</option>
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
                                    <option value="KP">Korea (Democratic People&#039;s Republic of Korea)</option>
                                    <option value="KR">Korea (Republic of Korea)</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People&#039;s Democratic Republic </option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands </option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia (Federated States of Micronesia)</option>
                                    <option value="MD">Moldova</option>
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
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger </option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestine, State of</option>
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
                                    <option value="MK">Republic of North Macedonia</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="RE">R??union</option>
                                    <option value="BL">Saint Barth??lemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
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
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan (Province of China)</option>
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
                                    <option value="AE">United Arab Emirates (UAE)</option>
                                    <option value="GB">United Kingdom of Great Britain and Northern Ireland (GB)</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="US">United States of America (USA)</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela (Bolivarian Republic of)</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands (British)</option>
                                    <option value="VI">Virgin Islands (U.S.)</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Describe Your Teaching Experience</label>
                                <input type="text" class="form-control" name="experience" placeholder="Enter Experience in Years">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Internet Connection Type <span class="text-danger">*</span></label>
                                <select name="internet_type" id="" class="form-control select2" data-placeholder="Select Internet Connection Type">
                                    <option value=""></option>
                                    <option value="Boradband">Boradband</option>
                                    <option value="Mobile Internet">Mobile Internet</option>
                                    <option value="Data Card or Dongles">Data Card or Dongles</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="">What device you are going to use for Online Class</label>
                                <input type="text" class="form-control" name="teaching_tools" placeholder="eg: Whiteboard, Laptop, Tablet">
                            </div>
                            <div class="d-flex flex-row-reverse mt-3">
                                <button class="btn btn-primary" type="submit" >Next Step</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
