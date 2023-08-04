 <!--Meta-->
   <meta charset="UTF-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="description" content="Read the school latest updates and notices" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="author" content="{{ setting('site.title') }}">
   <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
   <!--Favicon-->
   <link rel="icon" href="{{ Voyager::image(setting('site.logo') )}}" />
  
   <!-- Title-->
   <title>Notice - {{ setting('site.title') }}</title>