<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class InvItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->ITEMID,
            'brCode' => $this->BR_CODE,
            'upc' => $this->UPC,
            'desc1' => $this->ITEMDESC1,
            'desc2' => $this->ITEMDESC2,
            'alternateLookUp' => $this->AlternateLookup,
            'trDate' => Carbon::parse($this->TR_DATE)->format('Y-m-d'),
            'itemType' => $this->ItemType,
            'itemStatus' => $this->ItemStatus,
            'depId' => $this->DepID,
            'catId' => $this->CatID,
            'vendorId' => $this->VendorID,
            'vendorId2' => $this->VendorID2,
            'attribute' => $this->Attribute,
            'binLocation' => $this->BinLocation,
            'isTaxable1' => $this->IsTaxable1,
            'isTaxable2' => $this->IsTaxable2,
            'avgCost' => $this->AvgCost,
            'orderCost' => $this->OrderCost,
            'orderCost2' => $this->OrderCost2,
            'orderQty' => $this->OrderQty,
            'retailPrice' => $this->RetailPrice,
            'wholeSalePrice' => $this->WholeSalePrice,
            'grossMargin' => $this->GrossMargin,
            'reOrderQty' => $this->ReorderQty,
            'taxId' => $this->TaxID,
            'isConsignment' => $this->IsConsignment,
            'remarks' => $this->Remarks,
            'tagging' => $this->TAGGING,
            'productId' => $this->PRODUCTID,
            'variants' => $this->Variants,
            'itemSize' => $this->ItemSize,
            'itemUnitId' => $this->ItemUnitID,
            'brandId' => $this->BrandID,
            'commonNameId' => $this->CommonNameID,
            'itemClassesId' => $this->ItemClassID,
            'itemSubClassId' => $this->ItemSubClassID,
            'price3' => $this->Price3,
            'price4' => $this->Price4,
            // 'orderLevel' => $this->orderlevel,
            'vat' => $this->VAT,
            'isVatAdded' => $this->IsVATADDED,
            // // 'brandId' => $this->BRANDID,
            // 'brandDesc1' => $this->BRANDDESC1,
            // 'brandDesc2' => $this->BRANDDESC2,
            // // 'commonNameId' => $this->COMMONNAMEID,
            // 'commonNameDesc1' => $this->COMMONNAMEDESC1,
            // 'commonNameDesc2' => $this->COMMONNAMEDESC2,
            // // 'itemUnitID' => $this->ITEMUNITID,
            // 'itemUnitDesc1' => $this->ITEMUNITDESC1,
            // 'itemUnitDesc2' => $this->ITEMUNITDESC2,
            // // 'invVendorID' => $this->VENDORID,
            // 'invVendorCompanyName' => $this->CompanyName,
            // // 'invItemClassID' => $this->ITEMCLASSID,
            // 'invItemClassDesc1' => $this->ITEMCLASSDESC1,
            // 'invItemClassDesc2' => $this->ITEMCLASSDESC2,
            // // 'invItemSubClassID' => $this->ITEMSUBCLASSID,
            // 'invItemSubClassDesc1' => $this->ITEMSUBCLASSDESC1,
            // 'invItemSubClassDesc2' => $this->ITEMSUBCLASSDESC2,
            // // '' => $this->ITEMSTATUSID,
            // 'invItemStatusDesc1' => $this->ITEMSTATUSDESC1,
            // 'invItemStatusDesc2' => $this->ITEMSTATUSDESC2,
            // // '' => $this->ITEMTYPEID,
            // 'invItemTypeDesc1' => $this->ITEMTYPEDESC1,
            // 'invItemTypeDesc2' => $this->ITEMTYPEDESC2,
            // '' => $this->,
            // '' => $this->,
            // '' => $this->,
            // '' => $this->,
        ];
    }
}
