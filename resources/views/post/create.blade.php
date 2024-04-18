<x-app-layout>
    <x-slot name="header">
        <h2>フォーム</h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        @if (session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" id="title"
                        class="w-auto py-2 border border-gray-300 rounded-md" value="{{ old('title') }}">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold mt-4">本文</label>
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                <textarea name="body" id="body" class="w-auto py-2 border border-gray-300 rounded-md" cols="30"
                    rows="10">{{ old('body') }}</textarea>
            </div>

            <x-primary-button class="mt-4">送信する</x-primary-button>
        </form>
    </div>
</x-app-layout>
