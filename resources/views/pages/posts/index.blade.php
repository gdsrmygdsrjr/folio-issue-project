<?php

use function Laravel\Folio\{name};

name('posts.index');

?>

<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="mb-4 text-lg">Index View / <a href="{{ route('posts.create') }}" class="font-bold text-blue-700 hover:underline" wire:navigate>Create</a> <span class="text-sm text-red-600">(here's the problem, Folio is going to "posts.show" instead of "posts.create")</span></h1>

        <ul>
            @for($i = 1; $i <= 5; $i++)
                <li><a href="{{ route('posts.show', ['id' => $i]) }}" wire:navigate>Post {{ $i }}</a> / <a href="{{ route('posts.show', ['id' => $i]) }}" class="text-blue-700 hover:underline" wire:navigate>View</a> / <a href="{{ route('posts.edit', ['id' => $i]) }}" class="text-blue-700 hover:underline" wire:navigate>Edit</a></li>
            @endfor
        </ul>
    </div>
</x-app-layout>
