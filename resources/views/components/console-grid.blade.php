<div class="console-grid">

    @foreach ($consoles as $console)

        <x-console-card :console="$console" />

    @endforeach

</div>