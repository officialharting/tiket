jQuery(document).ready(function() {
    $(function() {
        $('#defaultCountdown').countdown({ until: new Date(2023, 7, 9, 22), timeZone: 'Asia/Jakarta' }); // year, month-1bulan, date, hour
    });
});