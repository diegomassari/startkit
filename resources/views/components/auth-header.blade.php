@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <h2 class="text-2xl font-semibold mb-2 text-accent">{{ $title }}</h2>
    <p class="text-sm text-accent/70">{{ $description }}</p>
</div>
