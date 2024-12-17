@extends('layout.masterpage')
@section('content')
    <div class="flex gap-3 items-center my-3"><span class="text-3xl">Menu management</span> <span class=" mt-2">Menu
            list</span></div>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="card h-full">
            <div class="card-header">
                <h4 class="card-title">Dynamic Menu Form</h4>
            </div>
            <div class="card-body">
                {{ $dragmenu }}

            </div>
           
        </div>

        <div class="card h-full">
            <div class="card-header">
                <h4 class="card-title">Dynamic Menu Form</h4>
            </div><!-- end card-header -->
            <div class="card-body">
                <form action="{{ route('menu.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div class="mb-6">
                        <label for="dynamicmenu" class="label">Parent</label>
                        <select name="parent" id="dynamicmenu" class="form-control">
                            <option value="Dashboard">Dashboard</option>
                            <option value="profile">Profile</option>
                            <option value="role">Role</option>
                            <option value="nothing">Nothing</option>
                        </select>
                        <div class="text-red-500 text-sm mt-1">Please note! The menu only supports a max depth of 2.</div>
                        @error('parent')
                            <div class="text-red-500 text-base mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="active" class="label">Active</label>
                        <select name="active" id="active" class="form-control">
                            <option value="active">Active</option>
                            <option value="Not_active">Not Active</option>
                        </select>
                        @error('active')
                            <div class="text-red-500 text-base mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email-adress-icon" class="label">Icon</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <i class="ti ti-flag z-[1] dark:text-slate-500"></i>
                            </div>

                            <input type="text" id="icon-picker" name="icon"
                                class="form-control pl-10 p-2.5 
                            @error('icon') border-red-500 @else border-blue-500 @enderror"
                                placeholder="name@t-wind.com">
                        </div>

                        @error('icon')
                            <div class="text-red-500 text-base mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="title" class="label">Title</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="ti ti-pencil z-[1] dark:text-slate-500"></i>
                            </div>
                            <input type="text" name="title" id="title"
                                class="form-control pl-10 p-2.5  @error('title') border-red-500 @else border-blue-500 @enderror"
                                placeholder="Enter title">
                        </div>

                        @error('title')
                            <div class="text-red-500 text-base mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="route" class="label">Route</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <i class="ti ti-link z-[1] dark:text-slate-500"></i>
                            </div>
                            <input type="text" name="route" id="route"
                                class="form-control pl-10 p-2.5  @error('route') border-red-500 @else border-blue-500 @enderror"
                                placeholder="Enter route">
                        </div>

                        @error('route')
                            <div class="text-red-500 text-base mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="role" class="label">Role</label>
                        <input type="text" name="role" id="role"
                            class="form-control  @error('icon') border-red-500 @else border-blue-500 @enderror"
                            placeholder="Enter role">
                        @error('role')
                            <div class="text-red-500 text-base mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Save</button>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('jSript')
<script>
    $(function() {

        $('#icon-picker').iconpicker({
            // Optional configurations
            title: 'Icon Picker',
            placement: 'bottom', // Position of the picker
            hideOnSelect: true,  // Auto close on icon selection
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
    })
</script>
@endsection
