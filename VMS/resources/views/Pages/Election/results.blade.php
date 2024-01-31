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
            <span class="breadcrumb-item active">Voted Voters</span>
          </nav>

            </div><!-- br-pageheader -->

                <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                    <h4 class="tx-gray-800 mg-b-5">VOTER CHARTS / ඡන්ද ප්‍රස්ථාර</h4>
                    <p class="mg-b-0">Charts for voted voter details</p>
                </div>

                <div class="br-pagebody">
                    {{-- <img src="{{ asset('Assest/img/img1.jpg') }}"> --}}
                    <div class="br-section-wrapper">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10"> Voted Voters</h6>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full tally of voters who registered and voted ලියාපදිංචි වී ඡන්දය ප්‍රකාශ කළ සම්පූර්ණ ඡන්ද සංඛ්‍යාව පහතින්</p>
                        <hr class="black-line">
                        <p class="mg-b-25 mg-lg-b-80"></p>
                        <div class="row mb-4"><!-- Add mb-4 class for margin-bottom -->
                            <div class="col-xl-6">
                                <div id="malefemalebsr" class="ht-200 ht-sm-300 bd"></div>
                            </div>
                            <div class="col-xl-6 mg-t-20 mg-xl-t-0">
                                <div id="vsex" class="ht-200 ht-sm-250"></div>
                            </div><!-- col-6 -->
                        </div><!-- row -->

                        <p class="mg-b-25 mg-lg-b-80"></p>
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Not Voted Voters </h6>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full tally of voters who registered and not voted ලියාපදිංචි වී ඡන්දය ප්‍රකාශ නොකළ සම්පූර්ණ ඡන්ද සංඛ්‍යාව පහතින්</p>
                        <hr class="black-line">
                        <p class="mg-b-25 mg-lg-b-70"></p>

                        <div class="row tx-center">
                            <div class="col-xl-6">
                                <div id="civilstatusbar" class="ht-200 ht-sm-300 bd"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pd-y-20 bd"><div id="civilstatus" class="ht-200 ht-sm-250"></div></div>
                            </div><!-- col-6 -->
                        </div><!-- row -->

                        <p class="mg-b-25 mg-lg-b-80"></p>
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Voter's Province</h6>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full VOTE count of Provicial wise registerd Voters / පහත දැක්වෙන්නේ පළාත් අනුව ලියාපදිංචි ඡන්දදායකයින්ගේ සම්පූර්ණ ඡන්ද ගණනයයි</p>
                        <hr class="black-line">
                        <p class="mg-b-25 mg-lg-b-70"></p>
                        <div class="row">
                            <div class="col-xl-3">
                                <h3 class="tx-gray-800 tx-uppercase tx-bold tx-12 mg-b-2">Centrel Province</h3>
                                <div id="provincebar" class="ht-200 ht-sm-300 bd"></div>
                            </div>

                            <div class="col-xl-3">
                                <h3 class="tx-gray-800 tx-uppercase tx-bold tx-12 mg-b-2">Westren Province</h3>
                                <div id="westrenbar" class="ht-200 ht-sm-300 bd"></div>
                            </div>

                            <div class="col-xl-3">
                                <h3 class="tx-gray-800 tx-uppercase tx-bold tx-12 mg-b-2">Southern Province</h3>
                                <div id="soubar" class="ht-200 ht-sm-300 bd"></div>
                            </div>

                            <div class="col-xl-3">
                                <h3 class="tx-gray-800 tx-uppercase tx-bold tx-12 mg-b-2">UVA Province</h3>
                                <div id="uvanbar" class="ht-200 ht-sm-300 bd"></div>
                            </div>
                        </div>


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
            { y: '2024 Presidentiol Election', a: {{ $mvoters }}, b: {{ $fvoters }} },
        ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Full Count / සම්පූර්ණ ගණන', 'Voted / ඡන්දය දුන්'],
            barColors: ['#f39c12', '#9b59b6',],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true
        });

    new Morris.Donut({
        element: 'vsex',
        data: [
            {label: "Full Count", value: {{ $mvoters }}},
            {label: "Voted", value: {{ $fvoters }}},
        ],
        colors: ['#f39c12', '#9b59b6',],
        resize: true,
    });

    new Morris.Bar({
        element: 'civilstatusbar',
        data: [
            { y: '2023', a: {{ $mvoters }}, b: {{ $nvoters }} },
        ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Full Count / සම්පූර්ණ ගණන', 'Not Voted /ඡන්දය නොදුන්'],
            barColors: ['#2E86C1', '#E74C3C'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true
        });

    new Morris.Donut({
        element: 'civilstatus',
        data: [
            {label: "Full Count", value: {{ $mvoters }}},
            {label: "Not Voted", value: {{ $nvoters }}},
        ],
        colors: ['#2E86C1','#E74C3C'],
        resize: true,
    });

    new Morris.Bar({
            element: 'provincebar',
            data: [
                { y: '',
                    a: {{ $centrelvCount }},
                    b: {{ $centrelnvCount }},
                },
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['**Voted Centrel**', '**Not Voted Centrel**'],
            barColors: ['#D35469', '#FFC0CB'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true,
        });

        new Morris.Bar({
            element: 'westrenbar',
            data: [
                { y: '',
                    a: {{ $wvote }},
                    b: {{ $wnvote }},
                },
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['**Voted Westren**', '**Not Voted Westren**'],
            barColors: ['#4CAF50', '#8BC34A'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true,
        });

        new Morris.Bar({
            element: 'uvanbar',
            data: [
                { y: '',
                    a: {{ $uvote }},
                    b: {{ $unvote }},
                },
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['**Voted UVA**', '**Not Voted UVA**'],
            barColors: ['#4CAF50', '#8BC34A'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true,
        });

        new Morris.Bar({
            element: 'soubar',
            data: [
                { y: '',
                    a: {{ $svote }},
                    b: {{ $snvote }},
                },
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['**Voted Southern**', '**Not Voted Southern**'],
            barColors: ['#3498db', '#87CEEB'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true,
        });



</script>




