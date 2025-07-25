<x-layout title='TODO'>
    <div class="flex justify-center items-center bg-slate-100 min-h-screen">
        <div class="w-[600px] bg-white shadow-md rounded-lg p-6 mt-10">
            <h1 class="text-3xl">Todo App</h1>
            <form action="/todo" method="GET">
                <div class="flex items-center mt-4">
                    <input name="title" type="text" placeholder="Search.."
                        class="border border-gray-300 rounded-lg p-2 flex-grow mr-4">
                    <a href="/todo/create" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Create Todo</a>
                </div>
            </form>

            <div class="mt-4">
                <ul class="list-disc m-0 p-0">
                    @foreach ($todos as $todo)
                        <li class="flex items-center justify-between p-4 bg-gray-100 rounded-lg mb-2">
                            <span @class(['line-through' => $todo->status])>
                                <a href="/todo/{{ $todo->id }}" class="text-blue-600 hover:underline">
                                    {{ $todo->title }}
                                </a>
                            </span>
                            <div class="flex space-x-2">
                                @if (!$todo->status)
                                    <form action="todo/{{ $todo->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="1">
                                        <button type="submit" class="text-blue-500 hover:text-blue-700">Done</button>
                                    </form>
                                @endif

                                @if ($todo->status)
                                    <form action="todo/{{ $todo->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                @endif

                                <a href="/todo/{{ $todo->id }}/edit"
                                    class="text-yellow-500 hover:text-yellow-700">Edit</a>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-4">
                    {{ $todos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layout>
