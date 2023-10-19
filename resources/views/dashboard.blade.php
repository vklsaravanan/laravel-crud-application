<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{--    <p class="text-white">{{ $records }}</p>--}}
    <div class="py-5">
        <div class="relative text-white max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2 border-gray-300 ">
            <label for="search_records" class="pe-2">Search record</label>
            <input id="search_records" type="text" class="dark:bg-gray-700 text-white rounded">
            <button id="openFilterPopup" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Filter</button>
            <button id="select_show_btn" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">select records <span class="text-white-600 p-1  rounded-full selected-record-count hidden bg-gray-800">0</span></button>
            <button id="bulkDeleteBtn" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 hidden">Delete </button>
        </div>

        {{--filter elements--}}
        <div id="filterPopup"
             class="fixed inset-0 flex items-center justify-center z-50 hidden bg-gray-800 bg-opacity-50">
            <div class="bg-white w-1/3 p-6 rounded-lg shadow-lg">
                <h2 class="text-lg font-semibold mb-4">Filter Options</h2>

                <!-- Multi-select category filter -->
                <div class="mb-4">
                    <label for="categoryFilter" class="block font-semibold text-sm mb-2">Category Filter</label>
                    <select id="categoryFilter" class="w-full px-4 py-2 border rounded-lg">
                        <option class="text-black" value="" selected disabled>select category</option>
                        @foreach($categories as $category)
                            <option class="text-black" value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Toggle button for active/inactive -->
                <div class="mb-4">
                    <label class="block font-semibold text-sm mb-2">Status Filter</label>
                    <div class="flex items-center space-x-4">
                        <label class="flex items-center">
                            <input type="checkbox" id="activeFilter" class="form-checkbox">
                            <span class="ml-2">Active</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="inactiveFilter" class="form-checkbox">
                            <span class="ml-2">Inactive</span>
                        </label>
                    </div>
                </div>

                <!-- Apply button to trigger filtering -->
                <button id="applyFilter" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Apply
                    Filter
                </button>
                <button id="closeFilterPopupButton" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">cancel</button>
            </div>
        </div>

        {{--lists--}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--            <div class="overflow-y-auto whitespace-no-wrap dark:bg-gray-700 h-96 rounded">--}}
            {{--                @foreach($records as $record)--}}
            {{--                    <div class="bg-white dark:bg-gray-800 hover:bg-blend-darken overflow-hidden shadow-sm sm:rounded-lg mt-2">--}}
            {{--                        <div class="p-6 text-gray-900 dark:text-gray-100">--}}
            {{--                            {{ __($record->title) }}--}}
            {{--                        </div>--}}
            {{--                        <span>{{$record->category->name}}</span>--}}
            {{--                    </div>--}}
            {{--                @endforeach--}}
            {{--            </div>--}}

            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider record_selector hidden text-center">select</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Title
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                        Category
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Status
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Options
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($records as $record)
                    <tr class="">
                        <td class="p-6 record_selector hidden "><input class="rounded-full m-0" type="checkbox" name="record_selector" id="record_{{ $record->id }}_checkbox"></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $record->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $record->category->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            @if ($record->status)
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Active
                        </span>
                            @else
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Inactive
                        </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 space-x-2 text-center">
                            <a href="{{ route('records.show', ['record' => $record->id]) }}"
                               class="text-indigo-600 hover:text-indigo-900">Show</a>
                            <a href="{{ route('records.edit', ['record' => $record->id]) }}"
                               class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form method="POST" action="{{ route('records.destroy', ['record' => $record->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset("/assets/js/filterPopUp.js") }}"></script>
    <script src="{{ asset("/assets/js/bulkDelete.js") }}"></script>
    <script src="{{ asset("/assets/js/dashboardHelper.js") }}"></script>
</x-app-layout>

