<?php

use function Laravel\Folio\{name};

name('posts.create');

?>

<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="mb-4 text-lg">Posts Create View</h1>

        <ul>
            <li><a href="{{ route('posts.index') }}" class="font-bold text-blue-700 hover:underline" wire:navigate>Go Back</a></li>
        </ul>
    </div>
</x-app-layout>
