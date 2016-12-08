<?php

class Category
{
	/**
	* Returns an array of categories
	*/
	public static function getCategoriesList()
	{
		$db = Db::getConnection();

		$categoryList = array();

		$sql = 'SELECT id, name FROM category ORDER BY sort_order ASC';

		$results = $db->query($sql);

		$i = 0;
		while($row = $results->fetch()) {
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['name'] = $row['name'];
			$i++;
		}

		return $categoryList;
	}
}