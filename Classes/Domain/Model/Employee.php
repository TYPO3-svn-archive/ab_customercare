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
 * Employee
 */
class Tx_AbCustomercare_Domain_Model_Employee extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * lastName
	 *
	 * @var string $lastName
	 */
	protected $lastName;

	/**
	 * firstName
	 *
	 * @var string $firstName
	 */
	protected $firstName;

	/**
	 * telephone
	 *
	 * @var string $telephone
	 */
	protected $telephone;

	/**
	 * email
	 *
	 * @var string $email
	 */
	protected $email;

	/**
	 * address
	 *
	 * @var Tx_AbCustomercare_Domain_Model_Address $address
	 */
	protected $address;

	/**
	 * isEmployeed
	 *
	 * @var Tx_AbCustomercare_Domain_Model_Company $isEmployeed
	 */
	protected $isEmployeed;

	/**
	 * takeAction
	 *
	 * @var Tx_AbCustomercare_Domain_Model_Action $takeAction
	 */
	protected $takeAction;

	/**
	 * Sets the address
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Address $address
	 * @return void
	 */
	public function setAddress(Tx_AbCustomercare_Domain_Model_Address $address) {
		$this->address = $address;
	}

	/**
	 * Returns the address
	 *
	 * @return Tx_AbCustomercare_Domain_Model_Address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the isEmployeed
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Company $isEmployeed
	 * @return void
	 */
	public function setIsEmployeed(Tx_AbCustomercare_Domain_Model_Company $isEmployeed) {
		$this->isEmployeed = $isEmployeed;
	}

	/**
	 * Returns the isEmployeed
	 *
	 * @return Tx_AbCustomercare_Domain_Model_Company
	 */
	public function getIsEmployeed() {
		return $this->isEmployeed;
	}

	/**
	 * Sets the takeAction
	 *
	 * @param Tx_AbCustomercare_Domain_Model_Action $takeAction
	 * @return void
	 */
	public function setTakeAction(Tx_AbCustomercare_Domain_Model_Action $takeAction) {
		$this->takeAction = $takeAction;
	}

	/**
	 * Returns the takeAction
	 *
	 * @return Tx_AbCustomercare_Domain_Model_Action
	 */
	public function getTakeAction() {
		return $this->takeAction;
	}

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Returns the lastName
	 *
	 * @return string $lastName
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the lastName
	 *
	 * @param string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Returns the firstName
	 *
	 * @return string $firstName
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Sets the firstName
	 *
	 * @param string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Returns the telephone
	 *
	 * @return string $telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Sets the telephone
	 *
	 * @param string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

}
?>