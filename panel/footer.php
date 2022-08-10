
<script src="../../code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="../../cdn.jsdelivr.net/npm/popper.js%401.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="../../cdn.jsdelivr.net/npm/bootstrap%404.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="js/ckeditor.js"></script>

<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
    function activeFunc() {
        var path = window.location.pathname;
        var page = path.split("../index.html").pop();
        console.log(page);
        $('.nav-bar ul li a').removeClass('active');
        if (page === "index-2.html") {
            $('#Home').addClass("active");
        } else if (page === "Shop.html") {
            $('#Shop').addClass("active");
        } else if (page === "About.html") {
            $('#About').addClass("active");
        }
    }
</script>

<script>
    // Active js 
    const CurrentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-bar ul li a');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === CurrentLocation) {
            menuItem[i].className = "slactive";
        }
    }

    var myChart = new Chart("myChart", {
        type: "scatter",
        data: {},
        options: {}
    });



    // Mobile Nav
    $('document').ready(function() {
     
        activeFunc();

        $('header .canvas-icon i').click(function() {
            $("header .mobile-header").addClass('show');
        });

        $('header .mobile-header .cancel').click(function() {
            $("header .mobile-header").removeClass('show');
        });
    });
    // Mobile Nav
    $('.edit-customer-form').hide();
    $('.add-labels').click(function() {
        $('.customer-wrapper').hide();
        $('.edit-customer-form').show();
    })
    $('.edit-customer-form button.btn-send').click(function() {
        $('.edit-customer-form').show();
    })
    $(window).on('load', function() {
        $("#preloader").fadeOut(1000);
    });

    // text Editor
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error)
        });
    // text Editor

    // Seller Add Product Js First
    updateList = function() {
        var input = document.getElementById('attachments');
        var output = document.getElementById('fileList');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name +
                '<span class="remove-list" onclick="return this.parentNode.remove()">X</span>' + '</li>'
        }
        output.innerHTML = children;
    }
    // Seller Add Product Js First

    // Seller Add Product Js Second
    updateListtwo = function() {
        var inputtwo = document.getElementById('attachments-two');
        var outputtwo = document.getElementById('fileList-two');
        var childrentwo = "";
        for (var i = 0; i < inputtwo.files.length; ++i) {
            childrentwo += '<li>' + inputtwo.files.item(i).name +
                '<span class="remove-list" onclick="return this.parentNode.remove()">X</span>' + '</li>'
        }
        outputtwo.innerHTML = childrentwo;
    }
    // Seller Add Product Js Second

    // product add and sub 
    $(document).ready(function() {
        $('.minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function() {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });

    // Copy Promo Code Js
    function copyToClipboard(element) {
        var $temp = $("#copy");
        $temp.val($("#copy").val()).select();
        document.execCommand("copy");
        // $temp.remove();
        $("#copyText").text("Copied");
    }
    // Copy Promo Code Js

    //Banner Slider 
    $('.brands').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 10,
        slidesToScroll: 6,
        arrows: true,
        autoplay: true,
        adaptiveHeight: true,

        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,
                    dots: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });
    //Banner Slider

    // WoW js 
    // new WOW().init();
    // WoW js 


    // Carsosel section 
    $('#myCarousel').carousel({
            interval: 3000,
        })
        // Carsosel section 


        // Range slider 
        //slider javascript
        /*! rangeslider.js - v2.0.2 | (c) 2015 @andreruffert | MIT license | https://github.com/andreruffert/rangeslider.js */
        ! function(a) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require(
                "jquery") : jQuery)
        }(function(a) {
            "use strict";

            function b() {
                var a = document.createElement("input");
                return a.setAttribute("type", "range"), "text" !== a.type
            }

            function c(a, b) {
                var c = Array.prototype.slice.call(arguments, 2);
                return setTimeout(function() {
                    return a.apply(null, c)
                }, b)
            }

            function d(a, b) {
                return b = b || 100,
                    function() {
                        if (!a.debouncing) {
                            var c = Array.prototype.slice.apply(arguments);
                            a.lastReturnVal = a.apply(window, c), a.debouncing = !0
                        }
                        return clearTimeout(a.debounceTimeout), a.debounceTimeout = setTimeout(function() {
                            a.debouncing = !1
                        }, b), a.lastReturnVal
                    }
            }

            function e(a) {
                return a && (0 === a.offsetWidth || 0 === a.offsetHeight || a.open === !1)
            }

            function f(a) {
                for (var b = [], c = a.parentNode; e(c);) b.push(c), c = c.parentNode;
                return b
            }

            function g(a, b) {
                function c(a) {
                    "undefined" != typeof a.open && (a.open = a.open ? !1 : !0)
                }
                var d = f(a),
                    e = d.length,
                    g = [],
                    h = a[b];
                if (e) {
                    for (var i = 0; e > i; i++) g[i] = d[i].style.cssText, d[i].style.display = "block", d[i].style
                        .height = "0", d[i].style.overflow = "hidden", d[i].style.visibility = "hidden", c(d[i]);
                    h = a[b];
                    for (var j = 0; e > j; j++) d[j].style.cssText = g[j], c(d[j])
                }
                return h
            }

            function h(a, b) {
                var c = parseFloat(a);
                return Number.isNaN(c) ? b : c
            }

            function i(a) {
                return a.charAt(0).toUpperCase() + a.substr(1)
            }

            function j(b, e) {
                if (this.$window = a(window), this.$document = a(document), this.$element = a(b), this.options = a
                    .extend({}, n, e), this.polyfill = this.options.polyfill, this.orientation = this.$element[0]
                    .getAttribute("data-orientation") || this.options.orientation, this.onInit = this.options.onInit,
                    this.onSlide = this.options.onSlide, this.onSlideEnd = this.options.onSlideEnd, this.DIMENSION = o
                    .orientation[this.orientation].dimension, this.DIRECTION = o.orientation[this.orientation]
                    .direction, this.DIRECTION_STYLE = o.orientation[this.orientation].directionStyle, this.COORDINATE =
                    o.orientation[this.orientation].coordinate, this.polyfill && m) return !1;
                this.identifier = "js-" + k + "-" + l++, this.startEvent = this.options.startEvent.join("." + this
                        .identifier + " ") + "." + this.identifier, this.moveEvent = this.options.moveEvent.join("." +
                        this.identifier + " ") + "." + this.identifier, this.endEvent = this.options.endEvent.join("." +
                        this.identifier + " ") + "." + this.identifier, this.toFixed = (this.step + "").replace(".", "")
                    .length - 1, this.$fill = a('<div class="' + this.options.fillClass + '" />'), this.$handle = a(
                        '<div class="' + this.options.handleClass + '" />'), this.$range = a('<div class="' + this
                        .options.rangeClass + " " + this.options[this.orientation + "Class"] + '" id="' + this
                        .identifier + '" />').insertAfter(this.$element).prepend(this.$fill, this.$handle), this
                    .$element.css({
                        position: "absolute",
                        width: "1px",
                        height: "1px",
                        overflow: "hidden",
                        opacity: "0"
                    }), this.handleDown = a.proxy(this.handleDown, this), this.handleMove = a.proxy(this.handleMove,
                        this), this.handleEnd = a.proxy(this.handleEnd, this), this.init();
                var f = this;
                this.$window.on("resize." + this.identifier, d(function() {
                    c(function() {
                        f.update()
                    }, 300)
                }, 20)), this.$document.on(this.startEvent, "#" + this.identifier + ":not(." + this.options
                    .disabledClass + ")", this.handleDown), this.$element.on("change." + this.identifier, function(
                    a, b) {
                    if (!b || b.origin !== f.identifier) {
                        var c = a.target.value,
                            d = f.getPositionFromValue(c);
                        f.setPosition(d)
                    }
                })
            }
            Number.isNaN = Number.isNaN || function(a) {
                return "number" == typeof a && a !== a
            };
            var k = "rangeslider",
                l = 0,
                m = b(),
                n = {
                    polyfill: !0,
                    orientation: "horizontal",
                    rangeClass: "rangeslider",
                    disabledClass: "rangeslider--disabled",
                    horizontalClass: "rangeslider--horizontal",
                    verticalClass: "rangeslider--vertical",
                    fillClass: "rangeslider__fill",
                    handleClass: "rangeslider__handle",
                    startEvent: ["mousedown", "touchstart", "pointerdown"],
                    moveEvent: ["mousemove", "touchmove", "pointermove"],
                    endEvent: ["mouseup", "touchend", "pointerup"]
                },
                o = {
                    orientation: {
                        horizontal: {
                            dimension: "width",
                            direction: "left",
                            directionStyle: "left",
                            coordinate: "x"
                        },
                        vertical: {
                            dimension: "height",
                            direction: "top",
                            directionStyle: "bottom",
                            coordinate: "y"
                        }
                    }
                };
            j.prototype.init = function() {
                this.update(!0, !1), this.$element[0].value = this.value, this.onInit && "function" == typeof this
                    .onInit && this.onInit()
            }, j.prototype.update = function(a, b) {
                a = a || !1, a && (this.min = h(this.$element[0].getAttribute("min"), 0), this.max = h(this
                        .$element[0].getAttribute("max"), 100), this.value = h(this.$element[0].value, this
                        .min + (this.max - this.min) / 2), this.step = h(this.$element[0].getAttribute("step"),
                        1)), this.handleDimension = g(this.$handle[0], "offset" + i(this.DIMENSION)), this
                    .rangeDimension = g(this.$range[0], "offset" + i(this.DIMENSION)), this.maxHandlePos = this
                    .rangeDimension - this.handleDimension, this.grabPos = this.handleDimension / 2, this.position =
                    this.getPositionFromValue(this.value), this.$element[0].disabled ? this.$range.addClass(this
                        .options.disabledClass) : this.$range.removeClass(this.options.disabledClass), this
                    .setPosition(this.position, b)
            }, j.prototype.handleDown = function(a) {
                if (a.preventDefault(), this.$document.on(this.moveEvent, this.handleMove), this.$document.on(this
                        .endEvent, this.handleEnd), !((" " + a.target.className + " ").replace(/[\n\t]/g, " ")
                        .indexOf(this.options.handleClass) > -1)) {
                    var b = this.getRelativePosition(a),
                        c = this.$range[0].getBoundingClientRect()[this.DIRECTION],
                        d = this.getPositionFromNode(this.$handle[0]) - c,
                        e = "vertical" === this.orientation ? this.maxHandlePos - (b - this.grabPos) : b - this
                        .grabPos;
                    this.setPosition(e), b >= d && b < d + this.handleDimension && (this.grabPos = b - d)
                }
            }, j.prototype.handleMove = function(a) {
                a.preventDefault();
                var b = this.getRelativePosition(a),
                    c = "vertical" === this.orientation ? this.maxHandlePos - (b - this.grabPos) : b - this.grabPos;
                this.setPosition(c)
            }, j.prototype.handleEnd = function(a) {
                a.preventDefault(), this.$document.off(this.moveEvent, this.handleMove), this.$document.off(this
                    .endEvent, this.handleEnd), this.$element.trigger("change", {
                    origin: this.identifier
                }), this.onSlideEnd && "function" == typeof this.onSlideEnd && this.onSlideEnd(this.position,
                    this.value)
            }, j.prototype.cap = function(a, b, c) {
                return b > a ? b : a > c ? c : a
            }, j.prototype.setPosition = function(a, b) {
                var c, d;
                void 0 === b && (b = !0), c = this.getValueFromPosition(this.cap(a, 0, this.maxHandlePos)), d = this
                    .getPositionFromValue(c), this.$fill[0].style[this.DIMENSION] = d + this.grabPos + "px", this
                    .$handle[0].style[this.DIRECTION_STYLE] = d + "px", this.setValue(c), this.position = d, this
                    .value = c, b && this.onSlide && "function" == typeof this.onSlide && this.onSlide(d, c)
            }, j.prototype.getPositionFromNode = function(a) {
                for (var b = 0; null !== a;) b += a.offsetLeft, a = a.offsetParent;
                return b
            }, j.prototype.getRelativePosition = function(a) {
                var b = i(this.COORDINATE),
                    c = this.$range[0].getBoundingClientRect()[this.DIRECTION],
                    d = 0;
                return "undefined" != typeof a["page" + b] ? d = a["client" + b] : "undefined" != typeof a
                    .originalEvent["client" + b] ? d = a.originalEvent["client" + b] : a.originalEvent.touches && a
                    .originalEvent.touches[0] && "undefined" != typeof a.originalEvent.touches[0]["client" + b] ?
                    d = a.originalEvent.touches[0]["client" + b] : a.currentPoint && "undefined" != typeof a
                    .currentPoint[this.COORDINATE] && (d = a.currentPoint[this.COORDINATE]), d - c
            }, j.prototype.getPositionFromValue = function(a) {
                var b, c;
                return b = (a - this.min) / (this.max - this.min), c = Number.isNaN(b) ? 0 : b * this.maxHandlePos
            }, j.prototype.getValueFromPosition = function(a) {
                var b, c;
                return b = a / (this.maxHandlePos || 1), c = this.step * Math.round(b * (this.max - this.min) / this
                    .step) + this.min, Number(c.toFixed(this.toFixed))
            }, j.prototype.setValue = function(a) {
                a !== this.value && this.$element.val(a).trigger("input", {
                    origin: this.identifier
                })
            }, j.prototype.destroy = function() {
                this.$document.off("." + this.identifier), this.$window.off("." + this.identifier), this.$element
                    .off("." + this.identifier).removeAttr("style").removeData("plugin_" + k), this.$range && this
                    .$range.length && this.$range[0].parentNode.removeChild(this.$range[0])
            }, a.fn[k] = function(b) {
                var c = Array.prototype.slice.call(arguments, 1);
                return this.each(function() {
                    var d = a(this),
                        e = d.data("plugin_" + k);
                    e || d.data("plugin_" + k, e = new j(this, b)), "string" == typeof b && e[b].apply(e, c)
                })
            }
        });

    //custom slider javascript
    $(function() {
        var output = document.querySelectorAll('output')[0];

        $(document).on('input', 'input[type="range"]', function(e) {
            output.innerHTML = e.currentTarget.value;
        });

        $('input[type=range]').rangeslider({
            polyfill: false
        });
    });

    //when slider changes, hide start message
    $("input").on("change", function() {
        $("small").fadeOut("slow");
    })
    // End of range slider
    // product add and sub 
    $(document).ready(function() {
        $('.minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function() {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });

    // Tabs

    // $("#forget").click(function(){
    //     $("#exampleModalCenter").hide(),
    //     $("#open-forget").show();
    //   });
    $("#forget").click(function() {
        $('#exampleModalCenter').modal('hide');
    });

    $("#signup-modal").click(function() {
        $('#exampleModalCenter').modal('hide');
    });

    $("#signin-modal").click(function() {
        $('#exampleModalCenters').modal('hide');
    });

    $("#confirm").click(function() {
        $('.bd-example-modal-sm').modal('hide');
    });
    $("#signup-modal").click(function() {
        $('.bd-example-modal-sm').modal('hide');
    });
    $("#signin-modal").click(function() {
        $('.bd-example-modal-sm').modal('hide');
    });

    $("#login").click(function() {
        $('.bd-example-modal-sm').modal('hide');
    });

    $("#submit").click(function() {
        $('#exampleModals').modal('hide');
    });
    //  Tabs 

    // Mobile Nav
    $('document').ready(function() {
        $('#header .canvas-icon i').click(function() {
            $("#header .mobile-header").addClass('show');
        });

        $('#header .mobile-header .cancel').click(function() {
            $("#header .mobile-header").removeClass('show');
        });
    });
    // Mobile Nav


    // Button js  

    $('.button').first().addClass('active');

    $('.button').click(function() {
        var $this = $(this);
        $siblings = $this.parent().children(),
            position = $siblings.index($this);
        console.log(position);

        $('.content div').removeClass('active').eq(position).addClass('active');

        $siblings.removeClass('active');
        $this.addClass('active');
    });

    $('#myDropdown').on('show.bs.dropdown', function () {
        
    });
    // Button js 
</script>