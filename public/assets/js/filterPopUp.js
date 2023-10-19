$(document).ready(function () {
    const $filterPopup = $('#filterPopup');
    const $openFilterButton = $('#openFilterPopup');
    const $filterCancelButton = $('#closeFilterPopupButton')

    let filter_active = false;

    $openFilterButton.on('click', function () {
        $filterPopup.removeClass('hidden');
        filter_active = true;
    });
    $filterCancelButton.on('click', function () {
        $filterPopup.addClass('hidden');
        filter_active = true;
    });

    const $applyFilterButton = $('#applyFilter');

    $applyFilterButton.on('click', function () {
        $filterPopup.addClass('hidden');
    });
});
