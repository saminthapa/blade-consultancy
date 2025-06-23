
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
      @yield('title')

    </title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    @include('layouts.header')

    @include('layouts.hero')

    @include('layouts.about')

    @include('layouts.services')

    @include('layouts.testimonials')

    @include('layouts.contact')

    @include('layouts.footer')
</body>
</html>
