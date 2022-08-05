@extends('layout')
@section('main-section')
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-md-6">
                <div class="col text-center">
                    <img src="{{URL::asset('/images/main3.png')}}"  style="width:100%"  class="align-content-center">
                </div>
            </div>
            <div class="col col-md-4">
                <div class="col text-center">
                <form method="post" action="{{route('students.store')}}">
                    @csrf
                    <input type="text" placeholder="Введите ФИО" name="name" class="rounded">
                    <input type="submit" value="Начать">
                </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<style>
    .container{
        margin-top: 100px;
    }
</style>
@endsection
