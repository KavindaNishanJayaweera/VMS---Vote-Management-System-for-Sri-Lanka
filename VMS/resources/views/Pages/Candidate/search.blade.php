@include('Layouts.Header')

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="index-2.html">Candidate</a>
            <a class="breadcrumb-item" href="#">Serach Candidate</a>
        </nav>
    </div>
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">CANDIDATES DETAILS / අපේක්ෂකයින්ගේ විස්තර</h4>
        <p class="mg-b-0">This is all data of Candidate. Use filters to search Candidate</p>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Search Candidate Data</h6>
            <p class="mg-b-25 mg-lg-b-50"></p>

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Initial Name / මුල් නම</th>
                            <th class="wd-15p">Name / නම</th>
                            <th class="wd-15p">NIC / ජාතික හැඳුනුම්පත් අංකය</th>
                            <th class="wd-15p">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($candidates as $candidate)
                        <tr>
                            <td>{{$candidate->c_initials}}</td>
                            <td>{{$candidate->c_name}}</td>
                            <td>{{ $candidate->c_nicp }}</td>
                            <td >
                                <a href="{{ url('delete-candidate/'.$candidate->id.'') }}"><i class="fas fa-times-circle text-danger font-20"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
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
