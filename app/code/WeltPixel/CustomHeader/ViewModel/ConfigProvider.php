<?php
namespace WeltPixel\CustomHeader\ViewModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Search\Helper\Data as SearchHelper;

/**
 * Class ConfigProvider
 * @package WeltPixel\CustomHeader\ViewModel
 */
class ConfigProvider implements ArgumentInterface
{
    /**
     * Suggestions settings config paths
     */
    private const SEARCH_SUGGESTION_ENABLED = 'catalog/search/search_suggestion_enabled';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var SearchHelper
     */
    private $searchHelper;


    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param SearchHelper $searchHelper
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        SearchHelper $searchHelper
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->searchHelper = $searchHelper;
    }


    /**
     * Retrieve search helper instance for template view
     *
     * @return SearchHelper
     */
    public function getSearchHelperData(): SearchHelper
    {
        return $this->searchHelper;
    }

    /**
     * @return bool
     */
    public function isSuggestionsAllowed()
    {
        return $this->scopeConfig->isSetFlag(
            self::SEARCH_SUGGESTION_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }
}
