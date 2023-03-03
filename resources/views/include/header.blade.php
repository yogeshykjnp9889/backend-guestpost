<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="{{$robots}}" />
<link rel="icon" type="image/x-icon" href="/assets/image/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="<?=asset('assets/css/style.css');?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Didact+Gothic&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=asset('assets/css/internal.css');?>">
<link rel="stylesheet" type="text/css" href="<?=asset('assets/css/responsive.css');?>">
<link rel="stylesheet" href="<?=asset('assets/css/ybox.min.css');?>" />

<!-- Link -->

<!-- Open Graph -->
<meta property="og:title" content="{{$meta_title}}">
<meta property="og:site_name" content="{{$og_site_name}}">
<meta property="og:description" content="{{$meta_description}}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{str_replace('http:', 'https:',$og_image)}}">
<meta property="og:url" content="{{str_replace('http:', 'https:', URL::current())}}"/>
<title>{{$meta_title}}</title>
<meta name="description" content="{{$meta_description}}">
<link rel="canonical" href="{{$canonical}}">


  

