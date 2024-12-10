@if ($link = $getLink())
    <a href="{{ $link }}" target="_blank">{{ $value }}</a>
@else
    {{ $value }}
@endif
