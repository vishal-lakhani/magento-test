<?php
class Vishal_Skureports_Block_Adminhtml_Report_Grid_Column_Renderer_Currentinventory
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

	public function render(Varien_Object $row)
    {
        $value          = $this->_getValue($row);

        $products=Mage::getModel('catalog/product')->loadByAttribute('sku',$value);
		$stock = Mage::getModel('cataloginventory/stock_item')->loadByProduct($products);
		return $stock->getQty();        
    }


}


?>