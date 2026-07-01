/**
 * Pair settings: reveal each block's options only when the block is enabled.
 * Progressive enhancement; without JS every field stays visible and usable.
 */
(function () {
    "use strict";

    function syncPanel(toggle) {
        var key = toggle.getAttribute("data-pair-toggle");
        var panel = document.querySelector('[data-pair-panel="' + key + '"]');
        if (panel) {
            panel.hidden = !toggle.checked;
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        var toggles = document.querySelectorAll("[data-pair-toggle]");
        toggles.forEach(function (toggle) {
            syncPanel(toggle);
            toggle.addEventListener("change", function () {
                syncPanel(toggle);
            });
        });
    });
})();
