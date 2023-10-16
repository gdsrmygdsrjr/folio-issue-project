<?php

use function Laravel\Folio\{name};
use Livewire\Volt\Component;

name('posts.edit');

new class extends Component {
    public int $id;
} ?>

<x-app-layout>
    @volt
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="mb-4 text-lg">Posts Edit View / Post {{ $id }}</h1>

        <ul>
            <li><a href="{{ route('posts.index') }}" class="font-bold text-blue-700 hover:underline" wire:navigate>Go Back</a></li>
        </ul>
    </div>
    @endvolt
</x-app-layout>
