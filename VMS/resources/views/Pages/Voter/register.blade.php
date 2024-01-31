@include('Layouts.Header')

<!-- ########## START: MAIN PANEL ########## -->
{{-- <style>
  .form-layout {
    border: 2px solid red;
    padding: 15px;
  }
</style> --}}
<div class="br-mainpanel">

    <!-- START PAGEHEADER -->
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index-2.html">Voter</a>
        <a class="breadcrumb-item" href="#">New</a>
      </nav>
    </div>
    <!-- END PAGEHEADER-->

    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-900 mg-b-15">ADD NEW VOTER / නව ඡන්ද දායකයෙකු එකතු කිරීම</h4>
        <p class="mg-b-15">This Form is used to collect Voter information with different parameters of voters</p>
    </div>




    <div class="br-pagebody">

        <form action="/add-voter" method="POST">
            @csrf
            {{-- PERSONAL INFORMATION --}}
            <div class="br-section-wrapper">
                <h6 style="color: black;" class="tx-uppercase tx-bold tx-15 mg-b-10">Personal Information / පුද්ගලික තොරතුරු</h6>
                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Initials :<span class="tx-danger"> *</span></label>
                                <input name="v_initials" type="text" class="@error('v_initials') is-invalid @enderror form-control" id="v_initials">
                                @error('v_name')
                                    <div class="text-danger">Voter Initials is required</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Name :<span class="tx-danger"> *</span></label>
                                <input name="v_name" type="text" class="form-control" id="v_name">
                                @error('v_name')
                                    <div class="text-danger">Voter Name is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="mb-3">
                                <label for="email" class="form-label">Name for Initials :<span class="tx-danger"> *</span></label>
                                <input name="v_nameforinitials" type="text" class="@error('v_nameforinitials') is-invalid @enderror form-control" id="v_nameforinitials">
                                @error('v_name')
                                    <div class="text-danger"> Name for Initial is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Other Names</label>
                                <input name="v_othernames" type="text" class="form-control" id="v_othernames">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Password for Voter</label>
                                <input name="v_pw" type="password" class="form-control" id="v_pw">
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            {{-- START BIRTH INFORMATION --}}

            <div class="br-section-wrapper">
                <h4 style="color: black;" class="tx-uppercase tx-bold tx-15 mg-b-10">Birth Information / උපත් තොරතුරු</h6>

                <div class="form-layout form-layout-1">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth:<span class="tx-danger"> *</span></label>
                                <input name="v_dob" type="date" class="@error('v_dob') is-invalid @enderror form-control" id="v_dobplace">
                                @error('v_dob')
                                    <div class="text-danger">Voter DOB me is required</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Age :<span class="tx-danger"> *</span></label>
                                <input name="v_age" type="text" class="@error('v_age') is-invalid @enderror form-control" id="v_age">
                                @error('v_age')
                                    <div class="text-danger">Voter Age is required</div>
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
                                <input name="v_zonal" type="text" class="@error('v_zonal') is-invalid @enderror form-control" id="v_zonal">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">District</label>
                                <select name="v_dis" class="form-control" id="v_dis">
                                    <option value="-">-</option>
                                    {{-- <option value="Kandy">Kandy</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Jafna">Jafna</option>
                                    <!-- Add more options as needed --> --}}
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Provincial</label>
                                <select name="v_pro" class="form-control" id="v_pro">
                                    <option value="-">-</option>
                                    <option value="Centrel">Centrel</option>
                                    <option value="Westren">Westren</option>
                                    <option value="Eastern">Eastern</option>
                                    <option value="Westren">Southern</option>
                                    <option value="Centrel">North-Central</option>
                                    <option value="Westren">North-Westren</option>
                                    <option value="Centrel">Uva</option>
                                    <option value="Westren">Sabaragamuwa</option>
                                    <option value="Centrel">Northern</option>
                                    {{-- <option value="option4">Eastren</option>
                                    <option value="option4">Eastren</option> --}}
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- START Civil Status --}}
            <div class="br-section-wrapper">
                <h6 style="color: black;" class="tx-uppercase tx-bold tx-15 mg-b-10">Civil Status / සිවිල් තත්වය</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Sex</label>
                                <select name="v_sex" class="form-control" id="v_sex">
                                    <option value="-">-</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Marital Status</label>
                                <select name="v_Cstatus" class="form-control" id="v_Cstatus">
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
                <h6 style="color: black;" class="tx-uppercase tx-bold tx-15 mg-b-10">Identification Informations / හඳුනාගැනීමේ තොරතුරු</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">NIC/Passport Number :<span class="tx-danger"> *</span></label>

                                <input name="v_nicp" type="text" class="@error('v_nicp') is-invalid @enderror form-control" id="v_nicp">

                                @error('v_nicp')
                                    <div class="text-danger">Voter NIC/Passport Number is required</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">NIC/Passport Issue date :<span class="tx-danger"> *</span></label>
                                <input name="v_nicpd" type="date" class="@error('v_nicpd') is-invalid @enderror form-control" id="v_nicpd">
                                @error('v_nicpd')
                                    <div class="text-danger">Voter NIC/Passport Number issues date is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- START LIVING INFORMATION --}}
            <div class="br-section-wrapper">
                <h6 style="color: black;" class="tx-uppercase tx-bold tx-15 mg-b-10">Livinig Information / වාසස්ථාන තොරතුරු</h6>

                <div class="form-layout form-layout-1">

                    <div class="row">
                        <div class="col-md-4">

                            <div class="mb-3">
                                <label for="email" class="form-label">Divisional Secretarient :<span class="tx-danger"> *</span></label>

                                <input name="v_ds" type="text" class="@error('v_ds') is-invalid @enderror form-control" id="v_ds">

                                @error('v_ds')
                                    <div class="text-danger">Divisional Secretarient is required</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Postal Code :<span class="tx-danger"> *</span></label>
                                <input name="v_poscode" type="text" class="@error('v_poscode') is-invalid @enderror form-control" id="v_poscode">
                                @error('v_poscode')
                                    <div class="text-danger">Postal Code is required</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">

                            <div class="mb-3">
                                <label for="email" class="form-label">No :<span class="tx-danger"> *</span></label>

                                <input name="v_no" type="text" class="@error('v_no') is-invalid @enderror form-control" id="v_no">

                                @error('v_no')
                                    <div class="text-danger">No is required</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Lane :<span class="tx-danger"> *</span></label>
                                <input name="v_lane" type="text" class="@error('v_lane') is-invalid @enderror form-control" id="v_lane">
                                @error('v_lane')
                                    <div class="text-danger">Lane is required</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="dob" class="form-label">City :<span class="tx-danger"> *</span></label>
                                <input name="v_lcity" type="text" class="@error('v_lcity') is-invalid @enderror form-control" id="v_lcity">
                                @error('v_lcity')
                                    <div class="text-danger">City is required</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="dob" class="form-label">District</label>
                                <select name="v_ldis" class="form-control" id="v_ldis">
                                    <option value="-">-</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Mullaitivu">Mullaitivu</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Provincial</label>
                                <select name="v_lpro" class="form-control" id="v_lpro">
                                    <option value="-">-</option>
                                    <option value="Centrel">Centrel</option>
                                    <option value="Westren">Westren</option>
                                    <option value="Eastern">Eastern</option>
                                    <option value="Westren">Southern</option>
                                    <option value="Centrel">North-Central</option>
                                    <option value="Westren">North-Westren</option>
                                    <option value="Centrel">Uva</option>
                                    <option value="Westren">Sabaragamuwa</option>
                                    <option value="Centrel">Northern</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- START CONTACT INFORMATION --}}
            <div class="br-section-wrapper">
                <h6 style="color: black;" class="tx-uppercase tx-bold tx-14 mg-b-10">Contact Information / සබඳතා තොරතුරු</h6>

                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="v_mail" type="email" class="form-control" id="v_mail">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Mobile No 1</label>
                                <input name="v_num1" type="text" class="form-control" id="v_num1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Mobile No 2</label>
                                <input name="v_num2" type="text" class="form-control" id="v_num2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Guardian Number</label>
                                <input name="v_Gnum" type="text" class="form-control" id="v_Gnum">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info btn-block">Register New Voter</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Add this script block at the end of your main layout file -->
<script>
    @if(session('success'))
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    @endif
</script>
