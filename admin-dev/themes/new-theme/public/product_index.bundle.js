(()=>{"use strict";var e={r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t);
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
const o={categoriesContainer:"#product_description_categories",categoriesModalTemplate:"#categories-modal-template",modalContentContainer:"#categories-modal-content",categoriesModalId:"categories-modal",applyCategoriesBtn:".js-apply-categories-btn",cancelCategoriesBtn:".js-cancel-categories-btn",categoryTree:".js-category-tree-list",treeElement:".category-tree-element",treeElementInputs:".category-tree-inputs",treeCheckboxInput:".tree-checkbox-input",checkboxInput:"[type=checkbox]",checkedCheckboxInputs:"[type=checkbox]:checked",checkboxName:e=>`product[description][categories][product_categories][${e}][is_associated]`,inputByValue:e=>`input[value="${e}"]`,defaultCategorySelectInput:"#product_description_categories_default_category_id",materialCheckbox:".md-checkbox",radioInput:"[type=radio]",defaultRadioInput:"[type=radio]:checked",radioName:e=>`product[description][categories][product_categories][${e}][is_default]`,tagsContainer:".pstaggerTagsWrapper",tagRemoveBtn:".pstaggerClosingCross",tagCategoryIdInput:".category-id-input",tagItem:".tag-item",categoryNamePreview:".category-name-preview",namePreviewInput:".category-name-preview-input",categoryNameInput:".category-name-input",searchInput:"#ps-select-product-category",fieldset:".tree-fieldset",loader:".categories-tree-loader",childrenList:".children-list",addCategoriesBtn:".add-categories-btn",categoryFilter:{container:".product_list_category_filter",categoryRadio:".category-label input:radio",filterForm:"#product_filter_form",positionInput:'input[name="product[position]"]',expandedClass:"less",collapsedClass:"more",categoryChildren:".category-children",categoryLabel:".category-label",categoryLabelClass:"category-label",categoryNode:".category-node",expandAll:".category_tree_filter_expand",collapseAll:".category_tree_filter_collapse",resetFilter:".category_tree_filter_reset"}},{$:n}=window,i=o.categoryFilter;class s{constructor(){this.$categoryTree=n(i.container),this.$filterForm=this.$categoryTree.parent("form"),this.init()}init(){this.$categoryTree.on("click",i.categoryLabel,(e=>{e.target instanceof HTMLInputElement?this.$filterForm.submit():e.target.classList.contains(i.categoryLabelClass)&&this.toggleCategory(n(e.currentTarget).parent(i.categoryNode))})),this.$categoryTree.on("click",i.expandAll,(()=>{this.expandAll()})),this.$categoryTree.on("click",i.collapseAll,(()=>{this.collapseAll()})),n(i.resetFilter).on("click",(()=>{this.resetFilter()})),this.collapseAll()}toggleCategory(e){const t=e.find(i.categoryChildren).first();if(!t.length)return;const o=e.hasClass(i.expandedClass);t.toggleClass("d-none",o),e.toggleClass(i.expandedClass,!o),e.toggleClass(i.collapsedClass,o)}resetFilter(){this.$categoryTree.find(i.categoryRadio).prop("checked",!1),this.$filterForm.submit()}expandAll(){this.$categoryTree.find(i.categoryChildren).removeClass("d-none"),this.$categoryTree.find(i.categoryChildren).parent(i.categoryNode).removeClass(i.collapsedClass).addClass(i.expandedClass)}collapseAll(){this.$categoryTree.find(i.categoryChildren).addClass("d-none"),this.$categoryTree.find(i.categoryChildren).parent(i.categoryNode).removeClass(i.expandedClass).addClass(i.collapsedClass)}}
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
 */const a={categoryDeleteAction:".js-delete-category-row-action",customerDeleteAction:".js-delete-customer-row-action",linkRowAction:".js-link-row-action",linkRowActionClickableFirst:".js-link-row-action[data-clickable-row=1]:first",clickableTd:"td.clickable"},{$:r}=window;class c{extend(e){this.initRowLinks(e),this.initConfirmableActions(e)}initConfirmableActions(e){e.getContainer().on("click",a.linkRowAction,(e=>{const t=r(e.currentTarget).data("confirm-message");t.length&&!window.confirm(t)&&e.preventDefault()}))}initRowLinks(e){r("tr",e.getContainer()).each((function(){const e=r(this);r(a.linkRowActionClickableFirst,e).each((function(){const t=r(this),o=t.closest("td"),n=r(a.clickableTd,e).not(o);let i=!1;n.addClass("cursor-pointer").mousedown((()=>{r(window).mousemove((()=>{i=!0,r(window).unbind("mousemove")}))})),n.mouseup((()=>{const e=i;if(i=!1,r(window).unbind("mousemove"),!e){const e=t.data("confirm-message");(!e.length||window.confirm(e)&&t.attr("href"))&&(document.location.href=t.attr("href"))}}))}))}))}}
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
const{$:l}=window;l((()=>{const e=new window.prestashop.component.Grid("product");e.addExtension(new window.prestashop.component.GridExtensions.ExportToSqlManagerExtension),e.addExtension(new window.prestashop.component.GridExtensions.ReloadListExtension),e.addExtension(new window.prestashop.component.GridExtensions.SortingExtension),e.addExtension(new window.prestashop.component.GridExtensions.FiltersResetExtension),e.addExtension(new window.prestashop.component.GridExtensions.SubmitRowActionExtension),e.addExtension(new window.prestashop.component.GridExtensions.SubmitBulkActionExtension),e.addExtension(new window.prestashop.component.GridExtensions.AjaxBulkActionExtension),e.addExtension(new window.prestashop.component.GridExtensions.BulkActionCheckboxExtension),e.addExtension(new window.prestashop.component.GridExtensions.FiltersSubmitButtonEnablerExtension),e.addExtension(new window.prestashop.component.GridExtensions.AsyncToggleColumnExtension),e.addExtension(new c),e.addExtension(new window.prestashop.component.GridExtensions.PositionExtension(e)),new s})),window.product_index=t})();