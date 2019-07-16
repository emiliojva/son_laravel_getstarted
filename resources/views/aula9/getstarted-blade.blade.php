<?php
/**
 * Created by PhpStorm.
 * User: Berguerians
 * Date: 7/16/2019
 * Time: 11:08 AM
 */
?>

@extends('layouts.base')

@section('header','Aula 9 - Blade - estruturas condicionais e de repetição')

@section('content')


    <h1>For IF</h1>

    @if($value > 100)
        <p>Valor maior que 100</p>
    @else
        <p>Valor menor que 100</p>
    @endif

    @for($i = 0;$i< $value;$i++)
        - {{$i+1}}
    @endfor

    @php
        $i = 0;
    @endphp
    <br/>
    @while($i < $value)
        - {{$i+1}}
        @php
            $i++;
        @endphp
    @endwhile
    <br/>

    @foreach($myArray as $key => $value)
        <p>{{$loop->index}} {{$key}} - {{$value}}</p>
    @endforeach

    @forelse([] as $key => $value)
        <p>{{$loop->index}} {{$key}} - {{$value}}</p>
    @empty
        <p>Nenhum registro encontrado.</p>
    @endforelse


@endsection