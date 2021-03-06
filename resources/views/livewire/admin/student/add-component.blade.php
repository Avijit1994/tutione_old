<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    <form wire:submit.prevent="storeStudent()">
        <div class="row">
            <div class="col-md-6 mb-1">
                <label class="form-label" for="validationCustom01">Name</label>
                <input class="form-control" type="text" wire:model="name" placeholder="Enter Name">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="validationCustom01">Phone No</label>
                <input class="form-control" type="text" wire:model="phone" placeholder="Enter Phone No">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="validationCustom01">Email</label>
                <input class="form-control" type="email" wire:model="email" placeholder="Enter Email">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="">WhatsApp No</label>
                <input type="text" class="form-control" wire:model="whatsapp" placeholder="Enter Your WhatsApp No">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="validationCustom01">Country</label>
                <select wire:model="country" class="form-control">
                    <option selected="" value=""></option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
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
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czechia</option>
                    <option value="CI">Côte d'Ivoire</option>
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
                    <option value="KP">Korea (Democratic People's Republic of Korea)</option>
                    <option value="KR">Korea (Republic of Korea)</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic </option>
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
                    <option value="RE">Réunion</option>
                    <option value="BL">Saint Barthélemy</option>
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
        </div>
        <fieldset class="border p-1">
            <legend class="w-auto">Public Profile</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="tin">
                        <p>Birthday</p>
                        <input type="time" class="form-control" wire:model="birthday" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Gender</p>
                        <select class="form-control" wire:model="gender">
                            <option value="none" selected="">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Nationality</p>
                        <select class="form-control" wire:model="nationality">
                            <option value="none" selected="">Nationality</option>
                            <option value="AFGHANISTAN">AFGHANISTAN</option>
                            <option value="ALBANIA">ALBANIA</option>
                            <option value="ALGERIA  ">ALGERIA </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Lead Owner</p>
                        <select class="form-control" wire:model="lead_owner">
                            <option value="none" selected="">TheTuitionE</option>
                            <option value="AFGHANISTAN">TutionF</option>
                            <option value="ALBANIA">TutionG</option>
                            <option value="ALGERIA">TutionH</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Referral Source</p>
                        <select class="form-control" wire:model="referral_source">
                            <option value="none" selected="">Facebook</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Twitter">Twitter</option>
                            <option value="linkedin">linkedin</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Preferable Call Back Time</p>
                        <input type="text" class="form-control" wire:model="preferable_time" placeholder="Enter Preferable Call Back Time">
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="border mt-2 p-1">
            <legend class="w-auto">Guardian Details</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="tin">
                        <p>Guardian Name</p>
                        <input type="text" class="form-control" wire:model="guardian_name" placeholder="Enter Guardian First Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Email Address</p>
                        <input type="text" class="form-control" wire:model="guardian_email" placeholder="Enter Email Address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Phone No</p>
                        <input type="text" class="form-control" wire:model="guardian_phone" placeholder="Enter Phone No">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tin">
                        <p>Relation</p>
                        <select class="form-control" wire:model="guardian_relation">
                            <option value="none" selected="">Father</option>
                            <option value="Father">Father</option>
                            <option value="Mom">Mom</option>
                            <option value="uncle">Uncle</option>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="border mt-2 p-1">
            <legend class="w-auto">Academic Details</legend>
            <div class="row">
                <div class="col-md-12">
                    <div class="tin">
                        <p>School</p>
                        <select class="form-control" wire:model="school_name">
                            <option value="none" selected="">select School</option>
                            <option value="1">School 1</option>
                            <option value="2">School 2</option>
                            <option value="3">School 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Year (Grade)</p>
                        <input type="text" class="form-control" wire:model="school_grade" placeholder="Enter Grade">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Curriculum</p>
                        <input type="text" class="form-control" wire:model="school_curriculum" placeholder="Enter Curriculum">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tin">
                        <p>Course</p>
                        <input type="text" class="form-control" wire:model="school_course" placeholder="Enter Course Details">
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="border mt-2 p-1">
            <legend class="w-auto">Address Details</legend>
            <div class="row">
                <div class="col-md-12">
                    <div class="tin">
                        <p>Address (Line 1)</p>
                        <input type="text" class="form-control" wire:model="addressLine1" placeholder="Enter Address Line 1">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tin">
                        <p>Address (Line 2)</p>
                        <input type="text" class="form-control" wire:model="addressLine2" placeholder="Enter Address Line 2">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tin">
                        <p>City</p>
                        <select class="form-control" wire:model="city">
                            <option value="none" selected="">select City</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Bangalore">Bangalore</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tin">
                        <p>Zip Code</p>
                        <input type="text" class="form-control" wire:model="zipcode" placeholder="Enter Zip Code">
                    </div>
                </div>
            </div>
        </fieldset>
        <button class="btn btn-primary mt-2" type="submit">Add</button>
    </form>
</div>
