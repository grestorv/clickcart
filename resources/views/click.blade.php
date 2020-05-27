@extends('layouts.app')

@section('content')

    <!-- Bootstrap шаблон... -->

    {{--<div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    {{--@include('common.errors')--}}
    {{--
        <!-- Форма новой задачи -->
            <form action="{{ url('/') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Имя задачи -->
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Задача</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                </div>

                <!-- Кнопка добавления задачи -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Добавить задачу
                        </button>
                    </div>
                </div>
            </form>
        </div>--}}

    <!-- Текущие задачи -->
        <div class="panel panel-default">
            <div id="coord">
            <div id="x">x:</div>
            <div id="y">y:</div>
            </div>
            <div id="par1"></div>

        </div>
        <div style="left: 0px">
            as
        </div>
    <div style="right: 0px;">ar</div>
            <script>
                $(document).ready(function(){

                    $(document).click(function(event){
                        $("#par1").load("/getClick","x="+event.pageX+"&y="+event.pageY);
                        $("#coord").css("display","block");
                        $("#x").html("x: "+event.pageX);
                        $("#y").html("y: "+event.pageY);
                    });

                });
            </script>

@endsection
