<?php

declare(strict_types=1);

namespace BeautyStudio\Modules\Service;

use BeautyStudio\Contracts\Registrable;

final class PostType implements Registrable
{
    public const string NAME = 'beauty_service';

    public function register(): void
    {
        add_action('init', [static::class, 'registerPostType']);
    }

    public static function registerPostType(): void
    {
        register_post_type(static::NAME, static::getArgs());
    }


    protected static function getArgs(): array
    {
        return [
            'labels' => static::getLabels(),
            'public' => true,
            'hierarchical' => false,
            'show_in_rest' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-editor-table',
            'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes',],
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'services',
                'with_front' => false,
            ],
        ];
    }


    protected static function getLabels(): array
    {
        return [
            'name'                     => _x('Services', 'post type general name', 'beautystudio'),
            'singular_name'            => _x('Service', 'post type singular name', 'beautystudio'),
            'name_admin_bar'           => __('Service', 'beautystudio'),
            'add_new'                  => __('Add', 'beautystudio'),
            'add_new_item'             => __('Add Service', 'beautystudio'),
            'edit_item'                => __('Edit Service', 'beautystudio'),
            'new_item'                 => __('New Service', 'beautystudio'),
            'view_item'                => __('View Service', 'beautystudio'),
            'view_items'               => __('View Services', 'beautystudio'),
            'search_items'             => __('Search Services', 'beautystudio'),
            'not_found'                => __('No services found.', 'beautystudio'),
            'not_found_in_trash'       => __('No services found in Trash.', 'beautystudio'),
            // 'parent_item_colon'        => array(null, __('Parent Page:')),
            'all_items'                => __('All Services', 'beautystudio'),
            'archives'                 => __('Service Archives', 'beautystudio'),
            'attributes'               => __('Service Attributes', 'beautystudio'),
            'insert_into_item'         => __('Insert into service', 'beautystudio'),
            'uploaded_to_this_item'    => __('Uploaded to this service', 'beautystudio'),
            'filter_items_list'        => __('Filter services list', 'beautystudio'),
            'items_list_navigation'    => __('Services list navigation', 'beautystudio'),
            'items_list'               => __('Services list', 'beautystudio'),
            'item_published'           => __('Service published.', 'beautystudio'),
            'item_published_privately' => __('Service published privately.', 'beautystudio'),
            'item_reverted_to_draft'   => __('Service reverted to draft.', 'beautystudio'),
            'item_trashed'             => __('Service trashed.', 'beautystudio'),
            'item_scheduled'           => __('Service scheduled.', 'beautystudio'),
            'item_updated'             => __('Service updated.', 'beautystudio'),
            'item_link'                => _x('Service Link', 'navigation link block title', 'beautystudio'),
            'item_link_description'    => _x('A link to a service.', 'navigation link block description', 'beautystudio'),
        ];
    }
}
