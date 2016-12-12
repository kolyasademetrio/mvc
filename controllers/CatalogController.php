<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';
include_once ROOT . '/components/Pagination.php';

class CatalogController
{
	public static function actionIndex ()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(20);

		require_once ROOT . '/views/catalog/index.php';

		return true;
	}

	public static function actionCategory ($categoryId, $page = 1)
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);
		

		require_once ROOT . '/views/catalog/category.php';

		return true;
	}
}
