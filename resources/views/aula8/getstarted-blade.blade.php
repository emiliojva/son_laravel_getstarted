<?php
/**
 * Created by PhpStorm.
 * User: Berguerians
 * Date: 7/16/2019
 * Time: 11:08 AM
 */
?>

@extends('layouts.base')

@section('header','Aula 8 - Mais detalhes sobre a interpolação do Blade')

@section('content')

    <debug>{{ $nome }}</debug>

    <debug>{{ $variavel1 + 27 }}</debug>

    <debug>{{ $variavel1 . ' ' .$nome }}</debug>

    <debug>{{ 2 + 2 }}</debug>

    <debug>{{ isset($test)?$test:"outro valor" }}</debug>

    <debug>{{ $test ?? "outro valor" }}</debug>

    <debug>{{ $test or "outro valor" }}</debug>

    <!--HTMLENTIITES -->
    <debug>{{ "<h1>TESTE HTMLENTITIES AUTOMATICO</h1>" }}</debug>

    {{--Parser HTML--}}
    <debug>{!! "<h1>TESTE HTMLENTITIES NAO EXECUTADO</h1>" !!}</debug>

@endsection