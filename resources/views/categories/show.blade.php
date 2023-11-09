@include('categories.layout')

<div class="container max-w-7xl mx-auto mt-8">
    <div class="mb-4">
        <h1 class="font-serif text-3xl font-bold decoration-gray-400 text-center"> Welcome category details</h1>
        <div class="flex justify-end">
            <a href="{{ url('admin/categories') }}" class="btn btn-success btn-sm" title="Add New Car">
                <button class="rounded-lg font-semibold py-2 px-3 bg-slate-900 text-white hover:bg-slate-700" type="button">
                    Go Back
                </button>
            </a>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <div class="p-4">
                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                        <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                            </svg>
                        </div>
                        <div>
                            <a href="#" class="font-semibold text-gray-900">
                                ID
                                <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ $categories->id }}</p>
                        </div>
                    </div>

                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                        <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                            </svg>
                        </div>
                        <div>
                            <a href="#" class="font-semibold text-gray-900">
                                Name
                                <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ $categories->name }}</p>
                        </div>
                    </div>

                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                        <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                            </svg>
                        </div>
                        <div>
                            <a href="#" class="font-semibold text-gray-900">
                                Slug
                                <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ $categories->slug }}</p>
                        </div>
                    </div>
                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                        <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>

                        </div>
                        <div>
                            <a href="#" class="font-semibold text-gray-900">
                                Created At
                                <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ $categories->created_at }}</p>
                        </div>
                    </div>
                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                        <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>

                        </div>
                        <div>
                            <a href="#" class="font-semibold text-gray-900">
                                Updated At
                                <span class="absolute inset-0"></span>
                            </a>
                            <p class="mt-1 text-gray-600">{{ $categories->updated_at }}</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
