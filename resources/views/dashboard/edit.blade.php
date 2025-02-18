<x-layout :title="'Dashboard - Edit Button'">
    <div class="form-container">
        <form action="/buttons/{{ $button->id }}" method="POST" class="form-card">
            @csrf
            @method('PATCH')

            <h2 class="form-title">Configure Button</h2>

            <div class="input-group">
                <div class="input">
                    <label for="title" class="input-label">Title:</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $button->title) }}"
                           placeholder="Enter title" class="input-field">
                </div>
                <div>
                    @error('title')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="input-group">
                <div class="input">
                    <label for="url" class="input-label">Link:</label>
                    <input type="url" name="url" id="url" value="{{ old('url', $button->url) }}"
                           placeholder="Enter link"
                           class="input-field">
                </div>
                <div>
                    @error('url')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="input-group">
                <div class="input">
                    <label for="color" class="input-label">Color:</label>
                    <select name="color" id="color" class="input-field">
                        <option value="" disabled selected>Choose a color</option>
                        <option value="red" {{ old('color', $button->color) == 'red' ? 'selected' : '' }}>Red</option>
                        <option value="blue" {{ old('color', $button->color) == 'blue' ? 'selected' : '' }}>Blue
                        </option>
                        <option value="green" {{ old('color', $button->color) == 'green' ? 'selected' : '' }}>Green
                        </option>
                    </select>
                </div>
                <div>
                    @error('color')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="submit-group">
                <button type="submit" class="submit-btn">Save</button>
            </div>
        </form>
    </div>
</x-layout>
