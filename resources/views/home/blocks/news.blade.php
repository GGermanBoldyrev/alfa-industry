<!-- Блок новостей -->
<section class="px-8 py-12 rounded-md shadow-xl">
    <h1 class="text-center text-2xl font-bold mb-8">Последние новости</h1>

    @if ($news->count())
        <x-home.news-slider :items="$news" />
    @else
        <p class="text-center mt-6">Новостей пока нет.</p>
    @endif
</section>
