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
 * Controller for the Company object
 */
class Tx_AbCustomercare_Controller_CompanyController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * companyRepository
	 *
	 * @var Tx_AbCustomercare_Domain_Repository_CompanyRepository
	 */
	protected $companyRepository;

	/**
	 * injectCompanyRepository
	 *
	 * @param Tx_AbCustomercare_Domain_Repository_CompanyRepository $companyRepository
	 * @return void
	 */
	public function injectCompanyRepository(Tx_AbCustomercare_Domain_Repository_CompanyRepository $companyRepository) {
		$this->companyRepository = $companyRepository;
	}

	/**
	 * Displays all Companies
	 *
	 * @return void
	 */
	public function listAction() {
		$configuration = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		if(empty($configuration['persistence']['storagePid'])){
			$this->flashMessageContainer->add('No storagePid! You have to include the static template of this extension and set the constant plugin.tx_' . t3lib_div::lcfirst($this->extensionName) . '.persistence.storagePid in the constant editor');
		}
		$companies = $this->companyRepository->findAll();
		$this->view->assign('companies', $companies);
	}

	/**
	 * Displays a single Company
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Company $company the Company to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_AbCustomercare_Domain_Model_Company $company) {
		$this->view->assign('company', $company);
	}

	/**
	 * Displays a form for creating a new  Company
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Company $newCompany a fresh Company object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newCompany
	 */
	public function newAction(Tx_AbCustomercare_Domain_Model_Company $newCompany = NULL) {
		if ($newCompany == NULL) { // workaround for fluid bug ##5636
			$newCompany = t3lib_div::makeInstance('Tx_AbCustomercare_Domain_Model_Company');
		}
		$this->view->assign('newCompany', $newCompany);
	}

	/**
	 * Creates a new Company and forwards to the list action.
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Company $newCompany a fresh Company object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_AbCustomercare_Domain_Model_Company $newCompany) {
		$this->companyRepository->add($newCompany);
		$this->flashMessageContainer->add('Your new Company was created.');
		if(!empty($_FILES)){
			$this->flashMessageContainer->add('File upload is not yet supported by the Persistence Manager. You have to implement it yourself.');
		}
		$this->redirect('list');
	}

	/**
	 * Displays a form for editing an existing Company
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Company $company the Company to display
	 * @return string A form to edit a Company
	 */
	public function editAction(Tx_AbCustomercare_Domain_Model_Company $company) {
		$this->view->assign('company', $company);
	}

	/**
	 * Updates an existing Company and forwards to the list action afterwards.
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Company $company the Company to display
	 * @return
	 */
	public function updateAction(Tx_AbCustomercare_Domain_Model_Company $company) {
		$this->companyRepository->update($company);
		$this->flashMessageContainer->add('Your Company was updated.');
		$this->redirect('list');
	}

	/**
	 * Deletes an existing Company
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Company $company the Company to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_AbCustomercare_Domain_Model_Company $company) {
		$this->companyRepository->remove($company);
		$this->flashMessageContainer->add('Your Company was removed.');
		$this->redirect('list');
	}

}
?>