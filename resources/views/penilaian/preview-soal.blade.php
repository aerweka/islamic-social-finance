@extends('layouts.master')
@section('page-css')

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <style>
        section{
            /* padding-top: 80px; */
        }
        .form-section{
            text-align:justify;
            display: none;
        }
        .form-section.current{
            display: inherit;
        }
        .btn-info, .btn-success{
            margin-top: 10px;
        }
        .parsley-errors-list{
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            color: red;
        }
        .form-check{
            margin-top: 17px;
        }
        div.sticky{
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 100;
            /* background-color: blue; */
            /* padding-right: 230px; */
        }
        .pilihan{
            white-space: pre-line;
            margin-bottom:13px;
        }
        .card-header{
            color: white;
        }
        .soal{
            margin: 0 30px 0 30px;
        }
        .card-soal{
            /* border: 1px solid; */
            padding:0 20px 0 20px;
            margin: 20px 0 20px;
            box-shadow: 0 4px 20px 1px rgb(0 0 0 / 20%), 0 1px 4px rgb(0 0 0 / 25%);
        }
        .form-navigation{
            margin: 0 30px 30px;
        }
    </style>
@endsection
@section('main-content')
    <?php 
    use Carbon\Carbon;
    ?>
    <section>
        <div class="container d-flex align-items-center min-vh-100">
            <div class="row" style="margin-top: 40px; margin-bottom: 40px">
                <div class="col-md-8 offset-md-2">
                    <h2>Preview Survey {{Carbon::parse($jawaban[0]->filled_at)->year}}</h2>
                    <div class="card">
                        <div class="card-body" style="padding: 0">
                            <form class="contact-form" method="">
                                @csrf
                                @foreach($dimensi as $a)
                                <div class="form-section" style="">
                                @if($a->dimensi == 'Environment')
                                <div class="card-header sticky" style="background-color: #9BBB59; margin-bottom: 15px">
                                @elseif($a->dimensi =='Social')
                                <div class="card-header sticky" style="background-color: #C4BD97; margin-bottom: 15px">
                                @elseif($a->dimensi == 'Governance')
                                <div class="card-header sticky" style="background-color: #FABF8F; margin-bottom: 15px">
                                @endif
                                <h4>Dimensi {{$a->dimensi}}</h4>
                                @foreach($pertanyaan as $p)
                                @if($p->dimensi == $a->dimensi)
                            </div>
                            <div class="" style="margin-left: 35px">
                                <h6>Aspek: {{$p->aspek}}</h6>
                                <h6>{{$p->definisi}}</h6>
                            </div>
                                    <div class="soal">
                                        <div class="card card-soal">
                                            <h5 style="margin-top:20px">Soal {{$p->kode_indikator}}</h5>
                                            <h5>{{$p->soal}}</h5>
                                            <div class="form-check" disabled>
                                                @if($tes[$a->dimensi][$p->kode][$p->kode_indikator] == 1)
                                                <input checked disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option1[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "1", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}'>
                                                <label class="form-check-label" for="option1[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    <b>{{$p->pilihan_1}}</b>
                                                </label>
                                                @else
                                                <input disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option1[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "1", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}'>
                                                <label class="form-check-label" for="option1[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    {{$p->pilihan_1}}
                                                </label>
                                                @endif
                                                <div class="pilihan"></div>

                                                @if($p->pilihan_2 != null)
                                                @if($tes[$a->dimensi][$p->kode][$p->kode_indikator] == 2)
                                                <input checked disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option2[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "2", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}' selected>
                                                <label class="form-check-label" for="option2[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    <b>{{$p->pilihan_2}}</b>
                                                </label>
                                                @else
                                                <input disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option2[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "2", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}'>
                                                <label class="form-check-label" for="option2[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                {{$p->pilihan_2}}
                                                </label>
                                                @endif
                                                @endif
                                                <div class="pilihan"></div>

                                                @if($tes[$a->dimensi][$p->kode][$p->kode_indikator] == 3)
                                                <input checked disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option3[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "3", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}'>
                                                <label class="form-check-label" for="option3[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    <b>{{$p->pilihan_3}}</b>
                                                </label>
                                                @else
                                                <input disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option3[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "3", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}'>
                                                <label class="form-check-label" for="option3[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    {{$p->pilihan_3}}
                                                </label>
                                                @endif
                                                <div class="pilihan"></div>

                                                @if($p->pilihan_4 != null)
                                                @if($tes[$a->dimensi][$p->kode][$p->kode_indikator] == 4)
                                                <input checked disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option4[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "4", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}'>
                                                <label class="form-check-label" for="option4[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                <b>{{$p->pilihan_4}}</b>
                                                </label>
                                                @else
                                                <input disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option4[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "4", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}'>
                                                <label class="form-check-label" for="option4[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    {{$p->pilihan_4}}
                                                </label>
                                                @endif
                                                @endif
                                                <div class="pilihan"></div>

                                                @if($tes[$a->dimensi][$p->kode][$p->kode_indikator] == 5)
                                                <input checked disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option5[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "5", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}' required>
                                                <label class="form-check-label" for="option5[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    <b>{{$p->pilihan_5}}</b>
                                                </label>
                                                @else
                                                <input disabled class="form-check-input" type="radio" name="answer[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" id="option5[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]" value='{"nilai": "5", "bobot_dimensi": "{{$a->bobot_dimensi}}", "bobot_aspek": "{{$p->bobot_aspek}}", "bobot_soal": "{{$p->bobot_pertanyaan}}"}' required>
                                                <label class="form-check-label" for="option5[{{$a->dimensi}}][{{$p->kode}}][{{$p->kode_indikator}}]">
                                                    {{$p->pilihan_5}}
                                                </label>
                                                @endif
                                                <div class="pilihan"></div>
                                            </div>
                                        </div>        
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach

                                <div class="form-navigation">
                                    <button onclick="topFunction()" type="button" class="previous btn btn-info float-left" style="margin-bottom: 32px">Previous</button>
                                    <button onclick="topFunction()" type="button" class="next btn btn-info float-right" style="margin-bottom: 32px">Next</button>
                                    <!-- <button type="submit" class="btn btn-success float-right">Submit</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function (){  
           var $sections = $('.form-section');

           function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length -1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
           } 

           function curIndex(){
                return $sections.index($sections.filter('.current'));
           }

           $('.form-navigation .previous').click(function(){
                navigateTo(curIndex()-1);
           });

           $('.form-navigation .next').click(function(){
                $('.contact-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function(){
                    navigateTo(curIndex()+1);
                });
           });

           $sections.each(function(index, section){
                $(section).find(':input').attr('data-parsley-group', 'block-'+index);
           });

           navigateTo(0);
        });

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    @endsection