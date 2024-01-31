@include('Layouts.Header')
<style>
    .black-line {
        border: 1px solid #c5b5b5; /* Sets the border to black (color code #000) */
        margin-top: 10px; /* Adjust the top margin as needed */
    }
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            {{-- <a class="breadcrumb-item" href="index-2.html">Bracket</a>
            <a class="breadcrumb-item" href="#">UI ELements</a> --}}
            <span class="breadcrumb-item active">Home Page</span>
        </nav>
    </div>

    {{-- <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">Cards</h4>
      <p class="mg-b-0">A card is a flexible and extensible content container that includes options for headers and footers, etc.</p>
    </div> --}}

    <div class="br-pagebody">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-0 mg-b-5">Election / මැතිවරණ </h6>
            <hr class="black-line">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-20 mg-b-5"></h6>
            <div class="row">
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/search-candidate" class="btn btn-danger active btn-block mg-b-10">
                            Presidentonal ජනාධිපතිවරණය
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Presidential elections are scheduled to be held in Sri Lanka before September 2024, according to the constitution.
                                <br>
                                <br>
                                ආණ්ඩුක්‍රම ව්‍යවස්ථාවට අනුව 2024 සැප්තැම්බර් මාසයට පෙර ශ්‍රී ලංකාවේ ජනාධිපතිවරණය පැවැත්වීමට නියමිතය.
                            </p>ක්‍රියාවලිය ආරම්භ කිරීමට මෙතැන ක්ලික් කරන්න
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/Load-voterforElee" class="btn btn-danger disabled btn-block mg-b-10">
                            Pradeshiya sabha ප්‍රාදේශීය සභාව
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Sri Lanka has not held local elections since 2018. The elections were originally scheduled for 2022, but were postponed to 2023 due to the country's economic crisis and instability.
                                <br>
                                <br>
                                <br>
                                ශ්‍රී ලංකාව 2018 වසරේ සිට පළාත් පාලන මැතිවරණයක් පවත්වා නැත.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/Load-voterforElee" class="btn btn-danger disabled btn-block mg-b-10">
                            Partliment election අර්ධ මැතිවරණය
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Members are elected by proportional representation for five-year terms, with universal suffrage. The President of Sri Lanka has the power to summon, suspend, prorogue, or terminate a legislative session<br>
                                <br>
                                සර්වජන ඡන්ද බලය සහිත පස් අවුරුදු වාර සඳහා සමානුපාතික නියෝජන ක්‍රමය මඟින් සාමාජිකයන් තෝරා පත් කර ගනු ලැබේ.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-60 mg-b-5">Voters ඡන්ද දායකයින්</h6>
            <hr class="black-line">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-20 mg-b-5"></h6>
            {{-- <p class="mg-b-25 mg-lg-b-50">Add an optional header within a card.</p> --}}

            <div class="row">
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/search-voter" class="btn btn-success">
                            Search Voter
                            <br><br>ඡන්දදායකයා සොයන්න
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Click on the provided link to seamlessly access the dedicated search page tailored for 'Voter Information.'
                                <br>
                                <br>
                                ඡන්දදායක තොරතුරු' සඳහා සකස් කර ඇති කැපවූ සෙවුම් පිටුවට බාධාවකින් තොරව ප්‍රවේශ වීමට සපයා ඇති සබැඳිය ක්ලික් කරන්න
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/add-voter" class=" btn btn-success active">
                            Add New Voter<br><br>
                            අලුත් ඡන්ද දායකයෙක් එකතු කරන්න
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Elevate engagement in voter registration by taking the next step. Click here to kickstart the process of adding a new voter to our system.
                            <br>
                            <br>
                            අපගේ පද්ධතියට නව ඡන්ද දායකයෙකු එක් කිරීමේ ක්‍රියාවලිය ආරම්භ කිරීමට මෙතැන ක්ලික් කරන්න
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-20 mg-b-5"></h6>
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-60 mg-b-5">Canidates අපේක්ෂකයින්</h6>
            <hr class="black-line">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-20 mg-b-5"></h6>
            <div class="row">
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/search-candidate" class="btn btn-purple btn-block mg-b-10">
                            Search Candidate
                            <br>
                            <br>
                            අපේක්ෂකයෙකු සොයන්න
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">To learn about voter registration in Sri Lanka, click the link below. It will take you to the 'Voter Registration' search page, where you can find all the information you need to register as a voter.
                            <br>
                            <br>
                            'ඡන්දදායක තොරතුරු' සඳහා සකස් කර ඇති කැපවූ සෙවුම් පිටුවට බාධාවකින් තොරව ප්‍රවේශ වීමට සපයා ඇති සබැඳිය ක්ලික් කරන්න.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/add-candidate" class="btn btn-purple active btn-block mg-b-10">
                            Add New Candidate
                            <br>
                            <br>අපේක්ෂකයා එකතු කරන්න
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Voter egistration in Sri Lanka by taking the next step. Click here to begin the process of adding a new voter to our system. .
                                <br>
                                <br>
                                මීළඟ පියවර ගැනීමෙන් ශ්‍රී ලක්ජයේ ඡන්ද හිමි ලියාපදිංචිය සවිබල ගන්වන්න. අපගේ පද්ධතියට නව ඡන්ද දායකයෙකු එක් කිරීමේ ක්‍රියාවලිය ආරම්භ කිරීමට මෙතැන ක්ලික් කරන්න.

                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-60 mg-b-5">Registered Charts for Voters and candidates / ඡන්දදායකයින් සහ අපේක්ෂකයින් සඳහා ලියාපදිංචි ප්‍රස්ථාර</h6>
            <hr class="black-line">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-18 mg-t-20 mg-b-5"></h6>
            <div class="row">
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        <a href="/chart-voter" class="btn btn-pink active btn-block mg-b-10">
                             Voters Charts  ඡන්ද ප්‍රස්ථාර
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Explore registered voter charts for a visual representation of voter demographics and participation trends
                                <br>
                                <br>
                                ඡන්ද දායකයින්ගේ ජන විකාශන සහ සහභාගීත්ව ප්‍රවණතා පිළිබඳ දෘශ්‍ය නිරූපණයක් සඳහා ලියාපදිංචි ඡන්ද ප්‍රස්ථාර ගවේෂණය කරන්න
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mg-t-20 mg-md-t-10">
                    <div class="card bd-0">
                        {{-- <a href="/chart-voter" class="btn btn-pink btn-block mg-b-10"> --}}
                        <a href="/chart-voter" class="btn btn-teal active btn-block mg-b-10">

                            Candidate charts අපේක්ෂක ප්‍රස්ථාර
                        </a>
                        <div class="card-body bd bd-t-0 rounded-bottom">
                            <p class="mg-b-0">Sri Lanka has not held local elections since 2018. The elections were originally scheduled for 2022, but postponed to 2023 due to the economic crisis and instability.
                                <br>
                                මැතිවරණ භූමිය තුළ අපේක්ෂකයින්ගේ විවිධත්වය සහ බෙදා හැරීම පිළිබඳ අවබෝධයක් ලබා ගැනීමට ලියාපදිංචි අපේක්ෂක ප්‍රස්ථාර බලන්න
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-25 mg-b-5">Voter</h6> --}}
        </div>
    </div>

    <footer class="br-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2023. All Rights Reserved.</div>
            <div>Attentively and carefully made by Sri Lanka Election Department</div>
        </div>
    </footer>
</div>



@include('Layouts.Footer')
