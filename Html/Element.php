<?php

namespace Saaideveloper\Framework\Html;

class Element
{
	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var \Saaideveloper\Framework\Html\Element
	 */
	protected $parent;

	/**
	 * @var \Saaideveloper\Framework\Html\Collection|string
	 */
	protected $value;

	/**
	 * @var Attributes
	 */
	protected $attributes;

	/**
	 * @var Builder
	 */
	protected $builder;

	/**
	 *
	 * @param mixed $value
	 */
	public function __construct($value = null, Array $attributes = array())
	{
		if(!$value) {
			$value = new Collection;
		}

		$this->setValue($value);

		$this->attributes = new Attributes($attributes);
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param Attributes $attributes
	 */
	public function setAttributes(Attributes $attributes) {
		$this->attributes = $attributes;
	}

	/**
	 * @return mixed
	 */
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * @param Builder $builder
	 */
	public function setBuilder(Builder $builder)
	{
		$this->builder = $builder;
	}

	/**
	 * @return Builder
	 */
	public function getBuilder()
	{
		return $this->builder;
	}

	/**
	 * @param \Saaideveloper\Framework\Html\Collection|string $value
	 * @return \Saaideveloper\Framework\Html\Element
	 */
	public function setValue($value) {

		if(!is_string($value) && !$value instanceof Collection) {
			throw new \Exception('Can only use a string or \Saaideveloper\Framework\Html\Collection as a value');
		}

		if(is_string($value)) {
			$value = new Text($value);
		}
		$this->value = $value;
		return $this;
	}

	/**
	 * @param $name
	 * @param $value
	 */
	public function attr($name, $value)
	{
		$this->getAttributes()->set($name, $value);
	}

	/**
	 * @param $callback
	 * @throws \Exception
	 */
	public function eachChild($callback)
	{
		if(!$this->getValue() instanceof Collection) {
			throw new \Exception('Can only do an callback on an instance of \Saaideveloper\Framework\Html\Collection');
		}

		$this->getValue()->each($callback);
	}

	/**
	 * @return \Saaideveloper\Framework\Html\Collection|string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param \Saaideveloper\Framework\Html\Element $parent
	 */
	public function setParent(Element $parent) {
		$this->parent = $parent;
	}

	/**
	 * @return \Saaideveloper\Framework\Html\Element
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * @param $method
	 * @param $vars
	 * @return mixed
	 */
	public function __call($method, $vars)
	{
		array_unshift($vars, $this);
		return call_user_func_array(array($this->getBuilder(), $method), $vars);
	}
}
