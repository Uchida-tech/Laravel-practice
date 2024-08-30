<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gray-300']) }}>
    {{ $slot }}
</button>