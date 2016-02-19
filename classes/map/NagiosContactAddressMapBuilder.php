<?php


/**
 * This class adds structure of 'nagios_contact_address' table to 'lilac' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    .map
 */
class NagiosContactAddressMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosContactAddressMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(NagiosContactAddressPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosContactAddressPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosContactAddress');
		$tMap->setClassname('NagiosContactAddress');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('CONTACT', 'Contact', 'INTEGER', 'nagios_contact', 'ID', true, null);

		$tMap->addColumn('ADDRESS', 'Address', 'VARCHAR', true, 255);

	} // doBuild()

} // NagiosContactAddressMapBuilder
