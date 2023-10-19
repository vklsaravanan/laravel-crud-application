$(document).ready(function () {
    const $record_selector_btn = $("#select_show_btn");
    const $recordSelectors = $('.record_selector');
    const $bulkDeleteBtn = $('#bulkDeleteBtn');
    const $selectRecordCount = $(".selected-record-count");

    $('input[name="record_selector"]').on('click', function () {

        if ($('input[name="record_selector"]:checked').length > 0) {
            $bulkDeleteBtn.removeClass("hidden");
            $selectRecordCount.removeClass("hidden");
        } else {
            $bulkDeleteBtn.addClass("hidden");
            $selectRecordCount.addClass("hidden");
            $('input[name="record_selector"]').prop('checked', false);
        }
        $selectRecordCount.text($('input[name="record_selector"]:checked').length);

    });

    $record_selector_btn.on("click", function () {
        $recordSelectors.toggleClass("hidden");
        $record_selector_btn.toggleClass("dark:bg-gray-500");
        if ($recordSelectors.hasClass('hidden')) {
            console.log("classs");
            $('input[name="record_selector"]').prop('checked', false);
            $selectRecordCount.addClass("hidden");
            $bulkDeleteBtn.addClass("hidden");
        }
    })
});
