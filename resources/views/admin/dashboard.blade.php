@extends('admin.layout')

@section('menu-num') 3 @endsection
@section('title')
Главная
@endsection

@section('content')
<div class="header-clear-medium">
<div id="page">

    <div class="card card-style">
        <div class="content mb-0">
            <p class="text-center mb-n1 font-12 font-600 color-highlight">Popularity in 2020</p>
            <h1 class="text-center font-28 mb-4">Mobile OS</h1>
            <div class="chart-container mb-4" style="width:100%; height:350px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <canvas class="chart" id="line-chart"/>
            </div>
        </div>
    </div>

</div>
</div>
<!-- Page content ends here-->
@endsection
