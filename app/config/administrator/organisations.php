<?php

/**
 * Actors model config
 */

return array(

        'title' => 'Organisations',

        'single' => 'Organisations',

        'model' => 'Organisation',

        /**
         * The display columns
         */
        'columns' => array(
                'organisation_name',
                'organisation_web'
        ),

        /**
         * The filter set
         */
        'filters' => array(
                'organisation_name',
                'organisation_web'     
        ),

        /**
         * The editable fields
         */
        'edit_fields' => array(
                'organisation_name',
                'organisation_web'
        ),

);