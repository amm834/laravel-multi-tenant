<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('tasks.store') }}" class="max-w-xl mx-auto py-10">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Task Name')"/>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                      :value="old('name')" required autofocus autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <div class="mt-3">
                        <x-input-label for="projects" :value="__('Select Project')"/>
                        <select
                            id="projects"
                            name="project_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a project</option>
                            @foreach($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('projects')" class="mt-2"/>
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
