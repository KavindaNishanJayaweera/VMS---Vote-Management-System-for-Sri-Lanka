@include('Layouts.Header')
<style>
    .black-line {
        border: 1px solid #000; /* Sets the border to black (color code #000) */
        margin-top: 10px; /* Adjust the top margin as needed */
    }
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index-2.html">Voter</a>
            <a class="breadcrumb-item" href="#">Serach Voter</a>
        </nav>
    </div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-900 mg-b-15">REGISTERED VOTER DETAILS / ලියාපදිංචි ඡන්දදායකයින්ගේ විස්තර</h4>
        <p class="mg-b-0">This is all data of Voters. Use filters to search Voters</p>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-15 mg-b-10">Download Voter Data</h6>
            <hr class="black-line">
            <p class="mg-b-25 mg-lg-b-50"></p>

            <div class="row">
                <div class="col-md-3">
                    <a href="{{ url('/download-voter') }}">
                        <button class="btn btn-dark active btn-block mg-b-10">
                        Download Full Voter's Data
                        </button>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ url('/download-2000voter') }}">
                        <button class="btn btn-dark active btn-block mg-b-10">
                            Download Voter's Data DOB After 2000
                        </button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/download-malevoter') }}">
                        <button class="btn btn-dark active btn-block mg-b-10">
                            Download Male Voter's Data
                        </button>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ url('/download-femalevoter') }}">
                        <button class="btn btn-dark active btn-block mg-b-10">
                            Download Female Voter's Data
                        </button>
                    </a>
                </div>
            </div>

            <div class="row">
            </div>
            <p class="mg-b-25 mg-lg-b-75"></p>
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-15 mg-b-10">Search Voter Data</h6>
            <hr class="black-line">
            <p class="mg-b-25 mg-lg-b-50"></p>

            {{-- <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="dob" class="form-label">Name / ID / NIC</label>
                        <input name="search" type="text" class="form-control" id="search">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="dob" class="form-label">District</label>
                        <select name="v_ldis" class="form-control" id="v_ldis">
                            <option value="-">-</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Jafna">Jafna</option>
                            <option value="Kandy">N'Eliya</option>
                            <option value="Colombo">Kelaniya</option>
                            <option value="Jafna">Kaluthara</option>
                            <option value="Kandy">Galle</option>
                            <option value="Colombo">Hambanthota</option>
                            <option value="Jafna">Badulla</option>
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
                            <option value="Eastren">Eastren</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-2">
                    <div class="mb-3">
                        <label for="dob" class="form-label">Click here</label>
                        <button type="submit" class="btn btn-info btn-block">Search Voter</button>
                    </div>
                </div>
            </div> --}}


            {{-- <!-- Add a search input field -->
            <input type="text" id="searchInput" placeholder="Search..."> --}}

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Initial Name / මුල් නම </th>
                            <th class="wd-15p">Name / නම</th>
                            <th class="wd-15p">NIC / ජාතික හැඳුනුම්පත් අංකය</th>
                            <th class="wd-15p">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($voters as $voter)
                        <tr>
                            <td>{{$voter->v_initials}}</td>
                            <td>{{$voter->v_name}}</td>
                            <td>{{ $voter->v_nicp }}</td>
                            <td >
                                {{-- <a href=""><i class="fas fa-pen-square text-primary font-20"></i></a> --}}
                                <a href="{{ url('edit-voter/'.$voter->Id.'') }}"><i class="fas fa-pen-square text-primary font-20"></i></a>
                                <a href="{{ url('delete-voter/'.$voter->Id.'') }}"><i class="fas fa-times-circle text-danger font-20"></i></a>
                                {{-- <a href=""><i class="fas fa-check-circle text-success font-20"></i></a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2023. All Rights Reserved.</div>
                <div>Attentively and carefully made by Sri Lanka Election Department</div>
            </div>
            </footer>
    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->

@include('Layouts.Footer')

<script>
    $(function(){
      'use strict';

      $('#datatable1').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search / සෙවීම...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      $('#datatable2').DataTable({
        bLengthChange: false,
        searching: false,
        responsive: true
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>
