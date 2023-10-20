function clearMessageQueryParam() {
    if (window.location.search.indexOf('message=') !== -1) {
        const newURL = window.location.origin + window.location.pathname;
        history.replaceState(null, '', newURL);
        document.getElementById("alert-box").style.display = "none";
    }
}