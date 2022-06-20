<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="author" content="TheTuitionE"/>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}

    <meta property="og:locale" content="en_US"/>

    {!! Twitter::generate() !!}
    <meta property="og:image:width" content="2560"/>
    <meta property="og:image:height" content="1600"/>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/exam.css') }}">
    <!-- END: Custom CSS-->
    <livewire:styles />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-2/css/all.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

</head>

<body>
    <section class="backgroundimages">
        <div class="container">
            {{ $slot }}
        </div>
    </section>
    <livewire:scripts />

    <script>
        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        });
    </script>
</body>

</html>
