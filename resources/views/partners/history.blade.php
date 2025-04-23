@extends('layouts.layout')

@section('title', 'История партнёра')

@section('content')
    <a class="btn" href="{{ route('partners.index') }}">Назад</a>

    <div>
        <h2>История реализации товаров {{ $partner->partnerType->name }} | "{{ $partner->name }}"</h2>

        @foreach($partner_products as $partner_product)
            <div class="flex">
                <div class="div15">Дата: {{ $partner_product->date }}</div>
                <div class="div15">Кол-во: {{ $partner_product->quantity }}</div>
                <div class="div70">Наименование товара: {{ $partner_product->product->name }}</div>
            </div>
        @endforeach
    </div>
@endsection
