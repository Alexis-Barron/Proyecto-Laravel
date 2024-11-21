<div>
    <br>

    <h1>{{ $slot }}</h1>


    @foreach ($posts as $p)
    <div class="card">
        <h3 class="card-header">{{ $p->title }}</h3>

        <a href="{{ route('blog.show', $p) }}" class="card-link">ir</a>

        <p class="card-description">{{ $p->description }}</p>
    </div>
    @endforeach
    <br>

    @isset($extra)
    <h1>{{ $extra }}</h1>
    @endisset

    @isset($footer)
        <h1>{{ $footer }}</h1>
    @endisset


    {{ $posts->links() }}
</div>
