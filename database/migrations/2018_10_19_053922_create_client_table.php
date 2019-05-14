<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client', function(Blueprint $table)
		{
			$table->smallInteger('ClientIDBrCode')->unsigned();
			$table->integer('ClientID')->unsigned();
			$table->boolean('ClientIDChkDgt');
			$table->string('OldClientID', 20)->nullable()->index('Index_OldClientID');
			$table->string('OldPSBN', 10)->nullable();
			$table->string('FName', 50)->nullable();
			$table->string('LName', 50)->nullable();
			$table->string('MName', 30)->nullable();
			$table->string('SName', 5)->nullable();
			$table->string('AccountName', 100)->nullable();
			$table->integer('Collector')->unsigned()->nullable()->index('FK_Collector');
			$table->dateTime('DateOpened')->nullable();
			$table->boolean('AccountType')->nullable()->index('FK_AcctType');
			$table->boolean('ClientType')->nullable()->index('FK_ClientType');
			$table->boolean('AccountStatus')->nullable()->index('FK_AcctStatus');
			$table->boolean('AlertLevel')->nullable()->index('FK_client_ALERTLEVEL');
			$table->boolean('JointType')->nullable()->index('FK_JointType');
			$table->string('OldClientName', 30)->nullable();
			$table->date('DateOfBirth')->nullable();
			$table->boolean('Gender')->nullable()->index('FK_Gender');
			$table->boolean('CivilStatus')->nullable()->index('FK_CivilStatus');
			$table->boolean('EducAttained')->nullable()->index('FK_EducAttained');
			$table->string('TINNum', 20)->nullable();
			$table->string('CTCNumber', 45)->nullable();
			$table->string('SSSGSISNum', 20)->nullable();
			$table->string('PhilHealthNum', 20)->nullable();
			$table->string('PagibigNum', 20)->nullable();
			$table->string('ATMBank', 30)->nullable();
			$table->string('ATMNum', 20)->nullable();
			$table->string('SchoolLastAttended', 30)->nullable();
			$table->string('Profession', 20)->nullable();
			$table->boolean('Sectoral')->nullable()->index('FK_Sector');
			$table->smallInteger('Occupational')->unsigned()->nullable()->index('FK_Occu');
			$table->smallInteger('Geographical')->unsigned()->nullable();
			$table->text('Remarks', 65535)->nullable();
			$table->string('ResTelNum', 30)->nullable();
			$table->string('ProvTelNum', 30)->nullable();
			$table->string('CellNum', 30)->nullable();
			$table->string('EmpBusTelNum', 40)->nullable();
			$table->string('OtherContactNum', 30)->nullable();
			$table->string('SpCellNum', 30)->nullable();
			$table->string('EmailAddress')->nullable();
			$table->boolean('MailingAddress')->nullable()->index('FK_MailingAddress');
			$table->string('ResAddStreet', 62)->nullable();
			$table->string('ResAddBarangay', 20)->nullable();
			$table->string('ResAddCity', 20)->nullable();
			$table->string('ResAddProvince', 20)->nullable();
			$table->string('ResAddZipCode', 4)->nullable();
			$table->date('ResSince')->nullable();
			$table->boolean('ResType')->nullable()->index('FK_ResType');
			$table->string('ProvAddStreet', 40)->nullable();
			$table->string('ProvAddBarangay', 20)->nullable();
			$table->string('ProvAddCity', 20)->nullable();
			$table->string('ProvAddProvince', 20)->nullable();
			$table->string('ProvAddZipCode', 4)->nullable();
			$table->date('ProvSince')->nullable();
			$table->boolean('ProvType')->nullable()->index('FK_ProvType');
			$table->string('BusAddStreet', 62)->nullable();
			$table->string('BusAddBarangay', 20)->nullable();
			$table->string('BusAddCity', 20)->nullable();
			$table->string('BusAddProvince', 20)->nullable();
			$table->string('BusAddZipCode', 4)->nullable();
			$table->string('SpBusAddStreet', 40)->nullable();
			$table->string('SpBusAddBarangay', 20)->nullable();
			$table->string('SpBusAddCity', 20)->nullable();
			$table->string('SpBusAddProvince', 20)->nullable();
			$table->string('SpBusAddZipCode', 4)->nullable();
			$table->string('BusName', 60)->nullable();
			$table->string('BusNature', 20)->nullable();
			$table->smallInteger('BusSince')->unsigned()->nullable();
			$table->smallInteger('BusNumEmployees')->unsigned()->nullable();
			$table->string('BusJobTitle', 30)->nullable();
			$table->boolean('BusStatus')->nullable()->index('FK_BusStatus');
			$table->date('BusDateHired')->nullable();
			$table->boolean('BusLevel')->nullable()->index('FK_BusLevel');
			$table->string('BusOtherSourceOfIncome', 30)->nullable();
			$table->integer('BusProfessionCode')->unsigned()->nullable();
			$table->string('BusProfession', 45)->nullable();
			$table->integer('BusOccupationCode')->unsigned()->nullable();
			$table->string('BusOccupation', 45)->nullable();
			$table->string('SpFName', 20)->nullable();
			$table->string('SpMName', 20)->nullable();
			$table->string('SpLName', 20)->nullable();
			$table->string('SpSName', 5)->nullable();
			$table->boolean('SpGender')->nullable()->index('FK_SpGender');
			$table->date('SpDateofBirth')->nullable();
			$table->smallInteger('SpOccupational')->unsigned()->nullable()->index('FK_SpOccu');
			$table->string('SpBusName', 60)->nullable();
			$table->string('SpBusJobTitle', 30)->nullable();
			$table->boolean('SpBusStatus')->nullable()->index('FK_SpBusStatus');
			$table->smallInteger('SpBusSince')->unsigned()->nullable();
			$table->date('SpBusDateHired')->nullable();
			$table->boolean('SpBusLevel')->nullable()->index('FK_SpBusLevel');
			$table->string('SpBusNature', 20)->nullable();
			$table->smallInteger('SpBusNumEmployees')->unsigned()->nullable();
			$table->string('SpOtherSourceOfIncome', 200)->nullable();
			$table->dateTime('ClosedDate')->nullable();
			$table->boolean('ClosedReason')->nullable()->index('FK_ClosedReason');
			$table->dateTime('DateTransferred')->nullable();
			$table->smallInteger('ClosedDestBranch')->unsigned()->nullable()->index('FK_ClosedDestBranch');
			$table->smallInteger('OriginBranch')->unsigned()->nullable()->index('FK_OriginBranch');
			$table->smallInteger('UpdUser')->unsigned()->nullable()->index('FK_UpdUser');
			$table->dateTime('UpdDateTime')->nullable();
			$table->string('DriverLicenseNum', 20)->nullable();
			$table->date('DateDeceased')->nullable();
			$table->smallInteger('EncdBy')->unsigned()->nullable()->index('FK_EncdBy');
			$table->dateTime('EncdDateTime')->nullable();
			$table->boolean('Rating')->nullable()->index('FK_Rating');
			$table->string('BusEmpID', 20)->nullable();
			$table->boolean('SSPExcluded')->nullable()->default(0);
			$table->boolean('DOSRITag')->nullable()->index('FK_client_DOSRITag');
			$table->string('DOSRIRelatedTo', 200)->nullable();
			$table->string('SpEducAttained', 100)->nullable();
			$table->string('SpDegreeCourse', 100)->nullable();
			$table->string('SpOccupation', 100)->nullable();
			$table->string('SpMonthlyIncome', 100)->nullable();
			$table->string('Height', 20)->nullable();
			$table->string('Weight', 20)->nullable();
			$table->decimal('SCPledge', 15)->nullable();
			$table->decimal('SDPledge', 15)->nullable();
			$table->boolean('IsShowTotalPoints')->nullable()->default(1);
			$table->integer('RecruiterID')->unsigned()->nullable();
			$table->string('GSISNum', 20)->nullable();
			$table->string('NSONum', 45)->nullable();
			$table->string('VotersID', 45)->nullable();
			$table->string('PMESBatchNum', 10)->nullable();
			$table->string('OtherIDNum', 100)->nullable();
			$table->date('PMESDate')->nullable();
			$table->integer('EmpCode')->unsigned()->nullable()->index('FK_EMPCODE');
			$table->string('BusinessIncome', 100)->nullable();
			$table->decimal('MealAllowance', 15)->nullable();
			$table->boolean('ClientDEPT')->nullable()->index('FK_ClientDEPT');
			$table->string('SMSNumber', 20)->nullable();
			$table->smallInteger('SchoolID')->unsigned()->nullable()->index('FK_client_SchoolID');
			$table->smallInteger('SectionID')->unsigned()->nullable()->index('FK_client_SectionID');
			$table->boolean('RestrikID')->nullable()->index('FK_client_RESTRIKID');
			$table->boolean('Religion')->nullable()->index('FK_Client_Religion');
			$table->boolean('CISAclientTitle')->nullable()->index('fk_cltitleCode');
			$table->string('CISAmothersFname', 100)->nullable();
			$table->string('CISAmothersLname', 100)->nullable();
			$table->string('CISAmothersMname', 100)->nullable();
			$table->string('CISAfathersFname', 100)->nullable();
			$table->string('CISAfathersLname', 100)->nullable();
			$table->string('CISAfathersNameExtnt', 100)->nullable();
			$table->string('CISAfathersMname', 100)->nullable();
			$table->integer('CISAPSOC_CODE')->unsigned()->nullable()->index('FK_Client_PSOCODE');
			$table->integer('CISAPSIC_CODE')->unsigned()->nullable()->index('FK_Client_PSICODE');
			$table->boolean('CISA_ContactType')->nullable()->index('FK_cisacontactType');
			$table->string('CISA_ContactNum', 30)->nullable();
			$table->string('CISA_BirthPlace', 100)->nullable();
			$table->boolean('isCISAUpdated')->nullable()->default(0);
			$table->string('ResAddStrNo', 50)->nullable();
			$table->string('ProvAddStrNo', 50)->nullable();
			$table->string('BusAddStrNo', 50)->nullable();
			$table->string('SpouseStrNo', 50)->nullable();
			$table->smallInteger('Geo_SubgroupID')->nullable()->default(99);
			$table->primary(['ClientIDBrCode','ClientID']);
			$table->index(['ClientIDBrCode','Geographical'], 'FK_Geo');
			$table->index(['LName','FName','MName','SName'], 'NAME');
			$table->index(['ClientIDBrCode','RecruiterID'], 'FK_client_RECRUITERID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client');
	}

}
