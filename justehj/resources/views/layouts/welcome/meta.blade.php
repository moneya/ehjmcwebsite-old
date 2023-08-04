 <!--Meta-->
   <meta charset="UTF-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="description" content="{{ str_limit('You are very much and with great delight welcome to the website of this great citadel of learning. Our school is a co-educational day and boarding school located within the metropolis of Ilorin, Kwara state, Nigeria. The school is furnished with excellent facilities in a wide variety of areas – Science, Arts, Sports and recreational facilities, etc.', 100) }}" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="author" content="{{ setting('site.title') }}">
   <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
   <!--Favicon-->
   <link rel="icon" href="{{ Voyager::image(setting('site.logo') )}}" />
  
   <!-- Title-->
   <title>Welcome Note - {{ setting('site.title') }}</title>