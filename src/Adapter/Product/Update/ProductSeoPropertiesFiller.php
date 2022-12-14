<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

use PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository;
use PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository;
use PrestaShop\PrestaShop\Adapter\Product\Update\Filler\SeoFiller;
use PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryNotFoundException;
use PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId;
use PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;
use PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectOption;
use PrestaShop\PrestaShop\Core\Exception\CoreException;
use Product;

/**
 * @deprecated should be removed when unified UpdateProductCommand is fully done
 * @see SeoFiller instead
 *
 * Fills Product object model SEO information fields according to domain specifics
 */
class ProductSeoPropertiesFiller
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @param ProductRepository $productRepository
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param Product $product
     * @param RedirectOption $redirectOption
     *
     * @return string[] updatable properties
     *
     * @throws CategoryNotFoundException
     * @throws CoreException
     */
    public function fillWithRedirectOption(Product $product, RedirectOption $redirectOption): array
    {
        $redirectType = $redirectOption->getRedirectType();
        $redirectTarget = $redirectOption->getRedirectTarget();

        if ($redirectType->isProductType()) {
            $this->productRepository->assertProductExists(new ProductId($redirectTarget->getValue()));
        } elseif ($redirectType->isCategoryType() && !$redirectTarget->isNoTarget()) {
            $this->categoryRepository->assertCategoryExists(new CategoryId($redirectTarget->getValue()));
        }

        $product->redirect_type = $redirectType->getValue();
        $product->id_type_redirected = $redirectTarget->getValue();

        return [
            'redirect_type',
            'id_type_redirected',
        ];
    }
}
