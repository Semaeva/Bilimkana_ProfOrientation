@extends('layout')
@section('main-section')


    <div class="container-fluid" style="">
    <p style="color: #ff4d00"> Ваше имя: <span class="text-white">{{$student->name}}</span></p>



        <div class="container-fluid" >
            <div class="row justify-content-lg-start">
                <div class="col">
                    <h1 class="text-white text-center" style="margin-bottom: 100px;">Описание компетенций</h1>
<h5 class="text-white text-center">Вопрос:<span class="text-white" style="margin-bottom: 20px;"> {{$questions->id}}/{{$question_count}}</span></h5>
                    <h4 class="text-white" style="margin-left: 60px;"> {{$questions->name}}</h4>
                </div>
            </div>
            <div class="row justify-content-lg-start" style="margin-top: 50px;">
                <div class="col-lg-7">

                    <form method="post" id="mainForm" action="{{route('main.store')}}" style="margin-left: 60px; max-width: 80%;">
                        @csrf
                        @foreach($questions->answers as $ans)
                            <div class="form-check">
                                <label>
                                    <input class="form-check-input" type="radio" name="points_id"  value="{{$ans->points_id}}" id="flexRadioDefault1">
                                    <p class="text-white"> {{$ans->name}}</p>
                                </label>
                            </div>
                            <input hidden type="text" value="{{$questions->id}}" name ="questions_id">
                            <input hidden type="text" value="{{$student->id}}" name ="students_id">
                        @endforeach
                        <input type="submit" value="Следующий" class="btn btn-warning text-white" style="background-color: #ff4d00; margin-top: 90px;">
                    </form>
                </div>

                <div class="col col-lg-4">
                    <div class="col text-center">
                        <img src="{{URL::asset('/images/main3.png')}}"  style="width:100%"  class="align-content-center">
                    </div>
                </div>

                </div>
            </div>
        </div>

    <script>
        document.mainForm.onclick = function(){
            var radVal = document.mainForm.points_id.value;
            result.innerHTML = 'You selected: '+radVal;
        }
    </script>
    <style>
        #mainForm{
            /*background-color: #6c69a2;*/
        }
    </style>
@endsection
