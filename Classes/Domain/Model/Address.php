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
 * Address
 */
class Tx_AbCustomercare_Domain_Model_Address extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * street
	 *
	 * @var string $street
	 */
	protected $street;

	/**
	 * number
	 *
	 * @var string $number
	 */
	protected $number;

	/**
	 * zip
	 *
	 * @var string $zip
	 */
	protected $zip;

	/**
	 * city
	 *
	 * @var string $city
	 */
	protected $city;

	/**
	 * Sets the street
	 *
	 * @param string $street
	 * @return void
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * Returns the street
	 *
	 * @return string
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * Sets the number
	 *
	 * @param string $number
	 * @return void
	 */
	public function setNumber($number) {
		$this->number = $number;
	}

	/**
	 * Returns the number
	 *
	 * @return string
	 */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * Sets the zip
	 *
	 * @param string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Returns the zip
	 *
	 * @return string
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Returns the city
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
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