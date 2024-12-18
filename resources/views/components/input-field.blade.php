<!-- It is never too late to be what you might have been. - George Eliot -->
<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
        {{ $label }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        @if($required)
            required
        @endif
        @if ($placeholder)
            placeholder="{{ $placeholder }}"
        @endif
        class="mt-1 block w-full rounded py-1 px-2 bg-slate-50 border border-slate-200
        focus:ring-mainBlue focus:border-mainBlue"
    >
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
