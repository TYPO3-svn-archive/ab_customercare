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
 * Controller for the Employee object
 */
class Tx_AbCustomercare_Controller_EmployeeController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * Displays all Employees
	 *
	 * @return void
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		$employees = $this->employeeRepository->findAll();
		$this->view->assign('employees', $employees);
	}

	/**
	 * Displays a single Employee
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Employee $employee the Employee to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_AbCustomercare_Domain_Model_Employee $employee) {
		$this->view->assign('employee', $employee);
	}

	/**
	 * Displays a form for creating a new  Employee
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Employee $newEmployee a fresh Employee object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newEmployee
	 */
	public function newAction(Tx_AbCustomercare_Domain_Model_Employee $newEmployee = NULL) {
		
		$this->view->assign('newEmployee', $newEmployee);
	}

	/**
	 * Creates a new Employee and forwards to the list action.
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Employee $newEmployee a fresh Employee object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_AbCustomercare_Domain_Model_Employee $newEmployee) {
		$this->employeeRepository->add($newEmployee);
		$this->flashMessageContainer->add('Your new Employee was created.');
		if(!empty($_FILES)){
			$this->flashMessageContainer->add('File upload is not yet supported by the Persistence Manager. You have to implement it yourself.');
		}
		$this->redirect('list');
	}

	/**
	 * Displays a form for editing an existing Employee
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Employee $employee the Employee to display
	 * @return string A form to edit a Employee
	 */
	public function editAction(Tx_AbCustomercare_Domain_Model_Employee $employee) {
		$this->view->assign('employee', $employee);
	}

	/**
	 * Updates an existing Employee and forwards to the list action afterwards.
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Employee $employee the Employee to display
	 * @return
	 */
	public function updateAction(Tx_AbCustomercare_Domain_Model_Employee $employee) {
		$this->employeeRepository->update($employee);
		$this->flashMessageContainer->add('Your Employee was updated.');
		$this->redirect('list');
	}

	/**
	 * Deletes an existing Employee
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Employee $employee the Employee to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_AbCustomercare_Domain_Model_Employee $employee) {
		$this->employeeRepository->remove($employee);
		$this->flashMessageContainer->add('Your Employee was removed.');
		$this->redirect('list');
	}

}
?>