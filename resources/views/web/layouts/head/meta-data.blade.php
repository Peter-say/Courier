<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{$metaData->title}}</title>

<meta name="description" content="{{ $metaData->description }}">
<meta name="keywords" content="{{ $metaData->keywords }}">

<meta property="og:description" content="{{ $metaData->description }}">
<meta property="og:image" content="{{ $metaData->og_image }}">
<meta property="og:url" content="{{ $metaData->og_url }}">
<meta property="og:type" content="{{ $metaData->page_type }}">
<meta name="twitter:card" content="{{ $metaData->twitter_card ?? '' }}">
