<x-layout title='Todo Details'>
    <div class="flex justify-center items-center bg-slate-100 min-h-screen">
        <div class="w-[600px] bg-white shadow-md rounded-lg p-6 mt-10">
            <h1 class="text-3xl">Todo Details</h1>
            <p class="mt-4">PIC: {{ $todo->user->name }}</p>
            <p class="mt-4">Title: {{ $todo->title }}</p>
            <p class="mt-2">Description: {{ $todo->description }}</p>
            <p class="mt-2">Due Date: {{ $todo->due_date }}</p>
            <p class="mt-2">Priority: {{ $todo->priority }}</p>

            <img src="{{ asset('storage/' . $todo->attachment) }}" alt="">
        </div>
    </div>
</x-layout>
