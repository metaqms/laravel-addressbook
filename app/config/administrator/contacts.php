<?php

/**
 * Actors model config
 */

return array(

        'title' => 'Contacts',

        'single' => 'Contact',

        'model' => 'Contact',

        /**
         * The display columns
         */
        'columns' => array(
                'id',
                'name',
                'email',
                'organisation_id',
                'blog-url',
                'twitter',
                'facebook',
                'work_phone',
                'home_phone',
                'personal_phone',
                'status'
        ),

        /**
         * The filter set
         */
        'filters' => array(
                'id',
                'organisation_id',      
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
                'name',
                'email',
                'organisation_id',
                'home_address_id',
                'work_address_id',
                'blog-url',
                'twitter',
                'facebook',
                'work_phone',
                'home_phone',
                'personal_phone',
                'status'
        ),

);