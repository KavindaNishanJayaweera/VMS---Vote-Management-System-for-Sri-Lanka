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
                    <h4 class="tx-gray-800 mg-b-5">VOTER'S CHARTS / ඡන්ද දායකයින්ගේ ප්‍රස්ථාර</h4>
                    <p class="mg-b-0">Charts for registerd voter details</p>
                </div>

                <div class="br-pagebody">
                    {{-- <img src="{{ asset('Assest/img/img1.jpg') }}"> --}}
                    <div class="br-section-wrapper">
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Voter's Sex</h6>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full count of Male / Female of registerd Voters පහත දැක්වෙන්නේ ලියාපදිංචි ඡන්ද දායකයින්ගේ පිරිමි/කාන්තා සම්පූර්ණ ගණනයයි</p>
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
                        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-b-10">Voter's Province</h6>
                        <p class="mg-b-25 mg-lg-b-10">Below is the full count of Provicial wise registerd Voters / පහත දැක්වෙන්නේ පළාත් අනුව ලියාපදිංචි ඡන්දදායකයින්ගේ සම්පූර්ණ ගණනයයි</p>
                        <hr class="black-line">
                        <p class="mg-b-25 mg-lg-b-70"></p>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="provincebar" class="ht-200 ht-sm-500 bd"></div>
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
                        </div><!-- row -->

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
                { y: '2023', a: {{ $mvoters }}, b: {{ $fvoters }} },
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Male', 'Female'],
            barColors: ['#f39c12', '#9b59b6',],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true
        });

        new Morris.Donut({
            element: 'vsex',
            data: [
                    {label: "Male / පුරුෂ", value: {{ $mvoters }}},
                    {label: "Female/ස්ත්‍රී", value: {{ $fvoters }}},
                ],
                colors: ['#f39c12', '#9b59b6',],
                resize: true,
        });

        new Morris.Bar({
            element: 'provincebar',
            data: [
                { y: '2023 Registerd Voters / 2023 දක්වා ලියාපදිංචි ඡන්ද දායකයින්',
                    a: {{ $centrel }},
                    b: {{ $westren }},
                    c: {{ $eastren }},
                    d: {{ $southern }},
                    e: {{ $nwestren }},
                    f: {{ $ncentrel }},
                    g: {{ $uva }},
                    h: {{ $sabaragmuwa }},
                    i: {{ $northern }},
                },
            ],
            xkey: 'y',
            ykeys: ['a', 'b','c','d','e','f','g','h','i'],
            //labels: ['Centrel', 'Westren','Eastern','Southern','North-Central','North-Westren','Uva','Sabaragamuwa','Northern'],
            labels: ['මධ්‍යම / Centrel', 'බස්නාහිර / Westren','නැගෙනහිර / Eastern','දකුණු / Southern','උතුරු මැද / North-Central','වයඹ / North-Westren','ඌව / Uva','සබරගමුව / Sabaragamuwa','උතුරු / Northern'],
            //barColors: ['#5058AB', '#14A0C1', '#14A0C1', '#14A0C1'],
            barColors: ['#3498db', '#e74c3c', '#2ecc71', '#f39c12', '#9b59b6', '#1abc9c', '#d35400', '#34495e', '#c0392b'], // Example colors, feel free to customize
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true,
        });


        new Morris.Bar({
            element: 'civilstatusbar',
            data: [
                { y: '2023 Registerd Voters', a: {{ $married }}, b: {{ $unmarried }} },
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Married', 'Unmarried'],
            barColors: ['#2E86C1', '#E74C3C'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true
        });

        new Morris.Donut({
            element: 'civilstatus',
            data: [
                    {label: "Married/විවාහක", value: {{ $married }}},
                    {label: "Unmarried/අවිවාහක", value: {{ $unmarried }}},
                ],
                colors: ['#3D449C','#268FB2'],
                resize: true,
        });



    </script>




