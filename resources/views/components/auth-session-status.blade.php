@props(['status'])

@if ($status)
    <div
        {{ $attributes->merge([
            'class' => 'rounded-md bg-green-50 px-4 py-2 text-sm text-green-700 border border-green-200',
        ]) }}>
        {{ $status }}
    </div>
@endif
