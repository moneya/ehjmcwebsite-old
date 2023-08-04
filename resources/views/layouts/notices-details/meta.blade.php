 <!--Meta-->
   <meta charset="UTF-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="description" content="{{ str_limit(strip_tags($notice->content), 100) }}" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="author" content="{{ setting('site.title') }}">
   <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
   <!--Favicon-->
   <link rel="icon" href="{{ Voyager::image(setting('site.logo') )}}" />
  
   <!-- Title-->
   <title>{{ $notice->title }} - {{ setting('site.title') }}</title>