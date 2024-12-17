@extends('layout.masterpage')
@section('content')
    <div class="container mx-auto px-2 min-h-[calc(100vh-138px)] relative pb-14">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
            <div class="md:row-span-1 lg:row-span-1 xl:row-span-2 md:col-span-2 lg:col-span-2 xl:col-span-1">
                <div
                    class="h-full bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4 my-10">
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center">
                        <h3
                            class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2">
                            <span class="inline-block xl:block">T-Wind</span> Multi
                            Application
                        </h3>
                        <div
                            class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">
                            We Design and Develop Clean and High Quality Web Applications
                        </div>
                        <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
                            <button
                                class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">
                                Buy New
                            </button>
                        </div>
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 block dark:hidden">
                        <img src="assets/images/widgets/user.png" alt="" class="px-3 mb-2 w-60 mx-auto" />
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 hidden dark:block">
                        <img src="assets/images/widgets/user-light.png" alt="" class="px-3 mb-2 w-60 mx-auto" />
                    </div>

                </div>
                <!--end inner-grid-->
            </div>
            <div class="sm:col-span-3 md:col-span-2 lg:col-span-2 xl:col-span-3 my-10">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32">
                                    <i class="ti ti-users text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">
                                        24k
                                    </h3>
                                    <p class="text-gray-400 mb-0 font-medium">Sessions</p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32">
                                    <i class="ti ti-clock text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">
                                        01<span class="text-sm text-slate-500">m</span>03<span
                                            class="text-sm text-slate-500">s</span>
                                    </h3>
                                    <p class="text-gray-400 mb-0 font-medium">Avg.Sessions</p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32">
                                    <i class="ti ti-activity text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">
                                        $1800
                                    </h3>
                                    <p class="text-gray-400 mb-0 font-medium">Bounce Rate</p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div
                            class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div
                                    class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32">
                                    <i class="ti ti-confetti text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">
                                        75000
                                    </h3>
                                    <p class="text-gray-400 mb-0 font-medium">
                                        Goal Completions
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                    <div id="app">
                        <h1>Sortable List</h1>
                        <ul id="sortable_list" style="list-style: none; padding: 0;">
                            <li style="padding: 10px; border: 1px solid #ccc; margin: 5px; background: #f4f4f4;">Item 1</li>
                            <li style="padding: 10px; border: 1px solid #ccc; margin: 5px; background: #f4f4f4;">Item 2</li>
                            <li style="padding: 10px; border: 1px solid #ccc; margin: 5px; background: #f4f4f4;">Item 3</li>
                        </ul>
                    </div>
                </div>

                <div class="shadow w-72 bg-white p-4 m-5 ">
                    <div class="">
                        {{ $submenu }}
                    </div>
                </div>

                <div class="my-4">
                    {{ $demoMenu }}
                </div>

            </div>

            <div class="md:row-span-1 lg:row-span-1 xl:row-span-2 md:col-span-2 lg:col-span-2 xl:col-span-1">

                <ul id="outer_list">
                    <li>Item 1</li>
                    <li>Item 2
                        <ul id="inner_list">
                            <li>Nested Item 1</li>
                            <li>Nested Item 2</li>
                        </ul>
                    </li>
                    <li>Item 3</li>
                </ul>
            </div>

        </div>

    </div>

    {{ $menu }}
    {{ $mymenu }}




    <!-- footer -->
@endsection

@section('jSript')
    <script>
        $(function() {

           new Sortable(outer_list, {
                group: 'outer_list',
                sort: true,
                animation: 150,
                nested: true
            });

            new Sortable(inner_list, {
                group: 'inner_list, nested',
                sort: true,
                animation: 150,
                nested: true
            });


            new Sortable(user_manage, {
                animation: 150,
                handel: '.handle',
                group: 'shared',
                filter: 'filtered',
                ghostClass: 'blue-background-class'

            })

            new Sortable(sortable_list, {
                // set both lists to same group
                animation: 150,
                handel: '.handle',
                group: 'shared',
                swap: true,
                swapClass: 'highlight'
            });
            // var sortable = new Sortable(sortable_list)
        })
    </script>
@endsection
