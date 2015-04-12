@extends('layouts.master')

@section('title')
    <title>悬赏任务</title>
@stop
@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/dist/css/bountyHunter/rewardtask/step-5.css">
@stop

@section('body')
    @parent
    <div id="main">
        @include('components.task-banner')
        @include('components.bountyhunterleft')
        @include('components.rewardtaskheader')
        <div class="step5 rewardtaskstep">
            <div class="success">
                <p>任务发布成功</p>
            </div>
            <div class="next-step">
                <a href="/reward-task" class="btn last">返回赏金猎人</a>
                <a href="/" class="btn next">返回首页</a>
            </div>
        </div>
    </div>
    @include('components.footer')
@stop

@section('js')
    @parent
@stop
