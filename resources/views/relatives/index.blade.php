<x-app-layout>
    <a href="{{ route('relatives.create') }}" class="text-xl">Nuevo Familiar +</a>
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-cente font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Documento</th>
                                <th class="py-3 px-6 text-left">Familiar</th>
                                <th class="py-3 px-6 text-center">Celular</th>
                                <th class="py-3 px-6 text-center">Email</th>
                                <th class="py-3 px-6 text-center">Dirección</th>
                                <th class="py-3 px-6 text-center">Ciudad</th>
                                <th class="py-3 px-6 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($relatives as $relative)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{ $relative->document }}
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            {{ $relative->full_name }}
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        {{ $relative->phone }}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center">
                                            {{ $relative->email }}
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        {{ $relative->address }}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        {{ $relative->city }}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <a href="{{ route('relatives.edit', $relative) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <a href="{{ route('relatives.assignment', $relative) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-5">
                        {{ $relatives->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>