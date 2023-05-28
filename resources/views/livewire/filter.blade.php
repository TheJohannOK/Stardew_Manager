<div>
    <div class="flex justify-end mt-4 px-4 w-full">
        <div class="w-1/4">
                @foreach ($animals as $animal)
                    <option value="{{ $animal->id }}">{{ $animal->name }}</option>
                @endforeach
        </div>
    </div>
</div>
