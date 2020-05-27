@extends('layouts.app')

@section('content')

    <canvas height='320' width='480' id='example'>Обновите браузер</canvas>


    <!-- Текущие задачи -->

    <script>
        var example = document.getElementById("example"),
            ctx     = example.getContext('2d');
        example.height = 1000;
        example.width  = 1500;
        ctx.beginPath();
        ctx.moveTo(0*60+10, 500-{{$clickQuant[0]}}*10-10);
        ctx.lineTo(1*60+10, 500-{{$clickQuant[1]}}*10-10);
        @foreach($clickQuant as $click)
            ctx.lineTo({{$loop->index}}*60+10, 500-{{$click}}*10-10);
        @endforeach
        ctx.stroke();
        ctx.strokeRect(0,0,1500,500);
    </script>

@endsection
