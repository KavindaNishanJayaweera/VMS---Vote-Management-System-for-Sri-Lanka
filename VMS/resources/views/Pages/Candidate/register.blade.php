@include('Layouts.Header')

<!-- ########## START: MAIN PANEL ########## -->

<div class="br-mainpanel">

    <!-- START PAGEHEADER -->
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index-2.html">Candidate</a>
        <a class="breadcrumb-item" href="#">New</a>
      </nav>
    </div>
    <!-- END PAGEHEADER-->

    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">ADD NEW CANDIDATE / නව අපේක්ෂකයෙකු එකතු කිරීම</h4>
        <p></p>
        <p class="mg-b-0 ml-3">*  This Form is used to collect Candidate information with different parameters of Candidates</p>
        <p class="mg-b-0 ml-3">*  This Form is note used for election candidate</p>
    </div>


    <div class="br-pagebody">

        <form action="/add-candidate" method="POST">
            @csrf
            {{-- PERSONAL INFORMATION --}}
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Candidate Personal Information / අපේක්ෂකයාගේ පුද්ගලික තොරතුරු</h6>

                <div class="form-layout form-layout-1">

                    <div class="row">
                        <div class="col-md-4">

                            <div class="mb-3">
                                <label for="email" class="form-label">Initials :<span class="tx-danger"> *</span></label>
                                <input name="c_initials" type="text" class="@error('c_initials') is-invalid @enderror form-control" id="v_initials">
                                @error('c_initials')
                                    <div class="text-danger">Candidate Initials is required</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Name :<span class="tx-danger"> *</span></label>
                                <input name="c_name" type="text" class="form-control" id="c_name">
                                @error('c_name')
                                    <div class="text-danger">Candidate Name is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="mb-3">
                                <label for="email" class="form-label">Name for Initials :<span class="tx-danger"> *</span></label>
                                <input name="c_nameforinitials" type="text" class="@error('c_nameforinitials') is-invalid @enderror form-control" id="v_nameforinitials">
                                @error('c_nameforinitials')
                                    <div class="text-danger"> Name for Initial is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">

                            <div class="mb-3">
                                <label for="email" class="form-label">Other Names</label>
                                <input name="c_othernames" type="text" class="form-control" id="c_othernames">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- START BIRTH INFORMATION --}}

            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Birth Information / උපත් තොරතුරු</h6>

                <div class="form-layout form-layout-1">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth:<span class="tx-danger"> *</span></label>
                                <input name="c_dob" type="date" class="@error('c_dob') is-invalid @enderror form-control" id="v_dobplace">
                                @error('c_dob')
                                    <div class="text-danger">Candidate DOB me is required</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Age :<span class="tx-danger"> *</span></label>
                                <input name="c_age" type="text" class="@error('c_age') is-invalid @enderror form-control" id="c_age">
                                @error('c_age')
                                    <div class="text-danger">Candidate Age is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <p></p>
                    </div>
                    <div class="row">
                        <label for="dob" class="form-label">Place of Birth</label>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Zonal</label>
                                <input name="c_zonal" type="text" class="@error('c_zonal') is-invalid @enderror form-control" id="v_zonal">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">District</label>
                                <select name="c_dis" class="form-control" id="c_dis">
                                    <option value="-">-</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Jafna">Jafna</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Provincial</label>
                                <select name="c_pro" class="form-control" id="c_pro">
                                    <option value="-">-</option>
                                    <option value="Centrel">Centrel</option>
                                    <option value="Westren">Westren</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- START Civil Status --}}
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Civil Status / සිවිල් තත්වය</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Sex</label>
                                <select name="c_sex" class="form-control" id="c_sex">
                                    <option value="-">-</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Marital Status</label>
                                <select name="c_Cstatus" class="form-control" id="c_Cstatus">
                                    <option value="-">-</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- START IDENTIFICATION INFORMATION --}}
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Identification Informations / හඳුනාගැනීමේ තොරතුරු</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">NIC/Passport Number :<span class="tx-danger"> *</span></label>

                                <input name="c_nicp" type="text" class="@error('c_nicp') is-invalid @enderror form-control" id="c_nicp">

                                @error('c_nicp')
                                    <div class="text-danger">Candidate NIC/Passport Number is required</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">NIC/Passport Issue date :<span class="tx-danger"> *</span></label>
                                <input name="c_nicpd" type="date" class="@error('c_nicpd') is-invalid @enderror form-control" id="c_nicpd">
                                @error('c_nicpd')
                                    <div class="text-danger">Candidate NIC/Passport Number issues date is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- START LIVING INFORMATION --}}
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Livinig Information / වාසස්ථාන තොරතුරු</h6>

                <div class="form-layout form-layout-1">

                    <div class="row">
                        <div class="col-md-4">

                            <div class="mb-3">
                                <label for="email" class="form-label">Divisional Secretarient :<span class="tx-danger"> *</span></label>

                                <input name="c_ds" type="text" class="@error('c_ds') is-invalid @enderror form-control" id="c_ds">

                                @error('c_ds')
                                    <div class="text-danger">Divisional Secretarient is required</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Postal Code :<span class="tx-danger"> *</span></label>
                                <input name="c_poscode" type="text" class="@error('c_poscode') is-invalid @enderror form-control" id="c_poscode">
                                @error('c_poscode')
                                    <div class="text-danger">Postal Code is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">

                            <div class="mb-3">
                                <label for="email" class="form-label">No :<span class="tx-danger"> *</span></label>

                                <input name="c_no" type="text" class="@error('c_no') is-invalid @enderror form-control" id="c_no">

                                @error('c_no')
                                    <div class="text-danger">No is required</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Lane :<span class="tx-danger"> *</span></label>
                                <input name="c_lane" type="text" class="@error('c_lane') is-invalid @enderror form-control" id="c_lane">
                                @error('c_lane')
                                    <div class="text-danger">Lane is required</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="dob" class="form-label">City :<span class="tx-danger"> *</span></label>
                                <input name="c_lcity" type="text" class="@error('c_lcity') is-invalid @enderror form-control" id="c_lcity">
                                @error('c_lcity')
                                    <div class="text-danger">City is required</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="dob" class="form-label">District</label>
                                <select name="c_ldis" class="form-control" id="c_ldis">
                                    <option value="-">-</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Jafna">Jafna</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Provincial</label>
                                <select name="c_lpro" class="form-control" id="c_lpro">
                                    <option value="-">-</option>
                                    <option value="Centrel">Centrel</option>
                                    <option value="Westren">Westren</option>
                                    <option value="Eastren">Eastren</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- START CONTACT INFORMATION --}}
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Contact Information / සම්බන්ධතා තොරතුරු</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="c_mail" type="email" class="form-control" id="c_mail">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Mobile No 1</label>
                                <input name="c_num1" type="text" class="form-control" id="c_num1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Mobile No 2</label>
                                <input name="c_num2" type="text" class="form-control" id="c_num2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Guardian Number</label>
                                <input name="c_Gnum" type="text" class="form-control" id="c_Gnum">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Candidtate party details --}}
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Currunt Party Details / වත්මන් පක්ෂ විස්තර</h6>
                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                {{-- <label class="form-control-label">Party: <span class="tx-danger">*</span></label> --}}
                                <label class="form-control-label">Party: <span class="tx-danger">*</span></label>
                                <select id="select2-a" class="form-control" data-placeholder="Choose party" name="J_party" id="J_party">
                                <option label="Choose party"></option>
                                <option value="UNP">UNP</option>
                                <option value="SLAP">SLAP</option>
                                <option value="SLAC">SLAC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                {{-- <label for="dob" class="form-label">Date of Joinning:<span class="tx-danger"> *</span></label> --}}
                                <label for="dob" class="form-label">Date of Joinning:<span class="tx-danger"> *</span></label>
                                <input name="j_dob" type="date" class="@error('j_dob') is-invalid @enderror form-control" id="j_dob">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Registerd Election</label>
                                <select id="select2-a" class="form-control" data-placeholder="Choose Election" name="J_elet" id="J_elet">
                                <option label="Choose party"></option>
                                <option value="Presidentioal">Presidentioal</option>
                                <option value="Parliment">Parliment</option>
                                <option value="Divitional">Divitional</option>
                                <option value="Districtwise">Districtwise</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Registerd Election Year</label>
                                <select id="select2-a" class="form-control" data-placeholder="Choose Year" name="J_elet" id="J_elet">
                                <option label="Choose party"></option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info btn-block">Register New Candidate</button>
        </form>

        <!-- str pagefooter -->
        <footer class="br-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2023. All Rights Reserved.</div>
            <div>Attentively and carefully made by Sri Lanka Election Department</div>
        </div>
        </footer>
        <!--end pagefooter -->

    </div>
  <!-- end mainpanel -->

@include('Layouts.Footer')
