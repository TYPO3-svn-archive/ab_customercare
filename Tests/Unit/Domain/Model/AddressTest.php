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
 * Test case for class Tx_AbCustomercare_Domain_Model_Address.
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
class Tx_AbCustomercare_Domain_Model_AddressTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_AbCustomercare_Domain_Model_Address
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_AbCustomercare_Domain_Model_Address();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getStreetReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStreetForStringSetsStreet() { 
		$this->fixture->setStreet('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStreet()
		);
	}
	
	/**
	 * @test
	 */
	public function getNumberReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNumberForStringSetsNumber() { 
		$this->fixture->setNumber('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getNumber()
		);
	}
	
	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setZipForStringSetsZip() { 
		$this->fixture->setZip('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getZip()
		);
	}
	
	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() { 
		$this->fixture->setCity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCity()
		);
	}
	
}
?>