<?php
/**
 * @package     FOF
 * @copyright   2010-2017 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license     GNU GPL version 2 or later
 */

namespace FOF30\Form\Field;

use FOF30\Form\FieldInterface;
use FOF30\Form\Form;
use FOF30\Model\DataModel;

defined('_JEXEC') or die;

\JFormHelper::loadFieldClass('text');

/**
 * Form Field class for FOF
 * Supports a generic list of options.
 */
class GroupedButton extends \JFormFieldText implements FieldInterface
{
	/**
	 * @var  string  Static field output
	 */
	protected $static;

	/**
	 * @var  string  Repeatable field output
	 */
	protected $repeatable;

	/**
	 * The Form object of the form attached to the form field.
	 *
	 * @var    Form
	 */
	protected $form;

	/**
	 * A monotonically increasing number, denoting the row number in a repeatable view
	 *
	 * @var  int
	 */
	public $rowid;

	/**
	 * The item being rendered in a repeatable form field
	 *
	 * @var  DataModel
	 */
	public $item;

	/**
	 * Method to get certain otherwise inaccessible properties from the form field object.
	 *
	 * @param   string  $name  The property name for which to the the value.
	 *
	 * @return  mixed  The property value or null.
	 *
	 * @since   2.0
	 */
	public function __get($name)
	{
		switch ($name)
		{
			case 'static':
				if (empty($this->static))
				{
					$this->static = $this->getStatic();
				}

				return $this->static;
				break;

			case 'repeatable':
				if (empty($this->repeatable))
				{
					$this->repeatable = $this->getRepeatable();
				}

				return $this->repeatable;
				break;

			default:
				return parent::__get($name);
		}
	}

	/**
	 * Get the rendering of this field type for static display, e.g. in a single
	 * item view (typically a "read" task).
	 *
	 * @since 2.0
	 *
	 * @return  string  The field HTML
	 */
	public function getStatic()
	{
		return $this->getInput();
	}

	/**
	 * Get the rendering of this field type for a repeatable (grid) display,
	 * e.g. in a view listing many item (typically a "browse" task)
	 *
	 * @since 2.0
	 *
	 * @return  string  The field HTML
	 */
	public function getRepeatable()
	{
		return $this->getInput();
	}

	/**
	 * Get the rendering of this field type for static display, e.g. in a single
	 * item view (typically a "read" task).
	 *
	 * @since 2.0
	 *
	 * @return  string  The field HTML
	 */
	public function getInput()
	{
		$class = $this->class ? $this->class : '';

		$html = '<div id="' . $this->id . '" class="btn-group ' . $class . '">';

		/** @var \SimpleXMLElement $option */
		foreach ($this->element->children() as $option)
		{
			$renderedAttributes = array();

			foreach ($option->attributes() as $name => $value)
			{
				if (!is_null($value))
				{
					$renderedAttributes[] = $name . '="' . htmlentities($value) . '"';
				}
			}

			$buttonXML   = new \SimpleXMLElement('<field ' . implode(' ', $renderedAttributes) . ' />');
			$buttonField = new Button($this->form);

			// Pass required objects to the field
			$buttonField->item = $this->item;
			$buttonField->rowid = $this->rowid;
			$buttonField->setup($buttonXML, null);

			$html .= $buttonField->getRepeatable();
		}
		$html .= '</div>';

		return $html;
	}
}
