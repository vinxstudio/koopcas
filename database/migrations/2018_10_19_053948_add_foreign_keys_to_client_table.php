<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('client', function(Blueprint $table)
		{
			$table->foreign('AccountStatus', 'FK_AcctStatus')->references('AcctStatID')->on('acctstat')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('AccountType', 'FK_AcctType')->references('AccTypeID')->on('accttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BusLevel', 'FK_BusLevel')->references('BusLevelID')->on('buslevel')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CivilStatus', 'FK_CivilStatus')->references('CivilStatID')->on('civilstat')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ClientDEPT', 'FK_ClientDEPT')->references('DeptID')->on('dept')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ClientType', 'FK_ClientType')->references('ClientTypeID')->on('clienttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CISAPSIC_CODE', 'FK_Client_PSICODE')->references('PSIC_Code')->on('cisa_psiccode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CISAPSOC_CODE', 'FK_Client_PSOCODE')->references('PSOC_Code')->on('cisa_psoccode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Religion', 'FK_Client_Religion')->references('ReligionID')->on('religion')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ClosedReason', 'FK_ClosedReason')->references('ClosedReasonID')->on('closedreason')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Collector', 'FK_Collector')->references('CollChartID')->on('collchart')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('EmpCode', 'FK_EMPCODE')->references('EmpCodeID')->on('empcode')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('EducAttained', 'FK_EducAttained')->references('EducAttainedID')->on('educattained')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('EncdBy', 'FK_EncdBy')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Gender', 'FK_Gender')->references('GenderID')->on('gender')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ClientIDBrCode', 'FK_Geo')->references('GeoBR_CODE')->on('geo')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('JointType', 'FK_JointType')->references('JntTypeID')->on('jnttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('MailingAddress', 'FK_MailingAddress')->references('MailingAddressID')->on('mailingaddress')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Occupational', 'FK_Occu')->references('OccuID')->on('occu')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ProvType', 'FK_ProvType')->references('ResTypeID')->on('restype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Rating', 'FK_Rating')->references('RatingID')->on('rating')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ResType', 'FK_ResType')->references('ResTypeID')->on('restype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('Sectoral', 'FK_Sector')->references('SectorID')->on('sector')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SpBusLevel', 'FK_SpBusLevel')->references('BusLevelID')->on('buslevel')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SpBusStatus', 'FK_SpBusStatus')->references('BusStatusID')->on('busstatus')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SpGender', 'FK_SpGender')->references('GenderID')->on('gender')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SpOccupational', 'FK_SpOccu')->references('OccuID')->on('occu')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('UpdUser', 'FK_UpdUser')->references('AccessID')->on('access')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('BusStatus', 'FK_cisaOccuStat')->references('occustatID')->on('cisa_occupationstat')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CISA_ContactType', 'FK_cisacontactType')->references('contactTypeCode')->on('cisa_contacttype')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('AlertLevel', 'FK_client_ALERTLEVEL')->references('AlertLevelID')->on('alertlevel')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('DOSRITag', 'FK_client_DOSRITag')->references('ID')->on('dosritag')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ClientIDBrCode', 'FK_client_RECRUITERID')->references('ClientIDBrCode')->on('client')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('RestrikID', 'FK_client_RESTRIKID')->references('RestrikID')->on('restrik')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SchoolID', 'FK_client_SchoolID')->references('SchoolID')->on('school')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('SectionID', 'FK_client_SectionID')->references('SectionID')->on('section')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('ClientIDBrCode', 'client_BRCODE')->references('BranchesID')->on('branches')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('CISAclientTitle', 'fk_cltitleCode')->references('cltitleCode')->on('cisa_clienttitle')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('client', function(Blueprint $table)
		{
			$table->dropForeign('FK_AcctStatus');
			$table->dropForeign('FK_AcctType');
			$table->dropForeign('FK_BusLevel');
			$table->dropForeign('FK_CivilStatus');
			$table->dropForeign('FK_ClientDEPT');
			$table->dropForeign('FK_ClientType');
			$table->dropForeign('FK_Client_PSICODE');
			$table->dropForeign('FK_Client_PSOCODE');
			$table->dropForeign('FK_Client_Religion');
			$table->dropForeign('FK_ClosedReason');
			$table->dropForeign('FK_Collector');
			$table->dropForeign('FK_EMPCODE');
			$table->dropForeign('FK_EducAttained');
			$table->dropForeign('FK_EncdBy');
			$table->dropForeign('FK_Gender');
			$table->dropForeign('FK_Geo');
			$table->dropForeign('FK_JointType');
			$table->dropForeign('FK_MailingAddress');
			$table->dropForeign('FK_Occu');
			$table->dropForeign('FK_ProvType');
			$table->dropForeign('FK_Rating');
			$table->dropForeign('FK_ResType');
			$table->dropForeign('FK_Sector');
			$table->dropForeign('FK_SpBusLevel');
			$table->dropForeign('FK_SpBusStatus');
			$table->dropForeign('FK_SpGender');
			$table->dropForeign('FK_SpOccu');
			$table->dropForeign('FK_UpdUser');
			$table->dropForeign('FK_cisaOccuStat');
			$table->dropForeign('FK_cisacontactType');
			$table->dropForeign('FK_client_ALERTLEVEL');
			$table->dropForeign('FK_client_DOSRITag');
			$table->dropForeign('FK_client_RECRUITERID');
			$table->dropForeign('FK_client_RESTRIKID');
			$table->dropForeign('FK_client_SchoolID');
			$table->dropForeign('FK_client_SectionID');
			$table->dropForeign('client_BRCODE');
			$table->dropForeign('fk_cltitleCode');
		});
	}

}
