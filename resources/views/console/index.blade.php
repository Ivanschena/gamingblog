<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="h2">Tutte le consolle</div>
        </div>
    </div>
    @if (session('consoleCreated'))
        <div class="alert alert-success"> {{ session('consoleCreated') }}</div>
    @elseif (session('consoleUpdated'))
        <div class="alert alert-success">{{ session('consoleUpdated') }}</div>
    @elseif (session('consoleDeleted'))
        <div class="alert alert-danger">{{ session('consoleDeleted') }}</div>
    @endif
    <div class="container my-5">
        <div class="row">
            @if (count($consoles) > 0)
                @foreach ($consoles as $console)
                    <div class="col-12 col-md-4">
                        <x-console-card :console="$console"></x-console-card>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <h3>Non sono ancora state inserite console.</h3>
                    <p>Inseriscine una tu coglionazzo</p>
                </div>
            @endif
        </div>
    </div>
</x-layout>
