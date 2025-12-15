<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit User</h2>
    </x-slot>

    <div class="p-6">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ $user->name }}" class="w-full p-2 mb-3 border">
            <input type="email" name="email" value="{{ $user->email }}" class="w-full p-2 mb-3 border">

            <button class="px-4 py-2 text-white bg-blue-600 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
