<?php
/**
 * Plugin Name: Motif
 * Description: Semantic remapping layer for WooCommerce. Change the lens. Keep the engine.
 * Version: 0.1.0-concept
 * Author: Marvelous Empire
 * License: MIT
 */

if (!defined('ABSPATH')) {
    exit;
}

final class Motif_Plugin
{
    const VERSION = '0.1.0-concept';

    public static function init(): void
    {
        add_filter('gettext', [__CLASS__, 'translate_labels'], 20, 3);
        add_filter('ngettext', [__CLASS__, 'translate_plural_labels'], 20, 5);
    }

    public static function map(): array
    {
        return [
            'Product' => 'Idea',
            'Products' => 'Ideas',
            'product' => 'idea',
            'products' => 'ideas',
            'Add to cart' => 'Add to Collection',
            'Cart' => 'Collection',
            'Checkout' => 'Submit',
            'SKU' => 'Idea Reference ID',
            'Categories' => 'Idea Categories',
            'Tags' => 'Idea Themes',
            'Attributes' => 'Idea Traits',
            'Reviews' => 'Feedback',
            'Related products' => 'Related Ideas',
        ];
    }

    public static function translate_labels(string $translated, string $text, string $domain): string
    {
        $map = self::map();

        if (isset($map[$translated])) {
            return $map[$translated];
        }

        if (isset($map[$text])) {
            return $map[$text];
        }

        return $translated;
    }

    public static function translate_plural_labels(string $translation, string $single, string $plural, int $number, string $domain): string
    {
        $map = self::map();

        if (isset($map[$translation])) {
            return $map[$translation];
        }

        return $translation;
    }
}

Motif_Plugin::init();
