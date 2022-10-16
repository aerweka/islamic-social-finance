<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tes</title>

    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-5.10.1-web/css/all.css') }}">
    <link id="gull-theme" rel="stylesheet" href="{{ asset('assets\fonts\iconsmind\iconsmind.css') }}">
    <link id="gull-theme" rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-blue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/perfect-scrollbar.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-5.10.1-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/vendor/metisMenu.min.css') }}">
    <link id="gull-theme" rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-blue.min.css') }}">
    <style>
        section {
            /* padding-top: 80px; */
        }

        .form-section {
            text-align: justify;
            display: none;
        }

        .form-section.current {
            display: inherit;
        }

        .btn-info,
        .btn-success {
            margin-top: 10px;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            color: red;
        }

        .form-check {
            margin-top: 17px;
        }

        div.sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 100;
            /* background-color: blue; */
            /* padding-right: 230px; */
        }

        .pilihan {
            white-space: pre-line;
            margin-bottom: 13px;
        }

        .card-header {
            color: white;
        }

        .soal {
            margin: 0 30px 0 30px;
        }

        .card-soal {
            /* border: 1px solid; */
            padding: 0 20px 0 20px;
            margin: 20px 0 20px;
            box-shadow: 0 4px 20px 1px rgb(0 0 0 / 20%), 0 1px 4px rgb(0 0 0 / 25%);
        }

        .form-navigation {
            margin: 0 30px 30px;
        }
    </style>
</head>

<body>
    @php
        // dd($dimensi);
    @endphp
    <section>
        <div class="container d-flex align-items-center min-vh-100">
            <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-body" style="padding: 0">
                            <form class="contact-form" method="post" name="soal" id="soal"
                                action="{{ route('survey.user.submitsoal') }}">
                                @csrf
                                @foreach ($aspek as $a)
                                    <div class="form-section" style="">
                                        <div class="card-header sticky" style="background-color: #{{ $a->color }}">
                                            <h4>Dimensi: {{ $a->dimensi }}</h4>
                                            <h6>Aspek: {{ $a->aspek }}</h6>
                                            <h6>{{ $a->definisi }}</h6>
                                        </div>
                                        @foreach ($pertanyaan as $p)
                                            @if ($p->id_aspek == $a->id_aspek)
                                                <div class="soal">
                                                    <div class="card card-soal">
                                                        <h5 style="margin-top:20px">{{ $p->kode_indikator }}</h5>
                                                        <h5>Soal{{ $p->soal }}</h5>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="answer[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                id="option1[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                value='{"nilai": "1", "bobot_dimensi": "{{ $a->bobot_dimensi }}", "bobot_aspek": "{{ $a->bobot_aspek }}", "bobot_soal": "{{ $p->bobot_pertanyaan }}"}'>
                                                            <label class="form-check-label"
                                                                for="option1[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]">
                                                                {{ $p->pilihan_1 }}
                                                            </label>
                                                            <div class="pilihan"></div>
                                                            @if ($p->pilihan_2 != null)
                                                                <input class="form-check-input" type="radio"
                                                                    name="answer[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                    id="option2[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                    value='{"nilai": "2", "bobot_dimensi": "{{ $a->bobot_dimensi }}", "bobot_aspek": "{{ $a->bobot_aspek }}", "bobot_soal": "{{ $p->bobot_pertanyaan }}"}'>
                                                                <label class="form-check-label"
                                                                    for="option2[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]">
                                                                    {{ $p->pilihan_2 }}
                                                                </label>
                                                            @endif
                                                            <div class="pilihan"></div>
                                                            <input class="form-check-input" type="radio"
                                                                name="answer[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                id="option3[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                value='{"nilai": "3", "bobot_dimensi": "{{ $a->bobot_dimensi }}", "bobot_aspek": "{{ $a->bobot_aspek }}", "bobot_soal": "{{ $p->bobot_pertanyaan }}"}'>
                                                            <label class="form-check-label"
                                                                for="option3[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]">
                                                                {{ $p->pilihan_3 }}
                                                            </label>
                                                            @if ($p->pilihan_4 != null)
                                                                <div class="pilihan"></div>
                                                                <input class="form-check-input" type="radio"
                                                                    name="answer[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                    id="option4[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                    value='{"nilai": "4", "bobot_dimensi": "{{ $a->bobot_dimensi }}", "bobot_aspek": "{{ $a->bobot_aspek }}", "bobot_soal": "{{ $p->bobot_pertanyaan }}"}'>
                                                                <label class="form-check-label"
                                                                    for="option4[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]">
                                                                    {{ $p->pilihan_4 }}
                                                                </label>
                                                            @endif
                                                            <div class="pilihan"></div>
                                                            <input class="form-check-input" type="radio"
                                                                name="answer[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                id="option5[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]"
                                                                value='{"nilai": "5", "bobot_dimensi": "{{ $a->bobot_dimensi }}", "bobot_aspek": "{{ $a->bobot_aspek }}", "bobot_soal": "{{ $p->bobot_pertanyaan }}"}'
                                                                required>
                                                            <label class="form-check-label"
                                                                for="option5[{{ $a->dimensi }}][{{ $p->kode }}][{{ $p->kode_indikator }}]">
                                                                {{ $p->pilihan_5 }}
                                                            </label>
                                                            <div class="pilihan"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach

                                <div class="form-navigation">
                                    <button onclick="topFunction()" type="button"
                                        class="previous btn btn-info float-left"
                                        style="margin-bottom: 32px">Prev</button>
                                    <button onclick="topFunction()" type="button" class="next btn btn-info float-right"
                                        style="margin-bottom: 32px">Next</button>
                                    <button type="button" class="submit btn btn-success float-right"
                                        style="margin-bottom: 32px" id="confirmSubmit">Submit</button>
                                </div>
                            </form>
                            {{-- 1. Pagination nggarap soal 
                                2. Alert sebelum mengisi soal ✓
                                3. Export Excel dashboard (disesuaikan detail e Ben ga Melu ke export ✓
                                4. le dashboard admin kan seng pie chart warna e ungu, iku minta tolong sekalian gantien warna warni ✓ --}}


                            <nav aria-label="Page navigation example" id="dimension-paging">
                                <ul class="pagination d-flex justify-content-center">
                                    <li class="page-item" id="env">
                                        <button type="button" class="page-link">Env</button>
                                        {{-- <a class="page-link" href="#">Environment</a> --}}
                                    </li>
                                    <li class="page-item" id="soc">
                                        <button type="button" class="page-link">Soc</button>
                                        {{-- <a class="page-link" href="#">Social</a> --}}
                                    </li>

                                    <li class="page-item" id="gov">
                                        <button type="button" class="page-link">Gov</button>
                                        {{-- <a class="page-link" href="#">Government</a> --}}
                                    </li>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function() {
            var $sections = $('.form-section');


            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');

                if (index < 2) $('#dimension-paging').hide();

                if (index > 2) {
                    $('#dimension-paging').show();
                    $('#gov').hide();
                }

                if (index > 5) $('#gov').show();

                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation .submit').toggle(atTheEnd);
            }

            function curIndex() {
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });

            $('.form-navigation .next').click(function() {
                $('.contact-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });
            });

            $('#env').click(function() {
                navigateTo(0);
            });

            $('#soc').click(function() {
                navigateTo(3);
            });

            $('#gov').click(function() {
                navigateTo(6);
            });

            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });

            navigateTo(0);
        });

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="{{ asset('assets/js/vendor/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#confirmSubmit').on('click', function() {
                swal({
                    title: 'Yakin jawaban ingin dikirim?',
                    text: "Setelah jawaban dikirim tidak akan bisa mengisi survey tahun ini lagi!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0CC27E',
                    cancelButtonColor: '#FF586B',
                    confirmButtonText: 'Ya, kirim!',
                    cancelButtonText: 'Tidak',
                    confirmButtonClass: 'btn btn-success mr-5',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function() {
                    document.getElementById("soal").submit();
                    swal(
                        'Send!',
                        'Jawaban Anda berhasil dikirim.',
                        'success',
                    )
                }, function(dismiss) {
                    // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                    if (dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Silahkan cek ulang jawaban Anda',
                            'error'
                        )
                    }
                })
            });
        })
    </script>
</body>

</html>
