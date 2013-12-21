<?php

/**
 * Directors model config
 */

return array(

    'title' => 'IBP',

    'single' => 'IBP',

    'model' => 'IBP',

    /**
     * The display columns
     */
    'columns' => array(
        'id' => array(
            'title' => 'ID',
        ),
        'province_id' => array(
            'title' => "Provincia",
            'relationship' => 'province',
            'select' => "(:table).name",
        ),
        'product_id' => array(
            'title' => "Producto",
            'relationship' => 'product',
            'select' => "(:table).name",
        ),
        'median' => array(
            'title' => 'Mediana',
        ),
        'min' => array(
            'title' => 'Mínimo',
        ),
        'max' => array(
            'title' => 'Máximo',
        ),
        'reported_at' => array(
            'title' => 'Fecha Reporte IBP'
        ),
    ),

    'sort' => array(
        'field' => 'created_at',
        'direction' => 'asc',
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'province' => array(
            'type' => 'relationship',
            'title' => 'Provincia',
            'name_field' => 'name',
        ),
        'product' => array(
            'type' => 'relationship',
            'title' => 'Producto',
            'name_field' => 'name',
        ),
        'reported_at' => array(
            'title' => 'Fecha Reporte IBP',
            'type' => 'date',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'province' => array(
            'type' => 'relationship',
            'title' => 'Provincia',
            'name_field' => 'name'
        ),
        'product' => array(
            'type' => 'relationship',
            'title' => 'Producto',
            'name_field' => 'name'
        ),
        'median' => array(
            'type' => 'number',
            'symbol' => '$',
            'decimals' => 2,
            'name_field' => 'Mediana'
        ),
        'min' => array(
            'type' => 'number',
            'symbol' => '$',
            'decimals' => 2,
            'name_field' => 'Mínimo'
        ),
        'max' => array(
            'type' => 'number',
            'symbol' => '$',
            'decimals' => 2,
            'name_field' => 'Máximo'
        ),
        'reported_at' => array(
            'title' => 'Fecha Reporte IBP',
            'type' => 'date',
        )
    ),
);
