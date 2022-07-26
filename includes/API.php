<?php

namespace Saad_Contacts;

use Saad_Contacts\API\Contacts;
use Saad_Contacts\API\User;

/**
 * API Class
 */
class API
{

    /**
     * Initialize the class
     */
    public function __construct()
    {
        add_action('rest_api_init', [ $this, 'register_api' ]);
    }

    /**
     * Register the API
     *
     * @return void
     */
    public function register_api()
    {
        $classes=[];
        $classes[] = new Contacts();
        $classes[] = new User();

        foreach ($classes as  $class) {
            $class->register_routes();
        }
    }
}
