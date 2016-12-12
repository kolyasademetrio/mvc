<?php

return array(

	'product/([0-9]+)' => 'product/view/$1',

	'catalog' => 'catalog/index', // CatalogController - actionIndex
	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //CatalogController - actionCategory
	'category/([0-9]+)' => 'catalog/category/$1', //CatalogController - actionCategory

	'' => 'site/index',

);