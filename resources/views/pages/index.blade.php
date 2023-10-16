<?php

use function Laravel\Folio\{name};

name('welcome');

?>

<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>Welcome Nuno, go to <a href="{{ route('posts.index') }}" class="font-bold text-blue-700 hover:underline" wire:navigate>Posts Index Page</a></h1>
    </div>
</x-app-layout>
