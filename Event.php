<?php

/**
 * Class Event
 */
class Event
{
	/**
	 * @var
	 */
	private $id;
	/**
	 * @var
	 */
	private $tickets;
	/**
	 * @var
	 */
	private $price;

	/**
	 * Event constructor.
	 * @param $id
	 * @param $tickets
	 * @param $price
	 */
	public function __construct($id, $tickets, $price)
	{
		$this->id = $id;
		$this->tickets = $tickets;
		$this->price = $price;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getTickets()
	{
		return $this->tickets;
	}

	/**
	 * @param mixed $tickets
	 */
	public function setTickets($tickets)
	{
		$this->tickets = $tickets;
	}

	/**
	 * @return mixed
	 */
	public function getPrice()
	{
		return number_format($this->price,2);
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price)
	{
		$this->price = $price;
	}

}