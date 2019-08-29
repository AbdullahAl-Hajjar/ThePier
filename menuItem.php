<?php
Class menuitem
{
	private $itemname;
	private $description;
	private $price;
	function __construct($itemname, $description, $price)
	{
		$this->itemname = $itemname;
		$this->description = $description;
		$this->price = $price;
	}

	public

	function getItemName()
	{
		return $this->itemname;
	}

	public

	function getDescription()
	{
		return $this->description;
	}

	public

	function getPrice()
	{
		return $this->price;
	}
}

?>
