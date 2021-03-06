<?php

namespace WeltPixel\ProductPage\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class TextType
 * @package WeltPixel\ProductPage\Model\Config\Source
 */
class TextType implements ArrayInterface
{

    /**
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'none',
                'label' => 'None',
            ],
            [
                'value' => 'capitalize',
                'label' => 'Capitalize',
            ],
            [
                'value' => 'uppercase',
                'label' => 'Uppercase',
            ],
            [
                'value' => 'lowercase',
                'label' => 'Lowercase',
            ],
            [
                'value' => 'initial',
                'label' => 'Initial',
            ],
            [
                'value' => 'inherit',
                'label' => 'Inherit',
            ]
        ];
    }
}
