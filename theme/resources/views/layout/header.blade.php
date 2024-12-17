<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Product Management</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      content="Tailwind Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/users/avatar-2.jpg') }}" >
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/tabler-icons.min.css')}}"> --}}

    {{-- CDN for JQuery for Sortablejs functionality --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- CDN for Tabler Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.26.0/tabler-icons.min.css" integrity="sha512-k9iJhTcDc/0fp2XLBweIJjHuQasnXicVPXbUG0hr5bB0/JqoTYEFeCdQj4aJTg50Gw6rBJiHfWJ8Y+AeF1Pd3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jsDelivr :: Sortable -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>


    {{-- cdn for iconpicker --}}
    <!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Icon Picker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css">

<!-- jQuery (Required for Icon Picker) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Icon Picker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- <link rel="stylesheet" href="assets/css/icons.css" /> -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css')}}" />

</head>

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">   
