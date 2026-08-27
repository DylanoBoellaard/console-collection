<article class="console-card">
    @foreach ($console->models as $model)
        @foreach ($model->primaryVariants as $variant)
            @foreach ($variant->frontImages as $image)
            <div class="console-card_tempcontainer">
            <img
                class="console-card_image"
                src="{{ asset('storage/img/Consoles/' . $image->filename) }}"
                alt="{{ $console->name }}">
            </div>
            @endforeach
        @endforeach
    @endforeach
    <div class="console-card_information">
        <h2>{{ $console->name }}</h2>
        <p>{{ $console->manufacturer->name }}</p>
    </div>
    <div class="console-card_generation">
        <p>{{ $console->generation->name }} Generation</p>
        <p class="console-card_generation_divider">.</p>
        <p>{{ $console->release_date->format('Y') ?? 'Unknown' }}</p>
    </div>
</article>