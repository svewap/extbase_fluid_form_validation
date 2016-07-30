<?php
namespace WapplerSystems\ExtbaseFluidFormValidation\ViewHelpers\Form;

/*                                                                        *
 * This script is backported from the TYPO3 Flow package "TYPO3.Fluid".   *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 *  of the License, or (at your option) any later version.                *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * View Helper which creates a simple Password Text Box (<input type="password">).
 *
 * = Examples =
 *
 * <code title="Example">
 * <f:form.password name="myPassword" />
 * </code>
 * <output>
 * <input type="password" name="myPassword" value="default value" />
 * </output>
 *
 * @api
 */
class PasswordViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper {

	/**
	 * @var string
	 */
	protected $tagName = 'input';

	/**
	 * Initialize the arguments.
	 *
	 * @return void
	 * @api
	 */
	public function initializeArguments() {
		parent::initializeArguments();

		$this->registerTagAttribute('placeholder', 'string', 'The placeholder of the textfield');

	}


}
