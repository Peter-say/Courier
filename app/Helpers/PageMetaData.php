<?php

namespace App\Helpers;
use App\Helpers\MetaData;
use App\Models\Post;
use Illuminate\Support\Str;

class PageMetaData
{
    const DEFAULT_SUFFIX = "- SwiftlySend";
    const DEFAULT_KEYWORDS = "Logistics Solutions, Transportation Services, Cutting-Edge Solutions, Premier Destination, Explore Services.";

    public static function getTitle(string $name)
    {
        return $name . " " . self::DEFAULT_SUFFIX;
    }

    public static function getDefaultKeywords()
    {
        return self::DEFAULT_KEYWORDS;
    }

    public static function createMetaData($title, $description, $ogUrl, $ogImage = null)
    {
        $meta = new MetaData();

        return $meta
        ->setAttribute("title", $title)
        ->setAttribute("description", $description)
        ->setAttribute("keywords", self::getDefaultKeywords())
        ->setAttribute("og_url", $ogUrl)
        ->setAttribute("og_image", $ogImage ?? asset('web/assets/img/profile/cover.png'));
    }

    public static function welcome()
    {
        return self::createMetaData(
            'Welcome to SwiftlySend',
            'Discover SwiftlySend - Your Premier Destination for Cutting-Edge Logistics and Transportation Solutions. Explore Our Services Today!',
            'https://swiftlysend.online/'
        );
    }

    public static function contactUS()
    {
        return self::createMetaData(
            'Contact Us - SwiftlySend',
            'Get in touch with SwiftlySend for inquiries and support.',
            'https://swiftlysend.online/web/contact-us'
        );
    }

    public static function aboutUs()
    {
        return self::createMetaData(
            'About Us - SwiftlySend',
            'Learn more about SwiftlySend and our services.',
            'https://swiftlysend.online/web/about-us'
        );
    }

    public static function trackOrderPage()
    {
        return self::createMetaData(
            'Tracking - SwiftlySend',
            'Effortless Shipment Tracking with SwiftlySend - Stay in Control of Your Deliveries, Anytime, Anywhere. Experience the Future of Logistics!',
            'https://swiftlysend.online/web/tracking'
        );
    }

    public static function services()
    {
        return self::createMetaData(
            'Our Services - SwiftlySend',
            'Explore our comprehensive range of logistics and transportation services. SwiftlySend is your trusted partner for all your delivery needs.',
            'https://swiftlysend.online/web/service'
        );
    }

    
}
