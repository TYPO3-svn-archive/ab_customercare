<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Anja Leichsenring <aleichsenring@ab-softlab.de>, ab-softlab
*  
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Controller for the Address object
 */
class Tx_AbCustomercare_Controller_AddressController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * Displays a single Address
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Address $address the Address to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_AbCustomercare_Domain_Model_Address $address) {
		$this->view->assign('address', $address);
	}

	/**
	 * action list
	 *
	 * @return string The rendered list action
	 */
	public function listAction() {

	}

	/**
	 * action new
	 *
	 * @return string The rendered new action
	 */
	public function newAction() {

	}

	/**
	 * action create
	 *
	 * @return string The rendered create action
	 */
	public function createAction() {

	}

	/**
	 * action edit
	 *
	 * @return string The rendered edit action
	 */
	public function editAction() {

	}

	/**
	 * action update
	 *
	 * @return string The rendered update action
	 */
	public function updateAction() {

	}

	/**
	 * action delete
	 *
	 * @return string The rendered delete action
	 */
	public function deleteAction() {

	}

}
?>