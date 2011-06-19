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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_AbCustomercare_Domain_Model_Employee.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Customer Care
 *
 * @author Anja Leichsenring <aleichsenring@ab-softlab.de>
 */
class Tx_AbCustomercare_Domain_Model_EmployeeTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_AbCustomercare_Domain_Model_Employee
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_AbCustomercare_Domain_Model_Employee();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() { 
		$this->fixture->setLastName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastName()
		);
	}
	
	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() { 
		$this->fixture->setFirstName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstName()
		);
	}
	
	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone() { 
		$this->fixture->setTelephone('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTelephone()
		);
	}
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForTx_AbCustomercare_Domain_Model_Address() { }

	/**
	 * @test
	 */
	public function setAddressForTx_AbCustomercare_Domain_Model_AddressSetsAddress() { }
	
	/**
	 * @test
	 */
	public function getIsEmployeedReturnsInitialValueForTx_AbCustomercare_Domain_Model_Company() { }

	/**
	 * @test
	 */
	public function setIsEmployeedForTx_AbCustomercare_Domain_Model_CompanySetsIsEmployeed() { }
	
	/**
	 * @test
	 */
	public function getTakeActionReturnsInitialValueForTx_AbCustomercare_Domain_Model_Action() { }

	/**
	 * @test
	 */
	public function setTakeActionForTx_AbCustomercare_Domain_Model_ActionSetsTakeAction() { }
	
}
?>