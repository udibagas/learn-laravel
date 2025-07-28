<x-layout title="User Detail">

    <div>
        {{ $user->name }}
    </div>

    <ul>
        @foreach ($user->todos as $todo)
            <li>{{ $todo->title }}</li>
        @endforeach
    </ul>

</x-layout>
