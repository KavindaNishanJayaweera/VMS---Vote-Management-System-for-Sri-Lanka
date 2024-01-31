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
            <a class="breadcrumb-item" href="#">Charts</a>
            <span class="breadcrumb-item active">Voter's Charts</span>
          </nav>

            </div><!-- br-pageheader -->

                <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                    <h4 class="tx-gray-800 mg-b-5">FINAL RESULTS</h4>
                    {{-- <p class="mg-b-0">Charts for registerd voter details</p> --}}
                </div>

                <div class="br-pagebody">
                    {{-- <img src="{{ asset('Assest/img/img1.jpg') }}"> --}}
                    <div class="br-section-wrapper">
                        {{-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Candidates Color code</h6> --}}
                        <p class="mg-b-25 mg-lg-b-35"></p>
                        <div class="row">
                            <div class="col-xl-10">
                                <div class="p-3 mb-3 text-dark" style="background-color: #f39c12; font-weight: bold;font-size: 18px;">
                                    Mahela Jayawardhana
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="p-3 mb-3 text-dark" style="background-color: #eee9e9; font-weight: bold;font-size: 18px;">
                                    {{ $mvoters }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-10">
                                <div class="p-3 mb-3  text-dark" style="background-color: #2ecc71;font-weight: bold;font-size: 18px;">
                                    Sajith Premadasa
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="p-3 mb-3 text-dark" style="background-color: #eee9e9; font-weight: bold;font-size: 18px;">
                                    {{ $fvoters }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-10">
                                <div class="p-3 mb-3  text-dark" style="background-color: #3498db;font-weight: bold;font-size: 18px;">
                                    Ranil Wickramasinghe
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="p-3 mb-3 text-dark" style="background-color: #eee9e9; font-weight: bold;font-size: 18px;">
                                    {{ $rvoters }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-10">
                                <div class="p-3 mb-3  text-dark" style="background-color: #e74c3c;font-weight: bold;font-size: 18px;">
                                    Anura Kumara Dissanayake
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="p-3 mb-3 text-dark" style="background-color: #eee9e9; font-weight: bold;font-size: 18px;">
                                    {{ $avoters }}
                                </div>
                            </div>
                        </div>

                        {{--
                        <div>
                            <p>Vote count for Mahela Jayawardhana: {{ $mvoters }}</p>
                            <p>Vote count for Sajith Premadasa: {{ $fvoters }}</p>
                            <p>Vote count for Ranil Wickramasinghe: {{ $rvoters }}</p>
                            <p>Vote count for Anura Kumara Dissanayake: {{ $avoters }}</p>
                        </div> --}}


                        {{-- <p class="mg-b-25 mg-lg-b-80"></p>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full count of Male / Female of registerd Voters පහත දැක්වෙන්නේ ලියාපදිංචි ඡන්ද දායකයින්ගේ පිරිමි/කාන්තාගේ සම්පූර්ණ ගණනයයි</p>
                        <hr class="black-line"> --}}
                        <p class="mg-b-25 mg-lg-b-80"></p>
                        <div class="row mb-4"><!-- Add mb-4 class for margin-bottom -->
                            <div class="col-xl-12">
                                <div id="malefemalebsr" class="ht-200 ht-sm-600 bd"></div>

                            </div>

                        </div><!-- row -->

                        <div class="row mb-4"><!-- Add mb-4 class for margin-bottom -->
                            <div class="col-xl-3 mg-t-20 mg-xl-t-0">
                                <p class="mg-b-25 mg-lg-b-80"></p>
                            </div>
                            <p class="mg-b-25 mg-lg-b-80"></p>
                            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                                <div id="vsex" class="ht-200 ht-sm-450"></div>
                            </div><!-- col-6 -->
                        </div>


                        {{-- <p class="mg-b-25 mg-lg-b-80"></p>
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Voter's Province</h6>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full count of Provicial wise registerd Voters / පහත දැක්වෙන්නේ පළාත් අනුව ලියාපදිංචි ඡන්දදායකයින්ගේ සම්පූර්ණ ගණනයයි</p>
                        <hr class="black-line">
                        <p class="mg-b-25 mg-lg-b-70"></p>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="provincebar" class="ht-200 ht-sm-300 bd"></div>
                            </div>
                        </div>
                        <p class="mg-b-25 mg-lg-b-80"></p>
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Voter's Civil Status </h6>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full count of Civil Status of registerd Voters ලියාපදිංචි ඡන්ද දායකයින්ගේ සිවිල් තත්ත්‍වයේ සම්පූර්ණ සංඛ්‍යාව</p>
                        <hr class="black-line">
                        <p class="mg-b-25 mg-lg-b-70"></p>

                        <div class="row tx-center">
                            <div class="col-xl-6">
                                <div id="civilstatusbar" class="ht-200 ht-sm-300 bd"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pd-y-20 bd"><div id="civilstatus" class="ht-200 ht-sm-250"></div></div>
                            </div><!-- col-6 -->
                        </div><!-- row --> --}}

                    </div><!-- br-section-wrapper -->
                </div><!-- br-pagebody -->
                <footer class="br-footer">
                    <div class="footer-left">
                        <div class="mg-b-2">Copyright &copy; 2023. All Rights Reserved.</div>
                        <div>Attentively and carefully made by Sri Lanka Election Department</div>
                    </div>
                </footer>
            </div>
        </div><!-- br-mainpanel -->
    </div>
@include('Layouts.Footer')

<script src="{{  asset('Assest/lib/morris.js/morris.js') }}"></script>
<script src="{{  asset('Assest/js/chart.morris.js') }}"></script>


<script src="../lib/Flot/jquery.flot.js"></script>
<script src="../lib/Flot/jquery.flot.pie.js"></script>
<script src="../lib/Flot/jquery.flot.resize.js"></script>
<script src="../lib/flot-spline/jquery.flot.spline.js"></script>

<script src="../js/chart.flot.js"></script>

<script>
     new Morris.Bar({
            element: 'malefemalebsr',
            data: [
                { y: '2024 Election', a: {{ $mvoters }}, b: {{ $fvoters }},c:{{ $rvoters }}, d:{{ $avoters }} },
            ],
            xkey: 'y',
            ykeys: ['a', 'b','c','d'],
            labels: ['Mahela Jayawardhana', 'Sajith Premadasa','Ranil Wickramasinghe','Anura Kumara Dissanayake'],
            barColors: ['#f39c12','#2ecc71', '#3498db', '#e74c3c'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true
        });

        new Morris.Donut({
            element: 'vsex',
            data: [
                    {label: "Mahela Jayawardhana", value: {{ $mvoters }}},
                    {label: "Sajith Premadasa", value: {{ $fvoters }}},
                    {label: "Ranil Wickramasinghe", value: {{ $rvoters }}},
                    {label: "Anura Kumara Dissanayake", value: {{ $avoters }}},
                ],
                colors: ['#f39c12','#2ecc71', '#3498db', '#e74c3c'],
                resize: true,
        });

</script>




