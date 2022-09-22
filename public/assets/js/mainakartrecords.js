/* Please ❤ this if you like it! */

(function ($) {
    "use strict";

    //Page cursors

    document
        .getElementsByTagName("body")[0]
        .addEventListener("mousemove", function (n) {
            (t.style.left = n.clientX + "px"),
                (t.style.top = n.clientY + "px"),
                (e.style.left = n.clientX + "px"),
                (e.style.top = n.clientY + "px"),
                (i.style.left = n.clientX + "px"),
                (i.style.top = n.clientY + "px");
        });
    var t = document.getElementById("cursor"),
        e = document.getElementById("cursor2"),
        i = document.getElementById("cursor3");
    function n(t) {
        e.classList.add("hover"), i.classList.add("hover");
    }
    function s(t) {
        e.classList.remove("hover"), i.classList.remove("hover");
    }
    s();
    for (
        var r = document.querySelectorAll(".hover-target"), a = r.length - 1;
        a >= 0;
        a--
    ) {
        o(r[a]);
    }
    function o(t) {
        t.addEventListener("mouseover", n), t.addEventListener("mouseout", s);
    }

    //Navigation

    var app = (function () {
        var body = undefined;
        var menu = undefined;
        var menuItems = undefined;
        var init = function init() {
            body = document.querySelector("body");
            menu = document.querySelector(".menu-icon");
            menuItems = document.querySelectorAll(".nav__list-item");
            applyListeners();
        };
        var applyListeners = function applyListeners() {
            menu.addEventListener("click", function () {
                return toggleClass(body, "nav-active");
            });
        };
        var toggleClass = function toggleClass(element, stringClass) {
            if (element.classList.contains(stringClass))
                element.classList.remove(stringClass);
            else element.classList.add(stringClass);
        };
        init();
    })();

    //Switch light/dark

    $("#switch").on("click", function () {
        if ($("body").hasClass("light")) {
            $("body").removeClass("light");
            $("#switch").removeClass("switched");
        } else {
            $("body").addClass("light");
            $("#switch").addClass("switched");
        }
    });
    var num = 15;

    var modalBtn = document.querySelector(".open");
    var closeBtn = document.querySelector(".close2");

    var modalContainer = document.querySelector(".modals");
    var holdModals = document.createDocumentFragment();

    for (var i = 0; i < num; i++) {
        var div = document.createElement("div");
        div.classList.add("modal-drop");
        div.style.top = Math.floor(Math.random() * 100) + "vh";
        div.style.left = Math.floor(Math.random() * 100) + "vw";
        div.style.transitionDelay = Math.random() + "s";
        holdModals.appendChild(div);
    }
    console.log();
    modalContainer.appendChild(holdModals);

    modalBtn.addEventListener("click", function () {
        modalContainer.style.display = "block";
        window.setTimeout(function () {
            modalContainer.classList.add("active");
        }, 0.1);
    });

    closeBtn.addEventListener("click", function () {
        modalContainer.classList.remove("active");

        window.setTimeout(function () {
            modalContainer.style.display = "none";
        }, 3000);
    });
})(jQuery);
