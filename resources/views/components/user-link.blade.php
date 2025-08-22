@props(['type' => 'link'])

@if ($type === 'link')
    <a class="user-link" {{ $attributes }}>{{ $slot }}</a>
@else
    <button class="user-link" {{ $attributes }}>{{ $slot }}</button>
@endif