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
        <h4 class="tx-gray-800 mg-b-5">Search Voter Details</h4>
        <p class="mg-b-0">This is all data of Voters. Use filters to search Voters</p>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            {{-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">All Voters Data</h6>
            <hr class="black-line">
            <p class="mg-b-25 mg-lg-b-40"></p> --}}

            {{--
            <div class="row">

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="dob" class="form-label">District</label>
                        <select class="form-control select2" data-placeholder="Choose Browser">
                            <option value="-">-</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Jafna">Jafna</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="dob" class="form-label">Sex</label>
                        <select class="form-control select2" data-placeholder="Choose Browser">
                            <option value="-">-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="dob" class="form-label">Married Status</label>
                        <select class="form-control select2" data-placeholder="Choose Browser">
                            <option value="-">-</option>
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="text-end">
                        <button id="applyFilters" class="btn btn-primary">Apply Voter Search filter</button>
                    </div>
                </div>
                <div class="col-md-7">
                </div>
                <div class="col-md-3">
                </div>
            </div> --}}

             {{-- <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <p class="mg-b-25 mg-lg-b-50"></p>
                        <p class="mg-b-25 mg-lg-b-50"></p>
                    </div>
                </div>
            </div> --}}

            <h6 class="tx-gray-800 mg-b-5">Search Voter Details and make a voter</h4>
                <hr class="black-line">
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Initial Name</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">NIC</th>
                            <th class="wd-15p">District</th>
                            <th class="wd-15p">Make Vote</th>

                        </tr>
                    </thead>
                    <tbody id="voterTableBody">
                        @foreach($voters as $voter)
                        <tr>
                            <td>{{$voter->v_initials}}</td>
                            <td>{{$voter->v_name}}</td>
                            <td>{{ $voter->v_nicp }}</td>
                            <td>{{ $voter->v_ldis }}</td>
                            <td>
                                <a href="{{ url('edit-voter/'.$voter->Id.'') }}"><i class="fas fa-pen-square text-primary font-20"></i></a>
                                <a href="{{ url('http://127.0.0.1/VVVMS/login.php') }}" target="_blank"><i class="fas fa-check-circle text-success font-20"></i></a>
                                {{-- <a href="{{ url('http://127.0.0.1/VVVMS/login.php') }}"><i class="fas fa-check-circle text-success font-20"></i></a> --}}
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
          searchPlaceholder: 'Search...',
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
