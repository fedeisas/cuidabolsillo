<?php

/**
 * Directors model config
 */

return array(

    'title' => 'User',

    'single' => 'user',

    'model' => 'User',

    /**
     * The display columns
     */
    'columns' => array(
        'id' => array(
            'title' => 'ID',
        ),
        'email' => array(
            'title' => 'Email',
        ),
        'password' => array(
            'title' => 'Password',
        ),
    ),

    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),

    /**
     * The filter set
     */
    'filters' => array(),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'email' => array(
            'title' => 'Email',
            'type' => 'text'
        ),
        'password' => array(
            'title' => 'Password',
            'type' => 'password',
        ),
    ),
);
