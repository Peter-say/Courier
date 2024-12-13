<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ $metaData->title}}</title>
<meta name="description" content="{{ $metaData->description }}">
<meta name="keywords" content="{{ $metaData->keywords}}">

<meta property="og:description" content="{{ $metaData->description ?? '' }}">
<meta property="og:image" content="{{ $web_assets }}/assets/img/logo/cover.png">
<meta property="og:url" content="{{ $metaData->og_url ?? '' }}">
<meta property="og:type" content="{{ $metaData->og_type ?? '' }}">
<meta property="og:image:width" content="{{ $metaData->og_image_width ?? '1200' }}">
<meta property="og:image:height" content="{{ $metaData->og_image_height ?? '630' }}">
<meta name="twitter:card" content="{{ $metaData->twitter_card ?? '' }}">
