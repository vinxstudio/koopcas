<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvItem;
use App\Http\Resources\InvItemResource;
use DB;

class InvItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($upc)
    {
        $invitems = InvItem::getAllInvItemSearch($upc);
        return InvItemResource::collection($invitems);
    }

    public function store(Request $request)
    {
        $items = new InvItem;
        
        $id = InvItem::getUpcLastId();
        foreach($id as $row) {
            $invUpc = $row->UPC + 1;
            $invId = $row->ITEMID + 1;
        }

        $items->ITEMID = $invId;
        $items->BR_CODE = 18;
        $items->UPC = $invUpc;
        $items->ITEMDESC1 = $request->input('desc1');
        $items->ITEMDESC2 = $request->input('desc2');
        $items->AlternateLookup = $request->input('alternateLookUp');
        $items->TR_DATE = $request->input('trDate');
        $items->ItemType = $request->input('itemType');
        $items->ItemStatus = $request->input('itemStatus');
        $items->DepID = $request->input('depId');
        $items->CatID = $request->input('catId');
        $items->VendorID = $request->input('vendorId');
        $items->VendorID2 = $request->input('vendorId2');
        $items->Attribute = $request->input('attribute');
        $items->BinLocation = $request->input('binLocation');
        $items->IsTaxable1 = $request->input('isTaxable1');
        $items->IsTaxable2 = $request->input('isTaxable2');
        $items->AvgCost = $request->input('avgCost');
        $items->OrderCost = $request->input('orderCost');
        $items->OrderCost2 = $request->input('orderCost2');
        $items->OrderQty = $request->input('orderQty');
        $items->RetailPrice = $request->input('retailPrice');
        $items->WholeSalePrice = $request->input('wholeSalePrice');
        $items->GrossMargin = $request->input('grossMargin');
        $items->ReorderQty = $request->input('reOrderQty');
        $items->TaxID = $request->input('taxId');
        $items->IsConsignment = $request->input('isConsignment');
        $items->Remarks = $request->input('remarks');
        $items->TAGGING = $request->input('tagging');
        $items->PRODUCTID = $request->input('productId');
        $items->Variants = $request->input('variants');
        $items->ItemSize = $request->input('itemSize');
        $items->ItemUnitID = $request->input('itemUnitId');
        $items->BrandID = $request->input('brandId');
        $items->CommonNameID = $request->input('commonNameId');
        $items->ItemClassID = $request->input('itemClassesId');
        $items->ItemSubClassID = $request->input('itemSubClassId');
        $items->Price3 = $request->input('price3');
        $items->Price4 = $request->input('price4');
        // $items->orderlevel = $request->input('orderLevel');
        $items->VAT = $request->input('vat');
        $items->IsVATADDED = $request->input('isVatAdded');
       
        InvItem::insertItems( $items->ITEMID, $items->BR_CODE,$items->UPC, $items->ITEMDESC1, $items->ITEMDESC2, $items->AlternateLookup, 
        $items->TR_DATE, $items->ItemType, $items->ItemStatus, $items->DepID, $items->CatID, $items->VendorID, $items->VendorID2, 
        $items->Attribute, $items->BinLocation, $items->IsTaxable1, $items->IsTaxable2, $items->AvgCost, $items->OrderCost, 
        $items->OrderCost2, $items->OrderQty, $items->RetailPrice, $items->WholeSalePrice, $items->GrossMargin, $items->ReorderQty, 
        $items->TaxID, $items->IsConsignment, $items->Remarks, $items->TAGGING, $items->PRODUCTID, $items->Variants, $items->ItemSize, 
        $items->ItemUnitID, $items->BrandID, $items->CommonNameID, $items->ItemClassID, $items->ItemSubClassID, $items->Price3, 
        $items->Price4, $items->VAT, $items->IsVATADDED);
    }

    
    public function show($itemId)
    {
        $items = InvItem::getAllInvItem($itemId);
        return InvItemResource::collection($items);
    }
    

}
    