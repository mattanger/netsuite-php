<?php

class SearchDateField {
	public $predefinedSearchValue;
	public $searchValue;
	public $searchValue2;
	public $operator;
	static $paramtypesmap = array(
		"predefinedSearchValue" => "SearchDate",
		"searchValue" => "dateTime",
		"searchValue2" => "dateTime",
		"operator" => "SearchDateFieldOperator",
	);
}
