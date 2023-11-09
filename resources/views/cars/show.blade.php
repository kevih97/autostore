@include('cars.layout')

    <div class="container max-w-7xl mx-auto mt-8">
        <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold decoration-gray-400 text-center"> Welcome car details</h1>
            <div class="flex justify-end">
                <a href="{{ url('admin/cars') }}" class="btn btn-success btn-sm" title="Add New Car">
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
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="font-semibold text-gray-900">
                                    Brand
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">{{ $cars->brand }}</p>
                            </div>
                        </div>
                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                            <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"></path>
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="font-semibold text-gray-900">
                                    Model
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">{{ $cars->model }}</p>
                            </div>
                        </div>
                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                            <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33"></path>
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="font-semibold text-gray-900">
                                    Registration Date
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">{{ $cars->registration_date }}</p>
                            </div>
                        </div>
                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                            <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z"></path>
                                </svg>
                            </div>
                            <div>
                                <a href="#" class="font-semibold text-gray-900">
                                    Engine Size
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">{{ $cars->engine_size }}</p>
                            </div>
                        </div>

                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                            <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>

                            </div>
                            <div>
                                <a href="#" class="font-semibold text-gray-900">
                                    Price
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">${{ number_format($cars->price) }}</p>
                            </div>
                        </div>

                        <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                            <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-600 group-hover:text-indigo-600 w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                                </svg>

                            </div>
                            <div>
                                <a href="#" class="font-semibold text-gray-900">
                                    Category
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">{{ $cars->categories->name }}</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
