<?php
declare(strict_types=1);

namespace MichielRoos\WizardCrpagetree\Hook;

use TYPO3\CMS\Backend\Controller\BackendController;
use TYPO3\CMS\Backend\Routing\Exception\RouteNotFoundException;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * This class adds WizardCrpagetree related JavaScript to the backend
 */
class BackendControllerHook
{
    /**
     * Adds WizardCrpagetree-specific JavaScript
     *
     * @param array $configuration
     * @param BackendController $backendController
     * @throws RouteNotFoundException
     * @noinspection PhpUnusedParameterInspection
     */
    public function addJavaScript(array $configuration, BackendController $backendController)
    {
        /** @var UriBuilder $uriBuilder */
        $uriBuilder = GeneralUtility::makeInstance(UriBuilder::class);
        $url = (string)$uriBuilder->buildUriFromRoute('pagetree_new');
        GeneralUtility::makeInstance(PageRenderer::class)
            ->addInlineSetting('WizardCrpagetree', 'wizardCrpagetreeUrl', $url);
    }
}
