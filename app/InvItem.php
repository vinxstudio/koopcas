<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvItem extends Model
{
    
    
    public static function getAllInvItem($itemId){
        return DB::table('inv_item as i')
            ->join('inv_brand as ib', function($join){
                $join->on('i.BrandID', '=', 'ib.BRANDID');
                    })
            ->join('inv_commonname as ic', function($join){
                $join->on('i.CommonNameID', '=', 'ic.COMMONNAMEID');
                    })
            ->join('inv_itemunit as iiu', function($join){
                 $join->on('i.ItemUnitID', '=', 'iiu.ITEMUNITID');
                    })
            ->join('inv_vendor as iv', function($join){
                $join->on('i.VendorID', '=', 'iv.VENDORID');
                    }) 
            ->join('inv_itemclass as iic', function($join){
                $join->on('i.ItemClassID', '=', 'iic.ITEMCLASSID');
                    })
            ->join('inv_itemsubclass as iisc', function($join){
                $join->on('i.ItemSubClassID', '=', 'iisc.ITEMSUBCLASSID');
                    })  
            ->join('inv_itemstatus as iis', function($join){
                 $join->on('i.itemStatus', '=', 'iis.ITEMSTATUSID');
                    })  
            ->join('inv_itemtype as iit', function($join){
                    $join->on('i.itemType', '=', 'iit.ITEMTYPEID');
                    })    
                ->where('i.UPC', '=', $itemId)
                ->get();
    } 
    
   public static function getAllInvItemSearch($upc){
        return DB::table('inv_item as i')
        ->join('inv_brand as ib', function($join){
            $join->on('i.BrandID', '=', 'ib.BRANDID');
                })
        ->join('inv_commonname as ic', function($join){
            $join->on('i.CommonNameID', '=', 'ic.COMMONNAMEID');
                })
        ->join('inv_itemunit as iiu', function($join){
             $join->on('i.ItemUnitID', '=', 'iiu.ITEMUNITID');
                })
        ->join('inv_vendor as iv', function($join){
            $join->on('i.VendorID', '=', 'iv.VENDORID');
                }) 
        ->join('inv_itemclass as iic', function($join){
            $join->on('i.ItemClassID', '=', 'iic.ITEMCLASSID');
                })
        ->join('inv_itemsubclass as iisc', function($join){
            $join->on('i.ItemSubClassID', '=', 'iisc.ITEMSUBCLASSID');
                })  
        ->join('inv_itemstatus as iis', function($join){
             $join->on('i.itemStatus', '=', 'iis.ITEMSTATUSID');
                })  
        ->join('inv_itemtype as iit', function($join){
                $join->on('i.itemType', '=', 'iit.ITEMTYPEID');
                })   
            ->where('i.UPC', '=', $upc)
            ->get();
    }

    public static function insertItems($id,$brCode,$upc,$desc1,$desc2,$alternateLookUp,$trDate,
    $itemType,$itemStatus,$depId,$catId,$vendorId,$vendorId2,$attribute,$binLocation,
    $isTaxable1,$isTaxable2,$avgCost,$orderCost,$orderCost2,$orderQty,$retailPrice,
    $wholeSalePrice,$grossMargin,$reOrderQty,$taxId,$isConsignment,
    $remarks,$tagging,$productId,$variants,$itemSize,$itemUnitId,$brandId,
    $commonNameId,$itemClassId,$itemSubClassId,$price3,$price4,$vat,$isVatAdded)
    {
        return DB::table('inv_item')->insert(
            [
            'ITEMID' => $id,
            'BR_CODE' => $brCode,
            'upc' => $upc,
            'ITEMDESC1' => $desc1,
            'ITEMDESC2' => $desc2,
            'AlternateLookup' => $alternateLookUp,
            'TR_DATE' => $trDate,
            'ItemType' => $itemType,
            'ItemStatus' => $itemStatus,
            'DepID' => $depId,
            'CatID' => $catId,
            'VendorID' => $vendorId,
            'VendorID2' => $vendorId2,
            'Attribute' => $attribute,
            'BinLocation' => $binLocation,
            'IsTaxable1' => $isTaxable1,
            'IsTaxable2' => $isTaxable2,
            'AvgCost' => $avgCost,
            'OrderCost' => $orderCost,
            'OrderCost2' => $orderCost2,
            'OrderQty' => $orderQty,
            'RetailPrice' => $retailPrice,
            'WholeSalePrice' => $wholeSalePrice,
            'GrossMargin' => $grossMargin,
            'ReorderQty' => $reOrderQty,
            'TaxID' => $taxId,
            'IsConsignment' => $isConsignment,
            'Remarks' => $remarks,
            'TAGGING' => $tagging,
            'PRODUCTID' => $productId,
            'Variants' => $variants,
            'ItemSize' => $itemSize,
            'ItemUnitID' => $itemUnitId,
            'BrandID' => $brandId,
            'CommonNameID' => $commonNameId,
            'ItemClassID' => $itemClassId,
            'ItemSubClassID' => $itemSubClassId,
            'Price3' => $price3,
            'Price4' => $price4,
            // 'orderlevel' => $orderLevel,
            'VAT' => $vat,
            'IsVATADDED' => $isVatAdded,
            ]
         );
    }
 

    public static function getUpcLastId()
    {
        return DB::table('inv_item')
                    ->select('UPC','ITEMID')
                    ->orderBy('UPC','ITEMID', 'desc')
                    ->limit(1)
                    ->get();
    }
}
