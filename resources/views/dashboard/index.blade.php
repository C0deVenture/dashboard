<x-layout :title="'Shkolo Dashboard'">
    <div class="container">
        <div class="grid">
            @foreach ($buttons as $button)
                <div class="cell">
                    @if ($button->url)
                        <a href="{{ $button->url }}">
                            <button class="link-btn" style="background-color: {{ $button->color }}">
                                <span>{{ $button->title }}</span>
                            </button>
                        </a>
                    @else
                        <a href="{{ route('button.edit', $button->id) }}">
                            <button class="add-btn" style="background-color: {{ $button->color }}">
                                <span>+</span>
                            </button>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
