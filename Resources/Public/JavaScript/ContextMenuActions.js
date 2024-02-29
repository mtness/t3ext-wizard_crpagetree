/**
 * Module: TYPO3/CMS/WizardCrpagetree/ContextMenuActions
 *
 * JavaScript to handle wizard create pagetree actions from context menu
 * @exports TYPO3/CMS/WizardCrpagetree/ContextMenuActions
 */

define(["require", "exports", "jquery"], (function (e, t, $) {
	"use strict";
	return new class {
		pagesNewTree(e, t) {
      const moduleUrl = $(this).data('page-new-tree-url');
      const n = "pages" === e ? t : $(this).data("page-uid");
      const retUrl = encodeURIComponent(top.list_frame.document.location.pathname + top.list_frame.document.location.search);
      top.TYPO3.Backend.ContentContainer.setUrl(
        moduleUrl + '&returnUrl=' + retUrl + "&id=" + n,
      );
    }
	}
}));
