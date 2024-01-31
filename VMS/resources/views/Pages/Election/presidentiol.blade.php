@include('Layouts.Header')

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index-2.html">Election</a>
        <a class="breadcrumb-item" href="#">Presidiontiol</a>
        <span class="breadcrumb-item active">Add Candidate</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-20">
      <h4 class="tx-gray-800 mg-b-5">Presidentioal Candidate</h4>
      <p class="mg-b-0">Forms are used to add Candidte for the Election. </p>
    </div>

    <div class="br-pagebody">

        <form action="/add-presidentcandidate" method="POST">

            @csrf

            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-10 mg-b-5">Enter Presidentioal Candidate Details</h6>
                <p class="mg-b-30 tx-gray-600"></p>

                <div class="form-layout form-layout-2">
                    <div class="row no-gutters">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Showing Name: <span class="tx-danger">*</span></label>
                                <input class="@error('pec_name') is-invalid @enderror form-control" type="text" name="pec_name"  placeholder="Enter here"  id="pec_name">
                                @error('pec_name')
                                    <div class="text-danger"> Showing Name for is required</div>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label mg-b-0-force">Party: <span class="tx-danger">*</span></label>
                                <select id="select2-a" class="form-control" data-placeholder="Choose party" name="pec_party" id="pec_party">
                                <option label="Choose party"></option>
                                <option value="UNP">UNP</option>
                                <option value="SLAP">SLAP</option>
                                <option value="SLAC">SLAC</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control @error('pec_fullname') is-invalid @enderror" type="text" name="pec_fullname" placeholder="Enter here" id="pec_fullname">
                                @error('pec_fullname')
                                    <div class="text-danger"> Full Name for is required</div>
                                @enderror
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                  <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button type="submit" class="btn btn-info">Submit Form</button>
                    <button class="btn btn-secondary">Cancel</button>
                  </div><!-- form-group -->
                </div><!-- form-layout -->

              </div><!-- br-section-wrapper -->

        </form>

        {{-- <div class="br-section-wrapper">
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Initial Name</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">NIC</th>
                            <th class="wd-15p">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($electionPresidents as $electionPresident)
                        <tr>
                            <td>{{$electionPresident->pec_name}}</td>
                            <td>{{$electionPresident->pec_fullname}}</td>
                            <td>{{ $electionPresident->pec_party }}</td>
                            <td >
                                <a href="{{ url('delete-voter/'.$voter->Id.'') }}"><i class="fas fa-times-circle text-danger font-20"></i></a>
                                <a href=""><i class="fas fa-check-circle text-success font-20"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> --}}



    </div><!-- br-pagebody -->


    <footer class="br-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2023. All Rights Reserved.</div>
            <div>Attentively and carefully made by Sri Lanka Election Department</div>
        </div>
        </footer>
  </div><!-- br-mainpanel -->

  <!-- ########## END: MAIN PANEL ########## -->


  @include('Layouts.Footer')

  {{-- <script>
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
</script> --}}

