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

    <form wire:submit.prevent="storeTeacher">
        <div class="row">
            <div class="col-md-6 mb-1">
                <label class="form-label" for="validationCustom01">First Name</label>
                <input class="form-control" type="text" wire:model="first_name" placeholder="Enter Teacher First Name">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="validationCustom01">Last Name</label>
                <input class="form-control" type="text" wire:model="last_name" placeholder="Enter Teacher Last Name">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="validationCustom01">Phone No</label>
                <input class="form-control" type="text" wire:model="phone_no" placeholder="Enter Teacher Phone No">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="validationCustom01">Email</label>
                <input class="form-control" type="email" wire:model="email" placeholder="Enter Teacher Email">
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
            <div class="col-md-6 mb-3">
                <label for="">Describe Your Teaching Experience</label>
                <input type="text" class="form-control" wire:model="experience"
                    placeholder="Enter Experience in Years">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Internet Connection Type <span class="text-danger">*</span></label>
                <select wire:model="internet_use" class="form-control">
                    <option value="">Select Internet Connection Type</option>
                    <option value="Boradband">Boradband</option>
                    <option value="Mobile Internet">Mobile Internet</option>
                    <option value="Data Card or Dongles">Data Card or Dongles</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">What device you are going to use for Online Class</label>
                <input type="text" class="form-control" wire:model="teaching_tools"
                    placeholder="eg: Whiteboard, Laptop, Tablet">
            </div>
            <div class="form-group row">
                {{ Form::label('availability', 'Availability', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    <table class="table table-sm table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Day</th>
                            <th scope="col">To Time</th>
                            <th scope="col">From Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($days as $key => $day)
                            <input type="hidden" value="{{ $day }}" name="availability[{{$key}}][day]">
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $day }}</td>
                                <td><input class="form-control form-control-sm" type="time" name="availability[{{ $key }}][to_time]"></td>
                                <td><input class="form-control form-control-sm" type="time" name="availability[{{ $key }}][from_time]"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @error('availability') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="mb-1 row">
                {{ Form::label('video_link', 'video_link', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::textarea('video_link', old('video_link'), ['class' => 'form-control','rows' => '3','placeholder' => 'video_link']) }}
                    @error('video_link') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('metaTitle', 'metaTitle', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::textarea('metaTitle', old('metaTitle'), ['class' => 'form-control','rows' => '3','placeholder' => 'metaTitle']) }}
                    @error('metaTitle') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('metaDescription', 'metaDescription', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::textarea('metaDescription', old('metaDescription'), ['class' => 'form-control','rows' => '3','placeholder' => 'metaDescription']) }}
                    @error('metaDescription') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-1 row">
                {{ Form::label('metaKeyword', 'metaKeyword', ['class' => 'col-sm-3 col-form-label']) }}
                <div class="col-sm-7">
                    {{ Form::textarea('metaKeyword', old('metaKeyword'), ['class' => 'form-control','rows' => '3','placeholder' => 'metaKeyword']) }}
                    @error('metaKeyword') <span class="text-red">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <fieldset class="border p-1">
            <legend class="w-auto">Public Profile</legend>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationCustom01">Profile Headline </label>
                    <input class="form-control" type="text" wire:model="profile_headline"
                        placeholder="Enter Profile Headline ">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationCustom01">Youtube Bio Link</label>
                    <input class="form-control" type="text" wire:model="youtube" placeholder="Enter Youtube Link">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="validationCustom01">Profile Photo</label>
                    <input class="form-control" type="file" wire:model="image" placeholder="Upload Photo">
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="validationCustom01">Teacher Bio</label>
                    <textarea wire:model="about" rows="3" placeholder="Enter Teacher Bio (Max 200 Words)"
                        class="form-control"></textarea>
                </div>
            </div>
        </fieldset>
        <fieldset class="border mt-2 p-1">
            <legend class="w-auto">Education</legend>
            <div class="teacher_teaching">
                <div class="row">
                    @foreach ($teacherEducations as $key => $entry)
                        <div class="col-md-11 row teacher-search-row mb-4">
                            <div class="col-md-6 mb-2">
                                <label for="university name">University Name</label>
                                <input type="text" placeholder="University Name"
                                    wire:model="teacherEducations.{{ $key }}.university_name"
                                    class="form-control" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="degree">Degree</label>
                                <input type="text" placeholder="E.g. Bachelor's Degree in English"
                                    wire:model="teacherEducations.{{ $key }}.degree" class="form-control" />
                            </div>
                            <div class="col-md-3 mb-2">
                                <label for="degree">Start Year</label>
                                <input type="month" placeholder="Start Year"
                                    wire:model="teacherEducations.{{ $key }}.start_year"
                                    class="form-control" />
                            </div>
                            <div class="col-md-3 mb-2">
                                <label for="degree">End Year</label>
                                <input type="month" placeholder="End Year"
                                    wire:model="teacherEducations.{{ $key }}.end_year" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="degree">Upload Documents</label>
                                <input type="file" wire:model="teacherEducations.{{ $key }}.course_certificate"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-1"
                            style="text-align: right; position: relative; top: 70px; height: 30px;">
                            <button type="button" wire:click="removeRowTeacherEducations({{ $key }})"
                                class="btn btn-danger">Del</button>
                        </div>
                    @endforeach
                </div>
                <button wire:click="addRowTeacherEducations()"  type="button" class="btn btn-primary">Add Row</button>
            </div>
        </fieldset>
        <fieldset class="border mt-2 p-1">
            <legend class="w-auto">Subject</legend>
            <div class="teacher_teaching">
                <div class="row">
                    @foreach ($teacherSkills as $key => $entry)
                        <div class="col-md-3 mb-1">
                            <label class="form-label" for="curriculam">curriculam</label>
                            <select wire:model="teacherSkills.{{ $key }}.curriculam" class="form-control">
                                <option value="" selected>Select Curriculam</option>
                                @foreach ($entry['curriculams'] as $curriculam)
                                    <option value="{{ $curriculam['id'] }}">{{ $curriculam['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label" for="grade">Grade</label>
                            <select wire:model="teacherSkills.{{ $key }}.grade" class="form-control">
                                <option value="" selected>Select Grade</option>
                                @foreach ($entry['grades'] as $grade)
                                    <option value="{{ $grade['id'] }}">{{ $grade['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-1">
                            <label class="form-label" for="subject">Subject</label>
                            <select wire:model="teacherSkills.{{ $key }}.subject" class="form-control">
                                <option value="" selected>Select Subject</option>
                                @foreach ($entry['subjects'] as $subject)
                                    <option value="{{ $subject['id'] }}">{{ $subject['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 mb-1">
                            <label class="form-label" for="validationCustom01">Pay Rate</label>
                            <div class="input-group">
                                <span class="input-group-text" style="font-size: 13px;">AED</span>
                                <input class="form-control" wire:model="teacherSkills.{{ $key }}.pay_rate"
                                type=number step=0.01>
                            </div>
                        </div>
                        <div class="col-md-1 mb-1" style="display: flex;align-items: flex-end;">
                            <button type="button" class="btn btn-danger"
                                wire:click="removeTeacherSkill({{ $key }})" title="Delete Row">
                                Del
                            </button>
                        </div>
                    @endforeach
                </div>
                <button wire:click="addRowTeacherSkill()"  type="button" class="btn btn-primary">Add Row</button>
            </div>
        </fieldset>
        <button class="btn btn-primary mt-2" type="submit">Add</button>
    </form>
</div>
