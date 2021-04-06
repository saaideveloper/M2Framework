<?php

namespace Saaideveloper\Framework\Html;

class Builder
{
	/**
	 * @var array
	 */
	protected $elements = array(
		'address' 	=> 'Saaideveloper\Framework\Html\Elements\Address',
		'article' 	=> 'Saaideveloper\Framework\Html\Elements\Article',
		'aside' 	=> 'Saaideveloper\Framework\Html\Elements\Aside',
		'base' 		=> 'Saaideveloper\Framework\Html\Elements\Base',
		'body' 		=> 'Saaideveloper\Framework\Html\Elements\Body',
		'footer' 	=> 'Saaideveloper\Framework\Html\Elements\Footer',
		'h1' 		=> 'Saaideveloper\Framework\Html\Elements\H1',
		'h2' 		=> 'Saaideveloper\Framework\Html\Elements\H2',
		'h3' 		=> 'Saaideveloper\Framework\Html\Elements\H3',
		'h4' 		=> 'Saaideveloper\Framework\Html\Elements\H4',
		'h5' 		=> 'Saaideveloper\Framework\Html\Elements\H5',
		'h6' 		=> 'Saaideveloper\Framework\Html\Elements\H6',
		'head' 		=> 'Saaideveloper\Framework\Html\Elements\Head',
		'header' 	=> 'Saaideveloper\Framework\Html\Elements\Header',
		'html' 		=> 'Saaideveloper\Framework\Html\Elements\Html',
		'link' 		=> 'Saaideveloper\Framework\Html\Elements\Link',
		'main' 		=> 'Saaideveloper\Framework\Html\Elements\Main',
		'meta' 		=> 'Saaideveloper\Framework\Html\Elements\Meta',
		'nav' 		=> 'Saaideveloper\Framework\Html\Elements\Nav',
		'noscript'	=> 'Saaideveloper\Framework\Html\Elements\Noscript',
		'script' 	=> 'Saaideveloper\Framework\Html\Elements\Script',
		'section' 	=> 'Saaideveloper\Framework\Html\Elements\Section',
		'style' 	=> 'Saaideveloper\Framework\Html\Elements\Style',
		'table' 	=> 'Saaideveloper\Framework\Html\Elements\Table',
		'td' 		=> 'Saaideveloper\Framework\Html\Elements\Td',
		'title' 	=> 'Saaideveloper\Framework\Html\Elements\Title',
		'tr' 		=> 'Saaideveloper\Framework\Html\Elements\Tr',
		'thead' 	=> 'Saaideveloper\Framework\Html\Elements\Thead',
	);

	/**
	 * @param $name
	 * @return bool
	 */
	public function has($name)
	{
		return isset($this->elements[$name]);
	}

	/**
	 * @param $name
	 * @param $callbackOrInstance
	 */
	public function register($name, $callbackOrInstance)
	{
		$this->elements[$name] = $callbackOrInstance;
	}

	/**
	 * @param $name
	 * @param $callbackOrInstance
	 * @return Element
	 */
	public function instance($name, $callbackOrInstance = null)
	{
		if(!$this->has($name) && $callbackOrInstance) {
			$this->register($name, $callbackOrInstance);
		}

		$element = $this->resolve($name);
		$this->elements[$name] = $element;

		return $element;
	}

	/**
	 * @param $name
	 * @return mixed
	 * @throws \Exception
	 */
	public function resolve($name)
	{
		$element = null;


		if($name instanceof Element) {
			$element = $name;
		}
		elseif(isset($this->elements[$name])) {

			if($this->elements[$name] instanceof Element) {
				$element = $this->elements[$name];
			}
			elseif(is_callable($this->elements[$name])) {
				$element = call_user_func($this->elements[$name]);
			}
			elseif(class_exists($this->elements[$name])) {
				$element = new $this->elements[$name];
			}
		}
		elseif(class_exists($name)) {
			$element = new $name;
		}

		if(!$element instanceof Element) {
			throw new \Exception(sprintf('Element "%s" could not be resolved', $name));
		}

		$element->setBuilder($this);

		return $element;
	}

	/**
	 * @param $rootName
	 * @param $text
	 * @return Element
	 */
	public function text($rootName, $text)
	{
		$root = $this->resolve($rootName);
		$root->setValue($text);

		return $root;
	}

	public function prepend($rootName, $elementName, $callback = null)
	{
		return $this->insert($rootName, $elementName, 'before', $callback);
	}

	public function append($rootName, $elementName, $callback = null)
	{
		return $this->insert($rootName, $elementName, 'after', $callback);
	}

	public function prependMany($rootName, $elementName, $count, $callback = null)
	{
		return $this->insertMultiple($rootName, $elementName, $count, 'before', $callback);
	}

	public function appendMany($rootName, $elementName, $count, $callback = null)
	{
		return $this->insertMultiple($rootName, $elementName, $count, 'after', $callback);
	}

	/**
	 * @param Element $root
	 * @param $elementName
	 * @param $position
	 * @param $callback
	 */
	protected function insert($rootName, $elementName, $position, $callback = null)
	{
		$root = $this->resolve($rootName);
		$element = $this->resolve($elementName);

		$root->getValue()->addElement($element, $position);

		if($callback && is_callable($callback)) {
			call_user_func_array($callback, array($element));
		}

		return $element;
	}

	/**
	 * @param $rootName
	 * @param $elementName
	 * @param $count
	 * @param $position
	 * @param $callback
	 */
	protected function insertMultiple($rootName, $elementName, $count, $position, $callback)
	{
		$root = $this->resolve($rootName);

		for($i = 0; $i < $count; $i++) {
			$element = $this->resolve($elementName);

			if($callback && is_callable($callback)) {
				call_user_func_array($callback, array($element, $i));
			}

			$this->insert($root, $element, $position);
		}
	}
}
