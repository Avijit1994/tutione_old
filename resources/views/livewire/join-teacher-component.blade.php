<div>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <h1>Join us as Teacher</h1>
                    <ul class="form-step">
                        <li>
                            <span
                                class="step-text @if ($currentStep > 1)
                                    complete
@endif
                                @if ($currentStep == 1)
                                    active
@endif">1</span>
                            <span class="step-desc">Personal Info</span>
                        </li>
                        <li>
                            <span
                                class="step-text @if ($currentStep > 2)
                                    complete
@endif
                                @if ($currentStep == 2)
                                    active
@endif">2</span>
                            <span class="step-desc">Upload Photo</span>
                        </li>
                        <li>
                            <span
                                class="step-text @if ($currentStep > 3)
                                    complete
@endif
                                @if ($currentStep == 3)
                                    active
@endif">3</span>
                            <span class="step-desc">Education</span>
                        </li>
                        <li>
                            <span
                                class="step-text @if ($currentStep > 4)
                                    complete
@endif
                                @if ($currentStep == 4)
                                    active
@endif">4</span>
                            <span class="step-desc">Teaching Details</span>
                        </li>
                        <li>
                            <span
                                class="step-text @if ($currentStep > 5)
                                    complete
@endif
                                @if ($currentStep == 5)
                                    active
@endif">5</span>
                            <span class="step-desc">Public Profile</span>
                        </li>
                        <li>
                            <span
                                class="step-text @if ($currentStep > 6)
                                    complete
@endif
                                @if ($currentStep == 6)
                                    active
@endif">6</span>
                            <span class="step-desc">Availablity</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="container contact-container">
        @if ($currentStep == 1)
            <div class="row">
                <div class="col-md-9 banner-box">
                    <form wire:submit.prevent="firstStepSubmit">
                        <div class="banner-card row">
                            <div class="col-md-6 mb-2">
                                <label for="">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model="first_name"
                                       placeholder="Enter First Name">
                                @error('first_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" wire:model="last_name"
                                       placeholder="Enter Last Name">
                            </div>
                            <div class="col-md-6 mb-2 form-group">
                                <label for="">Country <span class="text-danger">*</span></label>
                                <select wire:model="country" class="form-control select2"
                                        data-placeholder="Select Country">
                                    <option value=""></option>
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
                                    <option value="IO">British Indian Ocean Territory</option>
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
                                    <option value="CG">Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czechia</option>
                                    <option value="CI">Côte d&#039;Ivoire</option>
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
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See</option>
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
                                    <option value="LA">Lao People&#039;s Democratic Republic</option>
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
                                    <option value="MH">Marshall Islands</option>
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
                                    <option value="NE">Niger</option>
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
                                    <option value="GB">United Kingdom of Great Britain and Northern Ireland (GB)
                                    </option>
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
                                @error('country') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Phone No <span class="text-danger">*</span></label>
                                <input type="tel" id="phone" wire:model="phone" class="form-control"
                                       placeholder="e.g. +1 702 123 4567">
                                @error('phone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">WhatsApp No</label>
                                <input type="number" class="form-control" wire:model="whatsapp"
                                       placeholder="Enter Your WhatsApp No">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model="email"
                                       placeholder="Enter Your Email Id">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Years of Experience</label>
                                <input type="number" class="form-control" wire:model="experience"
                                       placeholder="Enter Experience in Years">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="">Internet Connection Type <span class="text-danger">*</span></label>
                                <select wire:model="internet_use" class="form-control select2"
                                        data-placeholder="Select Internet Connection Type">
                                    <option value=""></option>
                                    <option value="Broadband">Broadband</option>
                                    <option value="Mobile Internet">Mobile Internet</option>
                                    <option value="Data Card or Dongles">Data Card or Dongles</option>
                                </select>
                                @error('internet_use') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="">Type of device used</label>
                                <select wire:model="teaching_tools" class="form-control select2"
                                        data-placeholder="Select teaching tools">
                                    <option value=""></option>
                                    <option value="Whiteboard">Whiteboard</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Tablet">Tablet</option>
                                </select>
                            </div>
                            <div class="d-flex flex-row-reverse mt-3">
                                <button class="btn btn-primary" type="submit">Next Step</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endif
        @if ($currentStep == 2)
            <div class="row">
                <div class="col-md-9 banner-box">
                    <div class="banner-card row">
                        <h5 class="mb-3">Profile Photo</h5>
                        <div class="col-md-7">
                            <div class="photo-subheading">
                                <h6>Make a Great First Impression</h6>
                                <p>Tutors who look friendly and professional get more students</p>
                            </div>

                            <input accept="image/*" wire:model="profile_photo" wire:click="$emit('profile_photo_click')"
                                   type="file" id="profile_photo"
                                   class="form-control"/>
                            @error('profile_photo') <span class="error">{{ $message }}</span> @enderror

                            @if ($profile_photo)
                                <div
                                    x-data="{
                                        setUp(){

                                        const cropper = new Cropper(document.getElementById('imagePreview'), {
                                               aspectRatio: 1/1,
                                               autoCropArea: 1,
                                               viewMode: 3,
                                               preview: '#final_image',
                                               crop(event){
                                                console.log(event.detail.x)
                                                console.log(event.detail.y)
                                               }
                                            });
                                        }
                                    }"
                                    x-init="setUp"
                                >
                                    Photo Preview:
                                    <img id="imagePreview" style="width: 100%;"
                                         src="{{ $profile_photo->temporaryUrl() }}">
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5">
                            <div class="photo-tips">
                                <h5>Tips for an amazing Photo</h5>
                                <ol>
                                    <li>Frame your Head and soulders</li>
                                    <li>Your photo centered and upright</li>
                                    <li>Use Neutral lighting and background</li>
                                    <li>Your face and eyes are fully visible</li>
                                    <li>Avoid Logos or contact information</li>
                                    <li>You are only person in the photo</li>
                                    <li>Use a white background</li>
                                    <li>Wear formal clothing</li>
                                </ol>
                            </div>
                            <div>
                                @if ($profile_photo)
                                    <img src="{{ $profile_photo->temporaryUrl() }}" style="width:330px;height: 300px" id="final_image"/>
                                @endif
                            </div>

                            <div class="pd-5">
                                <div class="tutor-card">
                                    <div class="tutor-profile-img">
                                        <img id="profile_img_preview"
                                             src="https://www.unmc.edu/cihc/_images/faculty/default.jpg"/>
                                    </div>
                                    <div class="tutor-details">
                                        <h4 class="tutor-name"
                                            style="background: #eee; width: 150px; height: 20px;"></h4>
                                        <span class="tutor-degree mt-2"
                                              style="display: block; background: #eee; width: 100px; height: 15px;">
                                        </span>
                                    </div>
                                    <button class="btn btn-tutor-view"><i class="fas fa-arrow-right"></i></button>
                                </div>
                                <div class="tutor-summary">
                                    <p style="background: #ffa2a269; height: 17px; margin-bottom: 5px;"></p>
                                    <p style="background: #ffa2a269; height: 17px; width: 80%;"></p>
                                </div>
                            </div>
                        </div>
                        <form wire:submit.prevent="secondStepSubmit">
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-primary mt-2" id="join-teacher-2-submit">Next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        @if ($currentStep == 3)
            <div class="row">
                <div class="col-md-9 banner-box">
                    <div class="banner-card row">
                        <form wire:submit.prevent="thirdStepSubmit">
                            <div class="col-md-12">
                                <h5 class="text-center join-title mb-5">Please Mention your Education Details</h5>
                                <div class="class repeater2">
                                    <div class="teaching_subject">
                                        <div class="row">
                                            @foreach ($teacherEducations as $key => $entry)
                                                <div class="col-md-11 row teacher-search-row mb-4">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="university name">University Name</label>
                                                        <input type="text" placeholder="University Name"
                                                               wire:model="teacherEducations.{{ $key }}.university_name"
                                                               class="form-control"/>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="degree">Degree</label>
                                                        <input type="text"
                                                               placeholder="E.g. Bachelor's Degree in English"
                                                               wire:model="teacherEducations.{{ $key }}.degree"
                                                               class="form-control"/>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <label for="degree">Start Year</label>
                                                        <input type="date" placeholder="Start Year"
                                                               wire:model="teacherEducations.{{ $key }}.start_year"
                                                               class="form-control"/>
                                                    </div>
                                                    <div class="col-md-3 mb-2">
                                                        <label for="degree">End Year</label>
                                                        <input type="date" placeholder="End Year"
                                                               wire:model="teacherEducations.{{ $key }}.end_year"
                                                               class="form-control"/>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="degree">Upload Documents</label>
                                                        <input type="file"
                                                               wire:model="teacherEducations.{{ $key }}.course_certificate"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"
                                                     style="text-align: right; position: relative; top: 70px; height: 30px;">
                                                    <button type="button"
                                                            wire:click="removeRowTeacherEducations({{ $key }})"
                                                            class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary repeater-add"
                                            wire:click="addRowTeacherEducations()"><i class="fas fa-plus"></i> Add
                                        More
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-primary mt-2" type="submit">Next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        @if ($currentStep == 4)
            <div class="row">
                <div class="col-md-9 banner-box">
                    <div class="banner-card row">
                        <form id="form_teacher_teaching" wire:submit.prevent="fourthStepSubmit">
                            <div class="col-md-12">
                                <h5 class="text-center join-title mb-5">Click on Class you want to Teach and Mention
                                    Subject</h5>
                                <div class="class repeater2">
                                    <div class="teaching_subject">
                                        @foreach ($teacherSkills as $key => $entry)
                                            <div class="row">
                                                <div class="col-md-3 mb-1">
                                                    <label class="form-label" for="curriculum">Curriculum</label>
                                                    <select wire:model="teacherSkills.{{ $key }}.curriculam"
                                                            class="form-control">
                                                        <option value="" selected>Select Curriculam</option>
                                                        @foreach ($entry['curriculams'] as $curriculam)
                                                            <option value="{{ $curriculam['id'] }}">
                                                                {{ $curriculam['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-1">
                                                    <label class="form-label" for="grade">Grade</label>
                                                    <select wire:model="teacherSkills.{{ $key }}.grade"
                                                            class="form-control">
                                                        <option value="" selected>Select Grade</option>
                                                        @foreach ($entry['grades'] as $grade)
                                                            <option value="{{ $grade['id'] }}">
                                                                {{ $grade['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-1">
                                                    <label class="form-label" for="subject">Subject</label>
                                                    <select wire:model="teacherSkills.{{ $key }}.subject"
                                                            class="form-control">
                                                        <option value="" selected>Select Subject</option>
                                                        @foreach ($entry['subjects'] as $subject)
                                                            <option value="{{ $subject['id'] }}">
                                                                {{ $subject['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2 mb-1">
                                                    <label class="form-label" for="validationCustom01">Pay
                                                        Rate</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"
                                                              style="font-size: 13px;">AED</span>
                                                        <input class="form-control"
                                                               wire:model="teacherSkills.{{ $key }}.pay_rate"
                                                               type="number">
                                                    </div>
                                                </div>
                                                <div class="col-md-1 mb-1"
                                                     style="display: flex;align-items: flex-end;">
                                                    <button type="button" class="btn btn-danger"
                                                            wire:click="removeTeacherSkill({{ $key }})"
                                                            title="Delete Row">
                                                        Del
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-secondary repeater-add"
                                            wire:click="addRowTeacherSkills()"><i class="fas fa-plus"></i> Add More
                                        Subject
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-primary mt-2">Next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        @if ($currentStep == 5)
            <div class="row">
                <div class="col-md-9 banner-box">
                    <div class="banner-card row">
                        <form wire:submit.prevent="fifthStepSubmit">
                            <div class="col-md-12">
                                <h5 class="mb-3">Profile Description</h5>
                                <p>Update or Create New Profile Headline and description. It will appear on the TheTuitionE
                                    Website</p>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="row">
                                            <div class="col-md-4 d-flex">
                                                <img width="150"
                                                     src="{{ $profile_photo->temporaryUrl() }}"
                                                     alt=""/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label for="youtube bio">Profile Headline <span
                                                class="text-danger">*</span></label>
                                        <input type="text" wire:model="profile_headline"
                                               placeholder="E.g. Bachelor's in Mathematics" class="form-control"/>
                                        @error('profile_headline') <span class="error">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label for="youtube bio">Paste your Youtube Bio</label>
                                        <input type="text" wire:model="youtube_bio" placeholder="Paste Youtube Bio Link"
                                               class="form-control"/>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label for="">Please Introduce Yourself (100-1000 words)</label>
                                        <textarea wire:model="profile_description" rows="4" class="form-control"
                                                  placeholder="Introduce yourself and share briefly about you"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button type="submit" class="btn btn-primary mt-2">Next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        @if ($currentStep == 6)
            <div class="row">
                <div class="col-md-9 banner-box">
                    <div class="banner-card row">
                        <form wire:submit.prevent="joinTeacher">
                            <div class="col-md-12">
                                @foreach ($availabilityDays as $key => $value)
                                    <livewire:components.add-teacher-availablity-toggle-button :day="$key"
                                                                                               :key="$value"/>
                                @endforeach
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </section>
</div>
