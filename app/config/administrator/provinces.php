<?php

/**
 * Directors model config
 */

return array(

    'title' => 'Provincias',

    'single' => 'provincia',

    'model' => 'Province',

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
        'ISO_3166-2' => array(
            'title' => 'ISO_3166-2',
        )
    ),

    'sort' => array(
        'field' => 'name',
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
        'name' => array(
            'title' => 'Nombre',
            'type' => 'text',
        ),
        'ISO_3166-2' => array(
            'title' => 'ISO_3166-2',
            'type' => 'text',
        )
    ),
);
