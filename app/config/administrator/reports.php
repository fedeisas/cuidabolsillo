<?php

/**
 * Directors model config
 */

return array(

    'title' => 'Reportes',

    'single' => 'reporte',

    'model' => 'PriceReport',

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
        'price' => array(
            'title' => 'Precio',
        ),
        'product_id' => array(
            'title' => "Negocio",
            'relationship' => 'business',
            'select' => "(:table).name",
        ),
        'map_link' => array(
            'title' => 'Mapa',
            'output' => '<a href="(:value)" target="_blank">Mapa</a>',
        ),
        'created_at' => array(
            'title' => 'Fecha'
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
        'id' => array(
            'type' => 'key',
            'title' => 'ID'
        ),
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
        'price' => array(
            'type' => 'number',
            'symbol' => '$',
            'decimals' => 2,
            'name_field' => 'Precio'
        ),
        'latitude' => array(
            'title' => 'Latitud',
            'editable' => false
        ),
        'longitude' => array(
            'title' => 'Longitud',
            'editable' => false
        ),
        'business' => array(
            'type' => 'relationship',
            'title' => 'Negocio',
            // 'autocomplete' => true,
            // 'num_options' => 7,
            'search_fields' => array("CONCAT(name, ' ', location_address)"),
            'name_field' => "large_name"
        ),
    ),
);
