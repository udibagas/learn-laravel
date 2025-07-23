<x-layout title='TODO'>
    <div class="flex justify-center items-center bg-slate-100 min-h-screen">
        <div class="w-[600px] bg-white shadow-md rounded-lg p-6 mt-10">
            <h1 class="text-3xl">Todo App</h1>
            <form action="/todo" method="POST">
                @csrf
                <div class="flex items-center mt-4">
                    <input name="title" type="text" placeholder="Enter your todo"
                        class="border border-gray-300 rounded-lg p-2 flex-grow mr-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Todo</button>
                </div>

            </form>

            <div class="mt-4">
                <ul class="list-disc m-0 p-0">
                    @foreach ($todos as $todo)
                        <li class="flex items-center justify-between p-4 bg-gray-100 rounded-lg mb-2">
                            <span @class(['line-through' => $todo->status])>{{ $todo->title }}</span>
                            <div class="flex space-x-2">
                                @if (!$todo->status)
                                    <form action="todo/{{ $todo->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
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
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</x-layout>
