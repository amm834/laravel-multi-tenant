<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('projects.store') }}" class="max-w-xl mx-auto py-10">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Project Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                      :value="old('name')" required autofocus autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <x-primary-button class="mt-3">
                        {{ __('Create') }}
                    </x-primary-button>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
