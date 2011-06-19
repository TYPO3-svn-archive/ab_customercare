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
 * Company
 */
class Tx_AbCustomercare_Domain_Model_Company extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string $name
	 * @validate NotEmpty
	 */
	protected $name;

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
	 * isActive
	 *
	 * @var boolean $isActive
	 */
	protected $isActive = FALSE;

	/**
	 * address
	 *
	 * @var Tx_AbCustomercare_Domain_Model_Address $address
	 */
	protected $address;

	/**
	 * takeAction
	 *
	 * @var Tx_AbCustomercare_Domain_Model_Action $takeAction
	 */
	protected $takeAction;

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
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
	 * Returns the telephone
	 *
	 * @return string
	 */
	public function getTelephone() {
		return $this->telephone;
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

	/**
	 * Returns the email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the isActive
	 *
	 * @param boolean $isActive
	 * @return void
	 */
	public function setIsActive($isActive) {
		$this->isActive = $isActive;
	}

	/**
	 * Returns the isActive
	 *
	 * @return boolean
	 */
	public function getIsActive() {
		return $this->isActive;
	}

	/**
	 * Returns the boolean state of isActive
	 *
	 * @return boolean
	 */
	public function isIsActive() {
		return $this->getIsActive();
	}

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

}
?>