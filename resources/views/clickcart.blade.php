@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading" id="square">
        Текущая задача
    </div>
    <div id="coord">
        <div id="x">x:</div>
        <div id="y">y:</div>
    </div>
    <div id="par1"></div>

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

    <canvas height='320' width='480' id='cartcanvas'>Обновите браузер</canvas>
    <script>
        var example = document.getElementById("cartcanvas"),
            ctx     = example.getContext('2d');
        example.height = 1000;
        example.width  = 1500;
        //var gradient = ctx.createRadialGradient(1,1,5,2,3,3);
        var gradient = ctx.createLinearGradient(1,0,3,0);
        gradient.addColorStop(0, 'green');
        gradient.addColorStop(1, 'white');

        ctx.beginPath();
        @foreach($clickArr as $click)
        {{--ctx.moveTo({{$click->xcoord}},{{$click->ycoord}});
        ctx.lineTo({{$click->xcoord+1}},{{$click->ycoord+1}});--}}
            ctx.beginPath();
            var gradient = ctx.createRadialGradient({{$click->xcoord}},{{$click->ycoord}},{{$click->quantity/2}},{{$click->xcoord+1}},{{$click->ycoord+1}},{{$click->quantity*2}});

        //var gradient = ctx.createLinearGradient({{$click->xcoord-5}},{{$click->ycoord}},{{$click->xcoord+5}},{{$click->ycoord}});
            gradient.addColorStop(0, 'green');
            gradient.addColorStop(1, 'white');

            ctx.arc({{$click->xcoord}}, {{$click->ycoord}}, 2, 0, Math.PI * 2, true);
            @if($click->quantity<=2)
            ctx.strokeStyle = "green";
            ctx.fillStyle = gradient;
            @elseif($click->quantity>=3 and $click->quantity<=7)
                ctx.strokeStyle = "yellow";
                ctx.fillStyle = "rgb(179, 143, 0)";
            @elseif($click->quantity>=8)
                ctx.strokeStyle = "red";
                ctx.fillStyle = "red";
                @endif
            ctx.fill();
            ctx.closePath();
            ctx.stroke();
        @endforeach

        ctx.closePath();
    </script>

@endsection
