// Update the height of the #home section on small devices

(function () {
    function adjustHomeSize() {
        if (window.innerHeight - 50 < 866)
            $("#home").css("height", window.innerHeight - 50);
    }
    // Call this immediately so that the start screen does not flicker
    adjustHomeSize();

    // The height should not be updated on iOS devices
    // because this causes unnecessary height adjustments
    // when the URL bar of the browser fades out
    if (/iPad|iPhone|iPod/.test(navigator.platform))
        return;

    // Adjust the height on any resize
    $(window).on("load resize", adjustHomeSize);
})();
