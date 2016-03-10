/**
 * @file
 *
 * JS for content analysis.
 */

(function ($) {
  /*
   * Implements hook_contentanalysis_data().
   * Gets the data from the custom fields to attach to the AJAX post data.
   */
  var contentanalysisexample_contentanalysis_data = function () {
    data = new Array();
    data['name'] = document.getElementById('edit-contentanalysisexample-name').value;
    return data;
  }
})(jQuery);
