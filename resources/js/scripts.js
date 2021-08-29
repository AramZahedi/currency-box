window.events = new Vue();

window.showLoading = function () {
    window.events.$emit('show-loading');
};

window.hideLoading = function () {
    window.events.$emit('hide-loading');
};

window.refresh = function (timeout = null) {
    if (timeout) {
        return setTimeout(function () {
            window.location.href = window.location.href.split('#')[0];
        }, timeout);
    }

    window.location.href = window.location.href.split('#')[0];
};

window.reload = function () {
    history.pushState(window.location.href.split('#')[0], '',
        window.location.href.split('#')[0]);

    location.reload();
};

window.redirect = function (url, timeout = null) {
    if (timeout) {
        return setTimeout(function () {
            window.location.href = url;
        }, timeout);
    }

    window.location.href = url;
};

/**
 * Generate a unique id string
 *
 * @return {*}
 */
window.uniqueId = function () {
    return md5((Math.random().toString(36)) + Date.now() + Math.random());
};
