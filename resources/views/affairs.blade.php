<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul class="list-group">
                        @foreach ( $affairs as $affair)
                        <li class="list-group-item" style="display: flex; align-items: center;">
                            <input type="checkbox">
                                <div class="text" style="width: 900px;">{{$affair->record}}</div> <br>
                                <form style="display: flex; align-items: center;" action="{{route('affairs.destroy',[$affair->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class = 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150' type="submit" style="height: 20px">Удалить
                                </button></form>
                                {{-- <form style="display: flex; align-items: center;" action="{{route('affairs.update',[$affair->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class = 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150' type="submit" style="height: 20px; margin-left: 10px">Изменить
                                </button>
                                <input type="text" name="" value="{{$affair->record}}" class= 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'>
                                </form> --}}
                        </li>
                        @endforeach
                      </ul>
                      <form style="display: flex; align-items: center;" action="{{route('affairs.store',$affair)}}" method="POST">
                        @csrf
                      <button class = 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150' type="submit" style="margin-top: 10px">Добавить
                    </button>
                    <input type="text" name="record" value="" class= 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
