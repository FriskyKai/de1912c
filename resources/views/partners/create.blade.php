@extends('layouts.layout')

@section('title', 'Создание партнёра')

@section('content')
    <a class="btn" href="{{ route('partners.index') }}">Назад</a>

    <form action="{{ route('partners.store') }}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <div>
            @error('partner_type_id')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>Тип организации</label>
            <select name="partner_type_id" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            @error('name')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>Название организации</label>
            <input type="text" name="name" placeholder="Введите название организации" required>
        </div>
        <div>
            @error('director')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>ФИО директора</label>
            <input type="text" name="director" placeholder="Введите ФИО директора" required>
        </div>
        <div>
            @error('email')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>Эл.почта</label>
            <input type="email" name="email" placeholder="Введите почту" required>
        </div>
        <div>
            @error('phone')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>Телефон</label>
            <input type="text" name="phone" placeholder="Введите телефон" required>
        </div>
        <div>
            @error('address')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>Адрес</label>
            <input type="text" name="address" placeholder="Введите адрес" required>
        </div>
        <div>
            @error('inn')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>ИНН</label>
            <input type="text" name="inn" placeholder="Введите ИНН" required>
        </div>
        <div>
            @error('rating')
                <p class="warning">{{ $message }}</p>
            @enderror
            <label>Рейтинг</label>
            <input type="number" name="rating" min="1" max="10" placeholder="Введите рейтинг от 0 до 10" value="1" required>
        </div>
        <button type="submit">Создать данные</button>
    </form>
@endsection
