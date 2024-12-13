<?php

namespace App\Helpers;
use App\Helpers\MetaData;

class PageMetaData
{
    const DEFAULT_SUFFIX = "- SwiftlySend";
    const DEFAULT_KEYWORDS = "Logistics Solutions, Transportation Services, Cutting-Edge Solutions, Premier Destination, Explore Services.";
    const DEFAULT_OG_TYPE = "website";
    const DEFAULT_OG_IMAGE_WIDTH = 1200;
    const DEFAULT_OG_IMAGE_HEIGHT = 630;
    const DEFAULT_TWITTER_CARD = "summary_large_image";

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
            ->setAttribute("og_site_name", str_replace('-', '', self::DEFAULT_SUFFIX))
            ->setAttribute("og_title", $title)
            ->setAttribute("og_description", $description)
            // ->setAttribute("og_image", $ogImage ?? asset('web/assets/img/logo/cover.png'))
            ->setAttribute("og_type", self::DEFAULT_OG_TYPE)
            ->setAttribute("og_image_width", self::DEFAULT_OG_IMAGE_WIDTH)
            ->setAttribute("og_image_height", self::DEFAULT_OG_IMAGE_HEIGHT)
            ->setAttribute("twitter_card", self::DEFAULT_TWITTER_CARD);
    }

    public static function welcome()
    {
        return self::createMetaData(
            'Welcome to SwiftlySend',
            'Discover SwiftlySend - Your Premier Destination for Cutting-Edge Logistics and Transportation Solutions. Explore Our Services Today!',
            'https://swiftlysend.online'
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

