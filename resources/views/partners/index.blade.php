@extends('layouts.layout')

@section('title', 'Список партнёров')

@section('content')
    <a class="btn" href="{{ route('partners.create') }}">Создать партнёра</a>
    @foreach($partners as $partner)
        <a href="/partners/edit/{{$partner->id}}">
            <div class="flex border">
                <div class="div85">
                    <div class="bigFontSize">{{ $partner->partnerType->name }} | {{ $partner->name }}</div>
                    <div>{{ $partner->director }}</div>
                    <div>+7 {{ $partner->phone }}</div>
                    <div>Рейтинг: {{ $partner->rating }}</div>
                </div>
                <div class="div15 bigFontSize">{{ $partnerDiscount[$partner->id] }}%</div>
            </div>
        </a>
    @endforeach
@endsection


