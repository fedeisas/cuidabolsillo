<?php

/**
 * Directors model config
 */

return array(

    'title' => 'Productos',

    'single' => 'producto',

    'model' => 'Product',

    /**
     * The display columns
     */
    'columns' => array(
        'id' => array(
            'title' => 'ID',
        ),
        'name' => array(
            'title' => 'Nombre',
        ),
        'created_at' => array(
            'title' => 'Creado el',
        ),
        'link' => array(
            'title' => 'Link',
            'output' => '<a href="(:value)" target="_blank">Link</a>',
        ),
    ),

    'sort' => array(
        'field' => 'name',
        'direction' => 'asc',
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'name',
        'description'
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'id' => array(
            'type' => 'key',
            'title' => 'ID'
        ),
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text',
        ),
        'description' => array(
            'title' => 'Descripción',
            'type' => 'textarea',
        )
    ),
);
