 <!--Meta-->
   <meta charset="UTF-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="description" content="{{ str_limit(strip_tags(setting('site.description')), 150) }}" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
   <!--Favicon-->
   <link rel="icon" href="{{ Voyager::image(setting('site.logo') )}}" />
  
   <!-- Title-->
   <title>{{setting('site.title')}}</title>

   