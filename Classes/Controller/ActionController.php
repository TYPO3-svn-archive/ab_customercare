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
 * Controller for the Action object
 */
class Tx_AbCustomercare_Controller_ActionController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * Displays all Actions
	 *
	 * @return void
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		$actions = $this->actionRepository->findAll();
		$this->view->assign('actions', $actions);
	}

	/**
	 * Displays a single Action
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Action $action the Action to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_AbCustomercare_Domain_Model_Action $action) {
		$this->view->assign('action', $action);
	}

	/**
	 * Displays a form for creating a new  Action
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Action $newAction a fresh Action object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newAction
	 */
	public function newAction(Tx_AbCustomercare_Domain_Model_Action $newAction = NULL) {
		
		$this->view->assign('newAction', $newAction);
	}

	/**
	 * Creates a new Action and forwards to the list action.
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Action $newAction a fresh Action object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_AbCustomercare_Domain_Model_Action $newAction) {
		$this->actionRepository->add($newAction);
		$this->flashMessageContainer->add('Your new Action was created.');
		if(!empty($_FILES)){
			$this->flashMessageContainer->add('File upload is not yet supported by the Persistence Manager. You have to implement it yourself.');
		}
		$this->redirect('list');
	}

	/**
	 * Displays a form for editing an existing Action
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Action $action the Action to display
	 * @return string A form to edit a Action
	 */
	public function editAction(Tx_AbCustomercare_Domain_Model_Action $action) {
		$this->view->assign('action', $action);
	}

	/**
	 * Updates an existing Action and forwards to the list action afterwards.
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Action $action the Action to display
	 * @return
	 */
	public function updateAction(Tx_AbCustomercare_Domain_Model_Action $action) {
		$this->actionRepository->update($action);
		$this->flashMessageContainer->add('Your Action was updated.');
		$this->redirect('list');
	}

	/**
	 * Deletes an existing Action
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Action $action the Action to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_AbCustomercare_Domain_Model_Action $action) {
		$this->actionRepository->remove($action);
		$this->flashMessageContainer->add('Your Action was removed.');
		$this->redirect('list');
	}

}
?>