<?php

/**
 * Class Coordinates
 */
class Coordinates
{
	/**
	 * @var
	 */
	private $x;
	/**
	 * @var
	 */
	private $y;
	/**
	 * @var
	 */
	private $event;

	/**
	 * Coordinates constructor.
	 * @param $x
	 * @param $y
	 */
	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
		$this->event = null;
	}

	/**
	 * @return mixed
	 */
	public function getX()
	{
		return $this->x;
	}

	/**
	 * @param mixed $x
	 */
	public function setX($x)
	{
		$this->x = $x;
	}

	/**
	 * @return mixed
	 */
	public function getY()
	{
		return $this->y;
	}

	/**
	 * @param mixed $y
	 */
	public function setY($y)
	{
		$this->y = $y;
	}

	/**
	 * @return mixed
	 */
	public function getEvent()
	{
		return $this->event;
	}

	/**
	 * @param mixed $event
	 */
	public function setEvent($event)
	{
		$this->event = $event;
	}

}