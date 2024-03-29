<!doctype html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="en-IN">

<head>
    <meta content="/images/branding/googleg/1x/googleg_standard_color_128dp.png" itemprop="image">
    <link href="/images/branding/product/ico/googleg_lodp.ico" rel="shortcut icon">
    <meta content="origin" id="mref" name="referrer">
    <title>Google</title>
    <script>
        (function() {
            window.google = {
                kEI: 'ecrXVtj7D4edugTB6IHYDg',
                kEXPI: '18168,1350083,3700324,3700388,4029370,4029815,4031109,4032677,4033307,4036509,4036527,4038012,4038214,4038394,4039268,4041776,4042784,4042788,4043041,4043492,4045096,4045293,4045841,4046043,4046304,4046397,4046835,4046837,4046904,4047454,4047593,4048347,4048980,4049063,4049501,4049549,4049553,4050281,4050750,4051241,4051596,4052304,4052751,4054284,4054551,4055554,4056038,4056126,4056484,4056682,4057170,4057586,4057835,4057948,4058117,4058298,4058316,4058337,4058384,4058903,4058908,4058940,4059318,4059767,4059861,4060008,4060330,4060827,4060886,4061019,4061089,4061302,4061564,4061772,4061887,4061935,4062067,8300272,8300310,8502094,8502986,8503011,8503132,8503209,8503303,8503306,8503367,8503404,8503584,8503808,8503814,10200084,10200096,10201706,16200024',
                authuser: 0,
                j: {
                    en: 1,
                    bv: 24,
                    pm: 'p',
                    u: 'e45622ec',
                    qbp: 0
                },
                kscs: 'e45622ec_24'
            };
            google.kHL = 'en-IN';
        })();
        (function() {
            google.lc = [];
            google.li = 0;
            google.getEI = function(a) {
                for (var b; a && (!a.getAttribute || !(b = a.getAttribute("eid")));) a = a.parentNode;
                return b || google.kEI
            };
            google.getLEI = function(a) {
                for (var b = null; a && (!a.getAttribute || !(b = a.getAttribute("leid")));) a = a.parentNode;
                return b
            };
            google.https = function() {
                return "https:" == window.location.protocol
            };
            google.ml = function() {
                return null
            };
            google.wl = function(a, b) {
                try {
                    google.ml(Error(a), !1, b)
                } catch (d) {}
            };
            google.time = function() {
                return (new Date).getTime()
            };
            google.log = function(a, b, d, e, g) {
                a = google.logUrl(a, b, d, e, g);
                if ("" != a) {
                    b = new Image;
                    var c = google.lc,
                        f = google.li;
                    c[f] = b;
                    b.onerror = b.onload = b.onabort = function() {
                        delete c[f]
                    };
                    window.google && window.google.vel && window.google.vel.lu && window.google.vel.lu(a);
                    b.src = a;
                    google.li = f + 1
                }
            };
            google.logUrl = function(a, b, d, e, g) {
                var c = "",
                    f = google.ls || "";
                if (!d && -1 == b.search("&ei=")) {
                    var h = google.getEI(e),
                        c = "&ei=" + h; - 1 == b.search("&lei=") && ((e = google.getLEI(e)) ? c += "&lei=" + e : h != google.kEI && (c += "&lei=" + google.kEI))
                }
                a = d || "/" + (g || "gen_204") + "?atyp=i&ct=" + a + "&cad=" + b + c + f + "&zx=" + google.time();
                /^http:/i.test(a) && google.https() && (google.ml(Error("a"), !1, {
                    src: a,
                    glmm: 1
                }), a = "");
                return a
            };
            google.y = {};
            google.x = function(a, b) {
                google.y[a.id] = [a, b];
                return !1
            };
            google.load = function(a, b, d) {
                google.x({
                    id: a + k++
                }, function() {
                    google.load(a, b, d)
                })
            };
            var k = 0;
        })();
        google.j.b = (!!location.hash && !!location.hash.match('[#&]((q|fp)=|tbs=rimg|tbs=simg|tbs=sbi)')) || (google.j.qbp == 1);
        (function() {
            google.c = {
                c: {
                    a: true,
                    d: false,
                    i: false,
                    m: true,
                    n: false,
                    oei: false
                }
            };
            google.sn = 'webhp';
            (function() {
                function f(a, b, c) {
                    g.push({
                        o: a,
                        v: b,
                        w: c
                    });
                    a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent && a.attachEvent("on" + b, c)
                }

                function e(a, b, c) {
                    a.addEventListener ? a.removeEventListener(b, c, !1) : a.attachEvent && a.detachEvent("on" + b, c)
                }
                var g = [];
                google.timers = {};
                google.startTick = function(a, b) {
                    var c = b && google.timers[b].t ? google.timers[b].t.start : google.time();
                    google.timers[a] = {
                        t: {
                            start: c
                        },
                        e: {},
                        it: {},
                        m: {}
                    };
                    (c = window.performance) && c.now && (google.timers[a].wsrt = Math.floor(c.now()))
                };
                google.tick =
                    function(a, b, c) {
                        google.timers[a] || google.startTick(a);
                        c = c || google.time();
                        b instanceof Array || (b = [b]);
                        for (var d = 0; d < b.length; ++d) google.timers[a].t[b[d]] = c
                    };
                google.c.e = function(a, b, c) {
                    google.timers[a].e[b] = c
                };
                google.bit = function(a, b) {
                    google.timers[a] || google.startTick(a);
                    var c = google.timers[a].it[b];
                    c || (c = google.timers[a].it[b] = []);
                    var d = c.push({
                        s: google.time()
                    }) - 1;
                    return function() {
                        c[d] && (c[d].e = google.time())
                    }
                };
                google.c.b = function(a) {
                    var b = google.timers.load.m;
                    b[a] && google.wl("ch_mab", {
                        m: a
                    });
                    b[a] = !0
                };
                google.c.u = function(a) {
                    var b = google.timers.load.m;
                    if (b[a]) {
                        b[a] = !1;
                        for (a in b)
                            if (b[a]) return;
                        google.csiReport()
                    } else google.wl("ch_mnb", {
                        m: a
                    })
                };
                google.rll = function(a, b, c) {
                    var d = function(b) {
                        c(b);
                        e(a, "load", d);
                        e(a, "error", d)
                    };
                    f(a, "load", d);
                    b && f(a, "error", d)
                };
                google.ull = function() {
                    for (var a; a = g.shift();) e(a.o, a.v, a.w)
                };
                google.iTick = function(a) {
                    var b = google.time();
                    google.tick("load", "iml", b);
                    a = a.id || a.src || a.name;
                    google.tick("iml", a, b);
                    google.c.c.a && google.tick("aft", a, b)
                };
                google.afte = !0;
                google.aft =
                    function(a) {
                        google.c.c.a && google.afte && google.tick("aft", a.id || a.src || a.name)
                    };
                google.startTick("load");
                google.c.b("pr");
                google.c.b("xe")
            })();
        })();
        (function() {
            'use strict';
            var k = this,
                l = Date.now || function() {
                    return +new Date
                };
            var t = {};
            var w = function(a, d) {
                if (null === d) return !1;
                if ("contains" in a && 1 == d.nodeType) return a.contains(d);
                if ("compareDocumentPosition" in a) return a == d || !!(a.compareDocumentPosition(d) & 16);
                for (; d && a != d;) d = d.parentNode;
                return d == a
            };
            var x = function(a, d) {
                    return function(b) {
                        b || (b = window.event);
                        return d.call(a, b)
                    }
                },
                B = function(a) {
                    a = a.target || a.srcElement;
                    !a.getAttribute && a.parentNode && (a = a.parentNode);
                    return a
                },
                C = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent),
                D = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator.userAgent),
                E = {
                    A: 1,
                    INPUT: 1,
                    TEXTAREA: 1,
                    SELECT: 1,
                    BUTTON: 1
                },
                F = function() {
                    this._mouseEventsPrevented = !0
                },
                G = {
                    A: 13,
                    BUTTON: 0,
                    CHECKBOX: 32,
                    COMBOBOX: 13,
                    GRIDCELL: 13,
                    LINK: 13,
                    LISTBOX: 13,
                    MENU: 0,
                    MENUBAR: 0,
                    MENUITEM: 0,
                    MENUITEMCHECKBOX: 0,
                    MENUITEMRADIO: 0,
                    OPTION: 0,
                    RADIO: 32,
                    RADIOGROUP: 32,
                    RESET: 0,
                    SUBMIT: 0,
                    TAB: 0,
                    TREE: 13,
                    TREEITEM: 13
                },
                H = function(a) {
                    return (a.getAttribute("type") || a.tagName).toUpperCase() in aa
                },
                I = function(a) {
                    return (a.getAttribute("type") || a.tagName).toUpperCase() in ba
                },
                aa = {
                    CHECKBOX: !0,
                    OPTION: !0,
                    RADIO: !0
                },
                ba = {
                    COLOR: !0,
                    DATE: !0,
                    DATETIME: !0,
                    "DATETIME-LOCAL": !0,
                    EMAIL: !0,
                    MONTH: !0,
                    NUMBER: !0,
                    PASSWORD: !0,
                    RANGE: !0,
                    SEARCH: !0,
                    TEL: !0,
                    TEXT: !0,
                    TEXTAREA: !0,
                    TIME: !0,
                    URL: !0,
                    WEEK: !0
                },
                ca = {
                    A: !0,
                    AREA: !0,
                    BUTTON: !0,
                    DIALOG: !0,
                    IMG: !0,
                    INPUT: !0,
                    LINK: !0,
                    MENU: !0,
                    OPTGROUP: !0,
                    OPTION: !0,
                    PROGRESS: !0,
                    SELECT: !0,
                    TEXTAREA: !0
                };
            var J = function() {
                    this.v = this.o = null
                },
                L = function(a, d) {
                    var b = K;
                    b.o = a;
                    b.v = d;
                    return b
                };
            J.prototype.s = function() {
                var a = this.o;
                this.o && this.o != this.v ? this.o = this.o.__owner || this.o.parentNode : this.o = null;
                return a
            };
            var M = function() {
                this.w = [];
                this.o = 0;
                this.v = null;
                this.R = !1
            };
            M.prototype.s = function() {
                if (this.R) return K.s();
                if (this.o != this.w.length) {
                    var a = this.w[this.o];
                    this.o++;
                    a != this.v && a && a.__owner && (this.R = !0, L(a.__owner, this.v));
                    return a
                }
                return null
            };
            var K = new J,
                O = new M;
            var Q = function() {
                    this.T = [];
                    this.o = [];
                    this.s = [];
                    this.R = {};
                    this.v = null;
                    this.w = [];
                    P(this, "_custom")
                },
                da = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent),
                R = String.prototype.trim ? function(a) {
                    return a.trim()
                } : function(a) {
                    return a.replace(/^\s+/, "").replace(/\s+$/, "")
                },
                ea = /\s*;\s*/,
                ia = function(a, d) {
                    return function(b) {
                        var c = d;
                        if ("_custom" == c) {
                            c = b.detail;
                            if (!c || !c._type) return;
                            c = c._type
                        }
                        var e;
                        if ("click" == c && (C && b.metaKey || !C && b.ctrlKey || 2 == b.which || null == b.which && 4 == b.button || b.shiftKey)) c = "clickmod";
                        else {
                            var f;
                            f = b.which || b.keyCode || b.key;
                            D && 3 == f && (f = 13);
                            if (13 != f && 32 != f) f = !1;
                            else {
                                var m = B(b),
                                    q = (m.getAttribute("role") || m.type || m.tagName).toUpperCase(),
                                    h;
                                (h = "keydown" != b.type) || ("getAttribute" in m ? (h = (m.getAttribute("role") || m.tagName).toUpperCase(), h = !I(m) && ("COMBOBOX" != h || "INPUT" != h) && !m.isContentEditable) : h = !1, h = !h);
                                (h =
                                    h || b.ctrlKey || b.shiftKey || b.altKey || b.metaKey || H(m) && 32 == f) || ((h = m.tagName in E) || (h = m.getAttributeNode("tabindex"), h = null != h && h.specified), h = !(h && !m.disabled));
                                h ? f = !1 : (m = "INPUT" != m.tagName.toUpperCase() || m.type, h = !(q in G) && 13 == f, f = (0 == G[q] % f || h) && !!m)
                            }
                            f && (c = "clickkey")
                        }
                        q = b.srcElement || b.target;
                        f = S(c, b, q, "", null);
                        var g;
                        b.path ? (O.w = b.path, O.o = 0, O.v = this, O.R = !1, m = O) : m = L(q, this);
                        for (; h = m.s();) {
                            g = e = h;
                            h = c;
                            var n = g.__jsaction;
                            if (!n) {
                                var u = void 0,
                                    n = null;
                                "getAttribute" in g && (n = g.getAttribute("jsaction"));
                                if (u = n) {
                                    n = t[u];
                                    if (!n) {
                                        for (var n = {}, y = u.split(ea), z = 0, fa = y ? y.length : 0; z < fa; z++) {
                                            var r = y[z];
                                            if (r) {
                                                var A = r.indexOf(":"),
                                                    N = -1 != A,
                                                    ga = N ? R(r.substr(0, A)) : "click",
                                                    r = N ? R(r.substr(A + 1)) : r;
                                                n[ga] = r
                                            }
                                        }
                                        t[u] = n
                                    }
                                    g.__jsaction = n
                                } else n = ha, g.__jsaction = n
                            }
                            "clickkey" == h ? h = "click" : "click" != h || n.click || (h = "clickonly");
                            g = {
                                S: h,
                                action: n[h] || "",
                                event: null,
                                W: !1
                            };
                            f = S(g.S, g.event || b, q, g.action || "", e, f.timeStamp);
                            if (g.W || g.action) break
                        }
                        f && "touchend" == f.eventType && (f.event._preventMouseEvents = F);
                        if (g && g.action) {
                            if (g = "clickkey" == c) g =
                                B(b), g = (g.type || g.tagName).toUpperCase(), (g = 32 == (b.which || b.keyCode || b.key) && "CHECKBOX" != g) || (g = B(b), q = (g.getAttribute("role") || g.tagName).toUpperCase(), g = g.tagName.toUpperCase() in ca && "A" != q && !H(g) && !I(g) || "BUTTON" == q);
                            g && (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                            if ("mouseenter" == c || "mouseleave" == c)
                                if (g = b.relatedTarget, !("mouseover" == b.type && "mouseenter" == c || "mouseout" == b.type && "mouseleave" == c) || g && (g === e || w(e, g))) f.action = "", f.actionElement = null;
                                else {
                                    var c = {},
                                        p;
                                    for (p in b) "function" !==
                                        typeof b[p] && "srcElement" !== p && "target" !== p && (c[p] = b[p]);
                                    c.type = "mouseover" == b.type ? "mouseenter" : "mouseleave";
                                    c.target = c.srcElement = e;
                                    c.bubbles = !1;
                                    f.event = c;
                                    f.targetElement = e
                                }
                        } else f.action = "", f.actionElement = null;
                        e = f;
                        a.v && (p = S(e.eventType, e.event, e.targetElement, e.action, e.actionElement, e.timeStamp), "clickonly" == p.eventType && (p.eventType = "click"), a.v(p, !0));
                        if (e.actionElement) {
                            "A" != e.actionElement.tagName || "click" != e.eventType && "clickmod" != e.eventType || (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                            if (a.v) a.v(e);
                            else {
                                var v;
                                if ((p = k.document) && !p.createEvent && p.createEventObject) try {
                                    v = p.createEventObject(b)
                                } catch (la) {
                                    v = b
                                } else v = b;
                                e.event = v;
                                a.w.push(e)
                            }
                            if ("touchend" == e.event.type && e.event._mouseEventsPrevented) {
                                b = e.event;
                                for (var ma in b);
                                l()
                            }
                        }
                    }
                },
                S = function(a, d, b, c, e, f) {
                    return {
                        eventType: a,
                        event: d,
                        targetElement: b,
                        action: c,
                        actionElement: e,
                        timeStamp: f || l()
                    }
                },
                ha = {},
                ja = function(a, d) {
                    return function(b) {
                        var c = a,
                            e = d,
                            f = !1;
                        "mouseenter" == c ? c = "mouseover" : "mouseleave" == c && (c = "mouseout");
                        if (b.addEventListener) {
                            if ("focus" == c || "blur" == c || "error" == c || "load" == c) f = !0;
                            b.addEventListener(c, e, f)
                        } else b.attachEvent && ("focus" == c ? c = "focusin" : "blur" == c && (c = "focusout"), e = x(b, e), b.attachEvent("on" + c, e));
                        return {
                            S: c,
                            U: e,
                            V: f
                        }
                    }
                },
                P = function(a, d) {
                    if (!a.R.hasOwnProperty(d)) {
                        var b = ia(a, d),
                            c = ja(d, b);
                        a.R[d] = b;
                        a.T.push(c);
                        for (b = 0; b < a.o.length; ++b) {
                            var e = a.o[b];
                            e.s.push(c.call(null, e.o))
                        }
                        "click" == d && P(a, "keydown")
                    }
                };
            Q.prototype.U = function(a) {
                return this.R[a]
            };
            var W = function(a, d) {
                    var b = new ka(d),
                        c;
                    a: {
                        for (c = 0; c < a.o.length; c++)
                            if (T(a.o[c], d)) {
                                c = !0;
                                break a
                            }
                        c = !1
                    }
                    if (c) return a.s.push(b), b;
                    U(a, b);
                    a.o.push(b);
                    V(a);
                    return b
                },
                V = function(a) {
                    for (var d = a.s.concat(a.o), b = [], c = [], e = 0; e < a.o.length; ++e) {
                        var f = a.o[e];
                        X(f, d) ? (b.push(f), Y(f)) : c.push(f)
                    }
                    for (e = 0; e < a.s.length; ++e) f = a.s[e], X(f, d) ? b.push(f) : (c.push(f), U(a, f));
                    a.o = c;
                    a.s = b
                },
                U = function(a, d) {
                    var b = d.o;
                    da && (b.style.cursor = "pointer");
                    for (b = 0; b < a.T.length; ++b) d.s.push(a.T[b].call(null, d.o))
                },
                ka = function(a) {
                    this.o = a;
                    this.s = []
                },
                T = function(a, d) {
                    for (var b = a.o, c = d; b != c && c.parentNode;) c = c.parentNode;
                    return b == c
                },
                X = function(a, d) {
                    for (var b = 0; b < d.length; ++b)
                        if (d[b].o != a.o && T(d[b], a.o)) return !0;
                    return !1
                },
                Y = function(a) {
                    for (var d = 0; d < a.s.length; ++d) {
                        var b = a.o,
                            c = a.s[d];
                        b.removeEventListener ? b.removeEventListener(c.S, c.U, c.V) : b.detachEvent && b.detachEvent("on" + c.S, c.U)
                    }
                    a.s = []
                };
            var Z = new Q;
            W(Z, window.document.documentElement);
            P(Z, "click");
            P(Z, "focus");
            P(Z, "focusin");
            P(Z, "blur");
            P(Z, "focusout");
            P(Z, "error");
            P(Z, "load");
            P(Z, "change");
            P(Z, "dblclick");
            P(Z, "input");
            P(Z, "keyup");
            P(Z, "keydown");
            P(Z, "keypress");
            P(Z, "mousedown");
            P(Z, "mouseenter");
            P(Z, "mouseleave");
            P(Z, "mouseout");
            P(Z, "mouseover");
            P(Z, "mouseup");
            P(Z, "touchstart");
            P(Z, "touchend");
            P(Z, "touchcancel");
            P(Z, "speech");
            (function(a) {
                window.google.jsad = function(d) {
                    a.v = d;
                    a.w && (0 < a.w.length && d(a.w), a.w = null)
                };
                window.google.jsaac = function(d) {
                    return W(a, d)
                };
                window.google.jsarc = function(d) {
                    Y(d);
                    for (var b = !1, c = 0; c < a.o.length; ++c)
                        if (a.o[c] === d) {
                            a.o.splice(c, 1);
                            b = !0;
                            break
                        }
                    if (!b)
                        for (c = 0; c < a.s.length; ++c)
                            if (a.s[c] === d) {
                                a.s.splice(c, 1);
                                break
                            }
                    V(a)
                }
            })(Z);
        }).call(window);
        (function() {
            'use strict';
            var f = this,
                g = function(d, e) {
                    var b = d.split("."),
                        a = f;
                    b[0] in a || !a.execScript || a.execScript("var " + b[0]);
                    for (var c; b.length && (c = b.shift());) b.length || void 0 === e ? a[c] ? a = a[c] : a = a[c] = {} : a[c] = e
                };
            var h = [];
            g("google.jsc.xx", h);
            g("google.jsc.x", function(d) {
                h.push(d)
            });
        }).call(window);
        google.arwt = function(a) {
            a.href = document.getElementById(a.id.substring(1)).href;
            return !0
        };
    </script>
    <style>
        [dir='ltr'],
        [dir='rtl'] {
            unicode-bidi: -moz-isolate;
            unicode-bidi: isolate
        }
        
        bdo[dir='ltr'],
        bdo[dir='rtl'] {
            unicode-bidi: bidi-override;
            unicode-bidi: -moz-isolate-override;
            unicode-bidi: isolate-override
        }
        
        #logo {
            display: block;
            height: 37px;
            overflow: hidden;
            position: relative;
            width: 95px
        }
        
        #logo img {
            border: 0;
            left: 0;
            position: absolute;
            top: -41px
        }
        
        #logo span {
            background: url(/images/nav_logo242.png) no-repeat;
            cursor: pointer;
            overflow: hidden
        }
        
        #logocont {
            z-index: 1;
            padding-left: 13px;
            padding-right: 10px;
            margin-top: -2px;
            padding-top: 6px
        }
        
        .big #logocont {
            padding-left: 13px;
            padding-right: 12px
        }
        
        .sbibod {
            background-color: #fff;
            border: 1px solid #d9d9d9;
            border-top-color: none;
            height: 38px;
            vertical-align: top;
        }
        
        .srp .sbibod {
            border-right: 0
        }
        
        .lst {
            border: 0;
            margin-top: 5px;
            margin-bottom: 0
        }
        
        .lst:focus {
            outline: none
        }
        
        #lst-ib {
            color: #000
        }
        
        .gsfi,
        .lst {
            font: 16px arial, sans-serif;
            line-height: 26px !important;
            height: 26px !important;
        }
        
        #gs_st0 {
            line-height: 38px;
            padding: 0 8px;
            margin-top: -1px;
            position: static
        }
        
        .gsfs {
            font: 16px arial, sans-serif
        }
        
        .lsb {
            background: transparent;
            border: 0;
            font-size: 0;
            height: 30px;
            outline: 0;
            width: 100%
        }
        
        .sbico {
            background: url(/images/nav_logo242.png) no-repeat -107px -55px;
            color: transparent;
            display: inline-block;
            height: 24px;
            width: 24px;
            margin: 7px auto
        }
        
        #sblsbb {
            text-align: center;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            height: 40px;
            margin: 0;
            padding: 0;
            width: 40px;
            min-width: 38px !important;
            background-color: #4285f4;
            background-image: none;
            border: none;
        }
        
        #sblsbb:hover {
            background-image: none;
            border: none;
            background-color: #3b78e7
        }
        
        #sblsbb:active {
            background-color: #3367d6
        }
        
        #sbds {
            border: 0;
            margin-left: 0
        }
        
        .hp .nojsb,
        .srp .jsb {
            display: none
        }
        
        .kpbb,
        .kprb,
        .kpgb,
        .kpgrb {
            -moz-border-radius: 2px;
            border-radius: 2px;
            color: #fff
        }
        
        .kpbb:hover,
        .kprb:hover,
        .kpgb:hover,
        .kpgrb:hover {
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            color: #fff
        }
        
        .kpbb:active,
        .kprb:active,
        .kpgb:active,
        .kpgrb:active {
            -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3)
        }
        
        .kpbb {
            background-color: #4d90fe;
            background-image: -moz-linear-gradient(top, #4d90fe, #4787ed);
            background-image: linear-gradient(top, #4d90fe, #4787ed);
            border: 1px solid #3079ed
        }
        
        .kpbb:hover {
            background-color: #357ae8;
            background-image: -moz-linear-gradient(top, #4d90fe, #357ae8);
            background-image: linear-gradient(top, #4d90fe, #357ae8);
            border: 1px solid #2f5bb7
        }
        
        a.kpbb:link,
        a.kpbb:visited {
            color: #fff
        }
        
        .kprb {
            background-color: #dd4b39;
            background-image: -moz-linear-gradient(top, #dd4b39, #d14836);
            background-image: linear-gradient(top, #dd4b39, #d14836);
            border: 1px solid #dd4b39
        }
        
        .kprb:hover {
            background-color: #c53727;
            background-image: -moz-linear-gradient(top, #dd4b39, #c53727);
            background-image: linear-gradient(top, #dd4b39, #c53727);
            border: 1px solid #b0281a;
            border-bottom-color: #af301f
        }
        
        .kprb:active {
            background-color: #b0281a;
            background-image: -moz-linear-gradient(top, #dd4b39, #b0281a);
            background-image: linear-gradient(top, #dd4b39, #b0281a)
        }
        
        .kpgb {
            background-color: #3d9400;
            background-image: -moz-linear-gradient(top, #3d9400, #398a00);
            background-image: linear-gradient(top, #3d9400, #398a00);
            border: 1px solid #29691d
        }
        
        .kpgb:hover {
            background-color: #368200;
            background-image: -moz-linear-gradient(top, #3d9400, #368200);
            background-image: linear-gradient(top, #3d9400, #368200);
            border: 1px solid #2d6200
        }
        
        .kpgrb {
            background-color: #f5f5f5;
            background-image: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
            background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
            border: 1px solid #dcdcdc;
            color: #555
        }
        
        .kpgrb:hover {
            background-color: #f8f8f8;
            background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
            background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
            border: 1px solid #dcdcdc;
            color: #333
        }
        
        a.kpgrb:link,
        a.kpgrb:visited {
            color: #555
        }
        
        #sfopt {
            display: inline-block;
            float: right;
            line-height: normal
        }
        
        .lsd {
            font-size: 11px;
            position: absolute;
            top: 3px;
            left: 16px
        }
        
        .sbsb_g {
            margin: 3px 0 4px
        }
        
        .jhp input[type="submit"],
        .sbdd_a input,
        .gbqfba {
            background-image: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
            -moz-border-radius: 2px;
            -moz-user-select: none;
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 2px;
            color: #757575;
            cursor: default;
            font-family: arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            margin: 11px 4px;
            min-width: 54px;
            padding: 0 16px;
            text-align: center
        }
        
        .gbqfba.gbqfba-hvr {
            font-size: 13px
        }
        
        .jhp input[type="submit"],
        .gbqfba {
            height: 36px;
            line-height: 27px
        }
        
        .sbdd_a input {
            height: 100%
        }
        
        .jhp input[type="submit"]:hover,
        .sbdd_a input:hover,
        .gbqfba:hover {
            background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            background-color: #f8f8f8;
            background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
            background-image: -o-linear-gradient(top, #f8f8f8, #f1f1f1);
            border: 1px solid #c6c6c6;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            color: #222
        }
        
        .jhp input[type="submit"]:focus,
        .sbdd_a input:focus {
            border: 1px solid #4d90fe;
            outline: none
        }
        
        .sbdd_a input {
            margin: 6px;
            height: 27px
        }
        
        span.lsbb,
        .lsb input {
            -moz-transition: all 0.18s
        }
        
        @media only screen and (max-height:650px) {
            span.lsbb {
                height: 17px
            }
        }
        
        .tsf {
            background: none
        }
        
        .tsf-p {
            position: relative;
        }
        
        .logocont {
            left: 0;
            position: absolute;
        }
        
        .sfibbbc {
            padding-bottom: 2px;
            padding-top: 3px;
            width: 638px
        }
        
        .sbtc {
            position: relative
        }
        
        .sbibtd {
            line-height: 0;
            max-width: 650px;
            overflow: visible;
            white-space: nowrap
        }
        
        .sbibps {
            padding: 0px 9px 0;
            width: 466px;
        }
        
        .big .sbibps {
            width: 550px
        }
        
        .sfopt {
            height: 28px;
            position: relative
        }
        
        #sform {
            height: 34px
        }
        
        .hp .sfsbc {
            display: none
        }
        
        #searchform {
            width: 100%
        }
        
        .hp #searchform {
            position: absolute;
            top: 311px
        }
        
        .srp #searchform {
            position: absolute;
            top: 15px
        }
        
        #sfdiv {
            max-width: 484px
        }
        
        .hp .big #sfdiv {
            max-width: 584px;
            margin: -1px 0px 1px
        }
        
        .srp #sfdiv {
            max-width: 600px;
            overflow: hidden
        }
        
        .srp #tsf {
            position: relative;
            top: -8px
        }
        
        .hp .tsf-p {
            padding-top: 8px
        }
        
        .sfsbc {
            display: inline-block;
            float: right;
            margin-right: 1px;
            vertical-align: top;
            width: 40px;
            margin-right: 9px
        }
        
        .sfbg {
            background: #f1f1f1;
            height: 69px;
            left: 0;
            position: absolute;
            width: 100%
        }
        
        .sfbgg {
            background-color: #f1f1f1;
            border-bottom: 1px solid #666;
            border-color: #e5e5e5;
            height: 69px
        }
        
        #pocs {
            background: #fff1a8;
            color: #000;
            font-size: 10pt;
            margin: 0;
            padding: 5px 7px
        }
        
        #pocs.sft {
            background: transparent;
            color: #777
        }
        
        #pocs a {
            color: #11c
        }
        
        #pocs.sft a {
            color: #36c
        }
        
        #pocs>div {
            margin: 0;
            padding: 0
        }
        
        #cnt {
            padding-top: 15px;
        }
        
        #subform_ctrl {
            min-height: 11px
        }
        
        .gb_Xa {
            display: none!important
        }
        
        @-moz-keyframes gb__a {
            0% {
                opacity: 0
            }
            50% {
                opacity: 1
            }
        }
        
        @keyframes gb__a {
            0% {
                opacity: 0
            }
            50% {
                opacity: 1
            }
        }
        
        #gbq2 {
            display: block
        }
        
        #gbqf {
            display: block;
            margin: 0;
            margin-right: 60px;
            white-space: nowrap
        }
        
        .gbqff {
            border: none;
            display: inline-block;
            margin: 0;
            padding: 0;
            vertical-align: top;
            width: 100%
        }
        
        .gbqfqw,
        #gbqfb,
        .gbqfwa {
            vertical-align: top
        }
        
        #gbqfaa,
        #gbqfab,
        #gbqfqwb {
            position: absolute
        }
        
        #gbqfaa {
            left: 0
        }
        
        #gbqfab {
            right: 0
        }
        
        .gbqfqwb,
        .gbqfqwc {
            right: 0;
            left: 0;
            height: 100%
        }
        
        .gbqfqwb {
            padding: 0 8px
        }
        
        #gbqfbw {
            display: inline-block;
            vertical-align: top
        }
        
        #gbqfb {
            border: 1px solid transparent;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            height: 30px;
            margin: 0;
            outline: none;
            padding: 0 0;
            width: 60px;
            -moz-box-shadow: none;
            box-shadow: none;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: #4285f4;
            background: -moz-linear-gradient(top, #4387fd, #4683ea);
            background: linear-gradient(top, #4387fd, #4683ea);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#4387fd, endColorstr=#4683ea, GradientType=1)
        }
        
        #gbqfb:hover {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
        }
        
        #gbqfb:focus {
            -moz-box-shadow: inset 0 0 0 1px #fff;
            box-shadow: inset 0 0 0 1px #fff
        }
        
        #gbqfb:hover:focus {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff
        }
        
        #gbqfb:active:active {
            border: 1px solid transparent;
            -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            background: #3c78dc;
            background: -moz-linear-gradient(top, #3c7ae4, #3f76d3);
            background: linear-gradient(top, #3c7ae4, #3f76d3);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4, endColorstr=#3f76d3, GradientType=1)
        }
        
        .gbqfi {
            background-position: -428px 0;
            display: inline-block;
            margin: -1px;
            height: 30px;
            width: 30px
        }
        
        .gbqfqw {
            background: #fff;
            background-clip: padding-box;
            border: 1px solid #cdcdcd;
            border-color: rgba(0, 0, 0, .15);
            border-right-width: 0;
            height: 30px;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }
        
        #gbfwc .gbqfqw {
            border-right-width: 1px
        }
        
        #gbqfqw {
            position: relative
        }
        
        .gbqfqw.gbqfqw:hover {
            border-color: #a9a9a9;
            border-color: rgba(0, 0, 0, .3)
        }
        
        .gbqfwa {
            display: inline-block;
            width: 100%
        }
        
        .gbqfwb {
            width: 40%
        }
        
        .gbqfwc {
            width: 60%
        }
        
        .gbqfwb .gbqfqw {
            margin-left: 10px
        }
        
        .gbqfqw.gbqfqw:active,
        .gbqfqw.gbqfqwf.gbqfqwf {
            border-color: #4285f4
        }
        
        #gbqfq,
        #gbqfqb,
        #gbqfqc {
            background: transparent;
            border: none;
            height: 20px;
            margin-top: 4px;
            padding: 0;
            vertical-align: top;
            width: 100%
        }
        
        #gbqfq:focus,
        #gbqfqb:focus,
        #gbqfqc:focus {
            outline: none
        }
        
        .gbqfif,
        .gbqfsf {
            color: #222;
            font: 16px arial, sans-serif
        }
        
        #gbqfbwa {
            display: none;
            text-align: center;
            height: 0
        }
        
        #gbqfbwa .gbqfba {
            margin: 16px 8px
        }
        
        #gbqfsa,
        #gbqfsb {
            font: bold 11px/27px Arial, sans-serif!important;
            vertical-align: top
        }
        
        .gb_fa .gbqfqw.gbqfqw,
        .gb_X .gbqfqw.gbqfqw {
            border-color: rgba(255, 255, 255, 1);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2)
        }
        
        .gb_fa #gbqfb,
        .gb_X #gbqfb {
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2)
        }
        
        .gb_fa #gbqfb:hover,
        .gb_X #gbqfb:hover {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
        }
        
        .gb_fa #gbqfb:active,
        .gb_X #gbqfb:active {
            -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
        }
        
        .gbqfb,
        .gbqfba,
        .gbqfbb {
            cursor: default!important;
            display: inline-block;
            font-weight: bold;
            height: 29px;
            line-height: 29px;
            min-width: 54px;
            padding: 0 8px;
            text-align: center;
            text-decoration: none!important;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-user-select: -moz-none
        }
        
        .gbqfba:focus {
            border: 1px solid #4d90fe;
            outline: none;
            -moz-box-shadow: inset 0 0 0 1px #fff;
            box-shadow: inset 0 0 0 1px #fff
        }
        
        .gbqfba:hover {
            border-color: #c6c6c6;
            color: #222!important;
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            background: #f8f8f8;
            background: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
            background: linear-gradient(top, #f8f8f8, #f1f1f1);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#f8f8f8, endColorstr=#f1f1f1, GradientType=1)
        }
        
        .gbqfba:hover:focus {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff
        }
        
        .gbqfb::-moz-focus-inner {
            border: 0
        }
        
        .gbqfba::-moz-focus-inner {
            border: 0
        }
        
        .gbqfba {
            border: 1px solid #dcdcdc;
            border-color: rgba(0, 0, 0, 0.1);
            color: #444!important;
            font-size: 11px;
            background: #f5f5f5;
            background: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
            background: linear-gradient(top, #f5f5f5, #f1f1f1);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#f5f5f5, endColorstr=#f1f1f1, GradientType=1)
        }
        
        .gbqfba:active {
            -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1)
        }
        
        @-moz-keyframes gb__nb {
            0% {
                -moz-transform: scale(0, 0);
                transform: scale(0, 0)
            }
            20% {
                -moz-transform: scale(1.4, 1.4);
                transform: scale(1.4, 1.4)
            }
            50% {
                -moz-transform: scale(.8, .8);
                transform: scale(.8, .8)
            }
            85% {
                -moz-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1)
            }
            to {
                -moz-transform: scale(1.0, 1.0);
                transform: scale(1.0, 1.0)
            }
        }
        
        @keyframes gb__nb {
            0% {
                -moz-transform: scale(0, 0);
                transform: scale(0, 0)
            }
            20% {
                -moz-transform: scale(1.4, 1.4);
                transform: scale(1.4, 1.4)
            }
            50% {
                -moz-transform: scale(.8, .8);
                transform: scale(.8, .8)
            }
            85% {
                -moz-transform: scale(1.1, 1.1);
                transform: scale(1.1, 1.1)
            }
            to {
                -moz-transform: scale(1.0, 1.0);
                transform: scale(1.0, 1.0)
            }
        }
        
        .gb_cc {
            background-position: -314px -38px;
            opacity: .55;
            height: 100%;
            width: 100%
        }
        
        .gb_b:hover .gb_cc,
        .gb_b:focus .gb_cc {
            opacity: .85
        }
        
        .gb_dc .gb_cc {
            background-position: -463px 0
        }
        
        .gb_ec {
            background-color: #cb4437;
            -moz-border-radius: 8px;
            border-radius: 8px;
            font: bold 11px Arial;
            color: #fff;
            line-height: 16px;
            min-width: 14px;
            padding: 0 1px;
            position: absolute;
            right: 0;
            text-align: center;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
            top: 0;
            visibility: hidden;
            z-index: 990
        }
        
        .gb_fc .gb_ec,
        .gb_fc .gb_gc,
        .gb_fc .gb_gc.gb_hc {
            visibility: visible
        }
        
        .gb_gc {
            padding: 0 2px;
            visibility: hidden
        }
        
        .gb_ic:not(.gb_jc) .gb_bb,
        .gb_ic:not(.gb_jc) .gb_ab {
            left: 3px
        }
        
        .gb_ec.gb_kc {
            -moz-animation: gb__nb .6s 1s both ease-in-out;
            animation: gb__nb .6s 1s both ease-in-out;
            -moz-perspective-origin: top right;
            perspective-origin: top right;
            -moz-transform: scale(1, 1);
            transform: scale(1, 1);
            -moz-transform-origin: top right;
            transform-origin: top right
        }
        
        .gb_kc .gb_gc {
            visibility: visible
        }
        
        .gb_fa .gb_b .gb_cc {
            background-position: 0 0;
            opacity: .7
        }
        
        .gb_fa .gb_dc .gb_cc {
            background-position: -279px -38px
        }
        
        .gb_fa .gb_b:hover .gb_cc,
        .gb_fa .gb_b:focus .gb_cc {
            opacity: .85
        }
        
        .gb_X .gb_b .gb_cc {
            background-position: -349px -38px;
            opacity: 1
        }
        
        .gb_X .gb_dc .gb_cc {
            background-position: -393px 0
        }
        
        .gb_fa .gb_ec,
        .gb_X .gb_ec {
            border: none
        }
        
        .gb_ic .gb_lc {
            font-size: 14px;
            font-weight: bold;
            top: 0;
            right: 0
        }
        
        .gb_ic .gb_b {
            display: inline-block;
            vertical-align: middle;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: 30px;
            width: 30px
        }
        
        .gb_ic .gb_ab {
            border-bottom-color: #e5e5e5
        }
        
        .gb_mc {
            background-color: rgba(0, 0, 0, .55);
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            line-height: 20px;
            margin: 5px;
            padding: 0 2px;
            text-align: center;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -moz-border-radius: 50%;
            border-radius: 50%;
            height: 20px;
            width: 20px
        }
        
        .gb_mc.gb_nc {
            background-position: -194px -21px
        }
        
        .gb_mc.gb_oc {
            background-position: -194px -46px
        }
        
        .gb_b:hover .gb_mc,
        .gb_b:focus .gb_mc {
            background-color: rgba(0, 0, 0, .85)
        }
        
        #gbsfw.gb_pc {
            background: #e5e5e5;
            border-color: #ccc
        }
        
        .gb_fa .gb_mc {
            background-color: rgba(0, 0, 0, .7)
        }
        
        .gb_X .gb_mc.gb_mc,
        .gb_X .gb_fc .gb_mc.gb_mc,
        .gb_X .gb_fc .gb_b:hover .gb_mc,
        .gb_X .gb_fc .gb_b:focus .gb_mc {
            background-color: #fff;
            color: #404040
        }
        
        .gb_X .gb_mc.gb_nc {
            background-position: -70px 0
        }
        
        .gb_X .gb_mc.gb_oc {
            background-position: -219px 0
        }
        
        .gb_fc .gb_mc.gb_mc {
            background-color: #db4437;
            color: #fff
        }
        
        .gb_fc .gb_b:hover .gb_mc,
        .gb_fc .gb_b:focus .gb_mc {
            background-color: #a52714
        }
        
        .gb_fc .gb_mc.gb_oc {
            background-position: -194px -46px
        }
        
        .gb_N .gbqfi::before {
            left: -428px;
            top: 0
        }
        
        .gb_ub .gbqfb:focus .gbqfi {
            outline: 1px dotted #fff
        }
        
        #gbsfw {
            min-width: 400px;
            overflow: visible
        }
        
        .gb_Eb,
        #gbsfw.gb_g {
            display: block;
            outline: none
        }
        
        #gbsfw.gb_qa iframe {
            display: none
        }
        
        .gb_Fb {
            padding: 118px 0;
            text-align: center
        }
        
        .gb_Hb {
            background: no-repeat center 0;
            color: #aaa;
            font-size: 13px;
            line-height: 20px;
            padding-top: 76px;
            background-image: url('//ssl.gstatic.com/gb/images/a/f5cdd88b65.png')
        }
        
        .gb_Hb a {
            color: #4285f4;
            text-decoration: none
        }
        
        .gb_ea .gb_b {
            background-position: -132px -38px;
            opacity: .55
        }
        
        .gb_fa .gb_ea .gb_b {
            background-position: -132px -38px
        }
        
        .gb_X .gb_ea .gb_b {
            background-position: -463px -35px;
            opacity: 1
        }
        
        .gb_ga.gb_ha {
            min-height: 196px;
            overflow-y: auto;
            width: 320px
        }
        
        .gb_ia {
            -moz-transition: height .2s ease-in-out;
            transition: height .2s ease-in-out
        }
        
        .gb_ja {
            background: #fff;
            margin: 0;
            min-height: 100px;
            padding: 28px;
            padding-right: 27px;
            text-align: left;
            white-space: normal;
            width: 265px
        }
        
        .gb_ka {
            background: #f5f5f5;
            cursor: pointer;
            height: 40px;
            overflow: hidden
        }
        
        .gb_la {
            position: relative
        }
        
        .gb_ka {
            display: block;
            line-height: 40px;
            text-align: center;
            width: 320px
        }
        
        .gb_la {
            display: block;
            line-height: 40px;
            text-align: center
        }
        
        .gb_la.gb_ma {
            line-height: 0
        }
        
        .gb_ka,
        .gb_ka:visited,
        .gb_ka:active,
        .gb_la,
        .gb_la:visited {
            color: #737373;
            text-decoration: none
        }
        
        .gb_la:active {
            color: #737373
        }
        
        #gb a.gb_ka,
        #gb a.gb_ka:visited,
        #gb a.gb_ka:active,
        #gb a.gb_la,
        #gb a.gb_la:visited {
            color: #737373;
            text-decoration: none
        }
        
        #gb a.gb_la:active {
            color: #737373
        }
        
        .gb_la,
        .gb_ja {
            display: none
        }
        
        .gb_ca,
        .gb_ca+.gb_la,
        .gb_na .gb_la,
        .gb_na .gb_ja {
            display: block
        }
        
        .gb_la:hover,
        .gb_la:active,
        #gb a.gb_la:hover,
        #gb a.gb_la:active {
            text-decoration: underline
        }
        
        .gb_la {
            border-bottom: 1px solid #ebebeb;
            left: 28px;
            width: 264px
        }
        
        .gb_na .gb_ka {
            display: none
        }
        
        .gb_la:last-child {
            border-bottom-width: 0
        }
        
        .gb_oa .gb_O {
            display: initial
        }
        
        .gb_oa.gb_pa {
            height: 100px;
            text-align: center
        }
        
        .gb_oa.gb_pa img {
            padding: 34px 0;
            height: 32px;
            width: 32px
        }
        
        .gb_oa .gb_3 {
            background-image: url('//ssl.gstatic.com/gb/images/p1_fd66c382.png');
            background-size: 64px 2065px;
            background-position: 0 -690px
        }
        
        .gb_oa .gb_3+img {
            border: 0;
            margin: 8px;
            height: 48px;
            width: 48px
        }
        
        .gb_oa div.gb_qa {
            background: #ffa;
            -moz-border-radius: 5px;
            border-radius: 5px;
            padding: 5px;
            text-align: center
        }
        
        .gb_oa.gb_ra,
        .gb_oa.gb_sa {
            padding-bottom: 0
        }
        
        .gb_oa.gb_ta,
        .gb_oa.gb_sa {
            padding-top: 0
        }
        
        .gb_oa.gb_sa a,
        .gb_oa.gb_ta a {
            top: 0
        }
        
        .gb_ua .gb_ka {
            margin-top: 0;
            position: static
        }
        
        .gb_va {
            display: inline-block
        }
        
        .gb_wa {
            margin: -12px 28px 28px;
            position: relative;
            width: 264px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 1px rgba(0, 0, 0, 0.1)
        }
        
        .gb_5 {
            background-image: url('//ssl.gstatic.com/gb/images/p1_fd66c382.png');
            background-size: 64px 2065px;
            display: inline-block;
            margin: 8px;
            vertical-align: middle;
            height: 64px;
            width: 64px
        }
        
        .gb_xa {
            color: #262626;
            display: inline-block;
            font: 13px/18px Arial, sans-serif;
            margin-right: 80px;
            padding: 10px 10px 10px 0;
            vertical-align: middle;
            white-space: normal
        }
        
        .gb_ya {
            font: 16px/24px Arial, sans-serif
        }
        
        .gb_za,
        #gb#gb .gb_za {
            color: #427fed;
            text-decoration: none
        }
        
        .gb_za:hover,
        #gb#gb .gb_za:hover {
            text-decoration: underline
        }
        
        .gb_Aa .gb_ja {
            position: relative
        }
        
        .gb_Aa .gb_O {
            position: absolute;
            top: 28px;
            left: 28px
        }
        
        .gb_ka.gb_Ba {
            display: none;
            height: 0
        }
        
        .gb_Za {
            background-size: 32px 32px;
            -moz-border-radius: 50%;
            border-radius: 50%;
            display: block;
            margin: -1px;
            overflow: hidden;
            position: relative;
            height: 32px;
            width: 32px
        }
        
        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gb_Za::before {
                -moz-transform: scale(.5);
                transform: scale(.5);
                -moz-transform-origin: left 0;
                transform-origin: left 0
            }
            .gb_jb::before {
                -moz-transform: scale(.5);
                transform: scale(.5);
                -moz-transform-origin: left 0;
                transform-origin: left 0
            }
        }
        
        .gb_Za:hover,
        .gb_Za:focus {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
        }
        
        .gb_Za:active {
            -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15)
        }
        
        .gb_Za:active::after {
            background: rgba(0, 0, 0, .1);
            -moz-border-radius: 50%;
            border-radius: 50%;
            content: '';
            display: block;
            height: 100%
        }
        
        .gb_0a {
            cursor: pointer;
            line-height: 30px;
            min-width: 30px;
            opacity: .75;
            overflow: hidden;
            vertical-align: middle;
            text-overflow: ellipsis
        }
        
        .gb_b.gb_0a {
            width: auto
        }
        
        .gb_0a:hover,
        .gb_0a:focus {
            opacity: .85
        }
        
        .gb_1a .gb_0a,
        .gb_1a .gb_2a {
            line-height: 26px
        }
        
        #gb#gb.gb_1a a.gb_0a,
        .gb_1a .gb_2a {
            font-size: 11px;
            height: auto
        }
        
        .gb_3a {
            border-top: 4px solid #000;
            border-left: 4px dashed transparent;
            border-right: 4px dashed transparent;
            display: inline-block;
            margin-left: 6px;
            opacity: .75;
            vertical-align: middle
        }
        
        .gb_4a:hover .gb_3a {
            opacity: .85
        }
        
        .gb_X .gb_0a,
        .gb_X .gb_3a {
            opacity: 1
        }
        
        #gb#gb.gb_X.gb_X a.gb_0a,
        #gb#gb .gb_X.gb_X a.gb_0a {
            color: #fff
        }
        
        .gb_X.gb_X .gb_3a {
            border-top-color: #fff;
            opacity: 1
        }
        
        .gb_fa .gb_Za:hover,
        .gb_X .gb_Za:hover,
        .gb_fa .gb_Za:focus,
        .gb_X .gb_Za:focus {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
        }
        
        .gb_5a .gb_6a,
        .gb_7a .gb_6a {
            position: absolute;
            right: 1px
        }
        
        .gb_6a.gb_R,
        .gb_8a.gb_R,
        .gb_4a.gb_R {
            flex: 0 1 auto;
            flex: 0 1 main-size
        }
        
        .gb_9a.gb_W .gb_0a {
            width: 30px!important
        }
        
        .gb_0a~.gb_ab,
        .gb_0a~.gb_bb {
            left: auto;
            right: 6.5px
        }
        
        .gb_cb {
            outline: none
        }
        
        .gb_db,
        #gb a.gb_db.gb_db,
        .gb_eb a,
        #gb .gb_eb.gb_eb a {
            color: #36c;
            text-decoration: none
        }
        
        .gb_db:active,
        #gb a.gb_db:active,
        .gb_db:hover,
        #gb a.gb_db:hover,
        .gb_eb a:active,
        #gb .gb_eb a:active,
        .gb_eb a:hover,
        #gb .gb_eb a:hover {
            text-decoration: underline
        }
        
        .gb_fb {
            margin: 20px
        }
        
        .gb_gb,
        .gb_hb {
            display: inline-block;
            vertical-align: top
        }
        
        .gb_gb {
            margin-right: 20px;
            position: relative
        }
        
        .gb_ib {
            -moz-border-radius: 50%;
            border-radius: 50%;
            overflow: hidden
        }
        
        .gb_jb {
            background-size: 96px 96px;
            border: none;
            vertical-align: top;
            height: 96px;
            width: 96px
        }
        
        .gb_kb {
            background: rgba(78, 144, 254, .7);
            bottom: 0;
            color: #fff;
            font-size: 9px;
            font-weight: bold;
            left: 0;
            line-height: 9px;
            position: absolute;
            padding: 7px 0;
            text-align: center;
            width: 96px
        }
        
        .gb_ib .gb_kb {
            background: rgba(0, 0, 0, .54)
        }
        
        .gb_lb {
            font-weight: bold;
            margin: -4px 0 1px 0
        }
        
        .gb_mb {
            color: #666
        }
        
        .gb_eb {
            color: #ccc;
            margin: 6px 0
        }
        
        .gb_eb a {
            margin: 0 10px
        }
        
        .gb_eb a:first-child {
            margin-left: 0
        }
        
        .gb_eb a:last-child {
            margin-right: 0
        }
        
        .gb_hb .gb_nb {
            background: #4d90fe;
            border-color: #3079ed;
            font-weight: bold;
            margin: 10px 0 0 0;
            color: #fff
        }
        
        #gb .gb_hb a.gb_nb.gb_nb {
            color: #fff
        }
        
        .gb_hb .gb_nb:hover {
            background: #357ae8;
            border-color: #2f5bb7
        }
        
        .gb_ob {
            background: #f5f5f5;
            border-top: 1px solid #ccc;
            border-color: rgba(0, 0, 0, .2);
            padding: 10px 0;
            width: 100%;
            display: table
        }
        
        .gb_ob .gb_nb {
            margin: 0 20px
        }
        
        .gb_ob>div {
            display: table-cell;
            text-align: right
        }
        
        .gb_ob>div:first-child {
            text-align: left
        }
        
        .gb_ob .gb_pb {
            display: block;
            text-align: center
        }
        
        .gb_qb .gb_ab {
            border-bottom-color: #fef9db
        }
        
        .gb_rb {
            background: #fef9db;
            font-size: 11px;
            padding: 10px 20px;
            white-space: normal
        }
        
        .gb_rb b,
        .gb_db {
            white-space: nowrap
        }
        
        .gb_sb {
            background: #f5f5f5;
            border-top: 1px solid #ccc;
            border-top-color: rgba(0, 0, 0, .2);
            max-height: 230px;
            overflow: auto
        }
        
        .gb_tb {
            border-top: 1px solid #ccc;
            border-top-color: rgba(0, 0, 0, .2);
            display: block;
            padding: 10px 20px
        }
        
        .gb_ub .gb_tb:focus .gb_vb {
            outline: 1px dotted #fff
        }
        
        .gb_tb:hover {
            background: #eee
        }
        
        .gb_tb:first-child,
        .gb_wb:first-child+.gb_tb {
            border-top: 0
        }
        
        .gb_wb {
            display: none
        }
        
        .gb_xb {
            cursor: default
        }
        
        .gb_xb:hover {
            background: transparent
        }
        
        .gb_yb {
            border: none;
            vertical-align: top;
            height: 48px;
            width: 48px
        }
        
        .gb_vb {
            display: inline-block;
            margin: 6px 0 0 10px
        }
        
        .gb_xb .gb_yb,
        .gb_xb .gb_vb {
            opacity: .4
        }
        
        .gb_zb {
            color: #000
        }
        
        .gb_xb .gb_zb {
            color: #666
        }
        
        .gb_Ab {
            color: #666
        }
        
        .gb_Bb {
            background: #f5f5f5;
            border-top: 1px solid #ccc;
            border-top-color: rgba(0, 0, 0, .2);
            display: block;
            padding: 10px 20px
        }
        
        .gb_Cb {
            background-position: -244px 0;
            display: inline-block;
            margin: 1px 0;
            vertical-align: middle;
            height: 25px;
            width: 25px
        }
        
        .gb_N .gb_Cb::before {
            left: -244px;
            top: 0
        }
        
        .gb_Db {
            color: #427fed;
            display: inline-block;
            padding: 0 25px 0 10px;
            vertical-align: middle;
            white-space: normal
        }
        
        .gb_Bb:hover .gb_Db {
            text-decoration: underline
        }
        
        #gb#gb a.gb_O {
            color: #404040;
            text-decoration: none
        }
        
        #gb#gb a.gb_P,
        #gb#gb span.gb_P {
            text-decoration: none
        }
        
        #gb#gb a.gb_P,
        #gb#gb span.gb_P {
            color: #000
        }
        
        .gb_P {
            opacity: .75
        }
        
        #gb#gb a.gb_P:hover,
        #gb#gb a.gb_P:focus {
            opacity: .85;
            text-decoration: underline
        }
        
        .gb_Q.gb_R {
            display: none;
            padding-left: 15px;
            vertical-align: middle
        }
        
        .gb_Q.gb_R:first-child {
            padding-left: 0
        }
        
        .gb_S.gb_R {
            display: inline-block
        }
        
        .gb_Q span {
            opacity: .55;
            -moz-user-select: text
        }
        
        .gb_T .gb_S.gb_R {
            flex: 0 1 auto;
            flex: 0 1 main-size;
            display: -webkit-flex;
            display: flex
        }
        
        .gb_U .gb_S.gb_R {
            display: none
        }
        
        .gb_Q .gb_P {
            display: inline-block;
            line-height: 24px;
            outline: none;
            vertical-align: middle
        }
        
        .gb_S .gb_P {
            min-width: 60px;
            overflow: hidden;
            flex: 0 1 auto;
            flex: 0 1 main-size;
            text-overflow: ellipsis
        }
        
        .gb_V .gb_S .gb_P {
            min-width: 0
        }
        
        .gb_W .gb_S .gb_P {
            width: 0!important
        }
        
        #gb#gb.gb_X a.gb_P,
        #gb#gb.gb_X span.gb_P,
        #gb#gb .gb_X a.gb_P,
        #gb#gb .gb_X span.gb_P {
            color: #fff
        }
        
        #gb#gb.gb_X span.gb_P,
        #gb#gb .gb_X span.gb_P {
            opacity: .7
        }
        
        .gb_0c {
            display: inline-block;
            padding: 0 0 0 15px;
            vertical-align: middle
        }
        
        .gb_0c:first-child,
        #gbsfw:first-child+.gb_0c {
            padding-left: 0
        }
        
        .gb_lc {
            position: relative
        }
        
        .gb_b {
            display: inline-block;
            outline: none;
            vertical-align: middle;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: 30px;
            width: 30px;
            color: #000;
            cursor: default;
            text-decoration: none
        }
        
        #gb#gb a.gb_b {
            color: #000;
            cursor: default;
            text-decoration: none
        }
        
        .gb_ab {
            border-color: transparent;
            border-bottom-color: #fff;
            border-style: dashed dashed solid;
            border-width: 0 8.5px 8.5px;
            display: none;
            position: absolute;
            left: 6.5px;
            top: 37px;
            z-index: 1;
            height: 0;
            width: 0;
            -moz-animation: gb__a .2s;
            animation: gb__a .2s
        }
        
        .gb_bb {
            border-color: transparent;
            border-style: dashed dashed solid;
            border-width: 0 8.5px 8.5px;
            display: none;
            position: absolute;
            left: 6.5px;
            z-index: 1;
            height: 0;
            width: 0;
            -moz-animation: gb__a .2s;
            animation: gb__a .2s;
            border-bottom-color: #ccc;
            border-bottom-color: rgba(0, 0, 0, .2);
            top: 36px
        }
        
        x:-o-prefocus,
        div.gb_bb {
            border-bottom-color: #ccc
        }
        
        .gb_ga {
            background: #fff;
            border: 1px solid #ccc;
            border-color: rgba(0, 0, 0, .2);
            color: #000;
            -moz-box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            display: none;
            outline: none;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 44px;
            -moz-animation: gb__a .2s;
            animation: gb__a .2s;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -moz-user-select: text
        }
        
        .gb_0c.gb_g .gb_ab,
        .gb_0c.gb_g .gb_bb,
        .gb_0c.gb_g .gb_ga,
        .gb_g.gb_ga {
            display: block
        }
        
        .gb_0c.gb_g.gb_Fd .gb_ab,
        .gb_0c.gb_g.gb_Fd .gb_bb {
            display: none
        }
        
        .gb_Hd {
            position: absolute;
            right: 0;
            top: 44px;
            z-index: -1
        }
        
        .gb_1a .gb_ab,
        .gb_1a .gb_bb,
        .gb_1a .gb_ga {
            margin-top: -10px
        }
        
        .gb_Ca {
            background: #f8f8f8;
            border: 1px solid #c6c6c6;
            display: inline-block;
            line-height: 28px;
            padding: 0 12px;
            -moz-border-radius: 2px;
            border-radius: 2px
        }
        
        .gb_Da {
            background: #f8f8f8;
            display: inline-block;
            line-height: 28px;
            padding: 0 12px;
            -moz-border-radius: 2px;
            border-radius: 2px
        }
        
        .gb_Ca,
        #gb a.gb_Ca.gb_Ca,
        .gb_Da {
            color: #666;
            cursor: default;
            text-decoration: none
        }
        
        #gb a.gb_Da.gb_Da {
            cursor: default;
            text-decoration: none
        }
        
        .gb_Da {
            border: 1px solid #4285f4;
            font-weight: bold;
            outline: none;
            background: #4285f4;
            background: -moz-linear-gradient(top, #4387fd, #4683ea);
            background: linear-gradient(top, #4387fd, #4683ea);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#4387fd, endColorstr=#4683ea, GradientType=0)
        }
        
        #gb a.gb_Da.gb_Da {
            color: #fff
        }
        
        .gb_Da:hover {
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
        }
        
        .gb_Da:active {
            -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            background: #3c78dc;
            background: -moz-linear-gradient(top, #3c7ae4, #3f76d3);
            background: linear-gradient(top, #3c7ae4, #3f76d3);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4, endColorstr=#3f76d3, GradientType=0)
        }
        
        .gb_Ib {
            min-width: 127px;
            overflow: hidden;
            position: relative;
            z-index: 987
        }
        
        .gb_Jb {
            position: absolute;
            padding: 0 20px 0 15px
        }
        
        .gb_Kb .gb_Jb {
            right: 100%;
            margin-right: -127px
        }
        
        .gb_Lb {
            display: inline-block;
            outline: none;
            vertical-align: middle
        }
        
        .gb_Mb .gb_Lb {
            position: relative;
            top: 2px
        }
        
        .gb_Lb .gb_Nb,
        .gb_Ob {
            display: block
        }
        
        .gb_Pb {
            border: none;
            display: block;
            visibility: hidden
        }
        
        .gb_Lb .gb_Nb {
            background-position: 0 -35px;
            height: 33px;
            width: 92px
        }
        
        .gb_Ob {
            background-repeat: no-repeat
        }
        
        .gb_X .gb_Lb .gb_Nb {
            background-position: -296px 0
        }
        
        .gb_fa .gb_Lb .gb_Nb {
            background-position: -97px 0;
            opacity: .54
        }
        
        .gb_Id {
            display: inline-block;
            line-height: normal;
            position: relative;
            z-index: 987
        }
        
        .gb_Zd .gb_b {
            background-position: -498px -35px;
            opacity: .55;
            height: 30px;
            width: 30px
        }
        
        .gb_Zd .gb_b:hover,
        .gb_Zd .gb_b:focus {
            opacity: .85
        }
        
        .gb_Zd .gb_ab {
            border-bottom-color: #f5f5f5
        }
        
        #gbsfw.gb_0d {
            background: #f5f5f5;
            border-color: #ccc
        }
        
        .gb_X .gb_Zd .gb_b {
            background-position: -428px -35px;
            opacity: 1
        }
        
        .gb_fa .gb_Zd .gb_b {
            background-position: -498px 0;
            opacity: .7
        }
        
        .gb_fa .gb_Zd .gb_b:hover,
        .gb_fa .gb_Zd .gb_b:focus {
            opacity: .85
        }
        
        .gb_Re {
            color: #000;
            font: 13px/27px Arial, sans-serif;
            left: 0;
            min-width: 1152px;
            position: absolute;
            top: 0;
            -moz-user-select: -moz-none;
            width: 100%
        }
        
        .gb_2d {
            font: 13px/27px Arial, sans-serif;
            position: relative;
            height: 60px;
            width: 100%
        }
        
        .gb_1a .gb_2d {
            height: 28px
        }
        
        #gba {
            height: 60px
        }
        
        #gba.gb_1a {
            height: 28px
        }
        
        #gba.gb_Se {
            height: 90px
        }
        
        #gba.gb_Se.gb_1a {
            height: 58px
        }
        
        .gb_2d>.gb_R {
            height: 60px;
            line-height: 58px;
            vertical-align: middle
        }
        
        .gb_1a .gb_2d>.gb_R {
            height: 28px;
            line-height: 26px
        }
        
        .gb_2d::before {
            background: #e5e5e5;
            bottom: 0;
            content: '';
            display: none;
            height: 1px;
            left: 0;
            position: absolute;
            right: 0
        }
        
        .gb_2d {
            background: #f1f1f1
        }
        
        .gb_Te .gb_2d {
            background: #fff
        }
        
        .gb_Te .gb_2d::before,
        .gb_1a .gb_2d::before {
            display: none
        }
        
        .gb_fa .gb_2d,
        .gb_X .gb_2d,
        .gb_1a .gb_2d {
            background: transparent
        }
        
        .gb_fa .gb_2d::before {
            background: #e1e1e1;
            background: rgba(0, 0, 0, .12)
        }
        
        .gb_X .gb_2d::before {
            background: #333;
            background: rgba(255, 255, 255, .2)
        }
        
        .gb_R {
            display: inline-block;
            flex: 0 0 auto;
            flex: 0 0 main-size
        }
        
        .gb_R.gb_Ue {
            float: right;
            order: 1
        }
        
        .gb_Ve {
            white-space: nowrap
        }
        
        .gb_T .gb_Ve {
            display: -webkit-flex;
            display: flex
        }
        
        .gb_Ve,
        .gb_R {
            margin-left: 0!important;
            margin-right: 0!important
        }
        
        .gb_Nb {
            background-image: url('//ssl.gstatic.com/gb/images/i1_1967ca6a.png');
            background-size: 528px 68px
        }
        
        @media (min-resolution:1.25dppx),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gb_Nb {
                background-image: url('//ssl.gstatic.com/gb/images/i2_2ec824b0.png')
            }
        }
        
        .gb_9a {
            min-width: 315px;
            padding-left: 30px;
            padding-right: 30px;
            position: relative;
            text-align: right;
            z-index: 986;
            align-items: center;
            justify-content: flex-end;
            -moz-user-select: -moz-none
        }
        
        .gb_1a .gb_9a {
            min-width: 0
        }
        
        .gb_9a.gb_R {
            flex: 1 1 auto;
            flex: 1 1 main-size
        }
        
        .gb_ac {
            line-height: normal;
            position: relative;
            text-align: left
        }
        
        .gb_ac.gb_R,
        .gb_He.gb_R,
        .gb_2a.gb_R {
            flex: 0 1 auto;
            flex: 0 1 main-size
        }
        
        .gb_Ie,
        .gb_Je {
            display: inline-block;
            padding: 0 0 0 15px;
            position: relative;
            vertical-align: middle
        }
        
        .gb_He {
            line-height: normal;
            padding-right: 15px
        }
        
        .gb_9a .gb_He.gb_U {
            padding-right: 0
        }
        
        .gb_2a {
            color: #404040;
            line-height: 30px;
            min-width: 30px;
            overflow: hidden;
            vertical-align: middle;
            text-overflow: ellipsis
        }
        
        #gb.gb_1a.gb_1a .gb_de,
        #gb.gb_1a.gb_1a .gb_ac>.gb_Je .gb_ee {
            background: none;
            border: none;
            color: #36c;
            cursor: pointer;
            filter: none;
            font-size: 11px;
            line-height: 26px;
            padding: 0;
            -moz-box-shadow: none;
            box-shadow: none
        }
        
        #gb.gb_1a.gb_X .gb_de,
        #gb.gb_1a.gb_X .gb_ac>.gb_Je .gb_ee {
            color: #fff
        }
        
        .gb_1a .gb_de {
            text-transform: uppercase
        }
        
        .gb_9a.gb_V {
            padding-left: 0;
            padding-right: 29px
        }
        
        .gb_9a.gb_Ke {
            max-width: 400px
        }
        
        .gb_Le {
            background-clip: content-box;
            background-origin: content-box;
            opacity: .27;
            padding: 22px;
            height: 16px;
            width: 16px
        }
        
        .gb_Le.gb_R {
            display: none
        }
        
        .gb_Le:hover,
        .gb_Le:focus {
            opacity: .55
        }
        
        .gb_Me {
            background-position: -219px -25px
        }
        
        .gb_Ne {
            background-position: -194px 0;
            padding-left: 30px;
            padding-right: 14px;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 990
        }
        
        .gb_5a:not(.gb_7a) .gb_Ne,
        .gb_V .gb_Me {
            display: inline-block
        }
        
        .gb_5a .gb_Me {
            padding-left: 30px;
            padding-right: 0;
            width: 0
        }
        
        .gb_5a:not(.gb_7a) .gb_Oe {
            display: none
        }
        
        .gb_9a.gb_R.gb_V,
        .gb_V:not(.gb_7a) .gb_ac {
            flex: 0 0 auto;
            flex: 0 0 main-size
        }
        
        .gb_Le,
        .gb_V .gb_He,
        .gb_7a .gb_ac {
            overflow: hidden
        }
        
        .gb_5a .gb_He {
            padding-right: 0
        }
        
        .gb_V .gb_ac {
            padding: 1px 1px 1px 0
        }
        
        .gb_5a .gb_ac {
            width: 75px
        }
        
        .gb_9a.gb_Pe,
        .gb_9a.gb_Pe .gb_Me,
        .gb_9a.gb_Pe .gb_Me::before,
        .gb_9a.gb_Pe .gb_He,
        .gb_9a.gb_Pe .gb_ac {
            -moz-transition: width .5s ease-in-out, min-width .5s ease-in-out, max-width .5s ease-in-out, padding .5s ease-in-out, left .5s ease-in-out;
            transition: width .5s ease-in-out, min-width .5s ease-in-out, max-width .5s ease-in-out, padding .5s ease-in-out, left .5s ease-in-out
        }
        
        .gb_T .gb_9a {
            min-width: 0
        }
        
        .gb_9a.gb_W,
        .gb_9a.gb_W .gb_ac,
        .gb_9a.gb_Qe,
        .gb_9a.gb_Qe .gb_ac {
            min-width: 0!important
        }
        
        .gb_9a.gb_W,
        .gb_9a.gb_W .gb_R {
            -moz-box-flex: 0 0 auto!important;
            flex: 0 0 auto!important
        }
        
        .gb_9a.gb_W .gb_2a {
            width: 30px!important
        }
        
        .gb_2d::-webkit-scrollbar {
            height: 15px;
            width: 15px
        }
        
        .gb_2d::-webkit-scrollbar-button {
            height: 0;
            width: 0
        }
        
        .gb_2d::-webkit-scrollbar-thumb {
            background-clip: padding-box;
            background-color: rgba(0, 0, 0, .3);
            border: 5px solid transparent;
            -moz-border-radius: 10px;
            border-radius: 10px;
            min-height: 20px;
            min-width: 20px;
            height: 5px;
            width: 5px
        }
        
        .gb_2d::-webkit-scrollbar-thumb:hover,
        .gb_2d::-webkit-scrollbar-thumb:active {
            background-color: rgba(0, 0, 0, .4)
        }
        
        #gb.gb_Ze {
            min-width: 980px
        }
        
        #gb.gb_Ze .gb_Xd {
            min-width: 0;
            position: static;
            width: 0
        }
        
        .gb_Ze .gb_2d {
            background: transparent;
            border-bottom-color: transparent
        }
        
        .gb_Ze .gb_2d::before {
            display: none
        }
        
        .gb_Ze.gb_Ze .gb_Q {
            display: inline-block
        }
        
        .gb_Ze.gb_9a .gb_He.gb_U {
            padding-right: 15px
        }
        
        .gb_T.gb_Ze .gb_S.gb_R {
            display: -webkit-flex;
            display: flex
        }
        
        .gb_Ze.gb_T #gbqf {
            display: block
        }
        
        .gb_Ze #gbq {
            height: 0;
            position: absolute
        }
        
        .gb_Ze.gb_9a {
            z-index: 987
        }
        
        sentinel {}
        
        #gbq .gbgt-hvr,
        #gbq .gbgt:focus {
            background-color: transparent;
            background-image: none
        }
        
        .gbqfh#gbq1 {
            display: none
        }
        
        .gbxx {
            display: none !important
        }
        
        #gbq {
            line-height: normal;
            position: relative;
            top: 0px;
            white-space: nowrap
        }
        
        #gbq {
            left: 0;
            width: 100%
        }
        
        #gbq2 {
            top: 0px;
            z-index: 986
        }
        
        #gbq4 {
            display: inline-block;
            max-height: 29px;
            overflow: hidden;
            position: relative
        }
        
        .gbqfh#gbq2 {
            z-index: 985
        }
        
        .gbqfh#gbq2 {
            margin: 0;
            margin-left: 0 !important;
            padding-top: 0;
            position: relative;
            top: 310px
        }
        
        .gbqfh #gbqf {
            margin: auto;
            min-width: 534px;
            padding: 0 !important
        }
        
        .gbqfh #gbqfbw {
            display: none
        }
        
        .gbqfh #gbqfbwa {
            display: block
        }
        
        .gbqfh #gbqf {
            max-width: 572px;
            min-width: 572px
        }
        
        .gbqfh .gbqfqw {
            border-right-width: 1px
        }
        
        .gbii::before {
            content: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s32-c-mo/photo.jpg);
            position: absolute
        }
        
        .gbip::before {
            content: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s96-c-mo/photo.jpg);
            position: absolute
        }
        
        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gbii::before {
                content: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s64-c-mo/photo.jpg)
            }
            .gbip::before {
                content: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s192-c-mo/photo.jpg)
            }
        }
        
        .gbii {
            background-image: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s32-c-mo/photo.jpg)
        }
        
        .gbip {
            background-image: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s96-c-mo/photo.jpg)
        }
        
        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gbii {
                background-image: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s64-c-mo/photo.jpg)
            }
            .gbip {
                background-image: url(//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s192-c-mo/photo.jpg)
            }
        }
    </style>
    <style data-jiis="cc" id="gstyle">
        html,
        body {
            height: 100%;
            margin: 0
        }
        
        #viewport {
            min-height: 100%;
            position: relative;
            width: 100%
        }
        
        .content {
            padding-bottom: 35px
        }
        
        #footer {
            bottom: 0;
            font-size: 10pt;
            height: 35px;
            position: absolute;
            width: 100%
        }
        
        #gog {
            padding: 3px 8px 0
        }
        
        .gac_m td {
            line-height: 17px
        }
        
        body,
        td,
        a,
        p,
        .h {
            font-family: arial, sans-serif
        }
        
        .h {
            color: #1a0dab;
            font-size: 20px
        }
        
        .q {
            color: #00c
        }
        
        .ts td {
            padding: 0
        }
        
        .ts {
            border-collapse: collapse
        }
        
        em {
            font-weight: bold;
            font-style: normal
        }
        
        .ds {
            display: inline-block;
        }
        
        span.ds {
            margin: 3px 0 4px;
            margin-left: 4px
        }
        
        .ctr-p {
            margin: 0 auto;
            min-width: 980px
        }
        
        a.gb1,
        a.gb2,
        a.gb3,
        a.gb4 {
            color: #11c !important
        }
        
        body {
            background: #fff;
            color: #222
        }
        
        a {
            color: #1a0dab;
            text-decoration: none
        }
        
        a:hover,
        a:active {
            text-decoration: underline
        }
        
        .fl a {
            color: #1a0dab
        }
        
        a:visited {
            color: #609
        }
        
        a.gb1,
        a.gb4 {
            text-decoration: underline
        }
        
        a.gb3:hover {
            text-decoration: none
        }
        
        #ghead a.gb2:hover {
            color: #fff !important
        }
        
        .sblc {
            padding-top: 5px
        }
        
        .sblc a {
            display: block;
            margin: 2px 0;
            margin-left: 13px;
            font-size: 11px
        }
        
        .lsbb {
            height: 30px;
            display: block
        }
        
        .ftl,
        #footer a {
            color: #666;
            margin: 2px 10px 0
        }
        
        #footer a:active {
            color: #dd4b39
        }
        
        .lsb {
            border: none;
            color: #000;
            cursor: pointer;
            height: 30px;
            margin: 0;
            outline: 0;
            vertical-align: top
        }
        
        .lst:focus {
            outline: none
        }
        
        body,
        html {
            font-size: small
        }
        
        h1,
        ol,
        ul,
        li {
            margin: 0;
            padding: 0
        }
        
        .nojsv {
            visibility: hidden
        }
        
        .hp #logocont.nojsv {
            display: none
        }
        
        #body,
        #footer {
            display: block
        }
        
        .igehp {
            display: none
        }
        
        #flci {
            float: left;
            margin-left: 0;
            text-align: left;
            width: 0
        }
        
        #fll {
            float: right;
            text-align: right;
            width: 100%
        }
        
        #ftby {
            padding-left: 0
        }
        
        #ftby>div,
        #fll>div,
        #footer a {
            display: inline-block
        }
        
        @media only screen and (min-width:1222px) {
            #ftby {
                margin: 0 44px
            }
        }
        
        .logo-subtext {
            color: #4285f4;
            font: 16px/16px roboto-regular, arial, sans-serif;
            left: 215px;
            position: relative;
            top: 76px;
            white-space: nowrap
        }
    </style>
    <style>
        #ss-box {
            background: #fff;
            border: 1px solid;
            border-color: #c9d7f1 #36c #36c #a2bae7;
            left: 0;
            margin-top: .1em;
            position: absolute;
            visibility: hidden;
            z-index: 103
        }
        
        #ss-box a {
            display: block;
            padding: .2em .31em;
            text-decoration: none
        }
        
        #ss-box a:hover {
            background: #4d90fe;
            color: #fff !important
        }
        
        a.ss-selected {
            color: #222 !important;
            font-weight: bold
        }
        
        a.ss-unselected {
            color: #1a0dab !important
        }
        
        .ss-selected .mark {
            display: inline
        }
        
        .ss-unselected .mark {
            visibility: hidden
        }
        
        #ss-barframe {
            background: #fff;
            left: 0;
            position: absolute;
            visibility: hidden;
            z-index: 100
        }
        
        .gl {
            white-space: nowrap
        }
        
        .big .tsf-p {
            padding-left: 126px;
            padding-right: 352px
        }
        
        .hp .tsf-p {
            padding-left: 173px;
            padding-right: 173px
        }
        
        .hp #tsf {
            margin: 0 auto;
            width: 833px
        }
        
        #tsf {
            width: 833px
        }
        
        .big #tsf,
        .hp .big #tsf {
            width: 1139px
        }
        
        .tsf-p {
            padding-left: 126px;
            padding-right: 46px
        }
        
        .hp .big .tsf-p {
            padding-left: 284px;
            padding-right: 284px
        }
    </style>
    <script>
        var _gjwl = location;

        function _gjuc() {
            var a = _gjwl.href.indexOf("#");
            return 0 <= a && (a = _gjwl.href.substring(a + 1), /(^|&)q=/.test(a) && -1 == a.indexOf("#") && !/(^|&)cad=h($|&)/.test(a)) ? (_gjwl.replace("/search?" + a.replace(/(^|&)fp=[^&]*/g, "") + "&cad=h"), 1) : 0
        }

        function _gjh() {
            !_gjuc() && google.x({
                id: "GJH"
            }, function() {
                google.nav && google.nav.gjh && google.nav.gjh()
            })
        };
        (function() {
            function b() {
                if (!google.dcl) {
                    google.dcl = !0;
                    for (var a; a = c.shift();) a()
                }
            }
            var c = [function() {
                google.c && google.tick("load", "dcl")
            }];
            google.dcl = !1;
            google.dclc = function(a) {
                google.dcl ? a() : c.push(a)
            };
            window.addEventListener ? (document.addEventListener("DOMContentLoaded", b, !1), window.addEventListener("load", b, !1)) : window.attachEvent && window.attachEvent("onload", b)
        })();
        window.rwt = function(a, g, h, n, o, i, c, p, j, d) {
            return true
        };
        (window['gbar'] = window['gbar'] || {})._CONFIG = [
            [
                [0, "www.gstatic.com", "og.og2.en_US.c1AnQ08q110.O", "co.in", "en", "1", 0, [3, 2, ".40.64.", "r_cp.", "1300102,3700324,3700388", "1456802997", "0"], "40400", "ecrXVvW0Ec6dugTGvoTwCw", 0, 0, "og.og2.-2bmdog6gcr94.L.F4.O", "AA2YrTt1qQ-Vp0jMYMNvPJonRZda5l59Pg", "AA2YrTsxCoVaV974kIMh2_-aw-njNz-qDQ", "", 2, 0, 200, "IND"],
                ["", "https", "plus.google.com", "", "/u/0/_/notifications/frame", "sourceid=1", "pid=1", "en", 5, "https://accounts.google.com/ServiceLogin?hl=en\u0026passive=true\u0026continue=https://www.google.co.in/webhp%3Fhl%3Den", 0, 30000, null, "%1$s Reload the page %2$s and try again."], 0, ["m;/_/scs/abc-static/_/js/k=gapi.gapi.en._cqmy4YB_As.O/m=__features__/am=AAQ/rt=j/d=1/rs=AHpOoo_Od0DD_-BqqphVDSkrTfHyZDmCtA", "https://apis.google.com", "", "1", "1", "", null, 1, "es_plusone_gc_20160224.0_p0", "en"],
                ["1", "gci_91f30755d6a6b787dcc2a4062e6e9824.js", "googleapis.client:plusone:gapi.iframes", "0", "en"],
                ["1", "iframes-styles-slide-menu", "https", "plus.google.com", "", "/u/0/_/socialgraph/circlepicker/menu", "hl=en"],
                [100, "Notifications", 1, "https", "plus.google.com", "", 0, "", "POST", "/u/0/_/n/gcosuc", 3000, "Google notifications", 1, "There was an error loading notifications.", "plus.google.com"], null, [0.009999999776482582, "co.in", "1", [null, "", "w", null, 1, 5184000, 1, 0], null, [
                        ["", "", "", 0, 0, -1]
                    ],
                    [null, 0, 0], 0, null, null, ["5061451", "google\\.(com|ru|ca|by|kz|com\\.mx|com\\.tr)$", 1]
                ],
                ["%1$s (default)", "Google+ page", 0, "%1$s (delegated)", 1, null, 96, "https://www.google.co.in/webhp?authuser=$authuser", null, null, null, 1, "https://accounts.google.com/ListAccounts?listPages=0\u0026mo=1\u0026mn=1", 0, "dashboard/overview", null, "Business account you own", "Business account you manage", "Business account icon", "Google+ Profile Icon", "", 0, 1],
                [1, 1, 0, null, "0", "akshayraul07@gmail.com", "", "APfa0br5H3J-x-UWcoNgYFdkLopz1Q5fiuHXT32yixoOQ8Tg-9ritatj3MgLeIcExXSaC6aTXU5MFCoemkutzWwXOb24wiWf-g=="],
                [1, 0.001000000047497451, 1],
                [1, 0.1000000014901161, 2, 1],
                [0, "", null, "", 0, "There was an error loading your Marketplace apps.", "You have no Marketplace apps.", 1, [1, "https://www.google.co.in/webhp?tab=ww", "Search", "", "0 -276px", null, 0], null, null, 1, 0, [
                    [1, "%1$s of %2$s", "%1$s of %2$s in the more section"]
                ]],
                [1],
                [0, 1, ["lg"], 1, ["lat"]],
                [
                    ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "drt", "def", "", "", "", "", "", ""],
                    [""]
                ], null, null, [1, null, null, "[[]]", ["https", "plus.google.com", 0, "/u/0", "rt=j\u0026sourceid=1", ["/u/0/_/og/storage/get", ""],
                    ["/u/0/_/og/storage/set", ""],
                    ["/u/0/_/og/storage/remove", ""]
                ], "APfa0br5H3J-x-UWcoNgYFdkLopz1Q5fiuHXT32yixoOQ8Tg-9ritatj3MgLeIcExXSaC6aTXU5MFCoemkutzWwXOb24wiWf-g=="],
                [30, 127, 1, 0, 60], null, null, null, ["https", "clients5.google.com", "", "pagead/drt/dn/"], null, [1, 1]
            ]
        ];
        (window['gbar'] = window['gbar'] || {})._DPG = [{
            '_fdm_': ['_r'],
            'dbg': ['sy10', 'sy11', 'sy12', 'sy13', 'sy5', 'sy9'],
            'def': ['sy10', 'sy11', 'sy12', 'sy14', 'sy15', 'sy16', 'sy17', 'sy18', 'sy20', 'sy21', 'sy22', 'sy24', 'sy25', 'sy27', 'sy29', 'sy5', 'sy6', 'sy7', 'sy9'],
            'drt': ['sy5', 'sy6', 'sy7', 'sy8', 'sy9'],
            'fg': ['sy10', 'sy12', 'sy14', 'sy16', 'sy27', 'sy29', 'sy5', 'sy7'],
            'fot': ['sy10', 'sy11', 'sy12', 'sy14', 'sy15', 'sy16', 'sy17', 'sy18', 'sy20', 'sy21', 'sy22', 'sy5', 'sy9'],
            'ig': ['sy10', 'sy11', 'sy12', 'sy14', 'sy16', 'sy18', 'sy20', 'sy21', 'sy22', 'sy5', 'sy9'],
            'in': ['_r'],
            'jb': ['sy5', 'sy6', 'sy7', 'sy8', 'sy9'],
            'lat': ['sy10', 'sy11', 'sy12', 'sy14', 'sy16', 'sy17', 'sy18', 'sy20', 'sy21', 'sy24', 'sy25', 'sy29', 'sy5', 'sy6', 'sy7', 'sy9'],
            'lg': ['sy10', 'sy11', 'sy12', 'sy14', 'sy20', 'sy5', 'sy9'],
            'sg': ['sy12'],
            'sy10': ['sy5'],
            'sy11': ['sy10', 'sy5'],
            'sy12': ['_r'],
            'sy13': ['sy10', 'sy12', 'sy5'],
            'sy14': ['sy10', 'sy5'],
            'sy15': ['sy10', 'sy14', 'sy17', 'sy20', 'sy22', 'sy5'],
            'sy16': ['sy10', 'sy14', 'sy5'],
            'sy17': ['sy14', 'sy18'],
            'sy18': ['sy5'],
            'sy20': ['sy10', 'sy11', 'sy12', 'sy14', 'sy5', 'sy9'],
            'sy21': ['sy10', 'sy11', 'sy20', 'sy5'],
            'sy22': ['sy10', 'sy14'],
            'sy24': ['sy12', 'sy5', 'sy6', 'sy7', 'sy9'],
            'sy25': ['sy10', 'sy14', 'sy16', 'sy17', 'sy20', 'sy24', 'sy29', 'sy5', 'sy6', 'sy7', 'sy9'],
            'sy27': ['sy10', 'sy14', 'sy16', 'sy29', 'sy5'],
            'sy29': ['sy5', 'sy7'],
            'sy5': ['_r'],
            'sy6': ['sy5', 'sy7'],
            'sy7': ['_r'],
            'sy8': ['sy5', 'sy6'],
            'sy9': ['sy5']
        }];
        (window['gbar'] = window['gbar'] || {})._LDD = ["in", "fot"];
        this.gbar_ = this.gbar_ || {};
        (function(_) {
            var window = this;
            try {
                var fa, ga;
                _.aa = _.aa || {};
                _.m = this;
                _.n = function(a) {
                    return void 0 !== a
                };
                _.q = function(a, c) {
                    for (var d = a.split("."), e = c || _.m, f; f = d.shift();)
                        if (null != e[f]) e = e[f];
                        else return null;
                    return e
                };
                _.ba = function(a) {
                    a.R = function() {
                        return a.te ? a.te : a.te = new a
                    }
                };
                _.ca = function(a) {
                    var c = typeof a;
                    if ("object" == c)
                        if (a) {
                            if (a instanceof Array) return "array";
                            if (a instanceof Object) return c;
                            var d = Object.prototype.toString.call(a);
                            if ("[object Window]" == d) return "object";
                            if ("[object Array]" == d || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice")) return "array";
                            if ("[object Function]" == d || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("call")) return "function"
                        } else return "null";
                    else if ("function" == c && "undefined" == typeof a.call) return "object";
                    return c
                };
                _.da = function(a) {
                    return "array" == _.ca(a)
                };
                _.t = function(a) {
                    return "string" == typeof a
                };
                _.ea = "closure_uid_" + (1E9 * Math.random() >>> 0);
                fa = function(a, c, d) {
                    return a.call.apply(a.bind, arguments)
                };
                ga = function(a, c, d) {
                    if (!a) throw Error();
                    if (2 < arguments.length) {
                        var e = Array.prototype.slice.call(arguments, 2);
                        return function() {
                            var d = Array.prototype.slice.call(arguments);
                            Array.prototype.unshift.apply(d, e);
                            return a.apply(c, d)
                        }
                    }
                    return function() {
                        return a.apply(c, arguments)
                    }
                };
                _.v = function(a, c, d) {
                    _.v = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? fa : ga;
                    return _.v.apply(null, arguments)
                };
                _.w = Date.now || function() {
                    return +new Date
                };
                _.x = function(a, c) {
                    var d = a.split("."),
                        e = _.m;
                    d[0] in e || !e.execScript || e.execScript("var " + d[0]);
                    for (var f; d.length && (f = d.shift());) !d.length && _.n(c) ? e[f] = c : e[f] ? e = e[f] : e = e[f] = {}
                };
                _.y = function(a, c) {
                    function d() {}
                    d.prototype = c.prototype;
                    a.K = c.prototype;
                    a.prototype = new d;
                    a.prototype.constructor = a;
                    a.Vh = function(a, d, g) {
                        for (var h = Array(arguments.length - 2), l = 2; l < arguments.length; l++) h[l - 2] = arguments[l];
                        return c.prototype[d].apply(a, h)
                    }
                };
                var ha = function(a, c, d) {
                    this.A = a;
                    this.o = !1;
                    this.b = c;
                    this.w = d
                };
                ha.prototype.Sa = function(a) {
                    if (this.o) throw Error("b`" + this.b);
                    try {
                        a.apply(this.A, this.w), this.o = !0
                    } catch (c) {}
                };
                _.z = function() {
                    this.Ua = this.Ua;
                    this.Ra = this.Ra
                };
                _.z.prototype.Ua = !1;
                _.z.prototype.isDisposed = function() {
                    return this.Ua
                };
                _.z.prototype.da = function() {
                    this.Ua || (this.Ua = !0, this.N())
                };
                _.z.prototype.N = function() {
                    if (this.Ra)
                        for (; this.Ra.length;) this.Ra.shift()()
                };
                var ia = function(a) {
                    _.z.call(this);
                    this.w = a;
                    this.b = [];
                    this.o = {}
                };
                _.y(ia, _.z);
                ia.prototype.A = function(a) {
                    var c = (0, _.v)(function() {
                        var c = Array.prototype.slice.call(arguments);
                        this.b.push(new ha(this.w, a, c))
                    }, this);
                    return this.o[a] = c
                };
                ia.prototype.Sa = function() {
                    for (var a = this.b.length, c = this.b, d = [], e = 0; e < a; ++e) {
                        var f = c[e].b,
                            g;
                        a: {
                            g = this.w;
                            for (var h = f.split("."), l = h.length, p = 0; p < l; ++p)
                                if (g[h[p]]) g = g[h[p]];
                                else {
                                    g = null;
                                    break a
                                }
                            g = g instanceof Function ? g : null
                        }
                        if (g && g != this.o[f]) try {
                            c[e].Sa(g)
                        } catch (r) {} else d.push(c[e])
                    }
                    this.b = d.concat(c.slice(a))
                };
                _.ja = function(a) {
                    if (Error.captureStackTrace) Error.captureStackTrace(this, _.ja);
                    else {
                        var c = Error().stack;
                        c && (this.stack = c)
                    }
                    a && (this.message = String(a))
                };
                _.y(_.ja, Error);
                _.ja.prototype.name = "CustomError";
                var la;
                _.ka = String.prototype.trim ? function(a) {
                    return a.trim()
                } : function(a) {
                    return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g, "")
                };
                _.ma = function(a, c) {
                    for (var d = 0, e = (0, _.ka)(String(a)).split("."), f = (0, _.ka)(String(c)).split("."), g = Math.max(e.length, f.length), h = 0; 0 == d && h < g; h++) {
                        var l = e[h] || "",
                            p = f[h] || "",
                            r = RegExp("(\\d*)(\\D*)", "g"),
                            u = RegExp("(\\d*)(\\D*)", "g");
                        do {
                            var D = r.exec(l) || ["", "", ""],
                                X = u.exec(p) || ["", "", ""];
                            if (0 == D[0].length && 0 == X[0].length) break;
                            d = la(0 == D[1].length ? 0 : (0, window.parseInt)(D[1], 10), 0 == X[1].length ? 0 : (0, window.parseInt)(X[1], 10)) || la(0 == D[2].length, 0 == X[2].length) || la(D[2], X[2])
                        } while (0 == d)
                    }
                    return d
                };
                la = function(a, c) {
                    return a < c ? -1 : a > c ? 1 : 0
                };
                _.na = Array.prototype.indexOf ? function(a, c, d) {
                    return Array.prototype.indexOf.call(a, c, d)
                } : function(a, c, d) {
                    d = null == d ? 0 : 0 > d ? Math.max(0, a.length + d) : d;
                    if (_.t(a)) return _.t(c) && 1 == c.length ? a.indexOf(c, d) : -1;
                    for (; d < a.length; d++)
                        if (d in a && a[d] === c) return d;
                    return -1
                };
                _.oa = Array.prototype.forEach ? function(a, c, d) {
                    Array.prototype.forEach.call(a, c, d)
                } : function(a, c, d) {
                    for (var e = a.length, f = _.t(a) ? a.split("") : a, g = 0; g < e; g++) g in f && c.call(d, f[g], g, a)
                };
                _.pa = Array.prototype.filter ? function(a, c, d) {
                    return Array.prototype.filter.call(a, c, d)
                } : function(a, c, d) {
                    for (var e = a.length, f = [], g = 0, h = _.t(a) ? a.split("") : a, l = 0; l < e; l++)
                        if (l in h) {
                            var p = h[l];
                            c.call(d, p, l, a) && (f[g++] = p)
                        }
                    return f
                };
                _.qa = Array.prototype.map ? function(a, c, d) {
                    return Array.prototype.map.call(a, c, d)
                } : function(a, c, d) {
                    for (var e = a.length, f = Array(e), g = _.t(a) ? a.split("") : a, h = 0; h < e; h++) h in g && (f[h] = c.call(d, g[h], h, a));
                    return f
                };
                _.ra = Array.prototype.reduce ? function(a, c, d, e) {
                    e && (c = (0, _.v)(c, e));
                    return Array.prototype.reduce.call(a, c, d)
                } : function(a, c, d, e) {
                    var f = d;
                    (0, _.oa)(a, function(d, h) {
                        f = c.call(e, f, d, h, a)
                    });
                    return f
                };
                _.sa = Array.prototype.some ? function(a, c, d) {
                    return Array.prototype.some.call(a, c, d)
                } : function(a, c, d) {
                    for (var e = a.length, f = _.t(a) ? a.split("") : a, g = 0; g < e; g++)
                        if (g in f && c.call(d, f[g], g, a)) return !0;
                    return !1
                };
                var Aa;
                _.ta = function() {
                    this.b = {};
                    this.o = {}
                };
                _.ba(_.ta);
                _.va = function(a, c) {
                    a.R = function() {
                        return _.ua(_.ta.R(), c)
                    };
                    a.yh = function() {
                        return _.ta.R().b[c] || null
                    }
                };
                _.wa = function(a) {
                    return _.ua(_.ta.R(), a)
                };
                _.ya = function(a, c) {
                    var d = _.ta.R();
                    if (a in d.b) {
                        if (d.b[a] != c) throw new xa(a);
                    } else {
                        d.b[a] = c;
                        var e = d.o[a];
                        if (e)
                            for (var f = 0, g = e.length; f < g; f++) e[f].b(d.b, a);
                        delete d.o[a]
                    }
                };
                _.ua = function(a, c) {
                    if (c in a.b) return a.b[c];
                    throw new za(c);
                };
                Aa = function(a) {
                    _.ja.call(this);
                    this.A = a
                };
                _.y(Aa, _.ja);
                var xa = function(a) {
                    Aa.call(this, a)
                };
                _.y(xa, Aa);
                var za = function(a) {
                    Aa.call(this, a)
                };
                _.y(za, Aa);
                var Ca;
                _.Ba = "bbh bbr bbs has prm sngw so".split(" ");
                Ca = new ia(_.m);
                _.ya("api", Ca);
                for (var Da = "addExtraLink addLink aomc asmc close cp.c cp.l cp.me cp.ml cp.rc cp.rel ela elc elh gpca gpcr lGC lPWF ldb mls noam paa pc pca pcm pw.clk pw.hvr qfaae qfaas qfaau qfae qfas qfau qfhi qm qs qsi rtl sa setContinueCb snaw sncw som sp spd spn spp sps tsl tst up.aeh up.aop up.dpc up.iic up.nap up.r up.sl up.spd up.tp upel upes upet".split(" ").concat(_.Ba), Ea = (0, _.v)(Ca.A, Ca), Fa = 0; Fa < Da.length; Fa++) {
                    var Ga = "gbar." + Da[Fa];
                    null == _.q(Ga, window) && _.x(Ga, Ea(Ga))
                }
                _.x("gbar.up.gpd", function() {
                    return ""
                });
                a: {
                    var Ia = _.m.navigator;
                    if (Ia) {
                        var Ja = Ia.userAgent;
                        if (Ja) {
                            _.Ha = Ja;
                            break a
                        }
                    }
                    _.Ha = ""
                }
                _.A = function(a) {
                    return -1 != _.Ha.indexOf(a)
                };
                var Ka = function() {
                        return _.A("Opera") || _.A("OPR")
                    },
                    La = function() {
                        return (_.A("Chrome") || _.A("CriOS")) && !Ka() && !_.A("Edge")
                    };
                _.Ma = function() {
                    return _.A("iPhone") && !_.A("iPod") && !_.A("iPad")
                };
                var Ra, Za, $a, eb, hb, fb;
                _.Na = Ka();
                _.B = _.A("Trident") || _.A("MSIE");
                _.Oa = _.A("Edge");
                _.Pa = _.Oa || _.B;
                _.Qa = _.A("Gecko") && !(-1 != _.Ha.toLowerCase().indexOf("webkit") && !_.A("Edge")) && !(_.A("Trident") || _.A("MSIE")) && !_.A("Edge");
                _.C = -1 != _.Ha.toLowerCase().indexOf("webkit") && !_.A("Edge");
                Ra = _.m.navigator || null;
                _.Sa = Ra && Ra.platform || "";
                _.Ta = _.A("Macintosh");
                _.Ua = _.A("Windows");
                _.Va = _.A("Linux") || _.A("CrOS");
                _.Wa = _.A("Android");
                _.Xa = _.Ma();
                _.Ya = _.A("iPad");
                Za = function() {
                    var a = _.m.document;
                    return a ? a.documentMode : void 0
                };
                a: {
                    var ab = "",
                        bb = function() {
                            var a = _.Ha;
                            if (_.Qa) return /rv\:([^\);]+)(\)|;)/.exec(a);
                            if (_.Oa) return /Edge\/([\d\.]+)/.exec(a);
                            if (_.B) return /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);
                            if (_.C) return /WebKit\/(\S+)/.exec(a);
                            if (_.Na) return /(?:Version)[ \/]?(\S+)/.exec(a)
                        }();bb && (ab = bb ? bb[1] : "");
                    if (_.B) {
                        var cb = Za();
                        if (null != cb && cb > (0, window.parseFloat)(ab)) {
                            $a = String(cb);
                            break a
                        }
                    }
                    $a = ab
                }
                _.db = $a;
                eb = {};
                _.E = function(a) {
                    return eb[a] || (eb[a] = 0 <= _.ma(_.db, a))
                };
                _.gb = function(a) {
                    return Number(fb) >= a
                };
                hb = _.m.document;
                fb = hb && _.B ? Za() || ("CSS1Compat" == hb.compatMode ? (0, window.parseInt)(_.db, 10) : 5) : void 0;
                _.ib = _.A("Firefox");
                _.jb = _.Ma() || _.A("iPod");
                _.kb = _.A("iPad");
                _.lb = _.A("Android") && !(La() || _.A("Firefox") || Ka() || _.A("Silk"));
                _.mb = La();
                _.nb = _.A("Safari") && !(La() || _.A("Coast") || Ka() || _.A("Edge") || _.A("Silk") || _.A("Android")) && !(_.Ma() || _.A("iPad") || _.A("iPod"));
                var ob = null;
                var pb;
                _.qb = function(a) {
                    return (new pb(void 0)).o(a)
                };
                pb = function(a) {
                    this.b = a
                };
                pb.prototype.o = function(a) {
                    var c = [];
                    rb(this, a, c);
                    return c.join("")
                };
                var rb = function(a, c, d) {
                        if (null == c) d.push("null");
                        else {
                            if ("object" == typeof c) {
                                if (_.da(c)) {
                                    var e = c;
                                    c = e.length;
                                    d.push("[");
                                    for (var f = "", g = 0; g < c; g++) d.push(f), f = e[g], rb(a, a.b ? a.b.call(e, String(g), f) : f, d), f = ",";
                                    d.push("]");
                                    return
                                }
                                if (c instanceof String || c instanceof Number || c instanceof Boolean) c = c.valueOf();
                                else {
                                    d.push("{");
                                    g = "";
                                    for (e in c) Object.prototype.hasOwnProperty.call(c, e) && (f = c[e], "function" != typeof f && (d.push(g), sb(e, d), d.push(":"), rb(a, a.b ? a.b.call(c, e, f) : f, d), g = ","));
                                    d.push("}");
                                    return
                                }
                            }
                            switch (typeof c) {
                                case "string":
                                    sb(c,
                                        d);
                                    break;
                                case "number":
                                    d.push((0, window.isFinite)(c) && !(0, window.isNaN)(c) ? String(c) : "null");
                                    break;
                                case "boolean":
                                    d.push(String(c));
                                    break;
                                case "function":
                                    d.push("null");
                                    break;
                                default:
                                    throw Error("f`" + typeof c);
                            }
                        }
                    },
                    tb = {
                        '"': '\\"',
                        "\\": "\\\\",
                        "/": "\\/",
                        "\b": "\\b",
                        "\f": "\\f",
                        "\n": "\\n",
                        "\r": "\\r",
                        "\t": "\\t",
                        "\x0B": "\\u000b"
                    },
                    ub = /\uffff/.test("\uffff") ? /[\\\"\x00-\x1f\x7f-\uffff]/g : /[\\\"\x00-\x1f\x7f-\xff]/g,
                    sb = function(a, c) {
                        c.push('"', a.replace(ub, function(a) {
                            var c = tb[a];
                            c || (c = "\\u" + (a.charCodeAt(0) | 65536).toString(16).substr(1), tb[a] = c);
                            return c
                        }), '"')
                    };
                var vb;
                _.F = function() {};
                vb = "function" == typeof window.Uint8Array;
                _.G = function(a, c, d, e, f) {
                    a.b = null;
                    c || (c = d ? [d] : []);
                    a.G = d ? String(d) : void 0;
                    a.D = 0 === d ? -1 : 0;
                    a.w = c;
                    a: {
                        if (a.w.length && (c = a.w.length - 1, (d = a.w[c]) && "object" == typeof d && !_.da(d))) {
                            a.C = c - a.D;
                            a.A = d;
                            break a
                        } - 1 < e ? (a.C = e, a.A = null) : a.C = Number.MAX_VALUE
                    }
                    if (f)
                        for (e = 0; e < f.length; e++) c = f[e], c < a.C ? (c += a.D, a.w[c] = a.w[c] || _.xb) : a.A[c] = a.A[c] || _.xb
                };
                _.xb = [];
                _.H = function(a, c) {
                    if (c < a.C) {
                        var d = c + a.D,
                            e = a.w[d];
                        return e === _.xb ? a.w[d] = [] : e
                    }
                    e = a.A[c];
                    return e === _.xb ? a.A[c] = [] : e
                };
                _.I = function(a, c, d) {
                    a.b || (a.b = {});
                    if (!a.b[d]) {
                        var e = _.H(a, d);
                        e && (a.b[d] = new c(e))
                    }
                    return a.b[d]
                };
                _.F.prototype.Qa = function() {
                    return this.w
                };
                var yb = _.m.JSON && _.m.JSON.stringify || "object" === typeof JSON && JSON.stringify;
                _.F.prototype.o = vb ? function() {
                    var a = window.Uint8Array.prototype.toJSON;
                    window.Uint8Array.prototype.toJSON = function() {
                        if (!ob) {
                            ob = {};
                            for (var a = 0; 65 > a; a++) ob[a] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(a)
                        }
                        for (var a = ob, c = [], f = 0; f < this.length; f += 3) {
                            var g = this[f],
                                h = f + 1 < this.length,
                                l = h ? this[f + 1] : 0,
                                p = f + 2 < this.length,
                                r = p ? this[f + 2] : 0,
                                u = g >> 2,
                                g = (g & 3) << 4 | l >> 4,
                                l = (l & 15) << 2 | r >> 6,
                                r = r & 63;
                            p || (r = 64, h || (l = 64));
                            c.push(a[u], a[g], a[l], a[r])
                        }
                        return c.join("")
                    };
                    try {
                        var c = yb.call(null, this.Qa())
                    } finally {
                        window.Uint8Array.prototype.toJSON = a
                    }
                    return c
                } : yb ? function() {
                    return yb.call(null, this.Qa())
                } : function() {
                    return _.qb(this.Qa())
                };
                _.F.prototype.toString = function() {
                    return this.w.toString()
                };
                _.zb = function(a) {
                    _.G(this, a, 0, -1, null)
                };
                _.y(_.zb, _.F);
                _.J = function(a, c) {
                    return null != a ? !!a : !!c
                };
                _.K = function(a) {
                    var c;
                    void 0 == c && (c = "");
                    return null != a ? a : c
                };
                _.L = function(a, c) {
                    void 0 == c && (c = 0);
                    return null != a ? a : c
                };
                var Ab = function(a) {
                    _.G(this, a, 0, -1, null)
                };
                _.y(Ab, _.F);
                _.Bb = function(a) {
                    _.G(this, a, 0, -1, null)
                };
                _.y(_.Bb, _.F);
                var Cb = function(a) {
                    _.G(this, a, 0, -1, null)
                };
                _.y(Cb, _.F);
                Cb.prototype.Vc = function() {
                    return _.I(this, _.Bb, 14)
                };
                var Db = new Cb(window.gbar && window.gbar._CONFIG ? window.gbar._CONFIG[0] : [
                        [, , , , , , , []],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        []
                    ]),
                    Eb;
                Eb = _.H(Db, 3);
                _.Fb = _.J(Eb);
                _.Gb = function() {};
                _.x("gbar_._DumpException", function(a) {
                    if (_.Fb) throw a;
                    _.Gb(a)
                });
                var Hb = function() {
                    this.o = !1;
                    this.b = []
                };
                Hb.prototype.w = function(a) {
                    if (!this.o) {
                        this.o = !0;
                        for (var c = 0; c < this.b.length; c++) try {
                            this.b[c]()
                        } catch (d) {
                            a(d)
                        }
                        this.b = null;
                        try {
                            _.wa("api").Sa()
                        } catch (d) {}
                    }
                };
                _.Ib = new Hb;
                _.Jb = function() {
                    _.z.call(this);
                    this.Qg = Db
                };
                _.y(_.Jb, _.z);
                _.va(_.Jb, "cs");
                _.M = function() {
                    return _.Jb.R().Qg
                };
                _.Kb = function() {
                    return _.I(_.M(), Ab, 1) || new Ab
                };
                _.ya("cs", new _.Jb);
                var Lb = new function() {
                        this.b = _.I(_.Kb(), _.zb, 8) || new _.zb
                    },
                    Mb = _.L(_.H(Lb.b, 2)),
                    Nb = _.K(_.H(Lb.b, 4)),
                    Ob = _.K(_.H(Lb.b, 3)),
                    Pb = _.K(_.H(Lb.b, 5)),
                    Qb, Rb = Lb.b;
                Qb = null != _.H(Rb, 1) ? _.H(Rb, 1) : 1;
                _.x("gbar.bv", {
                    n: Mb,
                    r: Nb,
                    f: Ob,
                    e: Pb,
                    m: _.L(Qb, 1)
                });
                _.x("gbar.kn", function() {
                    return !0
                });
                _.x("gbar.sb", function() {
                    return !1
                });
                _.Tb = function() {
                    this.b = "";
                    this.o = _.Sb
                };
                _.Tb.prototype.qb = !0;
                _.Sb = {};
                _.Tb.prototype.ab = function() {
                    return this.b
                };
                _.Ub = function(a) {
                    var c = new _.Tb;
                    c.b = a;
                    return c
                };
                _.Vb = _.Ub("");
                _.Xb = function() {
                    this.b = "";
                    this.o = _.Wb
                };
                _.Xb.prototype.qb = !0;
                _.Xb.prototype.ab = function() {
                    return this.b
                };
                _.Xb.prototype.hd = !0;
                _.Xb.prototype.Eb = function() {
                    return 1
                };
                _.Wb = {};
                _.Yb = function(a) {
                    var c = new _.Xb;
                    c.b = a;
                    return c
                };
                _.Yb("about:blank");
                _.ac = function() {
                    this.b = "";
                    this.w = _.$b;
                    this.o = null
                };
                _.ac.prototype.hd = !0;
                _.ac.prototype.Eb = function() {
                    return this.o
                };
                _.ac.prototype.qb = !0;
                _.ac.prototype.ab = function() {
                    return this.b
                };
                _.$b = {};
                _.bc = function(a, c) {
                    var d = new _.ac;
                    d.b = a;
                    d.o = c;
                    return d
                };
                _.bc("<!DOCTYPE html>", 0);
                _.cc = _.bc("", 0);
                _.dc = _.bc("<br>", 0);
                _.ec = !_.B || _.gb(9);
                _.fc = !_.Qa && !_.B || _.B && _.gb(9) || _.Qa && _.E("1.9.1");
                _.gc = _.B && !_.E("9");
                _.hc = _.B || _.Na || _.C;
            } catch (e) {
                _._DumpException(e)
            }
            try {
                _.x("gbar.elr", function() {
                    return {
                        es: {
                            f: 152,
                            h: 60,
                            m: 30
                        },
                        mo: "md",
                        vh: window.innerHeight || 0,
                        vw: window.innerWidth || 0
                    }
                });
            } catch (e) {
                _._DumpException(e)
            }
        })(this.gbar_);
        // Google Inc.
    </script>
    <link href="/?hl=en" rel="canonical">
</head>

<body class="hp vasq" onload="try{if(!google.j.b){document.f&amp;&amp;document.f.q.focus();document.gbqf&amp;&amp;document.gbqf.q.focus();}}catch(e){}if(document.images)new Image().src='/images/nav_logo242.png'" id="gsr">
    <div class="ctr-p" id="viewport">
        <div data-jiis="cc" id="doc-info"></div>
        <div data-jiis="cc" id="cst">
            <style>
                .fade #center_col,
                .fade #rhs,
                .fade #leftnav,
                .fade #brs,
                .fade #footcnt {
                    filter: alpha(opacity=33.3);
                    opacity: 0.333
                }
                
                .fade-hidden #center_col,
                .fade-hidden #rhs,
                .fade-hidden #leftnav {
                    visibility: hidden
                }
                
                .flyr-o,
                .flyr-w {
                    position: absolute;
                    background-color: #fff;
                    z-index: 3;
                    display: block;
                }
                
                .flyr-o {
                    filter: alpha(opacity=66.6);
                    opacity: 0.666
                }
                
                .flyr-w {
                    filter: alpha(opacity=20.0);
                    opacity: 0.2
                }
                
                .flyr-h {
                    filter: alpha(opacity=0);
                    opacity: 0
                }
                
                .flyr-c {
                    display: none
                }
                
                .flt,
                .flt u,
                a.fl {
                    text-decoration: none
                }
                
                .flt:hover,
                .flt:hover u,
                a.fl:hover {
                    text-decoration: underline
                }
                
                #knavm {
                    color: #4273db;
                    display: inline;
                    font: 11px arial, sans-serif !important;
                    left: -13px;
                    position: absolute;
                    top: 2px;
                    z-index: 2
                }
                
                #pnprev #knavm {
                    bottom: 1px;
                    top: auto
                }
                
                #pnnext #knavm {
                    bottom: 1px;
                    left: 40px;
                    top: auto
                }
                
                a.noline {
                    outline: 0
                }
                
                .y.yp {
                    display: none
                }
                
                .y.yf,
                .y.ys {
                    display: block
                }
                
                .yi {}
            </style>
        </div> <a href="/setprefs?suggon=2&amp;prev=https://www.google.co.in/webhp?hl%3Den&amp;sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D" style="left:-1000em;position:absolute">Screen-reader users, click here to turn off Google Instant.</a> <textarea id="csi" style="display:none"></textarea>
        <script>
            if (google.j.b) document.body.style.visibility = 'hidden';
        </script>
        <div class="jhp" id="searchform">
            <script>
                (function() {
                    var _j = 1250;
                    try {
                        var s = document.getElementById('searchform');
                        var w = document['body'] && document.body['offsetWidth'];
                        if (s && w && w >= _j) {
                            s.className += ' big';
                        }
                    } catch (e) {}
                })();
            </script>
            <style>
                #gb {
                    font-size: 13px
                }
                
                div#searchform {
                    min-width: 980px;
                    z-index: 103
                }
                
                div.sfbg,
                div.sfbgg {
                    height: 59px
                }
                
                .big form#tsf,
                form#tsf {
                    width: auto;
                    max-width: 784px;
                    overflow: hidden
                }
                
                #searchform.big>#tsf {
                    max-width: 784px
                }
                
                .big div.tsf-p,
                form>div.tsf-p {
                    margin: -1px 0 0;
                    padding-right: 0
                }
                
                div#viewport {
                    position: absolute;
                    top: 0;
                    width: 100%
                }
                
                div#searchform.jhp {
                    margin-top: 0
                }
                
                #searchform.big.jhp>#tsf {
                    max-width: none
                }
                
                .jhp>#gb {
                    position: absolute;
                    top: -295px;
                    right: 0;
                    width: 100%
                }
                
                .jhp>#tsf {
                    max-width: none
                }
            </style>
            <div id="gb">
                <div id="gbw">
                    <div style="top:0;left:0;right:0;width:100%">
                        <div class="gb_9a gb_Ve gb_R gb_Ue gb_Ze">
                            <div class="gb_He gb_R gb_Ve gb_Oe">
                                <div class="gb_Q gb_R gb_S gb_Ve"><span class="gb_P gb_R">Akshay</span></div>
                                <div class="gb_Q gb_R"><a class="gb_P" data-pid="23" href="https://mail.google.com/mail/?tab=wm" data-ved="0EMIuCBIoAA">Gmail</a></div>
                                <div class="gb_Q gb_R"><a class="gb_P" data-pid="2" href="https://www.google.co.in/imghp?hl=en&amp;tab=wi&amp;ei=ecrXVvW0Ec6dugTGvoTwCw&amp;ved=0EKouCBMoAQ">Images</a></div>
                            </div>
                            <div class="gb_ac gb_Ve gb_R">
                                <div class="gb_ga" id="gbsfw"></div>
                                <div class="gb_ea gb_0c gb_R" id="gbwa">
                                    <div class="gb_lc">
                                        <a class="gb_b gb_Nb" href="https://www.google.co.in/intl/en/options/" title="Google apps" aria-expanded="false" tabindex="0" data-ved="0EL0nCBQ"></a>
                                        <div class="gb_bb"></div>
                                        <div class="gb_ab"></div>
                                    </div>
                                </div>
                                <div class="gb_ic gb_0c gb_R gb_jc">
                                    <div class="gb_lc">
                                        <a class="gb_b" aria-haspopup="true" tabindex="0">
                                            <div class="gb_mc gb_nc gb_Nb"></div>
                                        </a>
                                        <div class="gb_bb"></div>
                                        <div class="gb_ab"></div>
                                    </div>
                                    <div class="gb_ga" aria-hidden="true" aria-live="assertive"></div>
                                </div>
                                <div class="gb_6a gb_0c gb_Ve gb_R">
                                    <div class="gb_lc gb_8a gb_Ve gb_R"><a class="gb_b gb_4a gb_R" href="https://accounts.google.com/SignOutOptions?hl=en&amp;continue=https://www.google.co.in/webhp%3Fhl%3Den" title="Google Account: Akshay Raul  &#10;(akshayraul07@gmail.com)" tabindex="0"><span class="gb_Za gbii"></span></a>
                                        <div class="gb_bb"></div>
                                        <div class="gb_ab"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sfbg nojsv" style="margin-top:-15px">
                <div class="sfbgg"></div>
            </div>
            <form class="tsf" action="/search" style="overflow:visible" id="tsf" method="GET" name="f" onsubmit="return q.value!=''" role="search"><input value="psy-ab" name="sclient" type="hidden">
                <div data-jibp="" data-jiis="uc" id="tophf"><input name="safe" value="strict" type="hidden"><input name="hl" value="en" type="hidden"><input name="site" value="webhp" type="hidden"><input name="source" type="hidden" value="hp"></div>
                <div class="tsf-p">
                    <div class="nojsv logocont" id="logocont">
                        <h1><a id=logo href="https://www.google.co.in/webhp?hl=en" title="Go to Google Home"><img width=167 height=410 src="/images/nav_logo242.png" alt="Google"></a></h1></div>
                    <div class="sfibbbc">
                        <div class="sbtc" id="sbtc">
                            <div class="sbibtd">
                                <div class="nojsv sfopt" id="sfopt">
                                    <div class="lsd">
                                        <div id=ss-bar style=white-space:nowrap;z-index:98 data-jiis=uc></div>
                                    </div>
                                </div>
                                <div class="sfsbc">
                                    <div class="nojsb">
                                        <div class="ds" id="sbds">
                                            <div class="lsbb kpbb" id="sblsbb"> <button class="lsb" value="Search" aria-label="Google Search" name="btnG" type="submit"> <span class="sbico"></span> </button> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sbibod" id="sfdiv"> <input class="lst lst-tbb sbibps" id="lst-ib" maxlength="2048" name="q" autocomplete="off" title="Search" type="text" value="" aria-label="Search"> </div>
                            </div>
                        </div>
                        <div>
                            <div id="pocs" style="display:none;left:0px;white-space:nowrap;position:absolute">
                                <div id="pocs0"><span><span>Google</span> Instant is unavailable. Press Enter to search.</span>&nbsp;<a href="//support.google.com/websearch/answer/186645?hl=en-IN">Learn more</a></div>
                                <div id="pocs1"><span>Google</span> Instant is off due to connection speed. Press Enter to search.</div>
                                <div id="pocs2">Press Enter to search.</div>
                            </div>
                        </div>
                    </div>
                    <div class="jsb" style="padding-top:18px">
                        <center><input value="Google Search" aria-label="Google Search" name="btnK" type="submit" jsaction="sf.chk"><input value="I'm Feeling Lucky" aria-label="I'm Feeling Lucky" name="btnI" type="submit" jsaction="sf.lck"></center>
                    </div>
                </div>
            </form>
        </div>
        <div id="gac_scont"></div>
        <div class="content" data-jiis="cc" id="main"><span class="ctr-p" id="body"><center><div style="height:233px;margin-top:89px" id="lga"><div style="padding-top:109px"><style>#hplogo{background:url(/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png) no-repeat}@media (-moz-max-device-pixel-ratio:1),(max-resolution:96dpi){#hplogo{background:url(/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png) no-repeat}}</style><div style="background-size:272px 92px;height:92px;width:272px" title="Google" align="left" id="hplogo" onload="window.lol&&lol()"><div class="logo-subtext">India</div></div></div></div><div style="height:118px"></div><div data-jibp="h" data-jiis="uc" id="prm-pt" style="margin-top:12px"><style>#als{font-size:small;margin-bottom:24px}#_eEe{display:inline-block;line-height:28px;}#_eEe a{padding:0 3px;}._lEe{display:inline-block;margin:0 2px;white-space:nowrap}._PEe{display:inline-block;margin:0 2px}</style><script>window.gbar&&gbar.up&&gbar.up.tp&&gbar.up.tp();</script><div id="als"><div id="_eEe">Google.co.in offered in: <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=hi&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAU">हिन्दी</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=bn&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAY">বাংলা</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=te&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAc">తెలుగు</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=mr&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAg">मराठी</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=ta&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAk">தமிழ்</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=gu&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAo">ગુજરાતી</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=kn&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAs">ಕನ್ನಡ</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=ml&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCAw">മലയാളം</a>  <a href="https://www.google.co.in/setprefs?sig=0_yJLkeVmVeV64v_alw250r32ld4M%3D&amp;hl=pa&amp;source=homepage" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQ2ZgBCA0">ਪੰਜਾਬੀ</a> </div></div></div></center></span>
            <div class="ctr-p" id="footer">
                <div data-jibp="h" data-jiis="uc" id="fbarcnt">
                    <style>
                        .fmulti {}
                        
                        ._dQc {
                            bottom: 0;
                            left: 0;
                            position: absolute;
                            right: 0
                        }
                        
                        ._GR {
                            background: #f2f2f2;
                            left: 0;
                            right: 0;
                            -webkit-text-size-adjust: none
                        }
                        
                        .fbar p {
                            display: inline
                        }
                        
                        .fbar a,
                        #fsettl {
                            text-decoration: none;
                            white-space: nowrap
                        }
                        
                        .fbar {
                            margin-left: -27px
                        }
                        
                        ._Gs {
                            padding-left: 27px;
                            margin: 0 !important
                        }
                        
                        ._eA {
                            padding: 0 !important;
                            margin: 0 !important
                        }
                        
                        #fbarcnt {
                            display: block
                        }
                        
                        ._E2 a:hover {
                            text-decoration: underline
                        }
                        
                        ._HR img {
                            margin-right: 4px
                        }
                        
                        ._HR a,
                        ._GR #swml a {
                            text-decoration: none
                        }
                        
                        .fmulti {
                            text-align: center
                        }
                        
                        .fmulti #fsr {
                            display: block;
                            float: none
                        }
                        
                        .fmulti #fuser {
                            display: block;
                            float: none
                        }
                        
                        #fuserm {
                            line-height: 25px
                        }
                        
                        #fsr {
                            float: right;
                            white-space: nowrap
                        }
                        
                        #fsl {
                            white-space: nowrap
                        }
                        
                        #fsett {
                            background: #fff;
                            border: 1px solid #999;
                            bottom: 30px;
                            padding: 10px 0;
                            position: absolute;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                            -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                            text-align: left;
                            z-index: 104
                        }
                        
                        #fsett a {
                            display: block;
                            line-height: 44px;
                            padding: 0 20px;
                            text-decoration: none;
                            white-space: nowrap
                        }
                        
                        ._E2 #fsettl:hover {
                            text-decoration: underline
                        }
                        
                        ._E2 #fsett a:hover {
                            text-decoration: underline
                        }
                        
                        ._mk {
                            color: #777
                        }
                        
                        ._Nh {
                            color: #222;
                            font-size: 14px;
                            font-weight: normal;
                            -moz-tap-highlight-color: rgba(0, 0, 0, 0)
                        }
                        
                        ._Mo {
                            display: inline-block;
                            opacity: 0.55;
                            vertical-align: top
                        }
                        
                        a._Nh:hover ._Mo,
                        a._Nh:active ._Mo {
                            opacity: 1.0
                        }
                        
                        ._Nh {
                            padding: 8px 16px;
                            margin-right: 10px
                        }
                        
                        ._mk {
                            margin: 40px 0
                        }
                        
                        ._dD {
                            margin-right: 10px
                        }
                        
                        ._nW {
                            margin-left: 135px
                        }
                        
                        #fbar {
                            background: #f2f2f2;
                            border-top: 1px solid #e4e4e4;
                            line-height: 40px;
                            min-width: 980px
                        }
                        
                        ._xac {
                            margin-left: 135px
                        }
                        
                        .fbar p,
                        .fbar a,
                        #fsettl,
                        #fsett a {
                            color: #777
                        }
                        
                        .fbar a:hover,
                        #fsett a:hover {
                            color: #333
                        }
                        
                        .fbar {
                            font-size: small
                        }
                        
                        #fuser {
                            float: right
                        }
                        
                        ._HR {
                            margin-left: 135px;
                            line-height: 15px;
                        }
                        
                        #fsl {
                            margin-left: 30px
                        }
                        
                        #fsr {
                            margin-right: 30px
                        }
                        
                        .fmulti #fsl {
                            margin-left: 0
                        }
                        
                        .fmulti #fsr {
                            margin-right: 0
                        }
                    </style>
                    <div id="footcnt">
                        <div class="_dQc _E2" id="fbar">
                            <div class="fbar"> <span id="fsr">  <a class="_Gs" href="//www.google.co.in/intl/en/policies/privacy/?fg=1">Privacy</a> <a class="_Gs" href="//www.google.co.in/intl/en/policies/terms/?fg=1">Terms</a>    <span style="display:inline-block;position:relative"> <a class="_Gs" href="https://www.google.co.in/preferences?hl=en" id="fsettl" aria-controls="fsett" aria-expanded="false" role="button" jsaction="foot.cst">Settings</a> <span id="fsett" style="display:none"> <a href="https://www.google.co.in/preferences?hl=en-IN&amp;fg=1">Search settings</a> <span data-jibp="h" data-jiis="uc" id="advsl"> <a href="/advanced_search?hl=en-IN&amp;fg=1">Advanced search</a> </span> <a href="/history?hl=en-IN&amp;fg=1">  History </a> <a href="//support.google.com/websearch/?p=ws_results_help&amp;hl=en-IN&amp;fg=1">Search Help</a> <a href="javascript:void(0)" data-bucket="websearch" id="_Yvd" target="_blank" jsaction="gf.sf" data-ved="0ahUKEwiYnIOq46PLAhWHjo4KHUF0AOsQLggQ">  Send feedback </a> </span>
                                </span>
                                </span> <span id="fsl"> <a class="_Gs" href="//www.google.co.in/intl/en/ads/?fg=1">Advertising</a> <a class="_Gs" href="//www.google.co.in/services/?fg=1">Business</a> <a class="_Gs" href="//www.google.co.in/intl/en/about.html?fg=1">About</a> </span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-jibp="h" data-jiis="uc" id="footc">
                <script>
                    (function() {
                        google.j.rfp = '1';
                    })();
                </script>
                <div id="xfoot">
                    <div id="xjsd"></div>
                    <div id="xjsi">
                        <script>
                            (function() {
                                function c(b) {
                                    window.setTimeout(function() {
                                        var a = document.createElement("script");
                                        a.src = b;
                                        document.getElementById("xjsd").appendChild(a)
                                    }, 0)
                                }
                                google.dljp = function(b, a) {
                                    google.xjsu = b;
                                    c(a)
                                };
                                google.dlj = c;
                            })();
                            (function() {
                                window.google.xjsrm = [];
                            })();
                            if (google.y) google.y.first = [];
                            if (!google.xjs) {
                                window._ = window._ || {};
                                window._._DumpException = function(e) {
                                    throw e
                                };
                                if (google.timers && google.timers.load.t) {
                                    google.timers.load.t.xjsls = new Date().getTime();
                                }
                                google.dljp('/xjs/_/js/k\x3dxjs.s.en.oT5VbV_VbBs.O/m\x3dsx,c,sb,cdos,cr,elog,jsa,r,hsm,qsm,j,p,d,csi/am\x3dgJIkAIj4Ox8C4UIYEamAChYG/rt\x3dj/d\x3d1/t\x3dzcms/rs\x3dACT90oESlktmsONoKHe42-6SAbJHo89WFA', '/xjs/_/js/k\x3dxjs.s.en.oT5VbV_VbBs.O/m\x3dsx,c,sb,cdos,cr,elog,jsa,r,hsm,qsm,j,p,d,csi/am\x3dgJIkAIj4Ox8C4UIYEamAChYG/rt\x3dj/d\x3d1/t\x3dzcms/rs\x3dACT90oESlktmsONoKHe42-6SAbJHo89WFA');
                                google.xjs = 1;
                            }
                            google.pmc = {
                                "sx": {},
                                "c": {
                                    "mcr": 5
                                },
                                "sb": {
                                    "agen": false,
                                    "cgen": true,
                                    "client": "hp",
                                    "dh": true,
                                    "dhqt": true,
                                    "ds": "",
                                    "fl": true,
                                    "fpol": true,
                                    "host": "google.co.in",
                                    "isbh": 38,
                                    "jam": 1,
                                    "msgs": {
                                        "cibl": "Clear Search",
                                        "dym": "Did you mean:",
                                        "lcky": "I\u0026#39;m Feeling Lucky",
                                        "lml": "Learn more",
                                        "oskt": "Input tools",
                                        "psrc": "This search was removed from your \u003Ca href=\"/history\"\u003EWeb History\u003C/a\u003E",
                                        "psrl": "Remove",
                                        "sbit": "Search by image",
                                        "srch": "Google Search"
                                    },
                                    "ovr": {},
                                    "pfof": true,
                                    "pq": "",
                                    "psy": "p",
                                    "refpd": true,
                                    "rfs": [],
                                    "scd": 10,
                                    "sce": 4,
                                    "stok": "C64RYN1Weo18wq1CIx96xvMTEaQ",
                                    "token": "EmmSviIdKvg10PNvDqwUEw"
                                },
                                "aa": {},
                                "abd": {
                                    "abd": false,
                                    "deb": false,
                                    "der": false,
                                    "det": false
                                },
                                "aldd": {},
                                "async": {},
                                "cdos": {
                                    "bih": 602,
                                    "biw": 1352,
                                    "cdobsel": false,
                                    "dpr": "1"
                                },
                                "cr": {
                                    "eup": false,
                                    "qir": false,
                                    "rctj": true,
                                    "ref": false,
                                    "uff": false
                                },
                                "ddls": {},
                                "elog": {},
                                "erh": {},
                                "foot": {
                                    "pf": true,
                                    "po": false,
                                    "qe": false
                                },
                                "fpe": {
                                    "js": true
                                },
                                "gf": {
                                    "pid": 196,
                                    "si": true
                                },
                                "idck": {},
                                "ipv6": {},
                                "jsa": {},
                                "jsaleg": {},
                                "llc": {},
                                "lu": {},
                                "m": {
                                    "ab": {
                                        "on": true
                                    },
                                    "msgs": {
                                        "hPers": "Hide private results",
                                        "hPersD": "Currently hiding private results",
                                        "sPers": "Show all results",
                                        "sPersD": "Currently showing private results"
                                    }
                                },
                                "r": {},
                                "rkab": {},
                                "sf": {},
                                "skp": {},
                                "st": {},
                                "vm": {
                                    "bv": 115339255,
                                    "d": "c2E",
                                    "tc": true,
                                    "te": true,
                                    "tk": true,
                                    "ts": true
                                },
                                "hsm": {
                                    "h": true,
                                    "i": true,
                                    "pa": true
                                },
                                "qsm": {},
                                "j": {
                                    "ajrp": true,
                                    "cmt": true,
                                    "icmt": false,
                                    "lbtfdr": 10000,
                                    "mcr": 5,
                                    "tct": " \\u3000?",
                                    "tlh": true,
                                    "witu": false
                                },
                                "p": {
                                    "ae": true,
                                    "avgTtfc": 2000,
                                    "brba": false,
                                    "csui": false,
                                    "dlen": 24,
                                    "dper": 3,
                                    "eae": true,
                                    "fbdc": 500,
                                    "fbdu": -1,
                                    "fbh": true,
                                    "fd": 1000000,
                                    "focus": true,
                                    "gpsj": true,
                                    "hiue": true,
                                    "hpt": 311,
                                    "knrt": true,
                                    "maxCbt": 1500,
                                    "mds": "lcl,sp,mbl_he,mbl_hs,mbl_re,mbl_rs,mbl_sv",
                                    "msg": {
                                        "dym": "Did you mean:",
                                        "gs": "Google Search",
                                        "kntt": "Use the up and down arrow keys to select each result. Press Enter to go to the selection.",
                                        "pcnt": "New Tab",
                                        "sif": "Search instead for",
                                        "srf": "Showing results for"
                                    },
                                    "nprr": 1,
                                    "ohpt": false,
                                    "ophe": true,
                                    "pmt": 250,
                                    "pq": true,
                                    "rpt": 15,
                                    "sc": "psy-ab",
                                    "tdur": 50,
                                    "ufl": true
                                },
                                "d": {},
                                "csi": {
                                    "acsi": true
                                },
                                "TG8rFw": {
                                    "sd": "1"
                                },
                                "q7pS8A": {},
                                "q1cupA": {},
                                "71W8GA": {},
                                "7Fjppg": {},
                                "bnhGTQ": {},
                                "4RZUyg": {},
                                "flRZRg": {},
                                "1KdN1Q": {},
                                "/nNC3A": {},
                                "ov7Bgw": {},
                                "v52Mdg": {},
                                "CjL7kw": {},
                                "ITl3wQ": {},
                                "4csGKQ": {},
                                "PUB9yA": {},
                                "2kDaKA": {},
                                "k9pyPA": {},
                                "c+PT4g": {},
                                "/1S6iw": {},
                                "GqeGtQ": {},
                                "+idT0Q": {},
                                "NpA8BQ": {},
                                "C+zmgA": {},
                                "My6oLw": {},
                                "v/E6lQ": {},
                                "zIpemg": {},
                                "A/Ucpg": {},
                                "cm4D8w": {},
                                "GfrcvQ": {}
                            };
                            google.y.first.push(function() {
                                google.loadAll(['aa', 'abd', 'async', 'erh', 'foot', 'fpe', 'idck', 'ipv6', 'lu', 'm', 'sf', 'skp', 'vm'].concat(google.xjsrm || []));
                                if (google.med) {
                                    google.med('init');
                                    google.initHistory();
                                    google.med('history');
                                }
                            });
                            if (google.j && google.j.en && google.j.xi) {
                                window.setTimeout(google.j.xi, 0);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <script>
            this.gbar_ = this.gbar_ || {};
            (function(_) {
                var window = this;
                try {
                    var pc, qc, rc, sc, tc, uc, vc, zc, Ac, Bc, Hc, Nc;
                    _.lc = function(a) {
                        a && "function" == typeof a.da && a.da()
                    };
                    _.mc = function(a, c) {
                        var d = Array.prototype.slice.call(arguments, 1);
                        return function() {
                            var c = d.slice();
                            c.push.apply(c, arguments);
                            return a.apply(this, c)
                        }
                    };
                    _.nc = function(a) {
                        var c = _.Ib;
                        c.o ? a() : c.b.push(a)
                    };
                    _.N = function(a, c, d) {
                        c < a.C ? a.w[c + a.D] = d : a.A[c] = d
                    };
                    _.oc = function(a, c) {
                        var d = _.mc(_.lc, c);
                        a.Ua ? d.call(void 0) : (a.Ra || (a.Ra = []), a.Ra.push(_.n(void 0) ? (0, _.v)(d, void 0) : d))
                    };
                    pc = /[\x00&<>"']/;
                    qc = /\x00/g;
                    rc = /'/g;
                    sc = /"/g;
                    tc = />/g;
                    uc = /</g;
                    vc = /&/g;
                    _.wc = function(a) {
                        if (!pc.test(a)) return a; - 1 != a.indexOf("&") && (a = a.replace(vc, "&amp;")); - 1 != a.indexOf("<") && (a = a.replace(uc, "&lt;")); - 1 != a.indexOf(">") && (a = a.replace(tc, "&gt;")); - 1 != a.indexOf('"') && (a = a.replace(sc, "&quot;")); - 1 != a.indexOf("'") && (a = a.replace(rc, "&#39;")); - 1 != a.indexOf("\x00") && (a = a.replace(qc, "&#0;"));
                        return a
                    };
                    _.xc = function(a) {
                        var c = typeof a;
                        return "object" == c && null != a || "function" == c
                    };
                    _.yc = function(a) {
                        return "function" == _.ca(a)
                    };
                    zc = function(a) {
                        if (a && "number" == typeof a.length) {
                            if (_.xc(a)) return "function" == typeof a.item || "string" == typeof a.item;
                            if (_.yc(a)) return "function" == typeof a.item
                        }
                        return !1
                    };
                    Ac = {
                        cellpadding: "cellPadding",
                        cellspacing: "cellSpacing",
                        colspan: "colSpan",
                        frameborder: "frameBorder",
                        height: "height",
                        maxlength: "maxLength",
                        nonce: "nonce",
                        role: "role",
                        rowspan: "rowSpan",
                        type: "type",
                        usemap: "useMap",
                        valign: "vAlign",
                        width: "width"
                    };
                    Bc = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");
                    _.Cc = function(a, c, d) {
                        for (var e in a) c.call(d, a[e], e, a)
                    };
                    _.Dc = function(a) {
                        var c = a.length;
                        if (0 < c) {
                            for (var d = Array(c), e = 0; e < c; e++) d[e] = a[e];
                            return d
                        }
                        return []
                    };
                    _.Ec = function(a, c) {
                        return 0 <= (0, _.na)(a, c)
                    };
                    _.Fc = function(a, c) {
                        return 0 == a.lastIndexOf(c, 0)
                    };
                    _.Gc = function(a) {
                        var c = _.ca(a);
                        return "array" == c || "object" == c && "number" == typeof a.length
                    };
                    Hc = function(a, c, d) {
                        function e(d) {
                            d && c.appendChild(_.t(d) ? a.createTextNode(d) : d)
                        }
                        for (var f = 2; f < d.length; f++) {
                            var g = d[f];
                            !_.Gc(g) || _.xc(g) && 0 < g.nodeType ? e(g) : (0, _.oa)(zc(g) ? _.Dc(g) : g, e)
                        }
                    };
                    _.Ic = function(a, c) {
                        _.Cc(c, function(c, e) {
                            "style" == e ? a.style.cssText = c : "class" == e ? a.className = c : "for" == e ? a.htmlFor = c : Ac.hasOwnProperty(e) ? a.setAttribute(Ac[e], c) : _.Fc(e, "aria-") || _.Fc(e, "data-") ? a.setAttribute(e, c) : a[e] = c
                        })
                    };
                    _.Jc = function(a, c) {
                        for (var d, e, f = 1; f < arguments.length; f++) {
                            e = arguments[f];
                            for (d in e) a[d] = e[d];
                            for (var g = 0; g < Bc.length; g++) d = Bc[g], Object.prototype.hasOwnProperty.call(e, d) && (a[d] = e[d])
                        }
                    };
                    _.Kc = function(a) {
                        return "number" == typeof a
                    };
                    _.Lc = function(a, c) {
                        var d = c[0],
                            e = c[1];
                        if (!_.ec && e && (e.name || e.type)) {
                            d = ["<", d];
                            e.name && d.push(' name="', _.wc(e.name), '"');
                            if (e.type) {
                                d.push(' type="', _.wc(e.type), '"');
                                var f = {};
                                _.Jc(f, e);
                                delete f.type;
                                e = f
                            }
                            d.push(">");
                            d = d.join("")
                        }
                        d = a.createElement(d);
                        e && (_.t(e) ? d.className = e : _.da(e) ? d.className = e.join(" ") : _.Ic(d, e));
                        2 < c.length && Hc(a, d, c);
                        return d
                    };
                    _.Mc = function(a) {
                        return /^[\s\xa0]*$/.test(a)
                    };
                    Nc = function(a) {
                        var c = [],
                            d = 0,
                            e;
                        for (e in a) c[d++] = e;
                        return c
                    };
                    _.Oc = function(a) {
                        var c = [],
                            d = 0,
                            e;
                        for (e in a) c[d++] = a[e];
                        return c
                    };
                    _.Pc = function(a, c) {
                        var d = (0, _.na)(a, c),
                            e;
                        (e = 0 <= d) && Array.prototype.splice.call(a, d, 1);
                        return e
                    };
                    _.Qc = function() {};
                    _.Rc = function(a) {
                        _.Rc[" "](a);
                        return a
                    };
                    _.Rc[" "] = _.Qc;
                    _.Sc = function(a, c) {
                        try {
                            return _.Rc(a[c]), !0
                        } catch (d) {}
                        return !1
                    };
                    var Vc, Wc;
                    _.Uc = !_.B || _.gb(9);
                    Vc = !_.B || _.gb(9);
                    Wc = _.B && !_.E("9");
                    !_.C || _.E("528");
                    _.Qa && _.E("1.9b") || _.B && _.E("8") || _.Na && _.E("9.5") || _.C && _.E("528");
                    _.Qa && !_.E("8") || _.B && _.E("9");
                    _.Xc = function(a, c) {
                        this.type = a;
                        this.o = this.target = c;
                        this.B = !1;
                        this.Ie = !0
                    };
                    _.Xc.prototype.stopPropagation = function() {
                        this.B = !0
                    };
                    _.Xc.prototype.preventDefault = function() {
                        this.Ie = !1
                    };
                    _.Yc = _.B ? "focusin" : "DOMFocusIn";
                    _.Zc = _.C ? "webkitTransitionEnd" : _.Na ? "otransitionend" : "transitionend";
                    _.$c = function(a, c) {
                        _.Xc.call(this, a ? a.type : "");
                        this.relatedTarget = this.o = this.target = null;
                        this.C = this.keyCode = this.button = this.clientY = this.clientX = 0;
                        this.D = this.shiftKey = this.w = this.A = !1;
                        this.b = this.state = null;
                        a && this.init(a, c)
                    };
                    _.y(_.$c, _.Xc);
                    _.$c.prototype.init = function(a, c) {
                        var d = this.type = a.type,
                            e = a.changedTouches ? a.changedTouches[0] : null;
                        this.target = a.target || a.srcElement;
                        this.o = c;
                        var f = a.relatedTarget;
                        f ? _.Qa && (_.Sc(f, "nodeName") || (f = null)) : "mouseover" == d ? f = a.fromElement : "mouseout" == d && (f = a.toElement);
                        this.relatedTarget = f;
                        null === e ? (this.clientX = void 0 !== a.clientX ? a.clientX : a.pageX, this.clientY = void 0 !== a.clientY ? a.clientY : a.pageY) : (this.clientX = void 0 !== e.clientX ? e.clientX : e.pageX, this.clientY = void 0 !== e.clientY ? e.clientY : e.pageY);
                        this.button = a.button;
                        this.keyCode = a.keyCode || 0;
                        this.C = a.charCode || ("keypress" == d ? a.keyCode : 0);
                        this.A = a.ctrlKey;
                        this.w = a.altKey;
                        this.shiftKey = a.shiftKey;
                        this.D = a.metaKey;
                        this.state = a.state;
                        this.b = a;
                        a.defaultPrevented && this.preventDefault()
                    };
                    _.$c.prototype.stopPropagation = function() {
                        _.$c.K.stopPropagation.call(this);
                        this.b.stopPropagation ? this.b.stopPropagation() : this.b.cancelBubble = !0
                    };
                    _.$c.prototype.preventDefault = function() {
                        _.$c.K.preventDefault.call(this);
                        var a = this.b;
                        if (a.preventDefault) a.preventDefault();
                        else if (a.returnValue = !1, Wc) try {
                            if (a.ctrlKey || 112 <= a.keyCode && 123 >= a.keyCode) a.keyCode = -1
                        } catch (c) {}
                    };
                    var cd;
                    _.ad = "closure_listenable_" + (1E6 * Math.random() | 0);
                    _.bd = function(a) {
                        return !(!a || !a[_.ad])
                    };
                    cd = 0;
                    var dd = function(a, c, d, e, f) {
                            this.listener = a;
                            this.b = null;
                            this.src = c;
                            this.type = d;
                            this.fc = !!e;
                            this.yc = f;
                            this.key = ++cd;
                            this.Hb = this.ec = !1
                        },
                        ed = function(a) {
                            a.Hb = !0;
                            a.listener = null;
                            a.b = null;
                            a.src = null;
                            a.yc = null
                        };
                    var fd = function(a) {
                            this.src = a;
                            this.b = {};
                            this.o = 0
                        },
                        hd, gd;
                    fd.prototype.add = function(a, c, d, e, f) {
                        var g = a.toString();
                        a = this.b[g];
                        a || (a = this.b[g] = [], this.o++);
                        var h = gd(a, c, e, f); - 1 < h ? (c = a[h], d || (c.ec = !1)) : (c = new dd(c, this.src, g, !!e, f), c.ec = d, a.push(c));
                        return c
                    };
                    fd.prototype.remove = function(a, c, d, e) {
                        a = a.toString();
                        if (!(a in this.b)) return !1;
                        var f = this.b[a];
                        c = gd(f, c, d, e);
                        return -1 < c ? (ed(f[c]), Array.prototype.splice.call(f, c, 1), 0 == f.length && (delete this.b[a], this.o--), !0) : !1
                    };
                    hd = function(a, c) {
                        var d = c.type;
                        if (!(d in a.b)) return !1;
                        var e = _.Pc(a.b[d], c);
                        e && (ed(c), 0 == a.b[d].length && (delete a.b[d], a.o--));
                        return e
                    };
                    _.id = function(a, c, d, e, f) {
                        a = a.b[c.toString()];
                        c = -1;
                        a && (c = gd(a, d, e, f));
                        return -1 < c ? a[c] : null
                    };
                    gd = function(a, c, d, e) {
                        for (var f = 0; f < a.length; ++f) {
                            var g = a[f];
                            if (!g.Hb && g.listener == c && g.fc == !!d && g.yc == e) return f
                        }
                        return -1
                    };
                    var jd, kd, ld, nd, pd, qd, xd, wd, sd, yd;
                    jd = "closure_lm_" + (1E6 * Math.random() | 0);
                    kd = {};
                    ld = 0;
                    _.O = function(a, c, d, e, f) {
                        if (_.da(c)) {
                            for (var g = 0; g < c.length; g++) _.O(a, c[g], d, e, f);
                            return null
                        }
                        d = _.md(d);
                        return _.bd(a) ? a.Xa(c, d, e, f) : nd(a, c, d, !1, e, f)
                    };
                    nd = function(a, c, d, e, f, g) {
                        if (!c) throw Error("x");
                        var h = !!f,
                            l = _.od(a);
                        l || (a[jd] = l = new fd(a));
                        d = l.add(c, d, e, f, g);
                        if (d.b) return d;
                        e = pd();
                        d.b = e;
                        e.src = a;
                        e.listener = d;
                        if (a.addEventListener) a.addEventListener(c.toString(), e, h);
                        else if (a.attachEvent) a.attachEvent(qd(c.toString()), e);
                        else throw Error("y");
                        ld++;
                        return d
                    };
                    pd = function() {
                        var a = sd,
                            c = Vc ? function(d) {
                                return a.call(c.src, c.listener, d)
                            } : function(d) {
                                d = a.call(c.src, c.listener, d);
                                if (!d) return d
                            };
                        return c
                    };
                    _.td = function(a, c, d, e, f) {
                        if (_.da(c)) {
                            for (var g = 0; g < c.length; g++) _.td(a, c[g], d, e, f);
                            return null
                        }
                        d = _.md(d);
                        return _.bd(a) ? a.tc(c, d, e, f) : nd(a, c, d, !0, e, f)
                    };
                    _.ud = function(a, c, d, e, f) {
                        if (_.da(c))
                            for (var g = 0; g < c.length; g++) _.ud(a, c[g], d, e, f);
                        else d = _.md(d), _.bd(a) ? a.ad(c, d, e, f) : a && (a = _.od(a)) && (c = _.id(a, c, d, !!e, f)) && _.vd(c)
                    };
                    _.vd = function(a) {
                        if (_.Kc(a) || !a || a.Hb) return !1;
                        var c = a.src;
                        if (_.bd(c)) return c.uc(a);
                        var d = a.type,
                            e = a.b;
                        c.removeEventListener ? c.removeEventListener(d, e, a.fc) : c.detachEvent && c.detachEvent(qd(d), e);
                        ld--;
                        (d = _.od(c)) ? (hd(d, a), 0 == d.o && (d.src = null, c[jd] = null)) : ed(a);
                        return !0
                    };
                    qd = function(a) {
                        return a in kd ? kd[a] : kd[a] = "on" + a
                    };
                    xd = function(a, c, d, e) {
                        var f = !0;
                        if (a = _.od(a))
                            if (c = a.b[c.toString()])
                                for (c = c.concat(), a = 0; a < c.length; a++) {
                                    var g = c[a];
                                    g && g.fc == d && !g.Hb && (g = wd(g, e), f = f && !1 !== g)
                                }
                            return f
                    };
                    wd = function(a, c) {
                        var d = a.listener,
                            e = a.yc || a.src;
                        a.ec && _.vd(a);
                        return d.call(e, c)
                    };
                    sd = function(a, c) {
                        if (a.Hb) return !0;
                        if (!Vc) {
                            var d = c || _.q("window.event"),
                                e = new _.$c(d, this),
                                f = !0;
                            if (!(0 > d.keyCode || void 0 != d.returnValue)) {
                                a: {
                                    var g = !1;
                                    if (0 == d.keyCode) try {
                                        d.keyCode = -1;
                                        break a
                                    } catch (p) {
                                        g = !0
                                    }
                                    if (g || void 0 == d.returnValue) d.returnValue = !0
                                }
                                d = [];
                                for (g = e.o; g; g = g.parentNode) d.push(g);
                                for (var g = a.type, h = d.length - 1; !e.B && 0 <= h; h--) {
                                    e.o = d[h];
                                    var l = xd(d[h], g, !0, e),
                                        f = f && l
                                }
                                for (h = 0; !e.B && h < d.length; h++) e.o = d[h],
                                l = xd(d[h], g, !1, e),
                                f = f && l
                            }
                            return f
                        }
                        return wd(a, new _.$c(c, this))
                    };
                    _.od = function(a) {
                        a = a[jd];
                        return a instanceof fd ? a : null
                    };
                    yd = "__closure_events_fn_" + (1E9 * Math.random() >>> 0);
                    _.md = function(a) {
                        if (_.yc(a)) return a;
                        a[yd] || (a[yd] = function(c) {
                            return a.handleEvent(c)
                        });
                        return a[yd]
                    };
                    var Cd;
                    _.zd = function(a) {
                        _.z.call(this);
                        this.U = a;
                        this.T = {}
                    };
                    _.y(_.zd, _.z);
                    var Ad = [];
                    _.zd.prototype.b = function(a, c, d, e) {
                        return Bd(this, a, c, d, e)
                    };
                    _.zd.prototype.H = function(a, c, d, e, f) {
                        return Bd(this, a, c, d, e, f)
                    };
                    var Bd = function(a, c, d, e, f, g) {
                        _.da(d) || (d && (Ad[0] = d.toString()), d = Ad);
                        for (var h = 0; h < d.length; h++) {
                            var l = _.O(c, d[h], e || a.handleEvent, f || !1, g || a.U || a);
                            if (!l) break;
                            a.T[l.key] = l
                        }
                        return a
                    };
                    _.zd.prototype.Y = function(a, c, d, e) {
                        return Cd(this, a, c, d, e)
                    };
                    Cd = function(a, c, d, e, f, g) {
                        if (_.da(d))
                            for (var h = 0; h < d.length; h++) Cd(a, c, d[h], e, f, g);
                        else {
                            c = _.td(c, d, e || a.handleEvent, f, g || a.U || a);
                            if (!c) return a;
                            a.T[c.key] = c
                        }
                        return a
                    };
                    _.Dd = function(a) {
                        _.Cc(a.T, function(a, d) {
                            this.T.hasOwnProperty(d) && _.vd(a)
                        }, a);
                        a.T = {}
                    };
                    _.zd.prototype.N = function() {
                        _.zd.K.N.call(this);
                        _.Dd(this)
                    };
                    _.zd.prototype.handleEvent = function() {
                        throw Error("z");
                    };
                    _.Ed = "StopIteration" in _.m ? _.m.StopIteration : {
                        message: "StopIteration",
                        stack: ""
                    };
                    _.Fd = function() {};
                    _.Fd.prototype.next = function() {
                        throw _.Ed;
                    };
                    _.Fd.prototype.Mb = function() {
                        return this
                    };
                    _.Gd = function(a, c) {
                        this.o = {};
                        this.b = [];
                        this.A = this.w = 0;
                        var d = arguments.length;
                        if (1 < d) {
                            if (d % 2) throw Error("d");
                            for (var e = 0; e < d; e += 2) this.set(arguments[e], arguments[e + 1])
                        } else if (a) {
                            a instanceof _.Gd ? (d = a.Ia(), e = a.Da()) : (d = Nc(a), e = _.Oc(a));
                            for (var f = 0; f < d.length; f++) this.set(d[f], e[f])
                        }
                    };
                    _.k = _.Gd.prototype;
                    _.k.Da = function() {
                        Hd(this);
                        for (var a = [], c = 0; c < this.b.length; c++) a.push(this.o[this.b[c]]);
                        return a
                    };
                    _.k.Ia = function() {
                        Hd(this);
                        return this.b.concat()
                    };
                    _.k.Yb = function() {
                        return 0 == this.w
                    };
                    _.k.clear = function() {
                        this.o = {};
                        this.A = this.w = this.b.length = 0
                    };
                    _.k.remove = function(a) {
                        return _.Id(this.o, a) ? (delete this.o[a], this.w--, this.A++, this.b.length > 2 * this.w && Hd(this), !0) : !1
                    };
                    var Hd = function(a) {
                        if (a.w != a.b.length) {
                            for (var c = 0, d = 0; c < a.b.length;) {
                                var e = a.b[c];
                                _.Id(a.o, e) && (a.b[d++] = e);
                                c++
                            }
                            a.b.length = d
                        }
                        if (a.w != a.b.length) {
                            for (var f = {}, d = c = 0; c < a.b.length;) e = a.b[c], _.Id(f, e) || (a.b[d++] = e, f[e] = 1), c++;
                            a.b.length = d
                        }
                    };
                    _.k = _.Gd.prototype;
                    _.k.get = function(a, c) {
                        return _.Id(this.o, a) ? this.o[a] : c
                    };
                    _.k.set = function(a, c) {
                        _.Id(this.o, a) || (this.w++, this.b.push(a), this.A++);
                        this.o[a] = c
                    };
                    _.k.forEach = function(a, c) {
                        for (var d = this.Ia(), e = 0; e < d.length; e++) {
                            var f = d[e],
                                g = this.get(f);
                            a.call(c, g, f, this)
                        }
                    };
                    _.k.clone = function() {
                        return new _.Gd(this)
                    };
                    _.k.Mb = function(a) {
                        Hd(this);
                        var c = 0,
                            d = this.A,
                            e = this,
                            f = new _.Fd;
                        f.next = function() {
                            if (d != e.A) throw Error("B");
                            if (c >= e.b.length) throw _.Ed;
                            var f = e.b[c++];
                            return a ? f : e.o[f]
                        };
                        return f
                    };
                    _.Id = function(a, c) {
                        return Object.prototype.hasOwnProperty.call(a, c)
                    };
                    _.Jd = function(a) {
                        if (a.Da && "function" == typeof a.Da) return a.Da();
                        if (_.t(a)) return a.split("");
                        if (_.Gc(a)) {
                            for (var c = [], d = a.length, e = 0; e < d; e++) c.push(a[e]);
                            return c
                        }
                        return _.Oc(a)
                    };
                    _.Kd = function(a) {
                        if (a.Ia && "function" == typeof a.Ia) return a.Ia();
                        if (!a.Da || "function" != typeof a.Da) {
                            if (_.Gc(a) || _.t(a)) {
                                var c = [];
                                a = a.length;
                                for (var d = 0; d < a; d++) c.push(d);
                                return c
                            }
                            return Nc(a)
                        }
                    };
                    _.P = function() {
                        _.z.call(this);
                        this.Y = new fd(this);
                        this.Ta = this;
                        this.qa = null
                    };
                    _.y(_.P, _.z);
                    _.P.prototype[_.ad] = !0;
                    _.k = _.P.prototype;
                    _.k.sc = function() {
                        return this.qa
                    };
                    _.k.Ad = function(a) {
                        this.qa = a
                    };
                    _.k.addEventListener = function(a, c, d, e) {
                        _.O(this, a, c, d, e)
                    };
                    _.k.removeEventListener = function(a, c, d, e) {
                        _.ud(this, a, c, d, e)
                    };
                    _.k.M = function(a) {
                        var c, d = this.sc();
                        if (d)
                            for (c = []; d; d = d.sc()) c.push(d);
                        var d = this.Ta,
                            e = a.type || a;
                        if (_.t(a)) a = new _.Xc(a, d);
                        else if (a instanceof _.Xc) a.target = a.target || d;
                        else {
                            var f = a;
                            a = new _.Xc(e, d);
                            _.Jc(a, f)
                        }
                        var f = !0,
                            g;
                        if (c)
                            for (var h = c.length - 1; !a.B && 0 <= h; h--) g = a.o = c[h], f = g.Bb(e, !0, a) && f;
                        a.B || (g = a.o = d, f = g.Bb(e, !0, a) && f, a.B || (f = g.Bb(e, !1, a) && f));
                        if (c)
                            for (h = 0; !a.B && h < c.length; h++) g = a.o = c[h], f = g.Bb(e, !1, a) && f;
                        return f
                    };
                    _.k.N = function() {
                        _.P.K.N.call(this);
                        this.Fc();
                        this.qa = null
                    };
                    _.k.Xa = function(a, c, d, e) {
                        return this.Y.add(String(a), c, !1, d, e)
                    };
                    _.k.tc = function(a, c, d, e) {
                        return this.Y.add(String(a), c, !0, d, e)
                    };
                    _.k.ad = function(a, c, d, e) {
                        return this.Y.remove(String(a), c, d, e)
                    };
                    _.k.uc = function(a) {
                        return hd(this.Y, a)
                    };
                    _.k.Fc = function(a) {
                        var c;
                        if (this.Y) {
                            c = this.Y;
                            a = a && a.toString();
                            var d = 0,
                                e;
                            for (e in c.b)
                                if (!a || e == a) {
                                    for (var f = c.b[e], g = 0; g < f.length; g++) ++d, ed(f[g]);
                                    delete c.b[e];
                                    c.o--
                                }
                            c = d
                        } else c = 0;
                        return c
                    };
                    _.k.Bb = function(a, c, d) {
                        a = this.Y.b[String(a)];
                        if (!a) return !0;
                        a = a.concat();
                        for (var e = !0, f = 0; f < a.length; ++f) {
                            var g = a[f];
                            if (g && !g.Hb && g.fc == c) {
                                var h = g.listener,
                                    l = g.yc || g.src;
                                g.ec && this.uc(g);
                                e = !1 !== h.call(l, d) && e
                            }
                        }
                        return e && 0 != d.Ie
                    };
                    _.k.$c = function(a, c, d, e) {
                        return _.id(this.Y, String(a), c, d, e)
                    };
                    var Ld = function(a, c, d) {
                        this.B = d;
                        this.w = a;
                        this.A = c;
                        this.o = 0;
                        this.b = null
                    };
                    Ld.prototype.get = function() {
                        var a;
                        0 < this.o ? (this.o--, a = this.b, this.b = a.next, a.next = null) : a = this.w();
                        return a
                    };
                    var Md = function(a, c) {
                        a.A(c);
                        a.o < a.B && (a.o++, c.next = a.b, a.b = c)
                    };
                    var Nd = function(a) {
                            _.m.setTimeout(function() {
                                throw a;
                            }, 0)
                        },
                        Od, Pd = function() {
                            var a = _.m.MessageChannel;
                            "undefined" === typeof a && "undefined" !== typeof window && window.postMessage && window.addEventListener && !_.A("Presto") && (a = function() {
                                var a = window.document.createElement("IFRAME");
                                a.style.display = "none";
                                a.src = "";
                                window.document.documentElement.appendChild(a);
                                var c = a.contentWindow,
                                    a = c.document;
                                a.open();
                                a.write("");
                                a.close();
                                var d = "callImmediate" + Math.random(),
                                    e = "file:" == c.location.protocol ? "*" : c.location.protocol +
                                    "//" + c.location.host,
                                    a = (0, _.v)(function(a) {
                                        if (("*" == e || a.origin == e) && a.data == d) this.port1.onmessage()
                                    }, this);
                                c.addEventListener("message", a, !1);
                                this.port1 = {};
                                this.port2 = {
                                    postMessage: function() {
                                        c.postMessage(d, e)
                                    }
                                }
                            });
                            if ("undefined" !== typeof a && !_.A("Trident") && !_.A("MSIE")) {
                                var c = new a,
                                    d = {},
                                    e = d;
                                c.port1.onmessage = function() {
                                    if (_.n(d.next)) {
                                        d = d.next;
                                        var a = d.Od;
                                        d.Od = null;
                                        a()
                                    }
                                };
                                return function(a) {
                                    e.next = {
                                        Od: a
                                    };
                                    e = e.next;
                                    c.port2.postMessage(0)
                                }
                            }
                            return "undefined" !== typeof window.document && "onreadystatechange" in
                                window.document.createElement("SCRIPT") ? function(a) {
                                    var c = window.document.createElement("SCRIPT");
                                    c.onreadystatechange = function() {
                                        c.onreadystatechange = null;
                                        c.parentNode.removeChild(c);
                                        c = null;
                                        a();
                                        a = null
                                    };
                                    window.document.documentElement.appendChild(c)
                                } : function(a) {
                                    _.m.setTimeout(a, 0)
                                }
                        };
                    var Qd = function() {
                            this.o = this.b = null
                        },
                        Sd = new Ld(function() {
                            return new Rd
                        }, function(a) {
                            a.reset()
                        }, 100);
                    Qd.prototype.add = function(a, c) {
                        var d = Sd.get();
                        d.set(a, c);
                        this.o ? this.o.next = d : this.b = d;
                        this.o = d
                    };
                    Qd.prototype.remove = function() {
                        var a = null;
                        this.b && (a = this.b, this.b = this.b.next, this.b || (this.o = null), a.next = null);
                        return a
                    };
                    var Rd = function() {
                        this.next = this.scope = this.b = null
                    };
                    Rd.prototype.set = function(a, c) {
                        this.b = a;
                        this.scope = c;
                        this.next = null
                    };
                    Rd.prototype.reset = function() {
                        this.next = this.scope = this.b = null
                    };
                    var Xd = function(a, c) {
                            Td || Ud();
                            Vd || (Td(), Vd = !0);
                            Wd.add(a, c)
                        },
                        Td, Ud = function() {
                            if (_.m.Promise && _.m.Promise.resolve) {
                                var a = _.m.Promise.resolve(void 0);
                                Td = function() {
                                    a.then(Yd)
                                }
                            } else Td = function() {
                                var a = Yd;
                                !_.yc(_.m.setImmediate) || _.m.Window && _.m.Window.prototype && !_.A("Edge") && _.m.Window.prototype.setImmediate == _.m.setImmediate ? (Od || (Od = Pd()), Od(a)) : _.m.setImmediate(a)
                            }
                        },
                        Vd = !1,
                        Wd = new Qd,
                        Yd = function() {
                            for (var a = null; a = Wd.remove();) {
                                try {
                                    a.b.call(a.scope)
                                } catch (c) {
                                    Nd(c)
                                }
                                Md(Sd, a)
                            }
                            Vd = !1
                        };
                    _.Zd = function(a) {
                        a.prototype.then = a.prototype.then;
                        a.prototype.$goog_Thenable = !0
                    };
                    _.$d = function(a) {
                        if (!a) return !1;
                        try {
                            return !!a.$goog_Thenable
                        } catch (c) {
                            return !1
                        }
                    };
                    var ce;
                    _.be = function(a, c) {
                        this.b = 0;
                        this.D = void 0;
                        this.A = this.o = this.w = null;
                        this.B = this.C = !1;
                        if (a != _.Qc) try {
                            var d = this;
                            a.call(c, function(a) {
                                ae(d, 2, a)
                            }, function(a) {
                                ae(d, 3, a)
                            })
                        } catch (e) {
                            ae(this, 3, e)
                        }
                    };
                    ce = function() {
                        this.next = this.context = this.o = this.w = this.b = null;
                        this.A = !1
                    };
                    ce.prototype.reset = function() {
                        this.context = this.o = this.w = this.b = null;
                        this.A = !1
                    };
                    var de = new Ld(function() {
                            return new ce
                        }, function(a) {
                            a.reset()
                        }, 100),
                        ee = function(a, c, d) {
                            var e = de.get();
                            e.w = a;
                            e.o = c;
                            e.context = d;
                            return e
                        };
                    _.be.prototype.then = function(a, c, d) {
                        return fe(this, _.yc(a) ? a : null, _.yc(c) ? c : null, d)
                    };
                    _.Zd(_.be);
                    _.be.prototype.cancel = function(a) {
                        0 == this.b && Xd(function() {
                            var c = new ge(a);
                            he(this, c)
                        }, this)
                    };
                    var he = function(a, c) {
                            if (0 == a.b)
                                if (a.w) {
                                    var d = a.w;
                                    if (d.o) {
                                        for (var e = 0, f = null, g = null, h = d.o; h && (h.A || (e++, h.b == a && (f = h), !(f && 1 < e))); h = h.next) f || (g = h);
                                        f && (0 == d.b && 1 == e ? he(d, c) : (g ? (e = g, e.next == d.A && (d.A = e), e.next = e.next.next) : ie(d), je(d, f, 3, c)))
                                    }
                                    a.w = null
                                } else ae(a, 3, c)
                        },
                        le = function(a, c) {
                            a.o || 2 != a.b && 3 != a.b || ke(a);
                            a.A ? a.A.next = c : a.o = c;
                            a.A = c
                        },
                        fe = function(a, c, d, e) {
                            var f = ee(null, null, null);
                            f.b = new _.be(function(a, h) {
                                f.w = c ? function(d) {
                                    try {
                                        var f = c.call(e, d);
                                        a(f)
                                    } catch (r) {
                                        h(r)
                                    }
                                } : a;
                                f.o = d ? function(c) {
                                    try {
                                        var f =
                                            d.call(e, c);
                                        !_.n(f) && c instanceof ge ? h(c) : a(f)
                                    } catch (r) {
                                        h(r)
                                    }
                                } : h
                            });
                            f.b.w = a;
                            le(a, f);
                            return f.b
                        };
                    _.be.prototype.G = function(a) {
                        this.b = 0;
                        ae(this, 2, a)
                    };
                    _.be.prototype.F = function(a) {
                        this.b = 0;
                        ae(this, 3, a)
                    };
                    var ae = function(a, c, d) {
                            if (0 == a.b) {
                                a == d && (c = 3, d = new TypeError("Promise cannot resolve to itself"));
                                a.b = 1;
                                var e;
                                a: {
                                    var f = d,
                                        g = a.G,
                                        h = a.F;
                                    if (f instanceof _.be) le(f, ee(g || _.Qc, h || null, a)),
                                    e = !0;
                                    else if (_.$d(f)) f.then(g, h, a),
                                    e = !0;
                                    else {
                                        if (_.xc(f)) try {
                                            var l = f.then;
                                            if (_.yc(l)) {
                                                me(f, l, g, h, a);
                                                e = !0;
                                                break a
                                            }
                                        } catch (p) {
                                            h.call(a, p);
                                            e = !0;
                                            break a
                                        }
                                        e = !1
                                    }
                                }
                                e || (a.D = d, a.b = c, a.w = null, ke(a), 3 != c || d instanceof ge || ne(a, d))
                            }
                        },
                        me = function(a, c, d, e, f) {
                            var g = !1,
                                h = function(a) {
                                    g || (g = !0, d.call(f, a))
                                },
                                l = function(a) {
                                    g || (g = !0, e.call(f,
                                        a))
                                };
                            try {
                                c.call(a, h, l)
                            } catch (p) {
                                l(p)
                            }
                        },
                        ke = function(a) {
                            a.C || (a.C = !0, Xd(a.H, a))
                        },
                        ie = function(a) {
                            var c = null;
                            a.o && (c = a.o, a.o = c.next, c.next = null);
                            a.o || (a.A = null);
                            return c
                        };
                    _.be.prototype.H = function() {
                        for (var a = null; a = ie(this);) je(this, a, this.b, this.D);
                        this.C = !1
                    };
                    var je = function(a, c, d, e) {
                            if (3 == d && c.o && !c.A)
                                for (; a && a.B; a = a.w) a.B = !1;
                            if (c.b) c.b.w = null, oe(c, d, e);
                            else try {
                                c.A ? c.w.call(c.context) : oe(c, d, e)
                            } catch (f) {
                                pe.call(null, f)
                            }
                            Md(de, c)
                        },
                        oe = function(a, c, d) {
                            2 == c ? a.w.call(a.context, d) : a.o && a.o.call(a.context, d)
                        },
                        ne = function(a, c) {
                            a.B = !0;
                            Xd(function() {
                                a.B && pe.call(null, c)
                            })
                        },
                        pe = Nd,
                        ge = function(a) {
                            _.ja.call(this, a)
                        };
                    _.y(ge, _.ja);
                    ge.prototype.name = "cancel";
                    _.qe = function(a, c) {
                        _.P.call(this);
                        this.o = a || 1;
                        this.b = c || _.m;
                        this.w = (0, _.v)(this.wh, this);
                        this.A = (0, _.w)()
                    };
                    _.y(_.qe, _.P);
                    _.k = _.qe.prototype;
                    _.k.enabled = !1;
                    _.k.Ja = null;
                    _.k.setInterval = function(a) {
                        this.o = a;
                        this.Ja && this.enabled ? (_.re(this), this.start()) : this.Ja && _.re(this)
                    };
                    _.k.wh = function() {
                        if (this.enabled) {
                            var a = (0, _.w)() - this.A;
                            0 < a && a < .8 * this.o ? this.Ja = this.b.setTimeout(this.w, this.o - a) : (this.Ja && (this.b.clearTimeout(this.Ja), this.Ja = null), this.M("tick"), this.enabled && (this.Ja = this.b.setTimeout(this.w, this.o), this.A = (0, _.w)()))
                        }
                    };
                    _.k.start = function() {
                        this.enabled = !0;
                        this.Ja || (this.Ja = this.b.setTimeout(this.w, this.o), this.A = (0, _.w)())
                    };
                    _.re = function(a) {
                        a.enabled = !1;
                        a.Ja && (a.b.clearTimeout(a.Ja), a.Ja = null)
                    };
                    _.qe.prototype.N = function() {
                        _.qe.K.N.call(this);
                        _.re(this);
                        delete this.b
                    };
                    _.se = function(a, c, d) {
                        if (_.yc(a)) d && (a = (0, _.v)(a, d));
                        else if (a && "function" == typeof a.handleEvent) a = (0, _.v)(a.handleEvent, a);
                        else throw Error("C");
                        return 2147483647 < Number(c) ? -1 : _.m.setTimeout(a, c || 0)
                    };
                    _.te = /^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/;
                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var mf, tf, vf, Ef, wf, yf, xf, Bf, zf, uf, Ff;
                    _.lf = function(a) {
                        return Array.prototype.concat.apply(Array.prototype, arguments)
                    };
                    mf = function(a, c) {
                        if (a)
                            for (var d = a.split("&"), e = 0; e < d.length; e++) {
                                var f = d[e].indexOf("="),
                                    g = null,
                                    h = null;
                                0 <= f ? (g = d[e].substring(0, f), h = d[e].substring(f + 1)) : g = d[e];
                                c(g, h ? (0, window.decodeURIComponent)(h.replace(/\+/g, " ")) : "")
                            }
                    };
                    _.nf = function(a, c) {
                        this.jb = this.B = this.o = "";
                        this.A = null;
                        this.w = this.C = "";
                        this.b = !1;
                        var d;
                        a instanceof _.nf ? (this.b = _.n(c) ? c : a.b, _.of(this, a.o), this.B = a.B, _.pf(this, a.jb), _.qf(this, a.A), _.rf(this, a.Wa()), _.sf(this, a.Na.clone()), this.w = a.w) : a && (d = String(a).match(_.te)) ? (this.b = !!c, _.of(this, d[1] || "", !0), this.B = tf(d[2] || ""), _.pf(this, d[3] || "", !0), _.qf(this, d[4]), _.rf(this, d[5] || "", !0), _.sf(this, d[6] || "", !0), this.w = tf(d[7] || "")) : (this.b = !!c, this.Na = new uf(null, 0, this.b))
                    };
                    _.nf.prototype.toString = function() {
                        var a = [],
                            c = this.o;
                        c && a.push(vf(c, wf, !0), ":");
                        var d = this.jb;
                        if (d || "file" == c) a.push("//"), (c = this.B) && a.push(vf(c, wf, !0), "@"), a.push((0, window.encodeURIComponent)(String(d)).replace(/%25([0-9a-fA-F]{2})/g, "%$1")), d = this.A, null != d && a.push(":", String(d));
                        if (d = this.Wa()) this.jb && "/" != d.charAt(0) && a.push("/"), a.push(vf(d, "/" == d.charAt(0) ? xf : yf, !0));
                        (d = this.Na.toString()) && a.push("?", d);
                        (d = this.w) && a.push("#", vf(d, zf));
                        return a.join("")
                    };
                    _.nf.prototype.clone = function() {
                        return new _.nf(this)
                    };
                    _.of = function(a, c, d) {
                        a.o = d ? tf(c, !0) : c;
                        a.o && (a.o = a.o.replace(/:$/, ""));
                        return a
                    };
                    _.pf = function(a, c, d) {
                        a.jb = d ? tf(c, !0) : c;
                        return a
                    };
                    _.qf = function(a, c) {
                        if (c) {
                            c = Number(c);
                            if ((0, window.isNaN)(c) || 0 > c) throw Error("H`" + c);
                            a.A = c
                        } else a.A = null;
                        return a
                    };
                    _.nf.prototype.Wa = function() {
                        return this.C
                    };
                    _.rf = function(a, c, d) {
                        a.C = d ? tf(c, !0) : c;
                        return a
                    };
                    _.sf = function(a, c, d) {
                        c instanceof uf ? (a.Na = c, Af(a.Na, a.b)) : (d || (c = vf(c, Bf)), a.Na = new uf(c, 0, a.b));
                        return a
                    };
                    _.Cf = function(a, c, d) {
                        a.Na.set(c, d);
                        return a
                    };
                    _.Df = function(a) {
                        return a instanceof _.nf ? a.clone() : new _.nf(a, void 0)
                    };
                    tf = function(a, c) {
                        return a ? c ? (0, window.decodeURI)(a.replace(/%25/g, "%2525")) : (0, window.decodeURIComponent)(a) : ""
                    };
                    vf = function(a, c, d) {
                        return _.t(a) ? (a = (0, window.encodeURI)(a).replace(c, Ef), d && (a = a.replace(/%25([0-9a-fA-F]{2})/g, "%$1")), a) : null
                    };
                    Ef = function(a) {
                        a = a.charCodeAt(0);
                        return "%" + (a >> 4 & 15).toString(16) + (a & 15).toString(16)
                    };
                    wf = /[#\/\?@]/g;
                    yf = /[\#\?:]/g;
                    xf = /[\#\?]/g;
                    Bf = /[\#\?@]/g;
                    zf = /#/g;
                    uf = function(a, c, d) {
                        this.o = this.b = null;
                        this.w = a || null;
                        this.A = !!d
                    };
                    Ff = function(a) {
                        a.b || (a.b = new _.Gd, a.o = 0, a.w && mf(a.w, function(c, d) {
                            a.add((0, window.decodeURIComponent)(c.replace(/\+/g, " ")), d)
                        }))
                    };
                    uf.prototype.add = function(a, c) {
                        Ff(this);
                        this.w = null;
                        a = Gf(this, a);
                        var d = this.b.get(a);
                        d || this.b.set(a, d = []);
                        d.push(c);
                        this.o = this.o + 1;
                        return this
                    };
                    uf.prototype.remove = function(a) {
                        Ff(this);
                        a = Gf(this, a);
                        return _.Id(this.b.o, a) ? (this.w = null, this.o = this.o - this.b.get(a).length, this.b.remove(a)) : !1
                    };
                    uf.prototype.clear = function() {
                        this.b = this.w = null;
                        this.o = 0
                    };
                    uf.prototype.Yb = function() {
                        Ff(this);
                        return 0 == this.o
                    };
                    var Hf = function(a, c) {
                        Ff(a);
                        c = Gf(a, c);
                        return _.Id(a.b.o, c)
                    };
                    _.k = uf.prototype;
                    _.k.Ia = function() {
                        Ff(this);
                        for (var a = this.b.Da(), c = this.b.Ia(), d = [], e = 0; e < c.length; e++)
                            for (var f = a[e], g = 0; g < f.length; g++) d.push(c[e]);
                        return d
                    };
                    _.k.Da = function(a) {
                        Ff(this);
                        var c = [];
                        if (_.t(a)) Hf(this, a) && (c = _.lf(c, this.b.get(Gf(this, a))));
                        else {
                            a = this.b.Da();
                            for (var d = 0; d < a.length; d++) c = _.lf(c, a[d])
                        }
                        return c
                    };
                    _.k.set = function(a, c) {
                        Ff(this);
                        this.w = null;
                        a = Gf(this, a);
                        Hf(this, a) && (this.o = this.o - this.b.get(a).length);
                        this.b.set(a, [c]);
                        this.o = this.o + 1;
                        return this
                    };
                    _.k.get = function(a, c) {
                        var d = a ? this.Da(a) : [];
                        return 0 < d.length ? String(d[0]) : c
                    };
                    _.k.toString = function() {
                        if (this.w) return this.w;
                        if (!this.b) return "";
                        for (var a = [], c = this.b.Ia(), d = 0; d < c.length; d++)
                            for (var e = c[d], f = (0, window.encodeURIComponent)(String(e)), e = this.Da(e), g = 0; g < e.length; g++) {
                                var h = f;
                                "" !== e[g] && (h += "=" + (0, window.encodeURIComponent)(String(e[g])));
                                a.push(h)
                            }
                        return this.w = a.join("&")
                    };
                    _.k.clone = function() {
                        var a = new uf;
                        a.w = this.w;
                        this.b && (a.b = this.b.clone(), a.o = this.o);
                        return a
                    };
                    var Gf = function(a, c) {
                            var d = String(c);
                            a.A && (d = d.toLowerCase());
                            return d
                        },
                        Af = function(a, c) {
                            c && !a.A && (Ff(a), a.w = null, a.b.forEach(function(a, c) {
                                var f = c.toLowerCase();
                                c != f && (this.remove(c), this.remove(f), 0 < a.length && (this.w = null, this.b.set(Gf(this, f), _.Dc(a)), this.o = this.o + a.length))
                            }, a));
                            a.A = c
                        };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Uf, $f, ag;
                    _.Rf = function(a) {
                        for (var c; c = a.firstChild;) a.removeChild(c)
                    };
                    _.Sf = function(a) {
                        return a && a.parentNode ? a.parentNode.removeChild(a) : null
                    };
                    _.Tf = function(a, c) {
                        if (!a || !c) return !1;
                        if (a.contains && 1 == c.nodeType) return a == c || a.contains(c);
                        if ("undefined" != typeof a.compareDocumentPosition) return a == c || !!(a.compareDocumentPosition(c) & 16);
                        for (; c && a != c;) c = c.parentNode;
                        return c == a
                    };
                    _.Vf = function(a) {
                        return 9 == a.nodeType ? a : a.ownerDocument || a.document
                    };
                    _.Wf = function(a) {
                        this.b = a || _.m.document || window.document
                    };
                    _.k = _.Wf.prototype;
                    _.k.P = function(a) {
                        return _.t(a) ? this.b.getElementById(a) : a
                    };
                    _.k.Ba = function(a, c, d) {
                        return _.Lc(this.b, arguments)
                    };
                    _.k.createElement = function(a) {
                        return this.b.createElement(a)
                    };
                    _.k.appendChild = function(a, c) {
                        a.appendChild(c)
                    };
                    _.k.be = _.Rf;
                    _.k.removeNode = _.Sf;
                    _.k.contains = _.Tf;
                    _.Xf = function(a) {
                        return a ? new _.Wf(_.Vf(a)) : Uf || (Uf = new _.Wf)
                    };
                    _.Yf = function(a, c, d) {
                        return 2 >= arguments.length ? Array.prototype.slice.call(a, c) : Array.prototype.slice.call(a, c, d)
                    };
                    _.Zf = function(a) {
                        return _.xc(a) && 1 == a.nodeType
                    };
                    $f = function(a, c, d, e) {
                        Array.prototype.splice.apply(a, _.Yf(arguments, 1))
                    };
                    ag = function(a, c) {
                        return null !== a && c in a ? a[c] : void 0
                    };
                    _.bg = function() {};
                    _.ba(_.bg);
                    _.bg.prototype.b = 0;
                    _.cg = function(a) {
                        return ":" + (a.b++).toString(36)
                    };
                    _.dg = _.Qa ? "MozUserSelect" : _.C || _.Oa ? "WebkitUserSelect" : null;
                    _.R = function(a) {
                        _.P.call(this);
                        this.B = a || _.Xf();
                        this.fa = eg;
                        this.A = null;
                        this.ia = !1;
                        this.o = null;
                        this.O = void 0;
                        this.G = this.C = this.w = this.D = null;
                        this.Ka = !1
                    };
                    _.y(_.R, _.P);
                    _.R.prototype.tb = _.bg.R();
                    var eg = null;
                    _.R.prototype.getId = function() {
                        return this.A || (this.A = _.cg(this.tb))
                    };
                    _.R.prototype.P = function() {
                        return this.o
                    };
                    var fg = function(a, c) {
                        if (a == c) throw Error("K");
                        var d;
                        if (d = c && a.w && a.A) {
                            d = a.w;
                            var e = a.A;
                            d = d.G && e ? ag(d.G, e) || null : null
                        }
                        if (d && a.w != c) throw Error("K");
                        a.w = c;
                        _.R.K.Ad.call(a, c)
                    };
                    _.R.prototype.Ad = function(a) {
                        if (this.w && this.w != a) throw Error("L");
                        _.R.K.Ad.call(this, a)
                    };
                    _.R.prototype.lb = function() {
                        this.o = this.B.createElement("DIV")
                    };
                    _.R.prototype.vb = function(a) {
                        gg(this, a)
                    };
                    var gg = function(a, c, d) {
                        if (a.ia) throw Error("M");
                        a.o || a.lb();
                        c ? c.insertBefore(a.o, d || null) : a.B.b.body.appendChild(a.o);
                        a.w && !a.w.ia || a.ka()
                    };
                    _.k = _.R.prototype;
                    _.k.Za = function(a) {
                        this.o = a
                    };
                    _.k.ka = function() {
                        this.ia = !0;
                        _.hg(this, function(a) {
                            !a.ia && a.P() && a.ka()
                        })
                    };
                    _.k.va = function() {
                        _.hg(this, function(a) {
                            a.ia && a.va()
                        });
                        this.O && _.Dd(this.O);
                        this.ia = !1
                    };
                    _.k.N = function() {
                        this.ia && this.va();
                        this.O && (this.O.da(), delete this.O);
                        _.hg(this, function(a) {
                            a.da()
                        });
                        !this.Ka && this.o && _.Sf(this.o);
                        this.w = this.D = this.o = this.G = this.C = null;
                        _.R.K.N.call(this)
                    };
                    _.k.fb = function(a, c, d) {
                        if (a.ia && (d || !this.ia)) throw Error("M");
                        if (0 > c || c > _.ig(this)) throw Error("O");
                        this.G && this.C || (this.G = {}, this.C = []);
                        if (a.w == this) {
                            var e = a.getId();
                            this.G[e] = a;
                            _.Pc(this.C, a)
                        } else {
                            var e = this.G,
                                f = a.getId();
                            if (null !== e && f in e) throw Error("c`" + f);
                            e[f] = a
                        }
                        fg(a, this);
                        $f(this.C, c, 0, a);
                        a.ia && this.ia && a.w == this ? (d = this.o, c = d.childNodes[c] || null, c != a.P() && d.insertBefore(a.P(), c)) : d ? (this.o || this.lb(), c = _.jg(this, c + 1), gg(a, this.o, c ? c.o : null)) : this.ia && !a.ia && a.o && a.o.parentNode && 1 == a.o.parentNode.nodeType &&
                            a.ka()
                    };
                    _.ig = function(a) {
                        return a.C ? a.C.length : 0
                    };
                    _.jg = function(a, c) {
                        return a.C ? a.C[c] || null : null
                    };
                    _.hg = function(a, c, d) {
                        a.C && (0, _.oa)(a.C, c, d)
                    };
                    _.R.prototype.removeChild = function(a, c) {
                        if (a) {
                            var d = _.t(a) ? a : a.getId();
                            a = this.G && d ? ag(this.G, d) || null : null;
                            if (d && a) {
                                var e = this.G;
                                d in e && delete e[d];
                                _.Pc(this.C, a);
                                c && (a.va(), a.o && _.Sf(a.o));
                                fg(a, null)
                            }
                        }
                        if (!a) throw Error("P");
                        return a
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Bg, Dg, Fg, Gg, Hg, Pg, Qg, Ug;
                    _.kg = function(a, c) {
                        var d = _.Vf(a);
                        return d.defaultView && d.defaultView.getComputedStyle && (d = d.defaultView.getComputedStyle(a, null)) ? d[c] || d.getPropertyValue(c) || "" : ""
                    };
                    _.lg = function(a, c) {
                        return _.kg(a, c) || (a.currentStyle ? a.currentStyle[c] : null) || a.style && a.style[c]
                    };
                    _.mg = function(a) {
                        return "CSS1Compat" == a.compatMode
                    };
                    _.ng = function(a) {
                        return "rtl" == _.lg(a, "direction")
                    };
                    _.og = function(a) {
                        return a.parentWindow || a.defaultView
                    };
                    _.pg = function(a) {
                        return a.scrollingElement ? a.scrollingElement : !_.C && _.mg(a) ? a.documentElement : a.body || a.documentElement
                    };
                    _.qg = function(a, c) {
                        this.x = _.n(a) ? a : 0;
                        this.y = _.n(c) ? c : 0
                    };
                    _.qg.prototype.clone = function() {
                        return new _.qg(this.x, this.y)
                    };
                    _.qg.prototype.ceil = function() {
                        this.x = Math.ceil(this.x);
                        this.y = Math.ceil(this.y);
                        return this
                    };
                    _.qg.prototype.floor = function() {
                        this.x = Math.floor(this.x);
                        this.y = Math.floor(this.y);
                        return this
                    };
                    _.qg.prototype.round = function() {
                        this.x = Math.round(this.x);
                        this.y = Math.round(this.y);
                        return this
                    };
                    _.rg = function(a) {
                        if (a instanceof _.ac && a.constructor === _.ac && a.w === _.$b) return a.b;
                        _.ca(a);
                        return "type_error:SafeHtml"
                    };
                    _.sg = function(a, c) {
                        this.width = a;
                        this.height = c
                    };
                    _.k = _.sg.prototype;
                    _.k.clone = function() {
                        return new _.sg(this.width, this.height)
                    };
                    _.k.af = function() {
                        return this.width * this.height
                    };
                    _.k.Yb = function() {
                        return !this.af()
                    };
                    _.k.ceil = function() {
                        this.width = Math.ceil(this.width);
                        this.height = Math.ceil(this.height);
                        return this
                    };
                    _.k.floor = function() {
                        this.width = Math.floor(this.width);
                        this.height = Math.floor(this.height);
                        return this
                    };
                    _.k.round = function() {
                        this.width = Math.round(this.width);
                        this.height = Math.round(this.height);
                        return this
                    };
                    _.tg = function(a, c) {
                        if (a.ia) throw Error("M");
                        if (c) {
                            a.Ka = !0;
                            var d = _.Vf(c);
                            a.B && a.B.b == d || (a.B = _.Xf(c));
                            a.Za(c);
                            a.ka()
                        } else throw Error("N");
                    };
                    _.ug = function(a) {
                        a.O || (a.O = new _.zd(a));
                        return a.O
                    };
                    _.vg = function(a) {
                        try {
                            return a && a.activeElement
                        } catch (c) {}
                        return null
                    };
                    _.wg = function(a) {
                        var c = _.pg(a);
                        a = _.og(a);
                        return _.B && _.E("10") && a.pageYOffset != c.scrollTop ? new _.qg(c.scrollLeft, c.scrollTop) : new _.qg(a.pageXOffset || c.scrollLeft, a.pageYOffset || c.scrollTop)
                    };
                    _.xg = function(a) {
                        a = (a || window).document;
                        a = _.mg(a) ? a.documentElement : a.body;
                        return new _.sg(a.clientWidth, a.clientHeight)
                    };
                    _.yg = function(a, c) {
                        a.innerHTML = _.rg(c)
                    };
                    _.zg = {};
                    _.Ag = function(a, c) {
                        "number" == typeof a && (a = (c ? Math.round(a) : a) + "px");
                        return a
                    };
                    Bg = function(a) {
                        var c;
                        try {
                            c = a.getBoundingClientRect()
                        } catch (d) {
                            return {
                                left: 0,
                                top: 0,
                                right: 0,
                                bottom: 0
                            }
                        }
                        _.B && a.ownerDocument.body && (a = a.ownerDocument, c.left -= a.documentElement.clientLeft + a.body.clientLeft, c.top -= a.documentElement.clientTop + a.body.clientTop);
                        return c
                    };
                    _.Cg = function() {
                        this.b = "";
                        this.o = _.zg
                    };
                    _.Cg.prototype.qb = !0;
                    _.Cg.prototype.ab = function() {
                        return this.b
                    };
                    _.Cg.prototype.toString = function() {
                        return "Const{" + this.b + "}"
                    };
                    Dg = function(a) {
                        var c = a.offsetWidth,
                            d = a.offsetHeight,
                            e = _.C && !c && !d;
                        return _.n(c) && !e || !a.getBoundingClientRect ? new _.sg(c, d) : (a = Bg(a), new _.sg(a.right - a.left, a.bottom - a.top))
                    };
                    _.Eg = function(a) {
                        if ("none" != _.lg(a, "display")) return Dg(a);
                        var c = a.style,
                            d = c.display,
                            e = c.visibility,
                            f = c.position;
                        c.visibility = "hidden";
                        c.position = "absolute";
                        c.display = "inline";
                        a = Dg(a);
                        c.display = d;
                        c.position = f;
                        c.visibility = e;
                        return a
                    };
                    Fg = function(a) {
                        switch (a) {
                            case 61:
                                return 187;
                            case 59:
                                return 186;
                            case 173:
                                return 189;
                            case 224:
                                return 91;
                            case 0:
                                return 224;
                            default:
                                return a
                        }
                    };
                    Gg = function(a) {
                        if (a.classList) return a.classList;
                        a = a.className;
                        return _.t(a) && a.match(/\S+/g) || []
                    };
                    _.Ig = function(a, c) {
                        if (/^\d+px?$/.test(c)) return (0, window.parseInt)(c, 10);
                        var d = a.style.left,
                            e = a.runtimeStyle.left;
                        a.runtimeStyle.left = a.currentStyle.left;
                        a.style.left = c;
                        var f = a.style.pixelLeft;
                        a.style.left = d;
                        a.runtimeStyle.left = e;
                        return f
                    };
                    _.Jg = function(a, c) {
                        a.style.display = c ? "" : "none"
                    };
                    _.Kg = function(a, c, d) {
                        var e;
                        c instanceof _.qg ? (e = c.x, c = c.y) : (e = c, c = d);
                        a.style.left = _.Ag(e, !1);
                        a.style.top = _.Ag(c, !1)
                    };
                    _.Lg = function(a) {
                        if (_.Qa) a = Fg(a);
                        else if (_.Ta && _.C) a: switch (a) {
                            case 93:
                                a = 91;
                                break a
                        }
                        return a
                    };
                    _.Mg = function(a) {
                        if (48 <= a && 57 >= a || 96 <= a && 106 >= a || 65 <= a && 90 >= a || (_.C || _.Oa) && 0 == a) return !0;
                        switch (a) {
                            case 32:
                            case 43:
                            case 63:
                            case 64:
                            case 107:
                            case 109:
                            case 110:
                            case 111:
                            case 186:
                            case 59:
                            case 189:
                            case 187:
                            case 61:
                            case 188:
                            case 190:
                            case 191:
                            case 192:
                            case 222:
                            case 219:
                            case 220:
                            case 221:
                                return !0;
                            default:
                                return !1
                        }
                    };
                    _.Ng = function(a, c) {
                        return a.classList ? a.classList.contains(c) : _.Ec(Gg(a), c)
                    };
                    _.Og = function(a) {
                        return a ? _.og(a) : window
                    };
                    Pg = /^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i;
                    Qg = function(a, c) {
                        var d = a.currentStyle ? a.currentStyle[c] : null;
                        return d ? _.Ig(a, d) : 0
                    };
                    _.Rg = function(a, c, d) {
                        _.da(d) && (d = d.join(" "));
                        var e = "aria-" + c;
                        "" === d || void 0 == d ? (Hg || (Hg = {
                            atomic: !1,
                            autocomplete: "none",
                            dropeffect: "none",
                            haspopup: !1,
                            live: "off",
                            multiline: !1,
                            multiselectable: !1,
                            orientation: "vertical",
                            readonly: !1,
                            relevant: "additions text",
                            required: !1,
                            sort: "none",
                            busy: !1,
                            disabled: !1,
                            hidden: !1,
                            invalid: "false"
                        }), d = Hg, c in d ? a.setAttribute(e, d[c]) : a.removeAttribute(e)) : a.setAttribute(e, d)
                    };
                    _.Sg = function(a, c, d, e) {
                        this.top = a;
                        this.right = c;
                        this.bottom = d;
                        this.left = e
                    };
                    _.k = _.Sg.prototype;
                    _.k.getHeight = function() {
                        return this.bottom - this.top
                    };
                    _.k.clone = function() {
                        return new _.Sg(this.top, this.right, this.bottom, this.left)
                    };
                    _.k.contains = function(a) {
                        return this && a ? "undefined" != typeof _.Sg && a instanceof _.Sg ? a.left >= this.left && a.right <= this.right && a.top >= this.top && a.bottom <= this.bottom : a.x >= this.left && a.x <= this.right && a.y >= this.top && a.y <= this.bottom : !1
                    };
                    _.k.expand = function(a, c, d, e) {
                        _.xc(a) ? (this.top -= a.top, this.right += a.right, this.bottom += a.bottom, this.left -= a.left) : (this.top -= a, this.right += Number(c), this.bottom += Number(d), this.left -= Number(e));
                        return this
                    };
                    _.k.ceil = function() {
                        this.top = Math.ceil(this.top);
                        this.right = Math.ceil(this.right);
                        this.bottom = Math.ceil(this.bottom);
                        this.left = Math.ceil(this.left);
                        return this
                    };
                    _.k.floor = function() {
                        this.top = Math.floor(this.top);
                        this.right = Math.floor(this.right);
                        this.bottom = Math.floor(this.bottom);
                        this.left = Math.floor(this.left);
                        return this
                    };
                    _.k.round = function() {
                        this.top = Math.round(this.top);
                        this.right = Math.round(this.right);
                        this.bottom = Math.round(this.bottom);
                        this.left = Math.round(this.left);
                        return this
                    };
                    _.Tg = function(a, c, d, e, f) {
                        if (!(_.B || _.Oa || _.C && _.E("525"))) return !0;
                        if (_.Ta && f) return _.Mg(a);
                        if (f && !e) return !1;
                        _.Kc(c) && (c = _.Lg(c));
                        if (!d && (17 == c || 18 == c || _.Ta && 91 == c)) return !1;
                        if ((_.C || _.Oa) && e && d) switch (a) {
                            case 220:
                            case 219:
                            case 221:
                            case 192:
                            case 186:
                            case 189:
                            case 187:
                            case 188:
                            case 190:
                            case 191:
                            case 192:
                            case 222:
                                return !1
                        }
                        if (_.B && e && c == a) return !1;
                        switch (a) {
                            case 13:
                                return !0;
                            case 27:
                                return !(_.C || _.Oa)
                        }
                        return _.Mg(a)
                    };
                    _.S = function(a, c) {
                        a.classList ? a.classList.remove(c) : _.Ng(a, c) && (a.className = (0, _.pa)(Gg(a), function(a) {
                            return a != c
                        }).join(" "))
                    };
                    _.T = function(a, c) {
                        a.classList ? a.classList.add(c) : _.Ng(a, c) || (a.className += 0 < a.className.length ? " " + c : c)
                    };
                    Ug = 0;
                    _.Vg = function(a) {
                        if (a instanceof _.Xb) return a;
                        a = a.qb ? a.ab() : String(a);
                        Pg.test(a) || (a = "about:invalid#zClosurez");
                        return _.Yb(a)
                    };
                    _.Wg = function(a) {
                        if (a instanceof _.Xb && a.constructor === _.Xb && a.o === _.Wb) return a.b;
                        _.ca(a);
                        return "type_error:SafeUrl"
                    };
                    _.Xg = function(a, c, d) {
                        _.z.call(this);
                        this.o = a;
                        this.B = c || 0;
                        this.w = d;
                        this.b = (0, _.v)(this.C, this)
                    };
                    _.y(_.Xg, _.z);
                    _.Xg.prototype.A = 0;
                    _.Xg.prototype.N = function() {
                        _.Xg.K.N.call(this);
                        _.Yg(this);
                        delete this.o;
                        delete this.w
                    };
                    _.Xg.prototype.start = function(a) {
                        _.Yg(this);
                        this.A = _.se(this.b, _.n(a) ? a : this.B)
                    };
                    _.Yg = function(a) {
                        0 != a.A && _.m.clearTimeout(a.A);
                        a.A = 0
                    };
                    _.Xg.prototype.C = function() {
                        this.A = 0;
                        this.o && this.o.call(this.w)
                    };
                    _.Zg = function(a, c) {
                        if (_.B) {
                            var d = Qg(a, c + "Left"),
                                e = Qg(a, c + "Right"),
                                f = Qg(a, c + "Top"),
                                g = Qg(a, c + "Bottom");
                            return new _.Sg(f, e, g, d)
                        }
                        d = _.kg(a, c + "Left");
                        e = _.kg(a, c + "Right");
                        f = _.kg(a, c + "Top");
                        g = _.kg(a, c + "Bottom");
                        return new _.Sg((0, window.parseFloat)(f), (0, window.parseFloat)(e), (0, window.parseFloat)(g), (0, window.parseFloat)(d))
                    };
                    _.$g = function(a) {
                        a = Bg(a);
                        return new _.qg(a.left, a.top)
                    };
                    _.ah = function(a) {
                        var c = _.Vf(a),
                            d = new _.qg(0, 0),
                            e;
                        e = c ? _.Vf(c) : window.document;
                        e = !_.B || _.gb(9) || _.mg(_.Xf(e).b) ? e.documentElement : e.body;
                        if (a == e) return d;
                        a = Bg(a);
                        c = _.wg(_.Xf(c).b);
                        d.x = a.left + c.x;
                        d.y = a.top + c.y;
                        return d
                    };
                    _.bh = function(a) {
                        return a[_.ea] || (a[_.ea] = ++Ug)
                    };
                    _.ch = function(a, c) {
                        if ("textContent" in a) a.textContent = c;
                        else if (3 == a.nodeType) a.data = c;
                        else if (a.firstChild && 3 == a.firstChild.nodeType) {
                            for (; a.lastChild != a.firstChild;) a.removeChild(a.lastChild);
                            a.firstChild.data = c
                        } else _.Rf(a), a.appendChild(_.Vf(a).createTextNode(String(c)))
                    };
                    _.dh = function(a, c, d, e) {
                        this.left = a;
                        this.top = c;
                        this.width = d;
                        this.height = e
                    };
                    _.k = _.dh.prototype;
                    _.k.clone = function() {
                        return new _.dh(this.left, this.top, this.width, this.height)
                    };
                    _.k.contains = function(a) {
                        return "undefined" != typeof _.dh && a instanceof _.dh ? this.left <= a.left && this.left + this.width >= a.left + a.width && this.top <= a.top && this.top + this.height >= a.top + a.height : a.x >= this.left && a.x <= this.left + this.width && a.y >= this.top && a.y <= this.top + this.height
                    };
                    _.k.ceil = function() {
                        this.left = Math.ceil(this.left);
                        this.top = Math.ceil(this.top);
                        this.width = Math.ceil(this.width);
                        this.height = Math.ceil(this.height);
                        return this
                    };
                    _.k.floor = function() {
                        this.left = Math.floor(this.left);
                        this.top = Math.floor(this.top);
                        this.width = Math.floor(this.width);
                        this.height = Math.floor(this.height);
                        return this
                    };
                    _.k.round = function() {
                        this.left = Math.round(this.left);
                        this.top = Math.round(this.top);
                        this.width = Math.round(this.width);
                        this.height = Math.round(this.height);
                        return this
                    };
                    _.eh = function(a, c) {
                        a.classList ? (0, _.oa)(c, function(c) {
                            _.S(a, c)
                        }) : a.className = (0, _.pa)(Gg(a), function(a) {
                            return !_.Ec(c, a)
                        }).join(" ")
                    };
                    _.fh = function(a, c) {
                        if (a.classList)(0, _.oa)(c, function(c) {
                            _.T(a, c)
                        });
                        else {
                            var d = {};
                            (0, _.oa)(Gg(a), function(a) {
                                d[a] = !0
                            });
                            (0, _.oa)(c, function(a) {
                                d[a] = !0
                            });
                            a.className = "";
                            for (var e in d) a.className += 0 < a.className.length ? " " + e : e
                        }
                    };
                    _.gh = function(a, c) {
                        return a == c ? !0 : a && c ? a.width == c.width && a.height == c.height : !1
                    };
                    _.hh = function(a, c, d) {
                        a.b || (a.b = {});
                        if (!a.b[d]) {
                            for (var e = _.H(a, d), f = [], g = 0; g < e.length; g++) f[g] = new c(e[g]);
                            a.b[d] = f
                        }
                        c = a.b[d];
                        c == _.xb && (c = a.b[d] = []);
                        return c
                    };
                    _.ih = function(a) {
                        for (var c in a) return !1;
                        return !0
                    };
                    _.jh = function(a) {
                        _.P.call(this);
                        this.b = a;
                        a = _.B ? "focusout" : "blur";
                        this.o = _.O(this.b, _.B ? "focusin" : "focus", this, !_.B);
                        this.w = _.O(this.b, a, this, !_.B)
                    };
                    _.y(_.jh, _.P);
                    _.jh.prototype.handleEvent = function(a) {
                        var c = new _.$c(a.b);
                        c.type = "focusin" == a.type || "focus" == a.type ? "focusin" : "focusout";
                        this.M(c)
                    };
                    _.jh.prototype.N = function() {
                        _.jh.K.N.call(this);
                        _.vd(this.o);
                        _.vd(this.w);
                        delete this.b
                    };
                    var lh, nh;
                    _.kh = {};
                    lh = null;
                    _.mh = function(a) {
                        a = _.bh(a);
                        delete _.kh[a];
                        _.ih(_.kh) && lh && _.Yg(lh)
                    };
                    _.oh = function() {
                        lh || (lh = new _.Xg(function() {
                            nh()
                        }, 20));
                        var a = lh;
                        0 != a.A || a.start()
                    };
                    nh = function() {
                        var a = (0, _.w)();
                        _.Cc(_.kh, function(c) {
                            _.ph(c, a)
                        });
                        _.ih(_.kh) || _.oh()
                    };
                    _.ph = function(a, c) {
                        a.w = (c - a.B) / (a.O - a.B);
                        1 <= a.w && (a.w = 1);
                        _.qh(a, a.w);
                        1 == a.w ? (a.b = 0, _.mh(a), a.o("finish"), a.D()) : 1 == a.b && a.G()
                    };
                    _.qh = function(a, c) {
                        _.yc(a.J) && (c = a.J(c));
                        a.A = Array(a.C.length);
                        for (var d = 0; d < a.C.length; d++) a.A[d] = (a.L[d] - a.C[d]) * c + a.C[d]
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Yj;
                    Yj = [1, 4, 2];
                    _.Zj = function(a) {
                        return (_.Uc ? 0 == a.b.button : "click" == a.type ? !0 : !!(a.b.button & Yj[0])) && !(_.C && _.Ta && a.A)
                    };
                    var ak = function() {
                            _.z.call(this);
                            this.o = new _.zd
                        },
                        ck;
                    _.y(ak, _.z);
                    _.bk = new ak;
                    ck = ["click", _.Qa ? "keypress" : "keydown", "mousedown", "touchstart"];
                    ak.prototype.b = function(a, c, d, e, f) {
                        (f || this.o).H(a, ck, c, d, e)
                    };
                    ak.prototype.N = function() {
                        this.o.da();
                        ak.K.N.call(this)
                    };
                    var dk, fk;
                    dk = function() {};
                    _.ek = new dk;
                    fk = ["click", _.Qa ? "keypress" : "keydown", "keyup"];
                    dk.prototype.b = function(a, c, d, e, f) {
                        var g = function(a) {
                            var d = _.md(c),
                                f = _.Zf(a.target) ? a.target.getAttribute("role") || null : null;
                            "click" == a.type && _.Zj(a) ? d.call(e, a) : 13 != a.keyCode && 3 != a.keyCode || "keyup" == a.type ? 32 != a.keyCode || "keyup" != a.type || "button" != f && "tab" != f || (d.call(e, a), a.preventDefault()) : (a.type = "keypress", d.call(e, a))
                        };
                        g.o = c;
                        g.b = e;
                        f ? f.b(a, fk, g, d) : _.O(a, fk, g, d)
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    /*
                     Portions of this code are from MochiKit, received by
                     The Closure Authors under the MIT license. All other code is Copyright
                     2005-2009 The Closure Authors. All Rights Reserved.
                    */
                    _.gk = function(a, c) {
                        this.B = [];
                        this.J = a;
                        this.Y = c || null;
                        this.A = this.b = !1;
                        this.w = void 0;
                        this.G = this.O = this.D = !1;
                        this.C = 0;
                        this.o = null;
                        this.H = 0
                    };
                    _.gk.prototype.cancel = function(a) {
                        if (this.b) this.w instanceof _.gk && this.w.cancel();
                        else {
                            if (this.o) {
                                var c = this.o;
                                delete this.o;
                                a ? c.cancel(a) : (c.H--, 0 >= c.H && c.cancel())
                            }
                            this.J ? this.J.call(this.Y, this) : this.G = !0;
                            this.b || this.X()
                        }
                    };
                    _.gk.prototype.F = function(a, c) {
                        this.D = !1;
                        hk(this, a, c)
                    };
                    var hk = function(a, c, d) {
                            a.b = !0;
                            a.w = d;
                            a.A = !c;
                            ik(a)
                        },
                        kk = function(a) {
                            if (a.b) {
                                if (!a.G) throw new jk;
                                a.G = !1
                            }
                        };
                    _.gk.prototype.gb = function(a) {
                        kk(this);
                        hk(this, !0, a)
                    };
                    _.gk.prototype.X = function() {
                        var a = new lk;
                        kk(this);
                        hk(this, !1, a)
                    };
                    _.gk.prototype.addCallback = function(a, c) {
                        return mk(this, a, null, c)
                    };
                    var mk = function(a, c, d, e) {
                        a.B.push([c, d, e]);
                        a.b && ik(a);
                        return a
                    };
                    _.gk.prototype.then = function(a, c, d) {
                        var e, f, g = new _.be(function(a, c) {
                            e = a;
                            f = c
                        });
                        mk(this, e, function(a) {
                            a instanceof lk ? g.cancel() : f(a)
                        });
                        return g.then(a, c, d)
                    };
                    _.Zd(_.gk);
                    var nk = function(a) {
                            return (0, _.sa)(a.B, function(a) {
                                return _.yc(a[1])
                            })
                        },
                        ik = function(a) {
                            if (a.C && a.b && nk(a)) {
                                var c = a.C,
                                    d = ok[c];
                                d && (_.m.clearTimeout(d.A), delete ok[c]);
                                a.C = 0
                            }
                            a.o && (a.o.H--, delete a.o);
                            for (var c = a.w, e = d = !1; a.B.length && !a.D;) {
                                var f = a.B.shift(),
                                    g = f[0],
                                    h = f[1],
                                    f = f[2];
                                if (g = a.A ? h : g) try {
                                    var l = g.call(f || a.Y, c);
                                    _.n(l) && (a.A = a.A && (l == c || l instanceof Error), a.w = c = l);
                                    if (_.$d(c) || "function" === typeof _.m.Promise && c instanceof _.m.Promise) e = !0, a.D = !0
                                } catch (p) {
                                    c = p, a.A = !0, nk(a) || (d = !0)
                                }
                            }
                            a.w = c;
                            e && (l = (0, _.v)(a.F,
                                a, !0), e = (0, _.v)(a.F, a, !1), c instanceof _.gk ? (mk(c, l, e), c.O = !0) : c.then(l, e));
                            d && (c = new pk(c), ok[c.A] = c, a.C = c.A)
                        },
                        jk = function() {
                            _.ja.call(this)
                        };
                    _.y(jk, _.ja);
                    jk.prototype.message = "Deferred has already fired";
                    jk.prototype.name = "AlreadyCalledError";
                    var lk = function() {
                        _.ja.call(this)
                    };
                    _.y(lk, _.ja);
                    lk.prototype.message = "Deferred was canceled";
                    lk.prototype.name = "CanceledError";
                    var pk = function(a) {
                        this.A = _.m.setTimeout((0, _.v)(this.o, this), 0);
                        this.b = a
                    };
                    pk.prototype.o = function() {
                        delete ok[this.A];
                        throw this.b;
                    };
                    var ok = {};

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var xk, zk, Ak, Fk, Gk, Nk;
                    _.qk = function(a) {
                        return null != _.H(a, 2) ? _.H(a, 2) : .001
                    };
                    _.rk = function(a) {
                        _.G(this, a, 0, -1, null)
                    };
                    _.y(_.rk, _.F);
                    var sk = function(a) {
                            return null != _.H(a, 3) ? _.H(a, 3) : 1
                        },
                        tk = function(a) {
                            return null != _.H(a, 2) ? _.H(a, 2) : 1E-4
                        },
                        uk = function(a) {
                            _.G(this, a, 0, -1, null)
                        };
                    _.y(uk, _.F);
                    _.wk = function() {
                        var a = _.vk();
                        return _.H(a, 9)
                    };
                    xk = function(a) {
                        _.G(this, a, 0, -1, null)
                    };
                    _.y(xk, _.F);
                    var yk = function(a) {
                        _.G(this, a, 0, -1, null)
                    };
                    _.y(yk, _.F);
                    zk = 0;
                    Ak = [];
                    _.Bk = function() {
                        this.data = {}
                    };
                    _.Bk.prototype.b = function() {
                        window.console && window.console.log && window.console.log("Log data: ", this.data)
                    };
                    _.Bk.prototype.o = function(a) {
                        var c = [],
                            d;
                        for (d in this.data) c.push((0, window.encodeURIComponent)(d) + "=" + (0, window.encodeURIComponent)(String(this.data[d])));
                        return ("atyp=i&zx=" + (new Date).getTime() + "&" + c.join("&")).substr(0, a)
                    };
                    var Ck = function(a) {
                            var c = new window.Image,
                                d = zk;
                            c.onerror = c.onload = c.onabort = function() {
                                d in Ak && delete Ak[d]
                            };
                            Ak[zk++] = c;
                            c.src = a
                        },
                        Dk = function(a, c) {
                            this.data = {};
                            var d = _.I(a, _.zb, 8) || new _.zb;
                            this.data.ei = _.K(_.H(a, 10));
                            this.data.ogf = _.K(_.H(d, 3));
                            var e;
                            e = window.google && window.google.sn ? /.*hp$/.test(window.google.sn) ? !1 : !0 : _.J(_.H(a, 7));
                            this.data.ogrp = e ? "1" : "";
                            this.data.ogv = _.K(_.H(d, 6)) + "." + _.K(_.H(d, 7));
                            this.data.ogd = _.K(_.H(a, 21));
                            this.data.ogc = _.K(_.H(a, 20));
                            this.data.ogl = _.K(_.H(a, 5));
                            c && (this.data.oggv =
                                c)
                        };
                    _.y(Dk, _.Bk);
                    _.Ek = function(a) {
                        var c = "//www.google.com/gen_204?",
                            c = c + a.o(2040 - c.length);
                        Ck(c)
                    };
                    Fk = null;
                    Gk = [1, 2, 3, 4, 5, 6, 9, 10, 11, 13, 14, 28, 29, 30, 34, 35, 37, 38, 39, 40, 41, 42, 43, 48, 49, 50, 51, 52, 53, 55, 56, 57, 58, 59, 500];
                    _.Hk = function(a, c, d, e, f) {
                        Dk.call(this, a, c);
                        _.Jc(this.data, {
                            jexpid: _.K(_.H(a, 9)),
                            srcpg: "prop=" + _.K(_.H(a, 6)),
                            jsr: Math.round(1 / e),
                            emsg: d.name + ":" + d.message
                        });
                        if (f) {
                            f._sn && (f._sn = "og." + f._sn);
                            for (var g in f) this.data[(0, window.encodeURIComponent)(g)] = f[g]
                        }
                    };
                    _.y(_.Hk, Dk);
                    var Ik = function(a) {
                            if (!Fk) {
                                Fk = {};
                                for (var c = 0; c < Gk.length; c++) Fk[Gk[c]] = !0
                            }
                            return !!Fk[a]
                        },
                        Jk = function(a) {
                            this.b = a
                        };
                    Jk.prototype.log = function(a, c) {
                        try {
                            if (this.C(a)) {
                                var d = this.w(a, c);
                                this.o(d)
                            }
                        } catch (e) {}
                    };
                    Jk.prototype.o = function(a) {
                        this.b ? a.b() : _.Ek(a)
                    };
                    var Kk = function(a, c, d, e) {
                        this.b = e;
                        this.F = c;
                        this.Y = d;
                        this.B = _.L(_.qk(a), .001);
                        this.G = _.J(_.H(a, 1)) && Math.random() < this.B;
                        c = null != _.H(a, 3) ? _.H(a, 3) : 1;
                        this.D = _.L(c, 1);
                        this.A = 0;
                        a = null != _.H(a, 4) ? _.H(a, 4) : !0;
                        this.H = _.J(a, !0)
                    };
                    _.y(Kk, Jk);
                    Kk.prototype.log = function(a, c) {
                        Kk.K.log.call(this, a, c);
                        if (this.b && this.H) throw a;
                    };
                    Kk.prototype.C = function() {
                        return this.b || this.G && this.A < this.D
                    };
                    Kk.prototype.w = function(a, c) {
                        try {
                            return _.ua(_.ta.R(), "lm").ef(a, c)
                        } catch (d) {
                            return new _.Hk(this.F, this.Y, a, this.B, c)
                        }
                    };
                    Kk.prototype.o = function(a) {
                        Kk.K.o.call(this, a);
                        this.A++
                    };
                    var Lk = function(a, c, d, e, f, g) {
                        Dk.call(this, a, c);
                        _.Jc(this.data, {
                            oge: e,
                            ogex: _.K(_.H(a, 9)),
                            ogp: _.K(_.H(a, 6)),
                            ogsr: Math.round(1 / (Ik(e) ? _.L(sk(d)) : _.L(tk(d)))),
                            ogus: f
                        });
                        if (g) {
                            "ogw" in g && (this.data.ogw = g.ogw, delete g.ogw);
                            "ved" in g && (this.data.ved = g.ved, delete g.ved);
                            a = [];
                            for (var h in g) 0 != a.length && a.push(","), a.push((h + "").replace(".", "%2E").replace(",", "%2C")), a.push("."), a.push((g[h] + "").replace(".", "%2E").replace(",", "%2C"));
                            g = a.join("");
                            "" != g && (this.data.ogad = g)
                        }
                    };
                    _.y(Lk, Dk);
                    _.Mk = function() {
                        return _.I(_.M(), yk, 11) || new yk
                    };
                    _.vk = function() {
                        return _.I(_.M(), xk, 4) || new xk
                    };
                    Nk = function(a, c, d, e, f) {
                        this.b = f;
                        this.F = a;
                        this.G = c;
                        this.Y = e;
                        this.H = _.L(tk(a), 1E-4);
                        this.B = _.L(sk(a), 1);
                        c = Math.random();
                        this.D = _.J(_.H(a, 1)) && c < this.H;
                        this.A = _.J(_.H(a, 1)) && c < this.B;
                        a = 0;
                        _.J(_.H(d, 1)) && (a |= 1);
                        _.J(_.H(d, 2)) && (a |= 2);
                        _.J(_.H(d, 3)) && (a |= 4);
                        this.J = a
                    };
                    _.y(Nk, Jk);
                    Nk.prototype.C = function(a) {
                        return this.b || (Ik(a) ? this.A : this.D)
                    };
                    Nk.prototype.w = function(a, c) {
                        return new Lk(this.G, this.Y, this.F, a, this.J, c)
                    };
                    var Ok;
                    Ok = null;
                    _.U = function() {
                        if (!Ok) {
                            var a = _.I(_.M(), _.rk, 13) || new _.rk,
                                c = _.Kb(),
                                d = _.wk();
                            Ok = new Kk(a, c, d, _.Fb)
                        }
                        return Ok
                    };
                    _.Gb = function(a, c) {
                        _.U().log(a, c)
                    };
                    var Pk;
                    Pk = null;
                    _.Qk = function() {
                        if (!Pk) {
                            var a = _.I(_.M(), uk, 12) || new uk,
                                c = _.Kb(),
                                d = _.Mk(),
                                e = _.wk();
                            Pk = new Nk(a, c, d, e, _.Fb)
                        }
                        return Pk
                    };
                    _.Rk = function(a, c) {
                        _.Qk().log(a, c)
                    };
                    _.Rk(8, {
                        m: "BackCompat" == window.document.compatMode ? "q" : "s"
                    });
                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Tk, Uk, $k;
                    _.Sk = function(a) {
                        return _.fc && void 0 != a.children ? a.children : (0, _.pa)(a.childNodes, function(a) {
                            return 1 == a.nodeType
                        })
                    };
                    Tk = function(a) {
                        a = a.getAttributeNode("tabindex");
                        return null != a && a.specified
                    };
                    Uk = function(a) {
                        a = a.tabIndex;
                        return _.Kc(a) && 0 <= a && 32768 > a
                    };
                    _.Vk = function(a, c, d, e) {
                        if (null != a)
                            for (a = a.firstChild; a;) {
                                if (c(a) && (d.push(a), e) || _.Vk(a, c, d, e)) return !0;
                                a = a.nextSibling
                            }
                        return !1
                    };
                    _.Wk = function(a) {
                        var c;
                        if ((c = "A" == a.tagName || "INPUT" == a.tagName || "TEXTAREA" == a.tagName || "SELECT" == a.tagName || "BUTTON" == a.tagName ? !a.disabled && (!Tk(a) || Uk(a)) : Tk(a) && Uk(a)) && _.B) {
                            var d;
                            !_.yc(a.getBoundingClientRect) || _.B && null == a.parentElement ? d = {
                                height: a.offsetHeight,
                                width: a.offsetWidth
                            } : d = a.getBoundingClientRect();
                            a = null != d && 0 < d.height && 0 < d.width
                        } else a = c;
                        return a
                    };
                    _.Yk = function(a) {
                        return _.t(a) ? window.document.getElementById(a) : a
                    };
                    _.Zk = function(a, c) {
                        for (; a && 1 != a.nodeType;) a = c ? a.nextSibling : a.previousSibling;
                        return a
                    };
                    $k = function(a, c) {
                        var d = [];
                        return _.Vk(a, c, d, !0) ? d[0] : void 0
                    };
                    _.al = function(a) {
                        var c;
                        if (_.hc && !(_.B && _.E("9") && !_.E("10") && _.m.SVGElement && a instanceof _.m.SVGElement) && (c = a.parentElement)) return c;
                        c = a.parentNode;
                        return _.Zf(c) ? c : null
                    };
                    var bl = function(a) {
                            _.P.call(this);
                            this.o = a || window;
                            this.w = _.O(this.o, "resize", this.A, !1, this);
                            this.b = _.xg(this.o)
                        },
                        cl, el;
                    _.y(bl, _.P);
                    _.dl = function() {
                        var a = window,
                            c = _.bh(a);
                        return cl[c] = cl[c] || new bl(a)
                    };
                    cl = {};
                    el = function(a) {
                        return a.b ? a.b.clone() : null
                    };
                    bl.prototype.N = function() {
                        bl.K.N.call(this);
                        this.w && (_.vd(this.w), this.w = null);
                        this.b = this.o = null
                    };
                    bl.prototype.A = function() {
                        var a = _.xg(this.o);
                        _.gh(a, this.b) || (this.b = a, this.M("resize"))
                    };
                    _.fl = function(a, c) {
                        _.P.call(this);
                        this.b = a;
                        this.w = el(this.b);
                        this.D = c || 100;
                        this.A = _.O(a, "resize", this.B, !1, this)
                    };
                    _.y(_.fl, _.P);
                    _.fl.prototype.N = function() {
                        _.vd(this.A);
                        _.fl.K.N.call(this)
                    };
                    _.fl.prototype.B = function() {
                        this.o || (this.o = new _.Xg(this.C, this.D, this), _.oc(this, this.o));
                        this.o.start()
                    };
                    _.fl.prototype.C = function() {
                        if (!this.b.isDisposed()) {
                            var a = this.w,
                                c = el(this.b);
                            this.w = c;
                            if (a) {
                                var d = !1;
                                a.width != c.width && (this.M("b"), d = !0);
                                a.height != c.height && (this.M("a"), d = !0);
                                d && this.M("resize")
                            } else this.M("a"), this.M("b"), this.M("resize")
                        }
                    };
                    _.gl = _.m.document && _.m.document.documentElement && !!_.m.document.documentElement.setCapture;
                    var hl = function(a) {
                        _.z.call(this);
                        this.b = a || _.Xf();
                        this.o = {}
                    };
                    _.y(hl, _.z);
                    hl.prototype.N = function() {
                        _.Cc(this.o, this.b.removeNode, this.b);
                        this.b = this.o = null;
                        hl.K.N.call(this)
                    };
                    var jl = function(a, c) {
                            var d = il(a);
                            _.ch(d, "");
                            _.se(function() {
                                _.ch(d, c)
                            }, 1)
                        },
                        il = function(a) {
                            var c = a.o.polite;
                            if (c) return c.removeAttribute("aria-hidden"), c;
                            c = a.b.createElement("DIV");
                            c.style.position = "absolute";
                            c.style.top = "-1000px";
                            c.style.height = "1px";
                            c.style.overflow = "hidden";
                            _.Rg(c, "live", "polite");
                            _.Rg(c, "atomic", "true");
                            a.b.b.body.appendChild(c);
                            return a.o.polite = c
                        };
                    _.kl = function() {
                        _.P.call(this);
                        this.w = [];
                        this.ya = [];
                        this.L = [];
                        this.S = this.$ = this.V = !1
                    };
                    _.y(_.kl, _.P);
                    _.k = _.kl.prototype;
                    _.k.Pc = function(a) {
                        this.ya.push(a);
                        this.V = a.$ = !0
                    };
                    _.k.init = function() {
                        if (!this.S) {
                            for (var a, c = 0; a = this.w[c]; c++) this.Ac(a);
                            this.S = !0
                        }
                    };
                    _.k.Ac = function(a) {
                        this.V && (_.O(a.element, "mousedown", a.xe, !1, a), this.ca && _.T(a.element, this.ca));
                        this.$ && this.fa && _.T(a.element, this.fa)
                    };
                    _.k.gc = function(a) {
                        this.V && (_.ud(a.element, "mousedown", a.xe, !1, a), this.ca && _.S(a.element, this.ca));
                        this.$ && this.fa && _.S(a.element, this.fa);
                        a.da()
                    };
                    _.k.ce = function(a) {
                        var c = a.w ? null : this.H;
                        if (c && c.w) {
                            var d = a.clientX;
                            a = a.clientY;
                            var e = _.wg(_.Xf(this.J).b),
                                f = d + e.x,
                                e = a + e.y,
                                g;
                            this.D && (g = this.D(c.o, c.b, f, e));
                            this.M(new _.ll("drag", 0, this.b, 0, c.o, 0, d, a));
                            c.w.M(new _.ll("drop", 0, this.b, 0, c.o, 0, d, a, 0, 0, g))
                        }
                        this.M(new _.ll("dragend", 0, this.b, 0, c ? c.o : void 0));
                        _.ud(this.B, "drag", this.ze, !1, this);
                        _.ud(this.B, "end", this.ce, !1, this);
                        _.ud(_.Vf(this.b.o).body, "selectstart", this.Le);
                        for (c = 0; d = this.L[c]; c++) _.ud(d.b, "scroll", this.Pd, !1, this), d.o = [];
                        this.B.da();
                        _.Sf(this.J);
                        delete this.b;
                        delete this.J;
                        delete this.B;
                        delete this.T;
                        delete this.H
                    };
                    _.k.ze = function(a) {
                        var c, d = _.wg(_.Xf(this.J).b);
                        c = new _.qg(a.clientX + d.x, a.clientY + d.y);
                        var d = c.x,
                            e = c.y,
                            f = this.H;
                        this.M(new _.ll("drag", 0, this.b, 0, f ? f.o : void 0, 0, a.clientX, a.clientY));
                        var g;
                        if (f) {
                            this.D && f.w && (g = this.D(f.o, f.b, d, e));
                            if (f.b.contains(c) && g == this.ta) return;
                            f.w && (this.M(new _.ll("dragout", 0, this.b, 0, f.o)), f.w.M(new _.ll("dragout", 0, this.b, 0, f.o, 0, void 0, void 0, 0, 0, this.ta)));
                            this.ta = g;
                            this.H = null
                        }
                        if (this.C.contains(c)) {
                            a: {
                                for (var h = 0; f = this.T[h]; h++)
                                    if (f.b.contains(c))
                                        if (f.A) {
                                            if (f.A.w.contains(c)) {
                                                c =
                                                    f;
                                                break a
                                            }
                                        } else {
                                            c = f;
                                            break a
                                        }
                                c = null
                            }
                            if ((f = this.H = c) && f.w) this.D && (g = this.D(f.o, f.b, d, e)),
                            d = new _.ll("dragover", 0, this.b, 0, f.o),
                            d.w = g,
                            this.M(d),
                            f.w.M(new _.ll("dragover", 0, this.b, 0, f.o, 0, a.clientX, a.clientY, 0, 0, g));
                            else if (!f) {
                                this.o || (this.o = new _.ml(this.C.clone()));
                                a = this.o.b;
                                a.top = this.C.top;
                                a.right = this.C.right;
                                a.bottom = this.C.bottom;
                                a.left = this.C.left;
                                for (g = 0; f = this.T[g]; g++) c = f.b, f.A && (f = f.A.w, c = new _.Sg(Math.max(c.top, f.top), Math.min(c.right, f.right), Math.min(c.bottom, f.bottom), Math.max(c.left,
                                    f.left))), f = null, d >= c.right ? f = c.right > a.left ? c.right : a.left : d < c.left && (f = c.left < a.right ? c.left : a.right), h = null, e >= c.bottom ? h = c.bottom > a.top ? c.bottom : a.top : e < c.top && (h = c.top < a.bottom ? c.top : a.bottom), null === f || null === h || (Math.abs(f - d) > Math.abs(h - e) ? h = null : f = null), null !== f ? f <= d ? a.left = f : a.right = f : null !== h && (h <= e ? a.top = h : a.bottom = h);
                                this.H = 10 <= (a.right - a.left) * (a.bottom - a.top) ? this.o : null
                            }
                        }
                    };
                    _.k.Le = function() {
                        return !1
                    };
                    _.k.Pd = function(a) {
                        for (var c = 0, d; d = this.L[c]; c++)
                            if (a.target == d.b) {
                                var e = d.B - d.b.scrollTop,
                                    f = d.A - d.b.scrollLeft;
                                d.B = d.b.scrollTop;
                                d.A = d.b.scrollLeft;
                                this.o && this.H == this.o && (0 < e ? this.o.b.top += e : this.o.b.bottom += e, 0 < f ? this.o.b.left += f : this.o.b.right += f);
                                for (var g = 0, h; h = d.o[g]; g++) h = h.b, h.top += e, h.left += f, h.bottom += e, h.right += f, _.nl(this, h)
                            }
                        this.B.ee(a)
                    };
                    _.nl = function(a, c) {
                        if (1 == a.T.length) a.C = new _.Sg(c.top, c.right, c.bottom, c.left);
                        else {
                            var d = a.C;
                            d.left = Math.min(c.left, d.left);
                            d.right = Math.max(c.right, d.right);
                            d.top = Math.min(c.top, d.top);
                            d.bottom = Math.max(c.bottom, d.bottom)
                        }
                    };
                    _.kl.prototype.N = function() {
                        _.kl.K.N.call(this);
                        for (var a, c = 0; a = this.w[c]; c++) this.gc(a);
                        this.w.length = 0
                    };
                    _.ll = function(a, c, d, e, f, g, h, l, p, r, u) {
                        _.Xc.call(this, a);
                        this.A = d;
                        this.C = f;
                        this.clientX = h;
                        this.clientY = l;
                        this.w = u
                    };
                    _.y(_.ll, _.Xc);
                    _.ml = function(a, c, d, e) {
                        this.b = a;
                        this.w = c;
                        this.o = d;
                        this.B = e || null;
                        this.A = null
                    };
                    var ol = function() {
                        _.kl.call(this)
                    };
                    _.y(ol, _.kl);
                    ol.prototype.removeItem = function(a) {
                        a = _.Yk(a);
                        for (var c, d = 0; c = this.w[d]; d++)
                            if (c.element == a) {
                                this.w.splice(d, 1);
                                this.gc(c);
                                break
                            }
                    };
                    _.pl = function(a, c) {
                        _.kl.call(this);
                        this.W = !1;
                        this.A = [];
                        this.aa = null != _.H(c, 1) ? _.H(c, 1) : !1;
                        this.ja = _.H(c, 2) || "";
                        this.Ea = _.H(c, 3) || "";
                        this.na = this.aa && this.ja ? new hl : null;
                        this.F = null;
                        this.G = a;
                        this.O = {};
                        this.ba = null
                    };
                    _.y(_.pl, ol);
                    _.k = _.pl.prototype;
                    _.k.Pg = _.bg.R();
                    _.k.Pc = function(a) {
                        _.pl.K.Pc.call(this, a);
                        this.A.push(a);
                        this.W = !0
                    };
                    _.k.init = function() {
                        _.pl.K.init.call(this);
                        this.aa && this.W && _.O(this.G, "keydown", this.Ae, !1, this)
                    };
                    _.k.N = function() {
                        this.aa && this.W && _.ud(this.G, "keydown", this.Ae, !1, this);
                        _.pl.K.N.call(this)
                    };
                    _.k.Ac = function(a) {
                        _.pl.K.Ac.call(this, a);
                        var c = a.element,
                            c = c.id || (c.id = "ogbkddg" + _.cg(this.Pg));
                        this.O[c] = a
                    };
                    _.k.gc = function(a) {
                        delete this.O[a.element.id];
                        _.pl.K.gc.call(this, a)
                    };
                    _.k.Ae = function(a) {
                        var c;
                        a: {
                            c = a.target;
                            if (this.O)
                                for (var d = this.G; c && c !== d;) {
                                    var e = c.id;
                                    if (e in this.O) {
                                        c = this.O[e];
                                        break a
                                    }
                                    c = c.parentNode
                                }
                            c = null
                        }
                        c && (32 == a.keyCode ? (this.F ? this.U(0, c) : (this.F = c, _.T(this.G, "gb_he"), _.T(c.element, "gb_7"), this.ba = _.O(window.document, "mousedown", (0, _.v)(this.U, this, a, c, !1)), _.O(this.G, _.Yc, this.le, !1, this), this.M(new ql(c)), rl(c.element).focus()), a.preventDefault(), a.stopPropagation()) : this.F && sl(this, a, c))
                    };
                    _.k.le = function(a) {
                        var c = rl(this.F.element);
                        a.target != c && this.U(0, this.F)
                    };
                    var sl = function(a, c, d) {
                        var e = null,
                            f = _.al(d.element),
                            f = _.Sk(f);
                        (0, _.na)(f, d.element);
                        switch (c.keyCode) {
                            case 37:
                                e = tl(a, d, -1);
                                break;
                            case 38:
                                e = tl(a, d, -3);
                                break;
                            case 39:
                                e = tl(a, d, 1);
                                break;
                            case 40:
                                e = tl(a, d, 3);
                                break;
                            case 9:
                                a.U(0, d);
                                break;
                            case 27:
                                a.U(0, d, !0)
                        }
                        if (e) {
                            a.M(new _.ll("dragout", 0, d));
                            var f = e.target.w[0],
                                g = new _.ll("dragover", 0, null);
                            g.C = f;
                            g.w = e.b;
                            a.M(g);
                            rl(d.element).focus();
                            if (a.na) {
                                d = 1 == a.A.indexOf(e.target) ? a.Ea : a.ja;
                                var h = [e.b + 1, f ? f.element.children.length : 0];
                                d = d.replace(/%([0-9]+)\$s/g, function(a,
                                    c) {
                                    c = (0, window.parseInt)(c, 10) - 1;
                                    return c < h.length ? h[c] : ""
                                });
                                jl(a.na, d)
                            }
                            c.preventDefault()
                        }
                    };
                    _.pl.prototype.U = function(a, c, d) {
                        _.S(this.G, "gb_he");
                        d ? this.M(new _.ll("dragout", 0, c)) : (a = _.al(c.element), a = ul(this, a), (a = -1 != a ? this.A[a] : null) && a.M(new _.ll("drop", 0, null)));
                        this.M(new _.ll("dragend", 0, c));
                        _.vd(this.ba);
                        delete this.ba;
                        _.ud(this.G, _.Yc, this.le, !1, this);
                        this.F = null;
                        _.S(c.element, "gb_7")
                    };
                    var tl = function(a, c, d) {
                            var e = c.element;
                            c = _.al(c.element);
                            var f = ul(a, c);
                            _.Sk(_.al(c));
                            for (var g = _.Sk(c), h = (0, _.na)(g, e), l = 0 < d ? 1 : -1; e && 0 != d;) {
                                do e = 0 < l ? _.n(e.nextElementSibling) ? e.nextElementSibling : _.Zk(e.nextSibling, !0) : _.n(e.previousElementSibling) ? e.previousElementSibling : _.Zk(e.previousSibling, !1); while (e && !(e.id in a.O));
                                d -= l;
                                h += l;
                                if (!e && f < a.A.length && (f += l, a.A[f]))
                                    if (c = a.A[f].w[0].element, g = _.Sk(c), 0 < l) e = (3 - h % 3) % 3, d = d < e ? 0 : d - e, h = 0, e = c.children[0];
                                    else {
                                        h = g.length;
                                        e = 3 - h % 3 - 1;
                                        if (d = e > -d ? 0 : d + e) h--, d++;
                                        e = c.children[h]
                                    }
                            }
                            return 0 == d && a.A[f] ? new vl(a.A[f], h) : null
                        },
                        ul = function(a, c) {
                            for (var d = -1, e = 0; e < a.A.length; e++)
                                if (a.A[e].w[0].element == c) {
                                    d = e;
                                    break
                                }
                            return d
                        },
                        rl = function(a) {
                            return $k(a, function(a) {
                                return _.Zf(a) && _.Wk(a)
                            })
                        },
                        vl = function(a, c) {
                            this.target = a;
                            this.b = c
                        },
                        ql = function(a) {
                            _.ll.call(this, "dragstart", 0, a)
                        };
                    _.y(ql, _.ll);
                    _.wl = new _.sg(88, 100);
                    var xl = !1,
                        yl = "",
                        zl = function(a) {
                            a = a.match(/[\d]+/g);
                            if (!a) return "";
                            a.length = 3;
                            return a.join(".")
                        };
                    (function() {
                        if (window.navigator.plugins && window.navigator.plugins.length) {
                            var a = window.navigator.plugins["Shockwave Flash"];
                            if (a && (xl = !0, a.description)) {
                                yl = zl(a.description);
                                return
                            }
                            if (window.navigator.plugins["Shockwave Flash 2.0"]) {
                                xl = !0;
                                yl = "2.0.0.11";
                                return
                            }
                        }
                        if (window.navigator.mimeTypes && window.navigator.mimeTypes.length && (a = window.navigator.mimeTypes["application/x-shockwave-flash"], xl = !!a && a.enabledPlugin)) {
                            yl = zl(a.enabledPlugin.description);
                            return
                        }
                        try {
                            var c = new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
                            xl = !0;
                            yl = zl(c.GetVariable("$version"));
                            return
                        } catch (d) {}
                        try {
                            c = new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
                            xl = !0;
                            yl = "6.0.21";
                            return
                        } catch (d) {}
                        try {
                            c = new window.ActiveXObject("ShockwaveFlash.ShockwaveFlash"), xl = !0, yl = zl(c.GetVariable("$version"))
                        } catch (d) {}
                    })();
                    _.Al = yl;
                    var Bl = function(a) {
                        a || _.Xf();
                        _.Gd.call(this)
                    };
                    _.y(Bl, _.Gd);
                    Bl.prototype.set = function(a, c) {
                        _.Gd.prototype.set.call(this, a, c);
                        return this
                    };
                    var Cl = function(a, c, d, e) {
                        return a.set(c.key, c.caption, d, e)
                    };
                    Bl.prototype.vb = function() {};
                    Bl.prototype.P = function() {
                        return null
                    };
                    var Dl = {
                            key: "ok",
                            caption: "OK"
                        },
                        El = {
                            key: "cancel",
                            caption: "Cancel"
                        },
                        Fl = {
                            key: "yes",
                            caption: "Yes"
                        },
                        Gl = {
                            key: "no",
                            caption: "No"
                        },
                        Hl = {
                            key: "save",
                            caption: "Save"
                        },
                        Il = {
                            key: "continue",
                            caption: "Continue"
                        };
                    "undefined" != typeof window.document && (Cl(new Bl, Dl, !0, !0), Cl(Cl(new Bl, Dl, !0), El, !1, !0), Cl(Cl(new Bl, Fl, !0), Gl, !1, !0), Cl(Cl(Cl(new Bl, Fl), Gl, !0), El, !1, !0), Cl(Cl(Cl(new Bl, Il), Hl), El, !0, !0));

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Jl;
                    Jl = [3, 5];
                    _.Kl = function(a) {
                        _.G(this, a, 0, -1, Jl)
                    };
                    _.y(_.Kl, _.F);
                    var Ll = function(a) {
                        _.G(this, a, 0, -1, null)
                    };
                    _.y(Ll, _.F);
                    var Ml = function() {};
                    var Nl = function(a, c, d) {
                        this.o = a;
                        this.w = c;
                        this.b = d || _.m
                    };
                    var Ol = function() {
                        this.b = []
                    };
                    Ol.prototype.o = function(a, c, d) {
                        this.B(a, c, d);
                        this.b.push(new Nl(a, c, d))
                    };
                    Ol.prototype.B = function(a, c, d) {
                        d = d || _.m;
                        for (var e = 0, f = this.b.length; e < f; e++) {
                            var g = this.b[e];
                            if (g.o == a && g.w == c && g.b == d) {
                                this.b.splice(e, 1);
                                break
                            }
                        }
                    };
                    Ol.prototype.w = function(a) {
                        for (var c = 0, d = this.b.length; c < d; c++) {
                            var e = this.b[c];
                            "catc" == e.o && e.w.call(e.b, a)
                        }
                    };
                    var Pl, Rl;
                    _.Ql = function(a, c, d, e, f, g) {
                        _.z.call(this);
                        this.F = c;
                        this.U = f;
                        this.D = g;
                        this.Y = !1;
                        this.w = {
                            "": !0
                        };
                        this.J = {
                            "": !0
                        };
                        this.B = [];
                        this.A = [];
                        this.L = ["//" + _.K(_.H(a, 2)), "og/_/js", "k=" + _.K(_.H(a, 3)), "rt=j", "t=zcms"];
                        this.G = "" == _.K(_.H(a, 14)) ? null : _.H(a, 14);
                        this.O = ["//" + _.K(_.H(a, 2)), "og/_/ss", "k=" + _.K(_.H(a, 13))];
                        this.H = "" == _.K(_.H(a, 15)) ? null : _.H(a, 15);
                        this.T = _.J(_.H(a, 1)) ? "?host=www.gstatic.com&bust=" + _.K(_.H(a, 16)) : "";
                        this.X = _.J(_.H(a, 1)) ? "?host=www.gstatic.com&bust=" + 1E11 * Math.random() : "";
                        this.o = d;
                        a = null !=
                            _.H(a, 17) ? _.H(a, 17) : 1;
                        this.b = _.L(a, 1);
                        a = 0;
                        for (c = e[a]; a < e.length; a++, c = e[a]) Pl(this, c, !0)
                    };
                    _.y(_.Ql, _.z);
                    _.va(_.Ql, "m");
                    Pl = function(a, c, d) {
                        if (!a.w[c] && (a.w[c] = !0, d && a.o[c]))
                            for (var e = 0; e < a.o[c].length; e++) Pl(a, a.o[c][e], d)
                    };
                    Rl = function(a, c) {
                        for (var d = [], e = 0; e < c.length; e++) {
                            var f = c[e];
                            if (!a.w[f]) {
                                var g = a.o[f];
                                g && (g = Rl(a, g), d = d.concat(g));
                                d.push(f);
                                a.w[f] = !0
                            }
                        }
                        return d
                    };
                    _.Tl = function(a, c, d) {
                        c = Rl(a, c);
                        0 < c.length && (c = a.L.join("/") + "/" + ("m=" + c.join(",")), a.G && (c += "/rs=" + a.G), c = c + a.T, Sl(a, c, (0, _.v)(a.Z, a, d)), a.B.push(c))
                    };
                    _.Ql.prototype.Z = function(a) {
                        for (var c = 0; c < this.A.length; c++) this.A[c].call(null);
                        a && a.call(null)
                    };
                    var Sl = function(a, c, d, e) {
                        var f = window.document.createElement("SCRIPT");
                        f.async = !0;
                        f.type = "text/javascript";
                        f.charset = "UTF-8";
                        f.src = c;
                        var g = !0,
                            h = e || 1;
                        e = (0, _.v)(function() {
                            g = !1;
                            this.D.log(47, {
                                att: h,
                                max: this.b,
                                url: c
                            });
                            h < this.b ? Sl(this, c, d, h + 1) : this.U.log(Error("da`" + h + "`" + this.b), {
                                url: c
                            })
                        }, a);
                        var l = (0, _.v)(function() {
                                g && (this.D.log(46, {
                                    att: h,
                                    max: this.b,
                                    url: c
                                }), g = !1, d && d.call(null))
                            }, a),
                            p = function(a) {
                                "loaded" == a.readyState || "complete" == a.readyState ? l() : g && window.setTimeout(function() {
                                    p(a)
                                }, 100)
                            };
                        "undefined" !==
                        typeof f.addEventListener ? f.onload = function() {
                            l()
                        } : f.onreadystatechange = function() {
                            f.onreadystatechange = null;
                            p(f)
                        };
                        f.onerror = e;
                        a.D.log(45, {
                            att: h,
                            max: a.b,
                            url: c
                        });
                        window.document.getElementsByTagName("HEAD")[0].appendChild(f)
                    };
                    _.Ql.prototype.od = function(a, c) {
                        for (var d = [], e = 0, f = a[e]; e < a.length; e++, f = a[e]) this.J[f] || (d.push(f), this.J[f] = !0);
                        0 < d.length && (d = this.O.join("/") + "/" + ("m=" + d.join(",")), this.H && (d += "/rs=" + this.H), Ul(d + this.X, c))
                    };
                    var Ul = function(a, c) {
                        var d = window.document.createElement("LINK");
                        d.setAttribute("rel", "stylesheet");
                        d.setAttribute("type", "text/css");
                        d.setAttribute("href", a);
                        d.onload = d.onreadystatechange = function() {
                            d.readyState && "loaded" != d.readyState && "complete" != d.readyState || c && c.call(null)
                        };
                        window.document.getElementsByTagName("HEAD")[0].appendChild(d)
                    };
                    _.Ql.prototype.C = function(a, c) {
                        this.Y || (void 0 != c ? window.setTimeout((0, _.v)(this.C, this, a, void 0), c) : (_.Tl(this, _.H(this.F, 1), a), this.od(_.H(this.F, 2)), this.Y = !0))
                    };
                    var Vl = function(a, c) {
                        var d = {};
                        d._sn = ["v.gas", c].join(".");
                        _.Gb(a, d)
                    };
                    var Wl = ["gbq1", "gbq2", "gbqfbwa"],
                        Xl = function(a) {
                            var c = window.document.getElementById("gbqld");
                            c && (c.style.display = a ? "none" : "block", c = window.document.getElementById("gbql")) && (c.style.display = a ? "block" : "none")
                        };
                    var Zl = function(a, c, d) {
                            this.A = new Ol;
                            this.H = a;
                            this.C = c;
                            this.b = Yl(a.offsetWidth, this.C);
                            this.G = d || new _.fl(_.dl(), 10);
                            _.O(this.G, "b", this.D, !1, this)
                        },
                        Yl = function(a, c) {
                            for (var d = 0, e = c.length - 1, f = c[0]; d < e;) {
                                if (a <= f.max) return f.id;
                                f = c[++d]
                            }
                            return c[e].id
                        };
                    Zl.prototype.D = function() {
                        var a = Yl(this.H.offsetWidth, this.C);
                        a != this.b && (this.b = a, this.w(new Ml))
                    };
                    Zl.prototype.o = function(a, c, d) {
                        this.A.o(a, c, d)
                    };
                    Zl.prototype.B = function(a, c) {
                        this.A.B(a, c)
                    };
                    Zl.prototype.w = function(a) {
                        this.A.w(a)
                    };
                    var $l, bm, cm, dm, em;
                    $l = null;
                    _.am = function() {
                        if (null != $l) return $l;
                        var a = window.document.body.style;
                        if (!(a = "flexGrow" in a || "webkitFlexGrow" in a)) a: {
                            if (a = window.navigator.userAgent) {
                                var c = /Trident\/(\d+)/.exec(a);
                                if (c && 7 <= Number(c[1])) {
                                    a = /\bMSIE (\d+)/.exec(a);
                                    a = !a || "10" == a[1];
                                    break a
                                }
                            }
                            a = !1
                        }
                        return $l = a
                    };
                    bm = function(a, c, d) {
                        var e = window.NaN;
                        window.getComputedStyle && (a = window.getComputedStyle(a, null).getPropertyValue(c)) && "px" == a.substr(a.length - 2) && (e = d ? (0, window.parseFloat)(a.substr(0, a.length - 2)) : (0, window.parseInt)(a.substr(0, a.length - 2), 10));
                        return e
                    };
                    cm = function(a) {
                        var c = a.offsetWidth,
                            d = bm(a, "width");
                        if (!(0, window.isNaN)(d)) return c - d;
                        var e = a.style.padding,
                            f = a.style.paddingLeft,
                            g = a.style.paddingRight;
                        a.style.padding = a.style.paddingLeft = a.style.paddingRight = 0;
                        d = a.clientWidth;
                        a.style.padding = e;
                        a.style.paddingLeft = f;
                        a.style.paddingRight = g;
                        return c - d
                    };
                    dm = function(a) {
                        var c = bm(a, "min-width");
                        if (!(0, window.isNaN)(c)) return c;
                        var d = a.style.width,
                            e = a.style.padding,
                            f = a.style.paddingLeft,
                            g = a.style.paddingRight;
                        a.style.width = a.style.padding = a.style.paddingLeft = a.style.paddingRight = 0;
                        c = a.clientWidth;
                        a.style.width = d;
                        a.style.padding = e;
                        a.style.paddingLeft = f;
                        a.style.paddingRight = g;
                        return c
                    };
                    em = function(a, c) {
                        c || -.5 != a - Math.round(a) || (a -= .5);
                        return Math.round(a)
                    };
                    _.fm = function(a) {
                        if (a) {
                            var c = a.style.opacity;
                            a.style.opacity = ".99";
                            _.Rc(a.offsetWidth);
                            a.style.opacity = c
                        }
                    };
                    var gm = function(a) {
                        _.z.call(this);
                        this.element = a;
                        this.b = [];
                        this.o = []
                    };
                    _.y(gm, _.z);
                    gm.prototype.N = function() {
                        gm.K.N.call(this);
                        this.element = null;
                        for (var a = 0; a < this.b.length; a++) this.b[a].da();
                        for (a = 0; a < this.o.length; a++) this.o[a].da();
                        this.b = this.o = null
                    };
                    gm.prototype.Oa = function(a) {
                        void 0 == a && (a = this.element.offsetWidth);
                        for (var c = cm(this.element), d = [], e = 0, f = 0, g = 0, h = 0, l = 0; l < this.b.length; l++) {
                            var p = this.b[l],
                                r = hm(p),
                                u = cm(p.element);
                            d.push({
                                item: p,
                                ib: r,
                                $g: u,
                                hc: 0
                            });
                            e += r.wc;
                            f += r.Ic;
                            g += r.Rb;
                            h += u
                        }
                        a = a - h - c - g;
                        e = 0 < a ? e : f;
                        f = a;
                        c = d;
                        do {
                            g = !0;
                            h = [];
                            for (l = p = 0; l < c.length; l++) {
                                var r = c[l],
                                    u = 0 < f ? r.ib.wc : r.ib.Ic,
                                    D = 0 == e ? 0 : u / e * f + r.hc,
                                    D = em(D, g),
                                    g = !g;
                                r.hc = im(r.item, D, r.$g, r.ib.Rb);
                                0 < u && D == r.hc && (h.push(r), p += u)
                            }
                            c = h;
                            f = a - (0, _.ra)(d, function(a, c) {
                                return a + c.hc
                            }, 0);
                            e = p
                        } while (0 !=
                            f && 0 != c.length);
                        for (l = 0; l < this.o.length; l++) this.o[l].Oa()
                    };
                    var km = function(a) {
                            var c = {};
                            c.items = (0, _.qa)(a.b, function(a) {
                                return jm(a)
                            });
                            c.children = (0, _.qa)(a.o, function(a) {
                                return km(a)
                            });
                            return c
                        },
                        lm = function(a, c) {
                            for (var d = 0; d < a.b.length; d++) a.b[d].element.style.width = c.items[d];
                            for (d = 0; d < a.o.length; d++) lm(a.o[d], c.children[d])
                        };
                    gm.prototype.P = function() {
                        return this.element
                    };
                    var mm = function(a, c, d, e) {
                        gm.call(this, a);
                        this.A = c;
                        this.B = d;
                        this.w = e
                    };
                    _.y(mm, gm);
                    var hm = function(a, c) {
                            var d = a.A,
                                e = a.B,
                                f;
                            if (-1 == a.w) {
                                var g = c;
                                void 0 == g && (g = cm(a.element));
                                f = jm(a);
                                var h = km(a),
                                    l = bm(a.element, "width", !0);
                                (0, window.isNaN)(l) && (l = a.element.offsetWidth - g);
                                g = Math.ceil(l);
                                a.element.style.width = f;
                                lm(a, h);
                                f = g
                            } else f = a.w;
                            return {
                                wc: d,
                                Ic: e,
                                Rb: f
                            }
                        },
                        im = function(a, c, d, e) {
                            void 0 == d && (d = cm(a.element));
                            void 0 == e && (e = hm(a, d).Rb);
                            c = e + c;
                            0 > c && (c = 0);
                            a.element.style.width = c + "px";
                            d = a.element.offsetWidth - d;
                            a.element.style.width = d + "px";
                            return d - e
                        },
                        jm = function(a) {
                            var c = a.element.style.width;
                            a.element.style.width = "";
                            return c
                        };
                    var nm = function(a, c, d) {
                            var e;
                            void 0 == e && (e = -1);
                            return {
                                className: a,
                                ib: {
                                    wc: c || 0,
                                    Ic: d || 0,
                                    Rb: e
                                }
                            }
                        },
                        om = {
                            className: "gb_2d",
                            items: [nm("gb_Ib"), nm("gb_fe"), nm("gb_Xd", 0, 2), nm("gb_ge"), nm("gb_9a", 1, 1)],
                            hb: [{
                                className: "gb_9a",
                                items: [nm("gb_He", 0, 1), nm("gb_ac", 0, 1)],
                                hb: [function(a) {
                                    a = a.gb_He;
                                    var c;
                                    if (a) c = a.P();
                                    else {
                                        c = window.document.querySelector(".gb_He");
                                        if (!c) return null;
                                        a = new gm(c)
                                    }
                                    c = c.querySelectorAll(".gb_Q");
                                    for (var d = 0; d < c.length; d++) {
                                        var e;
                                        if (_.Ng(c[d], "gb_S")) {
                                            e = new mm(c[d], 0, 1, -1);
                                            var f = c[d].querySelector(".gb_P");
                                            f && (f = new mm(f, 0, 1, -1), e.b.push(f), a.o.push(e))
                                        } else e = new mm(c[d], 0, 0, -1);
                                        a.b.push(e)
                                    }
                                    return a
                                }, {
                                    className: "gb_ac",
                                    items: [nm("gb_ea"), nm("gb_ic"), nm("gb_Zd"), nm("gb_6a", 0, 1), nm("gb_Ie"), nm("gb_2a", 0, 1), nm("gb_Je"), nm("gb_ie")],
                                    hb: [{
                                        className: "gb_6a",
                                        items: [nm("gb_8a", 0, 1)],
                                        hb: [{
                                            className: "gb_8a",
                                            items: [nm("gb_4a", 0, 1)],
                                            hb: []
                                        }]
                                    }]
                                }]
                            }, {
                                className: "gb_ce",
                                items: [nm("gbqff", 1, 1), nm("gb_be")],
                                hb: []
                            }]
                        },
                        pm = function(a, c) {
                            var d = c;
                            if (!d) {
                                d = window.document.querySelector("." + a.className);
                                if (!d) return null;
                                d = new gm(d)
                            }
                            for (var e = {}, f = 0; f < a.items.length; f++) {
                                var g = a.items[f],
                                    h;
                                if (h = (h = window.document.querySelector("." + g.className)) ? new mm(h, g.ib.wc, g.ib.Ic, g.ib.Rb) : null) d.b.push(h), e[g.className] = h
                            }
                            for (f = 0; f < a.hb.length; f++) {
                                var g = a.hb[f],
                                    l;
                                "function" == typeof g ? l = g(e) : l = pm(g, e[g.className]);
                                l && d.o.push(l)
                            }
                            return d
                        };
                    _.rm = function(a, c) {
                        _.z.call(this);
                        this.F = c;
                        this.o = window.document.getElementById("gb");
                        this.B = (this.b = window.document.querySelector(".gb_9a")) ? this.b.querySelector(".gb_ac") : null;
                        this.A = [];
                        this.Nd = _.L(_.H(a, 5), 60);
                        this.C = _.H(a, 4);
                        this.jh = _.L(_.H(a, 2), 152);
                        this.vf = _.L(_.H(a, 1), 30);
                        this.w = null;
                        this.ue = _.J(_.H(a, 3), !0);
                        this.o && this.C && (this.o.style.minWidth = this.C + "px");
                        this.mb = null;
                        this.o && (this.mb = new Zl(this.o, [{
                            id: "t",
                            max: 900
                        }, {
                            id: "f"
                        }]));
                        this.ue && (this.o && (qm(this), _.T(this.o, "gb_T"), this.b && _.T(this.b,
                            "gb_T"), _.am() || (this.w = pm(om))), this.Oa(), window.setTimeout((0, _.v)(this.Oa, this), 0));
                        _.x("gbar.elc", (0, _.v)(this.Y, this));
                        _.x("gbar.ela", _.Qc);
                        _.x("gbar.elh", (0, _.v)(this.D, this))
                    };
                    _.y(_.rm, _.z);
                    _.va(_.rm, "el");
                    var sm = function() {
                        var a = _.rm.yh();
                        return {
                            es: a ? {
                                f: a.jh,
                                h: a.Nd,
                                m: a.vf
                            } : {
                                f: 152,
                                h: 60,
                                m: 30
                            },
                            mo: "md",
                            vh: window.innerHeight || 0,
                            vw: window.innerWidth || 0
                        }
                    };
                    _.rm.prototype.N = function() {
                        _.rm.K.N.call(this)
                    };
                    _.rm.prototype.Oa = function(a) {
                        a && qm(this);
                        this.w && this.w.Oa(Math.max(window.document.documentElement.clientWidth, dm(this.o)));
                        _.fm(this.b)
                    };
                    _.rm.prototype.H = function() {
                        try {
                            var a = window.document.getElementById("gb"),
                                c = a.querySelector(".gb_9a");
                            _.S(a, "gb_Ze");
                            c && _.S(c, "gb_Ze");
                            for (var a = 0, d; d = Wl[a]; a++) {
                                var e = window.document.getElementById(d);
                                e && _.S(e, "gbqfh")
                            }
                            Xl(!1)
                        } catch (f) {
                            Vl(f, "rhcc")
                        }
                        this.G && this.G();
                        this.Oa(!0)
                    };
                    _.rm.prototype.J = function() {
                        try {
                            var a = window.document.getElementById("gb"),
                                c = a.querySelector(".gb_9a");
                            _.T(a, "gb_Ze");
                            c && _.T(c, "gb_Ze");
                            for (var a = 0, d; d = Wl[a]; a++) {
                                var e = window.document.getElementById(d);
                                e && _.T(e, "gbqfh")
                            }
                            Xl(!0)
                        } catch (f) {
                            Vl(f, "ahcc")
                        }
                        this.Oa(!0)
                    };
                    _.tm = function(a) {
                        return a.mb ? a.mb.b : "f"
                    };
                    _.rm.prototype.Y = function(a) {
                        this.A.push(a)
                    };
                    _.rm.prototype.D = function(a) {
                        this.Nd = sm().es.h + a;
                        for (a = 0; a < this.A.length; a++) try {
                            this.A[a](sm())
                        } catch (c) {
                            this.F.log(c)
                        }
                    };
                    var qm = function(a) {
                        if (a.b) {
                            var c;
                            a.w && (c = km(a.w));
                            _.T(a.b, "gb_W");
                            a.b.style.minWidth = a.b.offsetWidth - cm(a.b) + "px";
                            a.B.style.minWidth = a.B.offsetWidth - cm(a.B) + "px";
                            _.S(a.b, "gb_W");
                            c && lm(a.w, c)
                        }
                    };
                    _.nc(function() {
                        var a = _.I(_.M(), Ll, 21) || new Ll,
                            c = _.U(),
                            a = new _.rm(a, c);
                        _.ya("el", a);
                        _.x("gbar.gpca", (0, _.v)(a.J, a));
                        _.x("gbar.gpcr", (0, _.v)(a.H, a))
                    });
                    _.x("gbar.elr", sm);
                    _.um = function(a) {
                        this.w = _.rm.R();
                        this.o = a
                    };
                    _.um.prototype.b = function(a, c) {
                        "t" == _.tm(this.w) ? (_.T(a, "gb_V"), c ? (_.S(a, "gb_5a"), _.T(a, "gb_Ke")) : (_.S(a, "gb_Ke"), _.T(a, "gb_5a"))) : _.eh(a, ["gb_V", "gb_5a", "gb_Ke"])
                    };
                    _.x("gbar.sos", function() {
                        return window.document.querySelectorAll(".gb_ee")
                    });
                    _.x("gbar.si", function() {
                        return window.document.querySelector(".gb_de")
                    });
                    _.nc(function() {
                        if (_.I(_.M(), _.Kl, 16)) {
                            var a = window.document.querySelector(".gb_9a"),
                                c = _.I(_.M(), _.Kl, 16) || new _.Kl,
                                c = _.J(_.H(c, 1), !1),
                                c = new _.um(c);
                            a && c.o && c.b(a, !1)
                        }
                    });
                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    _.vm = function(a) {
                        _.G(this, a, 0, -1, null)
                    };
                    _.y(_.vm, _.F);
                    _.wm = function(a, c, d) {
                        return function() {
                            try {
                                return c.apply(d, arguments)
                            } catch (e) {
                                a.log(e)
                            }
                        }
                    };
                    _.xm = function() {
                        _.z.call(this);
                        this.o = new _.P
                    };
                    _.y(_.xm, _.z);
                    _.xm.prototype[_.ad] = !0;
                    _.k = _.xm.prototype;
                    _.k.Xa = function(a, c, d, e) {
                        return this.o.Xa(a, c, d, e)
                    };
                    _.k.tc = function(a, c, d, e) {
                        return this.o.tc(a, c, d, e)
                    };
                    _.k.ad = function(a, c, d, e) {
                        return this.o.ad(a, c, d, e)
                    };
                    _.k.uc = function(a) {
                        return this.o.uc(a)
                    };
                    _.k.M = function(a) {
                        return this.o.M(a)
                    };
                    _.k.Fc = function(a) {
                        return this.o.Fc(a)
                    };
                    _.k.sc = function() {
                        return this.o.sc()
                    };
                    _.k.Bb = function(a, c, d) {
                        return this.o.Bb(a, c, d)
                    };
                    _.k.$c = function(a, c, d, e) {
                        return this.o.$c(a, c, d, e)
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    _.ym = function(a) {
                        _.G(this, a, 0, -1, null)
                    };
                    _.y(_.ym, _.F);
                    _.ym.prototype.Wa = function() {
                        return _.H(this, 6)
                    };
                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var zm = function() {
                            _.Ib.w(_.Gb)
                        },
                        Am = function(a, c) {
                            var d = _.U(),
                                d = _.wm(d, zm);
                            a.addEventListener ? a.addEventListener(c, d) : a.attachEvent && a.attachEvent("on" + c, d)
                        },
                        Bm = [1, 2],
                        Cm = function(a, c) {
                            a.A.push(c)
                        },
                        Dm = function(a, c) {
                            a.__PVT = c
                        },
                        Em = function(a) {
                            _.G(this, a, 0, -1, Bm)
                        };
                    _.y(Em, _.F);
                    var Fm = function(a) {
                        _.z.call(this);
                        this.w = a;
                        this.A = this.b = null;
                        this.C = 0;
                        this.B = {};
                        this.o = !1;
                        a = window.navigator.userAgent;
                        0 <= a.indexOf("MSIE") && 0 <= a.indexOf("Trident") && (a = /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a)) && a[1] && 9 > (0, window.parseFloat)(a[1]) && (this.o = !0)
                    };
                    _.y(Fm, _.z);
                    var Gm = function(a, c, d) {
                        if (!a.o)
                            if (d instanceof Array)
                                for (var e in d) Gm(a, c, d[e]);
                            else {
                                e = (0, _.v)(a.H, a, c);
                                var f = a.C + d;
                                a.C++;
                                c.setAttribute("data-eqid", f);
                                a.B[f] = e;
                                c && c.addEventListener ? c.addEventListener(d, e, !1) : c && c.attachEvent ? c.attachEvent("on" + d, e) : a.w.log(Error("ba`" + c))
                            }
                    };
                    Fm.prototype.D = function(a, c) {
                        if (this.o) return null;
                        if (c instanceof Array) {
                            var d = null,
                                e;
                            for (e in c) {
                                var f = this.D(a, c[e]);
                                f && (d = f)
                            }
                            return d
                        }
                        d = null;
                        this.b && this.b.type == c && this.A == a && (d = this.b, this.b = null);
                        if (e = a.getAttribute("data-eqid")) a.removeAttribute("data-eqid"), (e = this.B[e]) ? a.removeEventListener ? a.removeEventListener(c, e, !1) : a.detachEvent && a.detachEvent("on" + c, e) : this.w.log(Error("ca`" + a));
                        return d
                    };
                    Fm.prototype.H = function(a, c) {
                        this.b = c;
                        this.A = a;
                        c.preventDefault ? c.preventDefault() : c.returnValue = !1
                    };
                    var Hm = function() {
                        _.z.call(this);
                        this.o = [];
                        this.b = []
                    };
                    _.y(Hm, _.z);
                    Hm.prototype.w = function(a, c) {
                        this.o.push({
                            ic: a,
                            options: c
                        })
                    };
                    Hm.prototype.init = function(a, c, d) {
                        window.gapi = {};
                        var e = window.___jsl = {};
                        e.h = _.K(_.H(a, 1));
                        e.ms = _.K(_.H(a, 2));
                        e.m = _.K(_.H(a, 3));
                        e.l = [];
                        _.H(c, 1) && (a = _.H(c, 3)) && this.b.push(a);
                        _.H(d, 1) && (d = _.H(d, 2)) && this.b.push(d);
                        _.x("gapi.load", (0, _.v)(this.w, this));
                        return this
                    };
                    var Im = function(a) {
                        _.z.call(this);
                        this.C = a;
                        this.A = this.b = null;
                        this.o = {};
                        this.B = {};
                        this.w = {}
                    };
                    _.y(Im, _.z);
                    _.k = Im.prototype;
                    _.k.Je = function(a) {
                        a && this.b && a != this.b && this.b.close();
                        this.b = a
                    };
                    _.k.we = function(a) {
                        a = this.w[a] || a;
                        return this.b == a
                    };
                    _.k.nh = function(a) {
                        this.A = a
                    };
                    _.k.ve = function(a) {
                        return this.A == a
                    };
                    _.k.Tc = function() {
                        this.b && this.b.close();
                        this.b = null
                    };
                    _.k.df = function(a) {
                        this.b && this.b.getId() == a && this.Tc()
                    };
                    _.k.Ob = function(a, c, d) {
                        this.o[a] = this.o[a] || {};
                        this.o[a][c] = this.o[a][c] || [];
                        this.o[a][c].push(d)
                    };
                    _.k.Rc = function(a, c) {
                        var d = c.getId();
                        if (this.o[a] && this.o[a][d])
                            for (var e = 0; e < this.o[a][d].length; e++) try {
                                this.o[a][d][e]()
                            } catch (f) {
                                this.C.log(f)
                            }
                    };
                    _.k.ph = function(a, c) {
                        this.B[a] = c
                    };
                    _.k.bf = function(a) {
                        return !this.B[a.getId()]
                    };
                    _.k.Eg = function() {
                        return !!this.b && this.b.$
                    };
                    _.k.$e = function() {
                        return !!this.b
                    };
                    _.k.Be = function() {
                        this.b && this.b.ja()
                    };
                    _.k.rh = function(a) {
                        this.w[a] && (this.b && this.b.getId() == a || this.w[a].open())
                    };
                    _.k.Rg = function(a) {
                        this.w[a.getId()] = a
                    };
                    (function() {
                        var a;
                        window.gbar && window.gbar._DPG ? a = window.gbar._DPG[0] || {} : a = {};
                        var c;
                        window.gbar && window.gbar._LDD ? c = window.gbar._LDD : c = [];
                        var d = _.Mk();
                        Dm(window, _.K(_.H(d, 8)));
                        var d = _.Kb(),
                            e = _.U();
                        a = new _.Ql(d, _.I(_.M(), Em, 17) || new Em, a, c, e, _.Qk());
                        _.ya("m", a);
                        c = function() {
                            _.x("gbar.qm", (0, _.v)(function(a) {
                                try {
                                    a()
                                } catch (c) {
                                    e.log(c)
                                }
                            }, this));
                            _.wa("api").Sa()
                        };
                        _.J(_.H(d, 18), !0) ? a.C(c) : (d = _.L(_.H(d, 19), 200), d = (0, _.v)(a.C, a, c, d), _.nc(d))
                    })();
                    Am(window.document, "DOMContentLoaded");
                    Am(window, "load");
                    _.x("gbar.ldb", (0, _.v)(_.Ib.w, _.Ib));
                    _.x("gbar.mls", function() {});
                    _.ya("eq", new Fm(_.U()));
                    _.ya("gs", (new Hm).init(_.vk(), _.I(_.M(), _.vm, 5) || new _.vm, _.I(_.M(), _.ym, 6) || new _.ym));
                    (function() {
                        for (var a = function(a) {
                                return function() {
                                    _.Rk(44, {
                                        n: a
                                    })
                                }
                            }, c = 0; c < _.Ba.length; c++) {
                            var d = "gbar." + _.Ba[c];
                            _.x(d, a(d))
                        }
                        var e = _.ta.R();
                        _.ua(e, "api").Sa();
                        Cm(_.ua(e, "m"), function() {
                            _.ua(e, "api").Sa()
                        })
                    })();
                    var Jm = function(a) {
                        _.nc(function() {
                            var c = window.document.querySelector("." + a);
                            c && (c = c.querySelector(".gb_b")) && Gm(_.wa("eq"), c, "click")
                        })
                    };
                    var Km = window.document.querySelector(".gb_ea"),
                        Lm = /(\s+|^)gb_ae(\s+|$)/;
                    Km && !Lm.test(Km.className) && Jm("gb_ea");
                    var Mm = new Im(_.U());
                    _.ya("dd", Mm);
                    _.x("gbar.close", (0, _.v)(Mm.Tc, Mm));
                    _.x("gbar.cls", (0, _.v)(Mm.df, Mm));
                    _.x("gbar.abh", (0, _.v)(Mm.Ob, Mm, 0));
                    _.x("gbar.adh", (0, _.v)(Mm.Ob, Mm, 1));
                    _.x("gbar.ach", (0, _.v)(Mm.Ob, Mm, 2));
                    _.x("gbar.aeh", (0, _.v)(Mm.ph, Mm));
                    _.x("gbar.bsy", (0, _.v)(Mm.Eg, Mm));
                    _.x("gbar.op", (0, _.v)(Mm.$e, Mm));
                    Jm("gb_6a");
                    _.nc(function() {
                        var a = window.document.querySelector(".gb_Lb");
                        a && Gm(_.wa("eq"), a, "click")
                    });
                    Jm("gb_ic");
                    _.x("gbar.qfgw", (0, _.v)(window.document.getElementById, window.document, "gbqfqw"));
                    _.x("gbar.qfgq", (0, _.v)(window.document.getElementById, window.document, "gbqfq"));
                    _.x("gbar.qfgf", (0, _.v)(window.document.getElementById, window.document, "gbqf"));
                    _.x("gbar.qfsb", (0, _.v)(window.document.getElementById, window.document, "gbqfb"));
                    Jm("gb_Zd");
                    Jm("gb_ie");
                } catch (e) {
                    _._DumpException(e)
                }
            })(this.gbar_);
            // Google Inc.
        </script>
        <div class="gb_Xa">
            <div class="gb_ha gb_ga gb_ua gb_Aa" aria-label="Google apps" aria-hidden="true" role="region">
                <ul class="gb_ja gb_ca" aria-dropeffect="move">
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="192" href="https://myaccount.google.com/?utm_source=OGB" id="gb192" data-ved="0EMEuCAAoAA">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -1449px"></span><span class="gb_4">My Account</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="1" href="https://www.google.co.in/webhp?tab=ww&amp;ei=ecrXVvW0Ec6dugTGvoTwCw&amp;ved=0EKkuCAEoAQ" id="gb1">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -276px"></span><span class="gb_4">Search</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="8" href="https://maps.google.co.in/maps?hl=en&amp;tab=wl" id="gb8" data-ved="0EMEuCAIoAg">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -69px"></span><span class="gb_4">Maps</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="36" href="https://www.youtube.com/?gl=IN" id="gb36" data-ved="0EMEuCAMoAw">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -138px"></span><span class="gb_4">YouTube</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="78" href="https://play.google.com/?hl=en&amp;tab=w8" id="gb78" data-ved="0EMEuCAQoBA">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -1380px"></span><span class="gb_4">Play</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="5" href="https://news.google.co.in/nwshp?hl=en&amp;tab=wn&amp;ei=ecrXVvW0Ec6dugTGvoTwCw&amp;ved=0EKkuCAUoBQ" id="gb5">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -1311px"></span><span class="gb_4">News</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="23" href="https://mail.google.com/mail/?tab=wm" id="gb23" data-ved="0EMEuCAYoBg">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -621px"></span><span class="gb_4">Gmail</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="49" href="https://drive.google.com/?tab=wo&amp;authuser=0" id="gb49" data-ved="0EMEuCAcoBw">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -1518px"></span><span class="gb_4">Drive</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="24" href="https://www.google.com/calendar?tab=wc" id="gb24" data-ved="0EMEuCAgoCA">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -1794px"></span><span class="gb_4">Calendar</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="119" href="https://plus.google.com/u/0/?tab=wX" id="gb119" data-ved="0EMEuCAkoCQ">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -897px"></span><span class="gb_4">Google+</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="51" href="https://translate.google.co.in/?hl=en&amp;tab=wT" id="gb51" data-ved="0EMEuCAooCg">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -1587px"></span><span class="gb_4">Translate</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="31" href="https://photos.google.com/?tab=wq" id="gb31" data-ved="0EMEuCAsoCw">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -345px"></span><span class="gb_4">Photos</span></a>
                    </li>
                </ul>
                <div class="gb_wa gb_Xa">
                    <div class="gb_5 gb_3" style="background-position:0 -276px"></div>
                    <div class="gb_xa">
                        <div class="gb_ya">Search</div><a class="gb_za gb_9d" href="#">Add a shortcut</a></div>
                </div><a class="gb_ka gb_9d" aria-label="More Google apps" href="https://www.google.co.in/intl/en/options/">More</a><span class="gb_la"></span>
                <ul class="gb_ja gb_da" aria-dropeffect="move">
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="25" href="https://docs.google.com/document/?usp=docs_alc&amp;authuser=0" id="gb25" data-ved="0EMEuCAwoDA">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -552px"></span><span class="gb_4">Docs</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="10" href="https://books.google.co.in/bkshp?hl=en&amp;tab=wp&amp;ei=ecrXVvW0Ec6dugTGvoTwCw&amp;ved=0EKkuCA0oDQ" id="gb10">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -1242px"></span><span class="gb_4">Books</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="30" href="https://www.blogger.com/?tab=wj" id="gb30" data-ved="0EMEuCA4oDg">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -2001px"></span><span class="gb_4">Blogger</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="53" href="https://www.google.com/contacts/?hl=en&amp;tab=wC" id="gb53" data-ved="0EMEuCA8oDw">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -483px"></span><span class="gb_4">Contacts</span></a>
                    </li>
                    <li class="gb_Z" aria-grabbed="false">
                        <a class="gb_O" data-pid="300" href="https://hangouts.google.com/" id="gb300" data-ved="0EMEuCBAoEA">
                            <div class="gb_8"></div>
                            <div class="gb_9"></div>
                            <div class="gb_aa"></div>
                            <div class="gb_ba"></div><span class="gb_3" style="background-position:0 -759px"></span><span class="gb_4">Hangouts</span></a>
                    </li>
                </ul><a class="gb_la gb_3d" href="https://www.google.co.in/intl/en/options/">Even more from Google</a></div>
            <div class="gb_cb gb_ga" aria-label="Account Information" aria-hidden="true">
                <div class="gb_fb">
                    <a class="gb_gb gb_9d gb_ib" aria-label="Change profile picture." href="https://plus.google.com/u/0/me?tab=wX">
                        <div class="gb_jb gbip" title="Google+ Profile Icon"></div><span class="gb_kb">Change</span></a>
                    <div class="gb_hb">
                        <div class="gb_lb">Akshay Raul</div>
                        <div class="gb_mb">akshayraul07@gmail.com</div>
                        <div class="gb_eb"><a href="https://plus.google.com/u/0/me?tab=wX">Google+ Profile</a>&ndash;<a href="http://www.google.co.in/intl/en/policies/privacy/">Privacy</a></div><a class="gb_Ca gb_6d gbp1 gb_nb" href="https://myaccount.google.com/?utm_source=OGB">My Account</a></div>
                </div>
                <div class="gb_sb gb_Xa" aria-hidden="true">
                    <a class="gb_tb gb_wb" href="https://www.google.co.in/webhp?authuser=0"><img class="gb_yb gb_ib" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Google+ Profile Icon" data-src="//lh6.googleusercontent.com/-kbN79FhJ5KU/AAAAAAAAAAI/AAAAAAAAAAA/AMW9IgduOkCBLbgTp1TYSY0c5xLeyrq8Jg/s48-c-mo/photo.jpg">
                        <div class="gb_vb">
                            <div class="gb_zb">Akshay Raul</div>
                            <div class="gb_Ab">akshayraul07@gmail.com (default)</div>
                        </div>
                    </a>
                </div><a class="gb_Bb gb_Xa" href="https://plus.google.com/u/0/dashboard" aria-hidden="true"><span class="gb_Cb gb_Nb"></span><div class="gb_Db">All your Google+ pages &rsaquo;</div></a>
                <div class="gb_ob">
                    <div><a class="gb_Ca gb_4d gb_nb" href="https://accounts.google.com/AddSession?hl=en&amp;continue=https://www.google.co.in/webhp%3Fhl%3Den">Add account</a></div>
                    <div><a class="gb_Ca gb_7d gb_ee gb_nb" id="gb_71" href="https://accounts.google.com/Logout?hl=en&amp;continue=https://www.google.co.in/webhp%3Fhl%3Den&amp;timeStmp=1456982649&amp;secTok=.AG5fkS_lJ-La-QPdqwZ-RzOFX5sKLTjC1g" target="_top">Sign out</a></div>
                </div>
            </div>
        </div>
        <style>
            .gb_Xa {
                display: none!important
            }
            
            @-moz-keyframes gb__a {
                0% {
                    opacity: 0
                }
                50% {
                    opacity: 1
                }
            }
            
            @keyframes gb__a {
                0% {
                    opacity: 0
                }
                50% {
                    opacity: 1
                }
            }
            
            #gbq2 {
                display: block
            }
            
            #gbqf {
                display: block;
                margin: 0;
                margin-right: 60px;
                white-space: nowrap
            }
            
            .gbqff {
                border: none;
                display: inline-block;
                margin: 0;
                padding: 0;
                vertical-align: top;
                width: 100%
            }
            
            .gbqfqw,
            #gbqfb,
            .gbqfwa {
                vertical-align: top
            }
            
            #gbqfaa,
            #gbqfab,
            #gbqfqwb {
                position: absolute
            }
            
            #gbqfaa {
                left: 0
            }
            
            #gbqfab {
                right: 0
            }
            
            .gbqfqwb,
            .gbqfqwc {
                right: 0;
                left: 0;
                height: 100%
            }
            
            .gbqfqwb {
                padding: 0 8px
            }
            
            #gbqfbw {
                display: inline-block;
                vertical-align: top
            }
            
            #gbqfb {
                border: 1px solid transparent;
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
                height: 30px;
                margin: 0;
                outline: none;
                padding: 0 0;
                width: 60px;
                -moz-box-shadow: none;
                box-shadow: none;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                background: #4285f4;
                background: -moz-linear-gradient(top, #4387fd, #4683ea);
                background: linear-gradient(top, #4387fd, #4683ea);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#4387fd, endColorstr=#4683ea, GradientType=1)
            }
            
            #gbqfb:hover {
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
                box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
            }
            
            #gbqfb:focus {
                -moz-box-shadow: inset 0 0 0 1px #fff;
                box-shadow: inset 0 0 0 1px #fff
            }
            
            #gbqfb:hover:focus {
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff;
                box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff
            }
            
            #gbqfb:active:active {
                border: 1px solid transparent;
                -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
                box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
                background: #3c78dc;
                background: -moz-linear-gradient(top, #3c7ae4, #3f76d3);
                background: linear-gradient(top, #3c7ae4, #3f76d3);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4, endColorstr=#3f76d3, GradientType=1)
            }
            
            .gbqfi {
                background-position: -428px 0;
                display: inline-block;
                margin: -1px;
                height: 30px;
                width: 30px
            }
            
            .gbqfqw {
                background: #fff;
                background-clip: padding-box;
                border: 1px solid #cdcdcd;
                border-color: rgba(0, 0, 0, .15);
                border-right-width: 0;
                height: 30px;
                -moz-box-sizing: border-box;
                box-sizing: border-box
            }
            
            #gbfwc .gbqfqw {
                border-right-width: 1px
            }
            
            #gbqfqw {
                position: relative
            }
            
            .gbqfqw.gbqfqw:hover {
                border-color: #a9a9a9;
                border-color: rgba(0, 0, 0, .3)
            }
            
            .gbqfwa {
                display: inline-block;
                width: 100%
            }
            
            .gbqfwb {
                width: 40%
            }
            
            .gbqfwc {
                width: 60%
            }
            
            .gbqfwb .gbqfqw {
                margin-left: 10px
            }
            
            .gbqfqw.gbqfqw:active,
            .gbqfqw.gbqfqwf.gbqfqwf {
                border-color: #4285f4
            }
            
            #gbqfq,
            #gbqfqb,
            #gbqfqc {
                background: transparent;
                border: none;
                height: 20px;
                margin-top: 4px;
                padding: 0;
                vertical-align: top;
                width: 100%
            }
            
            #gbqfq:focus,
            #gbqfqb:focus,
            #gbqfqc:focus {
                outline: none
            }
            
            .gbqfif,
            .gbqfsf {
                color: #222;
                font: 16px arial, sans-serif
            }
            
            #gbqfbwa {
                display: none;
                text-align: center;
                height: 0
            }
            
            #gbqfbwa .gbqfba {
                margin: 16px 8px
            }
            
            #gbqfsa,
            #gbqfsb {
                font: bold 11px/27px Arial, sans-serif!important;
                vertical-align: top
            }
            
            .gb_fa .gbqfqw.gbqfqw,
            .gb_X .gbqfqw.gbqfqw {
                border-color: rgba(255, 255, 255, 1);
                -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
                box-shadow: 0 1px 2px rgba(0, 0, 0, .2)
            }
            
            .gb_fa #gbqfb,
            .gb_X #gbqfb {
                -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
                box-shadow: 0 1px 2px rgba(0, 0, 0, .2)
            }
            
            .gb_fa #gbqfb:hover,
            .gb_X #gbqfb:hover {
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
                box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
            }
            
            .gb_fa #gbqfb:active,
            .gb_X #gbqfb:active {
                -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
                box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
            }
            
            .gbqfb,
            .gbqfba,
            .gbqfbb {
                cursor: default!important;
                display: inline-block;
                font-weight: bold;
                height: 29px;
                line-height: 29px;
                min-width: 54px;
                padding: 0 8px;
                text-align: center;
                text-decoration: none!important;
                -moz-border-radius: 2px;
                border-radius: 2px;
                -moz-user-select: -moz-none
            }
            
            .gbqfba:focus {
                border: 1px solid #4d90fe;
                outline: none;
                -moz-box-shadow: inset 0 0 0 1px #fff;
                box-shadow: inset 0 0 0 1px #fff
            }
            
            .gbqfba:hover {
                border-color: #c6c6c6;
                color: #222!important;
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
                box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
                background: #f8f8f8;
                background: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
                background: linear-gradient(top, #f8f8f8, #f1f1f1);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#f8f8f8, endColorstr=#f1f1f1, GradientType=1)
            }
            
            .gbqfba:hover:focus {
                -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff;
                box-shadow: 0 1px 0 rgba(0, 0, 0, .15), inset 0 0 0 1px #fff
            }
            
            .gbqfb::-moz-focus-inner {
                border: 0
            }
            
            .gbqfba::-moz-focus-inner {
                border: 0
            }
            
            .gbqfba {
                border: 1px solid #dcdcdc;
                border-color: rgba(0, 0, 0, 0.1);
                color: #444!important;
                font-size: 11px;
                background: #f5f5f5;
                background: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
                background: linear-gradient(top, #f5f5f5, #f1f1f1);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#f5f5f5, endColorstr=#f1f1f1, GradientType=1)
            }
            
            .gbqfba:active {
                -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1)
            }
            
            @-moz-keyframes gb__nb {
                0% {
                    -moz-transform: scale(0, 0);
                    transform: scale(0, 0)
                }
                20% {
                    -moz-transform: scale(1.4, 1.4);
                    transform: scale(1.4, 1.4)
                }
                50% {
                    -moz-transform: scale(.8, .8);
                    transform: scale(.8, .8)
                }
                85% {
                    -moz-transform: scale(1.1, 1.1);
                    transform: scale(1.1, 1.1)
                }
                to {
                    -moz-transform: scale(1.0, 1.0);
                    transform: scale(1.0, 1.0)
                }
            }
            
            @keyframes gb__nb {
                0% {
                    -moz-transform: scale(0, 0);
                    transform: scale(0, 0)
                }
                20% {
                    -moz-transform: scale(1.4, 1.4);
                    transform: scale(1.4, 1.4)
                }
                50% {
                    -moz-transform: scale(.8, .8);
                    transform: scale(.8, .8)
                }
                85% {
                    -moz-transform: scale(1.1, 1.1);
                    transform: scale(1.1, 1.1)
                }
                to {
                    -moz-transform: scale(1.0, 1.0);
                    transform: scale(1.0, 1.0)
                }
            }
            
            .gb_cc {
                background-position: -314px -38px;
                opacity: .55;
                height: 100%;
                width: 100%
            }
            
            .gb_b:hover .gb_cc,
            .gb_b:focus .gb_cc {
                opacity: .85
            }
            
            .gb_dc .gb_cc {
                background-position: -463px 0
            }
            
            .gb_ec {
                background-color: #cb4437;
                -moz-border-radius: 8px;
                border-radius: 8px;
                font: bold 11px Arial;
                color: #fff;
                line-height: 16px;
                min-width: 14px;
                padding: 0 1px;
                position: absolute;
                right: 0;
                text-align: center;
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
                top: 0;
                visibility: hidden;
                z-index: 990
            }
            
            .gb_fc .gb_ec,
            .gb_fc .gb_gc,
            .gb_fc .gb_gc.gb_hc {
                visibility: visible
            }
            
            .gb_gc {
                padding: 0 2px;
                visibility: hidden
            }
            
            .gb_ic:not(.gb_jc) .gb_bb,
            .gb_ic:not(.gb_jc) .gb_ab {
                left: 3px
            }
            
            .gb_ec.gb_kc {
                -moz-animation: gb__nb .6s 1s both ease-in-out;
                animation: gb__nb .6s 1s both ease-in-out;
                -moz-perspective-origin: top right;
                perspective-origin: top right;
                -moz-transform: scale(1, 1);
                transform: scale(1, 1);
                -moz-transform-origin: top right;
                transform-origin: top right
            }
            
            .gb_kc .gb_gc {
                visibility: visible
            }
            
            .gb_fa .gb_b .gb_cc {
                background-position: 0 0;
                opacity: .7
            }
            
            .gb_fa .gb_dc .gb_cc {
                background-position: -279px -38px
            }
            
            .gb_fa .gb_b:hover .gb_cc,
            .gb_fa .gb_b:focus .gb_cc {
                opacity: .85
            }
            
            .gb_X .gb_b .gb_cc {
                background-position: -349px -38px;
                opacity: 1
            }
            
            .gb_X .gb_dc .gb_cc {
                background-position: -393px 0
            }
            
            .gb_fa .gb_ec,
            .gb_X .gb_ec {
                border: none
            }
            
            .gb_ic .gb_lc {
                font-size: 14px;
                font-weight: bold;
                top: 0;
                right: 0
            }
            
            .gb_ic .gb_b {
                display: inline-block;
                vertical-align: middle;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                height: 30px;
                width: 30px
            }
            
            .gb_ic .gb_ab {
                border-bottom-color: #e5e5e5
            }
            
            .gb_mc {
                background-color: rgba(0, 0, 0, .55);
                color: #fff;
                font-size: 12px;
                font-weight: bold;
                line-height: 20px;
                margin: 5px;
                padding: 0 2px;
                text-align: center;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                -moz-border-radius: 50%;
                border-radius: 50%;
                height: 20px;
                width: 20px
            }
            
            .gb_mc.gb_nc {
                background-position: -194px -21px
            }
            
            .gb_mc.gb_oc {
                background-position: -194px -46px
            }
            
            .gb_b:hover .gb_mc,
            .gb_b:focus .gb_mc {
                background-color: rgba(0, 0, 0, .85)
            }
            
            #gbsfw.gb_pc {
                background: #e5e5e5;
                border-color: #ccc
            }
            
            .gb_fa .gb_mc {
                background-color: rgba(0, 0, 0, .7)
            }
            
            .gb_X .gb_mc.gb_mc,
            .gb_X .gb_fc .gb_mc.gb_mc,
            .gb_X .gb_fc .gb_b:hover .gb_mc,
            .gb_X .gb_fc .gb_b:focus .gb_mc {
                background-color: #fff;
                color: #404040
            }
            
            .gb_X .gb_mc.gb_nc {
                background-position: -70px 0
            }
            
            .gb_X .gb_mc.gb_oc {
                background-position: -219px 0
            }
            
            .gb_fc .gb_mc.gb_mc {
                background-color: #db4437;
                color: #fff
            }
            
            .gb_fc .gb_b:hover .gb_mc,
            .gb_fc .gb_b:focus .gb_mc {
                background-color: #a52714
            }
            
            .gb_fc .gb_mc.gb_oc {
                background-position: -194px -46px
            }
            
            .gb_N .gbqfi::before {
                left: -428px;
                top: 0
            }
            
            .gb_ub .gbqfb:focus .gbqfi {
                outline: 1px dotted #fff
            }
            
            .gb_N .gb_ea .gb_b::before,
            .gb_N.gb_fa .gb_ea .gb_b::before {
                left: -132px;
                top: -38px
            }
            
            .gb_N.gb_X .gb_ea .gb_b::before {
                left: -463px;
                top: -35px
            }
            
            .gb_ub .gb_ka {
                position: relative
            }
            
            .gb_ea .gb_b:hover,
            .gb_ea .gb_b:focus {
                opacity: .85
            }
            
            .gb_X .gb_ea .gb_b:hover,
            .gb_X .gb_ea .gb_b:focus {
                opacity: 1
            }
            
            @media (min-resolution:1.25dppx),
            (-webkit-min-device-pixel-ratio:1.25),
            (min-device-pixel-ratio:1.25) {
                .gb_oa .gb_3 {
                    background-image: url('//ssl.gstatic.com/gb/images/p2_be019a48.png')
                }
            }
            
            .gb_N .gb_Lb .gb_Nb::before {
                left: 0;
                top: -35px
            }
            
            .gb_N.gb_X .gb_Lb .gb_Nb::before {
                left: -296px;
                top: 0
            }
            
            .gb_N.gb_fa .gb_Lb .gb_Nb::before {
                left: -97px;
                top: 0
            }
            
            .gb_N .gb_Ob {
                background-image: none!important
            }
            
            .gb_N .gb_Pb {
                visibility: visible
            }
            
            .gb_ub .gb_Nc span {
                background: transparent
            }
            
            .gb_N .gb_cc::before {
                left: -314px;
                top: -38px
            }
            
            .gb_N .gb_dc .gb_cc::before {
                left: -463px;
                top: 0
            }
            
            .gb_N.gb_fa .gb_b .gb_cc::before {
                left: 0;
                top: 0
            }
            
            .gb_N.gb_fa .gb_dc .gb_cc::before {
                left: -279px;
                top: -38px
            }
            
            .gb_N.gb_X .gb_b .gb_cc::before {
                left: -349px;
                top: -38px
            }
            
            .gb_N.gb_X .gb_dc .gb_cc::before {
                left: -393px;
                top: 0
            }
            
            .gb_ub .gb_mc {
                border: 1px solid #fff;
                color: #fff
            }
            
            .gb_ub.gb_fa .gb_mc {
                border-color: #000;
                color: #000
            }
            
            .gb_N .gb_mc.gb_nc::before,
            .gb_ub.gb_N.gb_X .gb_mc.gb_nc::before {
                left: -194px;
                top: -21px
            }
            
            .gb_N .gb_mc.gb_oc::before,
            .gb_ub.gb_N.gb_X .gb_mc.gb_oc::before {
                left: -194px;
                top: -46px
            }
            
            .gb_N.gb_X .gb_mc.gb_nc::before,
            .gb_ub.gb_N.gb_fa .gb_mc.gb_nc::before {
                left: -70px;
                top: 0
            }
            
            .gb_N.gb_X .gb_mc.gb_oc::before,
            .gb_ub.gb_N.gb_fa .gb_mc.gb_oc::before {
                left: -219px;
                top: 0
            }
            
            .gb_uc {
                color: #ffffff;
                font-size: 13px;
                font-weight: bold;
                height: 25px;
                line-height: 19px;
                padding-top: 5px;
                padding-left: 12px;
                position: relative;
                background-color: #4d90fe
            }
            
            .gb_uc .gb_vc {
                color: #ffffff;
                cursor: default;
                font-size: 22px;
                font-weight: normal;
                position: absolute;
                right: 12px;
                top: 5px
            }
            
            .gb_uc .gb_wc,
            .gb_uc .gb_xc {
                color: #ffffff;
                display: inline-block;
                font-size: 11px;
                margin-left: 16px;
                padding: 0 8px;
                white-space: nowrap
            }
            
            .gb_yc {
                background: none;
                background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
                background-image: linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
                background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
                -moz-border-radius: 2px;
                border-radius: 2px;
                border: 1px solid #dcdcdc;
                border: 1px solid rgba(0, 0, 0, 0.1);
                cursor: default!important;
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#160000ff, endColorstr=#220000ff);
                text-decoration: none!important
            }
            
            .gb_yc:hover {
                background: none;
                background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
                background-image: linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
                background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
                border: 1px solid rgba(0, 0, 0, 0.2);
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#14000000, endColorstr=#22000000)
            }
            
            .gb_yc:active {
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
                -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3)
            }
            
            .gb_0c.gb_Jd {
                padding: 0
            }
            
            .gb_Jd .gb_ga {
                padding: 26px 26px 22px 13px;
                background: #ffffff
            }
            
            .gb_Kd.gb_Jd .gb_ga {
                background: #4d90fe
            }
            
            a.gb_Ld {
                color: #666666!important;
                font-size: 22px;
                height: 9px;
                opacity: .8;
                position: absolute;
                right: 14px;
                top: 4px;
                text-decoration: none!important;
                width: 9px
            }
            
            .gb_Kd a.gb_Ld {
                color: #c1d1f4!important
            }
            
            a.gb_Ld:hover,
            a.gb_Ld:active {
                opacity: 1
            }
            
            .gb_Md {
                padding: 0;
                width: 258px;
                white-space: normal;
                display: table
            }
            
            .gb_Kd .gb_Md {
                width: 200px
            }
            
            .gb_Nd {
                color: #333333;
                font-size: 16px;
                line-height: 20px;
                margin: 0;
                margin-bottom: 16px
            }
            
            .gb_Kd .gb_Nd {
                color: #ffffff
            }
            
            .gb_Od {
                color: #666666;
                line-height: 17px;
                margin: 0;
                margin-bottom: 5px
            }
            
            .gb_Kd .gb_Od {
                color: #ffffff
            }
            
            .gb_Pd {
                position: absolute;
                background: transparent;
                top: -999px;
                z-index: -1;
                visibility: hidden;
                margin-top: 1px;
                margin-left: 1px
            }
            
            #gb .gb_Jd {
                margin: 0
            }
            
            .gb_Jd .gb_nb {
                background: #4d90fe;
                border-color: #3079ed;
                margin-top: 15px
            }
            
            #gb .gb_Jd a.gb_nb.gb_nb {
                color: #ffffff
            }
            
            .gb_Jd .gb_nb:hover {
                background: #357ae8;
                border-color: #2f5bb7
            }
            
            .gb_Qd .gb_lc .gb_ab {
                border-bottom-color: #ffffff;
                display: block
            }
            
            .gb_Rd .gb_lc .gb_ab {
                border-bottom-color: #4d90fe;
                display: block
            }
            
            .gb_Qd .gb_lc .gb_bb,
            .gb_Rd .gb_lc .gb_bb {
                display: block
            }
            
            .gb_Sd,
            .gb_Td {
                display: table-cell
            }
            
            .gb_Sd {
                vertical-align: middle
            }
            
            .gb_Td {
                padding-left: 13px;
                width: 100%
            }
            
            .gb_Ud {
                margin-bottom: 32px;
                font-size: small
            }
            
            .gb_Ud .gb_Vd {
                margin-right: 5px
            }
            
            .gb_Ud .gb_Wd {
                color: red
            }
            
            .gb_tc {
                display: none
            }
            
            .gb_tc.gb_g {
                display: block
            }
            
            .gb_N .gb_Zd .gb_b::before {
                left: -498px;
                top: -35px
            }
            
            .gb_N.gb_fa .gb_Zd .gb_b::before {
                left: -498px;
                top: 0
            }
            
            .gb_N.gb_X .gb_Zd .gb_b::before {
                left: -428px;
                top: -35px
            }
            
            .gb_ub .gb_bb {
                border: 0;
                border-left: 1px solid rgba(0, 0, 0, .2);
                border-top: 1px solid rgba(0, 0, 0, .2);
                height: 14px;
                width: 14px;
                -moz-transform: rotate(45deg);
                transform: rotate(45deg)
            }
            
            .gb_ub .gb_ab {
                border: 0;
                border-left: 1px solid rgba(0, 0, 0, .2);
                border-top: 1px solid rgba(0, 0, 0, .2);
                height: 14px;
                width: 14px;
                -moz-transform: rotate(45deg);
                transform: rotate(45deg);
                border-color: #fff;
                background: #fff
            }
            
            .gb_N .gb_Me::before {
                clip: rect(25px 235px 41px 219px);
                left: -197px;
                top: -3px
            }
            
            .gb_N .gb_Nb.gb_Ne {
                position: absolute
            }
            
            .gb_N .gb_Ne::before {
                clip: rect(-0 210px 16px 194px);
                left: -164px;
                top: 22px
            }
            
            .gb_N .gb_5a .gb_Me::before {
                left: -189px
            }
            
            @media (min-resolution:1.25dppx),
            (-webkit-min-device-pixel-ratio:1.25),
            (min-device-pixel-ratio:1.25) {
                .gb_N .gb_Me::before {
                    clip: rect(50px 470px 82px 438px)
                }
                .gb_N .gb_Ne::before {
                    clip: rect(-0 420px 32px 388px)
                }
            }
            
            .gb_N .gb_Nb,
            .gb_N .gbii,
            .gb_N .gbip {
                background-image: none;
                overflow: hidden;
                position: relative
            }
            
            .gb_N .gb_Nb::before {
                content: url('//ssl.gstatic.com/gb/images/i1_1967ca6a.png');
                position: absolute
            }
            
            @media (min-resolution:1.25dppx),
            (-webkit-min-device-pixel-ratio:1.25),
            (min-device-pixel-ratio:1.25) {
                .gb_N .gb_Nb::before {
                    content: url('//ssl.gstatic.com/gb/images/i2_2ec824b0.png');
                    -moz-transform: scale(.5);
                    transform: scale(.5);
                    -moz-transform-origin: 0 0;
                    transform-origin: 0 0
                }
            }
            
            .gb_ub a:focus {
                outline: 1px dotted #fff!important
            }
            
            sentinel {}
        </style>
        <script>
            (function() {
                var ctx = [];
                google.jsc.x(ctx);
            })();
        </script>
        <script>
            (function() {
                function k(a) {
                    ++b;
                    a = a || window.event;
                    google.iTick(a.target || a.srcElement)
                }
                if (google.timers && google.timers.load.t) {
                    var c, b, f;
                    google.c.c.a && (google.startTick("aft"), google.afte = !1);
                    var g = document.getElementsByTagName("img");
                    c = g.length;
                    for (var d = b = 0, a; d < c; ++d)
                        if (a = g[d], google.c.c.i && "none" == a.style.display) ++b;
                        else {
                            var h = "string" != typeof a.src || !a.src,
                                e = h || a.complete;
                            google.c.c.d ? a.getAttribute("data-deferred") && (e = !1, a.removeAttribute("data-deferred")) : google.c.c.m && h && a.getAttribute("data-bsrc") &&
                                (e = !1);
                            e ? ++b : google.rll(a, !0, k)
                        }
                    f = c - b;
                    google.rll(window, !1, function() {
                        google.tick("load", "ol");
                        google.c.e("load", "imc", String(b));
                        google.c.e("load", "imn", String(c));
                        google.c.e("load", "imp", String(f));
                        google.c.u("pr")
                    });
                    google.tick("load", ["prt", "iml"])
                }
                google.c.c.n && 0 < document.getElementsByClassName("native_iml_flag").length && google.c.b("ncr")
            })();
        </script>
        <div data-jiis="cc" id="lfootercc"></div>
    </div>
</body>

</html>