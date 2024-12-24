@extends('layouts.base')

@section('title', 'Контакты')

@section('content')
    <section>
        <!-- Заголовок -->
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold text-gray-800">Контакты</h3>
            <p class="text-gray-600 mt-4 text-increased4">Свяжитесь с нами или посетите нас</p>
        </div>

        <!-- Контактная информация -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
            <!-- Левая колонка -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Наши контактные данные</h3>
                <p class="text-gray-600 mb-6">Мы всегда готовы ответить на ваши вопросы и предоставить дополнительную
                    информацию.</p>

                <ul class="space-y-6">
                    @forelse($activeContacts as $activeType => $contact)
                        @foreach($contact as $activeContact)
                            <li class="flex items-start">
                                <x-navbar-contact :type="$activeType" :value="$activeContact->value" />
                            </li>
                        @endforeach
                    @empty
                        <p>Контакты отсутствуют</p>
                    @endforelse
                </ul>
            </div>

            <!-- Правая колонка: Карта -->
            <div class="rounded-lg overflow-hidden shadow-lg mt-6">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%Z0kYdANmQEIBQFhqfXxwcHxkZw==/?ll=30.246977%2C60.011073&amp;source=constructor"
                    width="100%"
                    height="400"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

@endsection
