@extends('layout.masterpage')
@section('content')
    <div class="container mx-auto px-2  relative pb-14">
        <div >
           
            
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
{{ $dragmenu }}





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
        })
    </script>
@endsection
