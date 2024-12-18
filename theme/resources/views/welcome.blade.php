@extends('layout.masterpage')
@section('content')
    <div class="container mx-auto px-2  relative pb-14">
       {{ $practice }}
    </div>







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
