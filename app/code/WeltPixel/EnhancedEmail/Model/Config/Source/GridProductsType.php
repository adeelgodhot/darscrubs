<?php
namespace WeltPixel\EnhancedEmail\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class GridProductsType
 * @package WeltPixel\EnhancedEmail\Model\Config\Source
 */
class GridProductsType implements ArrayInterface
{
    const TYPE_RELATED = 'related';
    const TYPE_UPSELL = 'upsell';
    const TYPE_CROSSELL = 'crossell';

    /**
     * @var array
     */
    protected $_productTypes = [
        self::TYPE_RELATED => 'Related Products',
        self::TYPE_UPSELL =>  'UpSell Products',
        self::TYPE_CROSSELL =>  'Cross-sell Products'
    ];

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach ($this->_productTypes as $id => $productType) :
            $options[] = [
                'value' => $id,
                'label' => $productType
            ];
        endforeach;
        return $options;
    }
}
