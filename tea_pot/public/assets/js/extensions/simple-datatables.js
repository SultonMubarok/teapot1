(() => {
  "use strict";
  var t,
    e,
    s = {},
    a = {};
  function i(t) {
    var e = a[t];
    if (void 0 !== e) return e.exports;
    var n = (a[t] = { exports: {} });
    return s[t].call(n.exports, n, n.exports, i), n.exports;
  }
  (i.m = s),
    (i.n = (t) => {
      var e = t && t.__esModule ? () => t.default : () => t;
      return i.d(e, { a: e }), e;
    }),
    (i.d = (t, e) => {
      for (var s in e)
        i.o(e, s) &&
          !i.o(t, s) &&
          Object.defineProperty(t, s, { enumerable: !0, get: e[s] });
    }),
    (i.f = {}),
    (i.e = (t) =>
      Promise.all(Object.keys(i.f).reduce((e, s) => (i.f[s](t, e), e), []))),
    (i.u = (t) => {
      if (568 === t) return "assets/js/568.js";
    }),
    (i.miniCssF = (t) => {}),
    (i.o = (t, e) => Object.prototype.hasOwnProperty.call(t, e)),
    (t = {}),
    (e = "mazer:"),
    (i.l = (s, a, n, r) => {
      if (t[s]) t[s].push(a);
      else {
        var l, h;
        if (void 0 !== n)
          for (
            var o = document.getElementsByTagName("script"), d = 0;
            d < o.length;
            d++
          ) {
            var c = o[d];
            if (
              c.getAttribute("src") == s ||
              c.getAttribute("data-webpack") == e + n
            ) {
              l = c;
              break;
            }
          }
        l ||
          ((h = !0),
          ((l = document.createElement("script")).charset = "utf-8"),
          (l.timeout = 120),
          i.nc && l.setAttribute("nonce", i.nc),
          l.setAttribute("data-webpack", e + n),
          (l.src = s)),
          (t[s] = [a]);
        var p = (e, a) => {
            (l.onerror = l.onload = null), clearTimeout(u);
            var i = t[s];
            if (
              (delete t[s],
              l.parentNode && l.parentNode.removeChild(l),
              i && i.forEach((t) => t(a)),
              e)
            )
              return e(a);
          },
          u = setTimeout(
            p.bind(null, void 0, { type: "timeout", target: l }),
            12e4
          );
        (l.onerror = p.bind(null, l.onerror)),
          (l.onload = p.bind(null, l.onload)),
          h && document.head.appendChild(l);
      }
    }),
    (i.r = (t) => {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(t, "__esModule", { value: !0 });
    }),
    (i.p = "/"),
    (() => {
      var t = { 277: 0 };
      i.f.j = (e, s) => {
        var a = i.o(t, e) ? t[e] : void 0;
        if (0 !== a)
          if (a) s.push(a[2]);
          else {
            var n = new Promise((s, i) => (a = t[e] = [s, i]));
            s.push((a[2] = n));
            var r = i.p + i.u(e),
              l = new Error();
            i.l(
              r,
              (s) => {
                if (i.o(t, e) && (0 !== (a = t[e]) && (t[e] = void 0), a)) {
                  var n = s && ("load" === s.type ? "missing" : s.type),
                    r = s && s.target && s.target.src;
                  (l.message =
                    "Loading chunk " + e + " failed.\n(" + n + ": " + r + ")"),
                    (l.name = "ChunkLoadError"),
                    (l.type = n),
                    (l.request = r),
                    a[1](l);
                }
              },
              "chunk-" + e,
              e
            );
          }
      };
      var e = (e, s) => {
          var a,
            n,
            [r, l, h] = s,
            o = 0;
          for (a in l) i.o(l, a) && (i.m[a] = l[a]);
          if (h) h(i);
          for (e && e(s); o < r.length; o++)
            (n = r[o]), i.o(t, n) && t[n] && t[n][0](), (t[r[o]] = 0);
        },
        s = (self.webpackChunkmazer = self.webpackChunkmazer || []);
      s.forEach(e.bind(null, 0)), (s.push = e.bind(null, s.push.bind(s)));
    })();
  const n = (t) => "[object Object]" === Object.prototype.toString.call(t),
    r = (t, e) => {
      const s = document.createElement(t);
      if (e && "object" == typeof e)
        for (const t in e)
          "html" === t ? (s.innerHTML = e[t]) : s.setAttribute(t, e[t]);
      return s;
    },
    l = (t) => {
      t instanceof NodeList ? t.forEach((t) => l(t)) : (t.innerHTML = "");
    },
    h = (t, e, s) =>
      r("li", { class: t, html: `<a href="#" data-page="${e}">${s}</a>` }),
    o = (t, e) => {
      let s, a;
      1 === e
        ? ((s = 0), (a = t.length))
        : -1 === e && ((s = t.length - 1), (a = -1));
      for (let i = !0; i; ) {
        i = !1;
        for (let n = s; n != a; n += e)
          if (t[n + e] && t[n].value > t[n + e].value) {
            const s = t[n],
              a = t[n + e],
              r = s;
            (t[n] = a), (t[n + e] = r), (i = !0);
          }
      }
      return t;
    };
  class d {
    constructor(t, e) {
      return (this.dt = t), (this.rows = e), this;
    }
    build(t) {
      const e = r("tr");
      let s = this.dt.headings;
      return (
        s.length || (s = t.map(() => "")),
        s.forEach((s, a) => {
          const i = r("td");
          (t[a] && t[a].length) || (t[a] = ""),
            (i.innerHTML = t[a]),
            (i.data = t[a]),
            e.appendChild(i);
        }),
        e
      );
    }
    render(t) {
      return t;
    }
    add(t) {
      if (Array.isArray(t)) {
        const e = this.dt;
        Array.isArray(t[0])
          ? t.forEach((t) => {
              e.data.push(this.build(t));
            })
          : e.data.push(this.build(t)),
          e.data.length && (e.hasRows = !0),
          this.update(),
          e.columns().rebuild();
      }
    }
    remove(t) {
      const e = this.dt;
      Array.isArray(t)
        ? (t.sort((t, e) => e - t),
          t.forEach((t) => {
            e.data.splice(t, 1);
          }))
        : "all" == t
        ? (e.data = [])
        : e.data.splice(t, 1),
        e.data.length || (e.hasRows = !1),
        this.update(),
        e.columns().rebuild();
    }
    update() {
      this.dt.data.forEach((t, e) => {
        t.dataIndex = e;
      });
    }
  }
  class c {
    constructor(t) {
      return (this.dt = t), this;
    }
    swap(t) {
      if (t.length && 2 === t.length) {
        const e = [];
        this.dt.headings.forEach((t, s) => {
          e.push(s);
        });
        const s = t[0],
          a = t[1],
          i = e[a];
        (e[a] = e[s]), (e[s] = i), this.order(e);
      }
    }
    order(t) {
      let e, s, a, i, n, r, l;
      const h = [[], [], [], []],
        o = this.dt;
      t.forEach((t, a) => {
        (n = o.headings[t]),
          (r = "false" !== n.getAttribute("data-sortable")),
          (e = n.cloneNode(!0)),
          (e.originalCellIndex = a),
          (e.sortable = r),
          h[0].push(e),
          o.hiddenColumns.includes(t) ||
            ((s = n.cloneNode(!0)),
            (s.originalCellIndex = a),
            (s.sortable = r),
            h[1].push(s));
      }),
        o.data.forEach((e, s) => {
          (a = e.cloneNode(!1)),
            (i = e.cloneNode(!1)),
            (a.dataIndex = i.dataIndex = s),
            null !== e.searchIndex &&
              void 0 !== e.searchIndex &&
              (a.searchIndex = i.searchIndex = e.searchIndex),
            t.forEach((t) => {
              (l = e.cells[t].cloneNode(!0)),
                (l.data = e.cells[t].data),
                a.appendChild(l),
                o.hiddenColumns.includes(t) ||
                  ((l = e.cells[t].cloneNode(!0)),
                  (l.data = e.cells[t].data),
                  i.appendChild(l));
            }),
            h[2].push(a),
            h[3].push(i);
        }),
        (o.headings = h[0]),
        (o.activeHeadings = h[1]),
        (o.data = h[2]),
        (o.activeRows = h[3]),
        o.update();
    }
    hide(t) {
      if (t.length) {
        const e = this.dt;
        t.forEach((t) => {
          e.hiddenColumns.includes(t) || e.hiddenColumns.push(t);
        }),
          this.rebuild();
      }
    }
    show(t) {
      if (t.length) {
        let e;
        const s = this.dt;
        t.forEach((t) => {
          (e = s.hiddenColumns.indexOf(t)),
            e > -1 && s.hiddenColumns.splice(e, 1);
        }),
          this.rebuild();
      }
    }
    visible(t) {
      let e;
      const s = this.dt;
      return (
        (t = t || s.headings.map((t) => t.originalCellIndex)),
        isNaN(t)
          ? Array.isArray(t) &&
            ((e = []),
            t.forEach((t) => {
              e.push(!s.hiddenColumns.includes(t));
            }))
          : (e = !s.hiddenColumns.includes(t)),
        e
      );
    }
    add(t) {
      let e;
      const s = document.createElement("th");
      if (!this.dt.headings.length)
        return (
          this.dt.insert({
            headings: [t.heading],
            data: t.data.map((t) => [t]),
          }),
          void this.rebuild()
        );
      this.dt.hiddenHeader
        ? (s.innerHTML = "")
        : t.heading.nodeName
        ? s.appendChild(t.heading)
        : (s.innerHTML = t.heading),
        this.dt.headings.push(s),
        this.dt.data.forEach((s, a) => {
          t.data[a] &&
            ((e = document.createElement("td")),
            t.data[a].nodeName
              ? e.appendChild(t.data[a])
              : (e.innerHTML = t.data[a]),
            (e.data = e.innerHTML),
            t.render && (e.innerHTML = t.render.call(this, e.data, e, s)),
            s.appendChild(e));
        }),
        t.type && s.setAttribute("data-type", t.type),
        t.format && s.setAttribute("data-format", t.format),
        t.hasOwnProperty("sortable") &&
          ((s.sortable = t.sortable),
          s.setAttribute(
            "data-sortable",
            !0 === t.sortable ? "true" : "false"
          )),
        this.rebuild(),
        this.dt.renderHeader();
    }
    remove(t) {
      Array.isArray(t)
        ? (t.sort((t, e) => e - t), t.forEach((t) => this.remove(t)))
        : (this.dt.headings.splice(t, 1),
          this.dt.data.forEach((e) => {
            e.removeChild(e.cells[t]);
          })),
        this.rebuild();
    }
    filter(t, e, s, a) {
      const i = this.dt;
      if (
        (i.filterState || (i.filterState = { originalData: i.data }),
        !i.filterState[t])
      ) {
        const e = [...a, () => !0];
        i.filterState[t] = (function () {
          let t = 0;
          return () => e[t++ % e.length];
        })();
      }
      const n = i.filterState[t](),
        r = Array.from(i.filterState.originalData).filter((e) => {
          const s = e.cells[t],
            a = s.hasAttribute("data-content")
              ? s.getAttribute("data-content")
              : s.innerText;
          return "function" == typeof n ? n(a) : a === n;
        });
      (i.data = r),
        this.rebuild(),
        i.update(),
        s || i.emit("datatable.sort", t, e);
    }
    sort(t, e, s) {
      const a = this.dt;
      if (a.hasHeadings && (t < 0 || t > a.headings.length)) return !1;
      const n =
        a.options.filters && a.options.filters[a.headings[t].textContent];
      if (n && 0 !== n.length) return void this.filter(t, e, s, n);
      (a.sorting = !0), s || a.emit("datatable.sorting", t, e);
      let r = a.data;
      const l = [],
        h = [];
      let d = 0,
        c = 0;
      const p = a.headings[t],
        u = [];
      if ("date" === p.getAttribute("data-type")) {
        let t = !1;
        p.hasAttribute("data-format") && (t = p.getAttribute("data-format")),
          u.push(
            i
              .e(568)
              .then(i.bind(i, 9568))
              .then(
                ({ parseDate: e }) =>
                  (s) =>
                    e(s, t)
              )
          );
      }
      Promise.all(u).then((i) => {
        const n = i[0];
        let u, g;
        Array.from(r).forEach((e) => {
          const s = e.cells[t],
            a = s.hasAttribute("data-content")
              ? s.getAttribute("data-content")
              : s.innerText;
          let i;
          (i = n
            ? n(a)
            : "string" == typeof a
            ? a.replace(/(\$|,|\s|%)/g, "")
            : a),
            parseFloat(i) == i
              ? (h[c++] = { value: Number(i), row: e })
              : (l[d++] = {
                  value: "string" == typeof a ? a.toLowerCase() : a,
                  row: e,
                });
        }),
          e || (e = p.classList.contains("asc") ? "desc" : "asc"),
          "desc" == e
            ? ((u = o(l, -1)),
              (g = o(h, -1)),
              p.classList.remove("asc"),
              p.classList.add("desc"))
            : ((u = o(h, 1)),
              (g = o(l, 1)),
              p.classList.remove("desc"),
              p.classList.add("asc")),
          a.lastTh &&
            p != a.lastTh &&
            (a.lastTh.classList.remove("desc"),
            a.lastTh.classList.remove("asc")),
          (a.lastTh = p),
          (r = u.concat(g)),
          (a.data = []);
        const f = [];
        r.forEach((t, e) => {
          a.data.push(t.row),
            null !== t.row.searchIndex &&
              void 0 !== t.row.searchIndex &&
              f.push(e);
        }),
          (a.searchData = f),
          this.rebuild(),
          a.update(),
          s || a.emit("datatable.sort", t, e);
      });
    }
    rebuild() {
      let t, e, s, a;
      const i = this.dt,
        n = [];
      (i.activeRows = []),
        (i.activeHeadings = []),
        i.headings.forEach((t, e) => {
          (t.originalCellIndex = e),
            (t.sortable = "false" !== t.getAttribute("data-sortable")),
            i.hiddenColumns.includes(e) || i.activeHeadings.push(t);
        }),
        i.data.forEach((r, l) => {
          (t = r.cloneNode(!1)),
            (e = r.cloneNode(!1)),
            (t.dataIndex = e.dataIndex = l),
            null !== r.searchIndex &&
              void 0 !== r.searchIndex &&
              (t.searchIndex = e.searchIndex = r.searchIndex),
            Array.from(r.cells).forEach((n) => {
              (s = n.cloneNode(!0)),
                (s.data = n.data),
                t.appendChild(s),
                i.hiddenColumns.includes(s.cellIndex) ||
                  ((a = s.cloneNode(!0)), (a.data = s.data), e.appendChild(a));
            }),
            n.push(t),
            i.activeRows.push(e);
        }),
        (i.data = n),
        i.update();
    }
  }
  const p = function (t) {
      let e = !1,
        s = !1;
      if ((t = t || this.options.data).headings) {
        e = r("thead");
        const s = r("tr");
        t.headings.forEach((t) => {
          const e = r("th", { html: t });
          s.appendChild(e);
        }),
          e.appendChild(s);
      }
      t.data &&
        t.data.length &&
        ((s = r("tbody")),
        t.data.forEach((e) => {
          if (t.headings && t.headings.length !== e.length)
            throw new Error(
              "The number of rows do not match the number of headings."
            );
          const a = r("tr");
          e.forEach((t) => {
            const e = r("td", { html: t });
            a.appendChild(e);
          }),
            s.appendChild(a);
        })),
        e &&
          (null !== this.table.tHead &&
            this.table.removeChild(this.table.tHead),
          this.table.appendChild(e)),
        s &&
          (this.table.tBodies.length &&
            this.table.removeChild(this.table.tBodies[0]),
          this.table.appendChild(s));
    },
    u = {
      sortable: !0,
      searchable: !0,
      paging: !0,
      perPage: 5,
      perPageSelect: [5, 10, 15, 20, 25],
      nextPrev: !0,
      firstLast: !1,
      prevText: "&lsaquo;",
      nextText: "&rsaquo;",
      firstText: "&laquo;",
      lastText: "&raquo;",
      ellipsisText: "&hellip;",
      truncatePager: !0,
      pagerDelta: 2,
      scrollY: "",
      fixedColumns: !0,
      fixedHeight: !1,
      header: !0,
      hiddenHeader: !1,
      footer: !1,
      labels: {
        placeholder: "Search...",
        perPage: "{select}",
        noRows: "No entries found",
        info: "Showing {start} to {end} of {rows} entries",
      },
      layout: { top: "{select}{search}", bottom: "{info}{pager}" },
    };
  class g {
    constructor(t, e = {}) {
      if (
        ((this.initialized = !1),
        (this.options = {
          ...u,
          ...e,
          layout: { ...u.layout, ...e.layout },
          labels: { ...u.labels, ...e.labels },
        }),
        "string" == typeof t && (t = document.querySelector(t)),
        (this.initialLayout = t.innerHTML),
        (this.initialSortable = this.options.sortable),
        this.options.header || (this.options.sortable = !1),
        null === t.tHead &&
          (!this.options.data ||
            (this.options.data && !this.options.data.headings)) &&
          (this.options.sortable = !1),
        t.tBodies.length &&
          !t.tBodies[0].rows.length &&
          this.options.data &&
          !this.options.data.data)
      )
        throw new Error(
          "You seem to be using the data option, but you've not defined any rows."
        );
      (this.table = t),
        (this.listeners = { onResize: (t) => this.onResize(t) }),
        this.init();
    }
    static extend(t, e) {
      "function" == typeof e ? (g.prototype[t] = e) : (g[t] = e);
    }
    init(t) {
      if (this.initialized || this.table.classList.contains("dataTable-table"))
        return !1;
      Object.assign(this.options, t || {}),
        (this.currentPage = 1),
        (this.onFirstPage = !0),
        (this.hiddenColumns = []),
        (this.columnRenderers = []),
        (this.selectedColumns = []),
        this.render(),
        setTimeout(() => {
          this.emit("datatable.init"),
            (this.initialized = !0),
            this.options.plugins &&
              Object.entries(this.options.plugins).forEach(([t, e]) => {
                this[t] &&
                  "function" == typeof this[t] &&
                  ((this[t] = this[t](e, { createElement: r })),
                  e.enabled &&
                    this[t].init &&
                    "function" == typeof this[t].init &&
                    this[t].init());
              });
        }, 10);
    }
    render(t) {
      if (t) {
        switch (t) {
          case "page":
            this.renderPage();
            break;
          case "pager":
            this.renderPager();
            break;
          case "header":
            this.renderHeader();
        }
        return !1;
      }
      const e = this.options;
      let s = "";
      if (
        (e.data && p.call(this),
        (this.body = this.table.tBodies[0]),
        (this.head = this.table.tHead),
        (this.foot = this.table.tFoot),
        this.body ||
          ((this.body = r("tbody")), this.table.appendChild(this.body)),
        (this.hasRows = this.body.rows.length > 0),
        !this.head)
      ) {
        const t = r("thead"),
          s = r("tr");
        this.hasRows &&
          (Array.from(this.body.rows[0].cells).forEach(() => {
            s.appendChild(r("th"));
          }),
          t.appendChild(s)),
          (this.head = t),
          this.table.insertBefore(this.head, this.body),
          (this.hiddenHeader = e.hiddenHeader);
      }
      if (
        ((this.headings = []),
        (this.hasHeadings = this.head.rows.length > 0),
        this.hasHeadings &&
          ((this.header = this.head.rows[0]),
          (this.headings = [].slice.call(this.header.cells))),
        e.header || (this.head && this.table.removeChild(this.table.tHead)),
        e.footer
          ? this.head &&
            !this.foot &&
            ((this.foot = r("tfoot", { html: this.head.innerHTML })),
            this.table.appendChild(this.foot))
          : this.foot && this.table.removeChild(this.table.tFoot),
        (this.wrapper = r("div", {
          class: "dataTable-wrapper dataTable-loading",
        })),
        (s += "<div class='dataTable-top'>"),
        (s += e.layout.top),
        (s += "</div>"),
        e.scrollY.length
          ? (s += `<div class='dataTable-container' style='height: ${e.scrollY}; overflow-Y: auto;'></div>`)
          : (s += "<div class='dataTable-container'></div>"),
        (s += "<div class='dataTable-bottom'>"),
        (s += e.layout.bottom),
        (s += "</div>"),
        (s = s.replace(
          "{info}",
          e.paging ? "<div class='dataTable-info'></div>" : ""
        )),
        e.paging && e.perPageSelect)
      ) {
        let t = "<div class='dataTable-dropdown'><label>";
        (t += e.labels.perPage), (t += "</label></div>");
        const a = r("select", { class: "dataTable-selector" });
        e.perPageSelect.forEach((t) => {
          const s = t === e.perPage,
            i = new Option(t, t, s, s);
          a.add(i);
        }),
          (t = t.replace("{select}", a.outerHTML)),
          (s = s.replace("{select}", t));
      } else s = s.replace("{select}", "");
      if (e.searchable) {
        const t = `<div class='dataTable-search'><input class='dataTable-input' placeholder='${e.labels.placeholder}' type='text'></div>`;
        s = s.replace("{search}", t);
      } else s = s.replace("{search}", "");
      this.hasHeadings && this.render("header"),
        this.table.classList.add("dataTable-table");
      const a = r("nav", { class: "dataTable-pagination" }),
        i = r("ul", { class: "dataTable-pagination-list" });
      a.appendChild(i),
        (s = s.replace(/\{pager\}/g, a.outerHTML)),
        (this.wrapper.innerHTML = s),
        (this.container = this.wrapper.querySelector(".dataTable-container")),
        (this.pagers = this.wrapper.querySelectorAll(
          ".dataTable-pagination-list"
        )),
        (this.label = this.wrapper.querySelector(".dataTable-info")),
        this.table.parentNode.replaceChild(this.wrapper, this.table),
        this.container.appendChild(this.table),
        (this.rect = this.table.getBoundingClientRect()),
        (this.data = Array.from(this.body.rows)),
        (this.activeRows = this.data.slice()),
        (this.activeHeadings = this.headings.slice()),
        this.update(),
        this.setColumns(),
        this.fixHeight(),
        this.fixColumns(),
        e.header || this.wrapper.classList.add("no-header"),
        e.footer || this.wrapper.classList.add("no-footer"),
        e.sortable && this.wrapper.classList.add("sortable"),
        e.searchable && this.wrapper.classList.add("searchable"),
        e.fixedHeight && this.wrapper.classList.add("fixed-height"),
        e.fixedColumns && this.wrapper.classList.add("fixed-columns"),
        this.bindEvents();
    }
    renderPage() {
      if (
        (this.hasHeadings &&
          (l(this.header),
          this.activeHeadings.forEach((t) => this.header.appendChild(t))),
        this.hasRows && this.totalPages)
      ) {
        this.currentPage > this.totalPages && (this.currentPage = 1);
        const t = this.currentPage - 1,
          e = document.createDocumentFragment();
        this.pages[t].forEach((t) => e.appendChild(this.rows().render(t))),
          this.clear(e),
          (this.onFirstPage = 1 === this.currentPage),
          (this.onLastPage = this.currentPage === this.lastPage);
      } else this.setMessage(this.options.labels.noRows);
      let t,
        e = 0,
        s = 0,
        a = 0;
      if (
        (this.totalPages &&
          ((e = this.currentPage - 1),
          (s = e * this.options.perPage),
          (a = s + this.pages[e].length),
          (s += 1),
          (t = this.searching ? this.searchData.length : this.data.length)),
        this.label && this.options.labels.info.length)
      ) {
        const e = this.options.labels.info
          .replace("{start}", s)
          .replace("{end}", a)
          .replace("{page}", this.currentPage)
          .replace("{pages}", this.totalPages)
          .replace("{rows}", t);
        this.label.innerHTML = t ? e : "";
      }
      1 == this.currentPage && this.fixHeight();
    }
    renderPager() {
      if ((l(this.pagers), this.totalPages > 1)) {
        const t = "pager",
          e = document.createDocumentFragment(),
          s = this.onFirstPage ? 1 : this.currentPage - 1,
          a = this.onLastPage ? this.totalPages : this.currentPage + 1;
        this.options.firstLast &&
          e.appendChild(h(t, 1, this.options.firstText)),
          this.options.nextPrev &&
            e.appendChild(h(t, s, this.options.prevText));
        let i = this.links;
        this.options.truncatePager &&
          (i = ((t, e, s, a, i) => {
            let n;
            const l = 2 * (a = a || 2);
            let h = e - a,
              o = e + a;
            const d = [],
              c = [];
            e < 4 - a + l
              ? (o = 3 + l)
              : e > s - (3 - a + l) && (h = s - (2 + l));
            for (let e = 1; e <= s; e++)
              if (1 == e || e == s || (e >= h && e <= o)) {
                const s = t[e - 1];
                s.classList.remove("active"), d.push(s);
              }
            return (
              d.forEach((e) => {
                const s = e.children[0].getAttribute("data-page");
                if (n) {
                  const e = n.children[0].getAttribute("data-page");
                  if (s - e == 2) c.push(t[e]);
                  else if (s - e != 1) {
                    const t = r("li", {
                      class: "ellipsis",
                      html: `<a href="#">${i}</a>`,
                    });
                    c.push(t);
                  }
                }
                c.push(e), (n = e);
              }),
              c
            );
          })(
            this.links,
            this.currentPage,
            this.pages.length,
            this.options.pagerDelta,
            this.options.ellipsisText
          )),
          this.links[this.currentPage - 1].classList.add("active"),
          i.forEach((t) => {
            t.classList.remove("active"), e.appendChild(t);
          }),
          this.links[this.currentPage - 1].classList.add("active"),
          this.options.nextPrev &&
            e.appendChild(h(t, a, this.options.nextText)),
          this.options.firstLast &&
            e.appendChild(h(t, this.totalPages, this.options.lastText)),
          this.pagers.forEach((t) => {
            t.appendChild(e.cloneNode(!0));
          });
      }
    }
    renderHeader() {
      (this.labels = []),
        this.headings &&
          this.headings.length &&
          this.headings.forEach((t, e) => {
            if (
              ((this.labels[e] = t.textContent),
              t.firstElementChild &&
                t.firstElementChild.classList.contains("dataTable-sorter") &&
                (t.innerHTML = t.firstElementChild.innerHTML),
              (t.sortable = "false" !== t.getAttribute("data-sortable")),
              (t.originalCellIndex = e),
              this.options.sortable && t.sortable)
            ) {
              const e = r("a", {
                href: "#",
                class: "dataTable-sorter",
                html: t.innerHTML,
              });
              (t.innerHTML = ""),
                t.setAttribute("data-sortable", ""),
                t.appendChild(e);
            }
          }),
        this.fixColumns();
    }
    bindEvents() {
      const t = this.options;
      if (t.perPageSelect) {
        const e = this.wrapper.querySelector(".dataTable-selector");
        e &&
          e.addEventListener(
            "change",
            () => {
              (t.perPage = parseInt(e.value, 10)),
                this.update(),
                this.fixHeight(),
                this.emit("datatable.perpage", t.perPage);
            },
            !1
          );
      }
      t.searchable &&
        ((this.input = this.wrapper.querySelector(".dataTable-input")),
        this.input &&
          this.input.addEventListener(
            "keyup",
            () => this.search(this.input.value),
            !1
          )),
        this.wrapper.addEventListener(
          "click",
          (e) => {
            const s = e.target.closest("a");
            s &&
              "a" === s.nodeName.toLowerCase() &&
              (s.hasAttribute("data-page")
                ? (this.page(s.getAttribute("data-page")), e.preventDefault())
                : t.sortable &&
                  s.classList.contains("dataTable-sorter") &&
                  "false" != s.parentNode.getAttribute("data-sortable") &&
                  (this.columns().sort(this.headings.indexOf(s.parentNode)),
                  e.preventDefault()));
          },
          !1
        ),
        window.addEventListener("resize", this.listeners.onResize);
    }
    onResize() {
      (this.rect = this.container.getBoundingClientRect()),
        this.rect.width && this.fixColumns();
    }
    setColumns(t) {
      t ||
        this.data.forEach((t) => {
          Array.from(t.cells).forEach((t) => {
            t.data = t.innerHTML;
          });
        }),
        this.options.columns &&
          this.headings.length &&
          this.options.columns.forEach((t) => {
            Array.isArray(t.select) || (t.select = [t.select]),
              t.hasOwnProperty("render") &&
                "function" == typeof t.render &&
                ((this.selectedColumns = this.selectedColumns.concat(t.select)),
                this.columnRenderers.push({
                  columns: t.select,
                  renderer: t.render,
                })),
              t.select.forEach((e) => {
                const s = this.headings[e];
                t.type && s.setAttribute("data-type", t.type),
                  t.format && s.setAttribute("data-format", t.format),
                  t.hasOwnProperty("sortable") &&
                    s.setAttribute("data-sortable", t.sortable),
                  t.hasOwnProperty("hidden") &&
                    !1 !== t.hidden &&
                    this.columns().hide([e]),
                  t.hasOwnProperty("sort") &&
                    1 === t.select.length &&
                    this.columns().sort(t.select[0], t.sort, !0);
              });
          }),
        this.hasRows &&
          (this.data.forEach((t, e) => {
            (t.dataIndex = e),
              Array.from(t.cells).forEach((t) => {
                t.data = t.innerHTML;
              });
          }),
          this.selectedColumns.length &&
            this.data.forEach((t) => {
              Array.from(t.cells).forEach((e, s) => {
                this.selectedColumns.includes(s) &&
                  this.columnRenderers.forEach((a) => {
                    a.columns.includes(s) &&
                      (e.innerHTML = a.renderer.call(this, e.data, e, t));
                  });
              });
            }),
          this.columns().rebuild()),
        this.render("header");
    }
    destroy() {
      (this.table.innerHTML = this.initialLayout),
        this.table.classList.remove("dataTable-table"),
        this.wrapper.parentNode.replaceChild(this.table, this.wrapper),
        (this.initialized = !1),
        window.removeEventListener("resize", this.listeners.onResize);
    }
    update() {
      this.wrapper.classList.remove("dataTable-empty"),
        this.paginate(this),
        this.render("page"),
        (this.links = []);
      let t = this.pages.length;
      for (; t--; ) {
        const e = t + 1;
        this.links[t] = h(0 === t ? "active" : "", e, e);
      }
      (this.sorting = !1),
        this.render("pager"),
        this.rows().update(),
        this.emit("datatable.update");
    }
    paginate() {
      const t = this.options.perPage;
      let e = this.activeRows;
      return (
        this.searching &&
          ((e = []),
          this.searchData.forEach((t) => e.push(this.activeRows[t]))),
        this.options.paging
          ? (this.pages = e
              .map((s, a) => (a % t == 0 ? e.slice(a, a + t) : null))
              .filter((t) => t))
          : (this.pages = [e]),
        (this.totalPages = this.lastPage = this.pages.length),
        this.totalPages
      );
    }
    fixColumns() {
      if (
        (this.options.scrollY.length || this.options.fixedColumns) &&
        this.activeHeadings &&
        this.activeHeadings.length
      ) {
        let t,
          e = !1;
        if (((this.columnWidths = []), this.table.tHead)) {
          if (
            (this.options.scrollY.length &&
              ((e = r("thead")),
              e.appendChild(r("tr")),
              (e.style.height = "0px"),
              this.headerTable && (this.table.tHead = this.headerTable.tHead)),
            this.activeHeadings.forEach((t) => {
              t.style.width = "";
            }),
            this.activeHeadings.forEach((t, s) => {
              const a = t.offsetWidth,
                i = (a / this.rect.width) * 100;
              if (
                ((t.style.width = `${i}%`),
                (this.columnWidths[s] = a),
                this.options.scrollY.length)
              ) {
                const t = r("th");
                e.firstElementChild.appendChild(t),
                  (t.style.width = `${i}%`),
                  (t.style.paddingTop = "0"),
                  (t.style.paddingBottom = "0"),
                  (t.style.border = "0");
              }
            }),
            this.options.scrollY.length)
          ) {
            const t = this.table.parentElement;
            if (!this.headerTable) {
              this.headerTable = r("table", { class: "dataTable-table" });
              const e = r("div", { class: "dataTable-headercontainer" });
              e.appendChild(this.headerTable),
                t.parentElement.insertBefore(e, t);
            }
            const s = this.table.tHead;
            this.table.replaceChild(e, s),
              (this.headerTable.tHead = s),
              (this.headerTable.parentElement.style.paddingRight = `${
                this.headerTable.clientWidth -
                this.table.clientWidth +
                parseInt(
                  this.headerTable.parentElement.style.paddingRight || "0",
                  10
                )
              }px`),
              t.scrollHeight > t.clientHeight && (t.style.overflowY = "scroll");
          }
        } else {
          (t = []), (e = r("thead"));
          const s = r("tr");
          Array.from(this.table.tBodies[0].rows[0].cells).forEach(() => {
            const e = r("th");
            s.appendChild(e), t.push(e);
          }),
            e.appendChild(s),
            this.table.insertBefore(e, this.body);
          const a = [];
          t.forEach((t, e) => {
            const s = t.offsetWidth,
              i = (s / this.rect.width) * 100;
            a.push(i), (this.columnWidths[e] = s);
          }),
            this.data.forEach((t) => {
              Array.from(t.cells).forEach((t, e) => {
                this.columns(t.cellIndex).visible() &&
                  (t.style.width = `${a[e]}%`);
              });
            }),
            this.table.removeChild(e);
        }
      }
    }
    fixHeight() {
      this.options.fixedHeight &&
        ((this.container.style.height = null),
        (this.rect = this.container.getBoundingClientRect()),
        (this.container.style.height = `${this.rect.height}px`));
    }
    search(t) {
      return (
        !!this.hasRows &&
        ((t = t.toLowerCase()),
        (this.currentPage = 1),
        (this.searching = !0),
        (this.searchData = []),
        t.length
          ? (this.clear(),
            this.data.forEach((e, s) => {
              const a = this.searchData.includes(e);
              t.split(" ").reduce((t, s) => {
                let a = !1,
                  i = null,
                  n = null;
                for (let t = 0; t < e.cells.length; t++)
                  if (
                    ((i = e.cells[t]),
                    (n = i.hasAttribute("data-content")
                      ? i.getAttribute("data-content")
                      : i.textContent),
                    n.toLowerCase().includes(s) &&
                      this.columns(i.cellIndex).visible())
                  ) {
                    a = !0;
                    break;
                  }
                return t && a;
              }, !0) && !a
                ? ((e.searchIndex = s), this.searchData.push(s))
                : (e.searchIndex = null);
            }),
            this.wrapper.classList.add("search-results"),
            this.searchData.length
              ? this.update()
              : (this.wrapper.classList.remove("search-results"),
                this.setMessage(this.options.labels.noRows)),
            void this.emit("datatable.search", t, this.searchData))
          : ((this.searching = !1),
            this.update(),
            this.emit("datatable.search", t, this.searchData),
            this.wrapper.classList.remove("search-results"),
            !1))
      );
    }
    page(t) {
      return (
        t != this.currentPage &&
        (isNaN(t) || (this.currentPage = parseInt(t, 10)),
        !(t > this.pages.length || t < 0) &&
          (this.render("page"),
          this.render("pager"),
          void this.emit("datatable.page", t)))
      );
    }
    sortColumn(t, e) {
      this.columns().sort(t, e);
    }
    insert(t) {
      let e = [];
      if (n(t)) {
        if (t.headings && !this.hasHeadings && !this.hasRows) {
          const e = r("tr");
          t.headings.forEach((t) => {
            const s = r("th", { html: t });
            e.appendChild(s);
          }),
            this.head.appendChild(e),
            (this.header = e),
            (this.headings = [].slice.call(e.cells)),
            (this.hasHeadings = !0),
            (this.options.sortable = this.initialSortable),
            this.render("header"),
            (this.activeHeadings = this.headings.slice());
        }
        t.data && Array.isArray(t.data) && (e = t.data);
      } else
        Array.isArray(t) &&
          t.forEach((t) => {
            const s = [];
            Object.entries(t).forEach(([t, e]) => {
              const a = this.labels.indexOf(t);
              a > -1 && (s[a] = e);
            }),
              e.push(s);
          });
      e.length && (this.rows().add(e), (this.hasRows = !0)),
        this.update(),
        this.setColumns(),
        this.fixColumns();
    }
    refresh() {
      this.options.searchable &&
        ((this.input.value = ""), (this.searching = !1)),
        (this.currentPage = 1),
        (this.onFirstPage = !0),
        this.update(),
        this.emit("datatable.refresh");
    }
    clear(t) {
      this.body && l(this.body);
      let e = this.body;
      if ((this.body || (e = this.table), t)) {
        if ("string" == typeof t) {
          document.createDocumentFragment().innerHTML = t;
        }
        e.appendChild(t);
      }
    }
    export(t) {
      if (!this.hasHeadings && !this.hasRows) return !1;
      const e = this.activeHeadings;
      let s = [];
      const a = [];
      let i, r, l, h;
      if (!n(t)) return !1;
      const o = {
        download: !0,
        skipColumn: [],
        lineDelimiter: "\n",
        columnDelimiter: ",",
        tableName: "myTable",
        replacer: null,
        space: 4,
        ...t,
      };
      if (o.type) {
        if (
          (("txt" !== o.type && "csv" !== o.type) || (s[0] = this.header),
          o.selection)
        )
          if (isNaN(o.selection)) {
            if (Array.isArray(o.selection))
              for (i = 0; i < o.selection.length; i++)
                s = s.concat(this.pages[o.selection[i] - 1]);
          } else s = s.concat(this.pages[o.selection - 1]);
        else s = s.concat(this.activeRows);
        if (s.length) {
          if ("txt" === o.type || "csv" === o.type) {
            for (l = "", i = 0; i < s.length; i++) {
              for (r = 0; r < s[i].cells.length; r++)
                if (
                  !o.skipColumn.includes(e[r].originalCellIndex) &&
                  this.columns(e[r].originalCellIndex).visible()
                ) {
                  let t = s[i].cells[r].textContent;
                  (t = t.trim()),
                    (t = t.replace(/\s{2,}/g, " ")),
                    (t = t.replace(/\n/g, "  ")),
                    (t = t.replace(/"/g, '""')),
                    (t = t.replace(/#/g, "%23")),
                    t.includes(",") && (t = `"${t}"`),
                    (l += t + o.columnDelimiter);
                }
              (l = l.trim().substring(0, l.length - 1)), (l += o.lineDelimiter);
            }
            (l = l.trim().substring(0, l.length - 1)),
              o.download && (l = `data:text/csv;charset=utf-8,${l}`);
          } else if ("sql" === o.type) {
            for (
              l = `INSERT INTO \`${o.tableName}\` (`, i = 0;
              i < e.length;
              i++
            )
              !o.skipColumn.includes(e[i].originalCellIndex) &&
                this.columns(e[i].originalCellIndex).visible() &&
                (l += `\`${e[i].textContent}\`,`);
            for (
              l = l.trim().substring(0, l.length - 1), l += ") VALUES ", i = 0;
              i < s.length;
              i++
            ) {
              for (l += "(", r = 0; r < s[i].cells.length; r++)
                !o.skipColumn.includes(e[r].originalCellIndex) &&
                  this.columns(e[r].originalCellIndex).visible() &&
                  (l += `"${s[i].cells[r].textContent}",`);
              (l = l.trim().substring(0, l.length - 1)), (l += "),");
            }
            (l = l.trim().substring(0, l.length - 1)),
              (l += ";"),
              o.download && (l = `data:application/sql;charset=utf-8,${l}`);
          } else if ("json" === o.type) {
            for (r = 0; r < s.length; r++)
              for (a[r] = a[r] || {}, i = 0; i < e.length; i++)
                !o.skipColumn.includes(e[i].originalCellIndex) &&
                  this.columns(e[i].originalCellIndex).visible() &&
                  (a[r][e[i].textContent] = s[r].cells[i].textContent);
            (l = JSON.stringify(a, o.replacer, o.space)),
              o.download && (l = `data:application/json;charset=utf-8,${l}`);
          }
          return (
            o.download &&
              ((o.filename = o.filename || "datatable_export"),
              (o.filename += `.${o.type}`),
              (l = encodeURI(l)),
              (h = document.createElement("a")),
              (h.href = l),
              (h.download = o.filename),
              document.body.appendChild(h),
              h.click(),
              document.body.removeChild(h)),
            l
          );
        }
      }
      return !1;
    }
    import(t) {
      let e = !1;
      if (!n(t)) return !1;
      const s = { lineDelimiter: "\n", columnDelimiter: ",", ...t };
      if (s.data.length || n(s.data)) {
        if ("csv" === s.type) {
          e = { data: [] };
          const t = s.data.split(s.lineDelimiter);
          t.length &&
            (s.headings &&
              ((e.headings = t[0].split(s.columnDelimiter)), t.shift()),
            t.forEach((t, a) => {
              e.data[a] = [];
              const i = t.split(s.columnDelimiter);
              i.length &&
                i.forEach((t) => {
                  e.data[a].push(t);
                });
            }));
        } else if ("json" === s.type) {
          const t = ((t) => {
            let e = !1;
            try {
              e = JSON.parse(t);
            } catch (t) {
              return !1;
            }
            return !(null === e || (!Array.isArray(e) && !n(e))) && e;
          })(s.data);
          t &&
            ((e = { headings: [], data: [] }),
            t.forEach((t, s) => {
              (e.data[s] = []),
                Object.entries(t).forEach(([t, a]) => {
                  e.headings.includes(t) || e.headings.push(t),
                    e.data[s].push(a);
                });
            }));
        }
        n(s.data) && (e = s.data), e && this.insert(e);
      }
      return !1;
    }
    print() {
      const t = this.activeHeadings,
        e = this.activeRows,
        s = r("table"),
        a = r("thead"),
        i = r("tbody"),
        n = r("tr");
      t.forEach((t) => {
        n.appendChild(r("th", { html: t.textContent }));
      }),
        a.appendChild(n),
        e.forEach((t) => {
          const e = r("tr");
          Array.from(t.cells).forEach((t) => {
            e.appendChild(r("td", { html: t.textContent }));
          }),
            i.appendChild(e);
        }),
        s.appendChild(a),
        s.appendChild(i);
      const l = window.open();
      l.document.body.appendChild(s), l.print();
    }
    setMessage(t) {
      let e = 1;
      this.hasRows
        ? (e = this.data[0].cells.length)
        : this.activeHeadings.length && (e = this.activeHeadings.length),
        this.wrapper.classList.add("dataTable-empty"),
        this.label && (this.label.innerHTML = ""),
        (this.totalPages = 0),
        this.render("pager"),
        this.clear(
          r("tr", {
            html: `<td class="dataTables-empty" colspan="${e}">${t}</td>`,
          })
        );
    }
    columns(t) {
      return new c(this, t);
    }
    rows(t) {
      return new d(this, t);
    }
    on(t, e) {
      (this.events = this.events || {}),
        (this.events[t] = this.events[t] || []),
        this.events[t].push(e);
    }
    off(t, e) {
      (this.events = this.events || {}),
        t in this.events != !1 &&
          this.events[t].splice(this.events[t].indexOf(e), 1);
    }
    emit(t) {
      if (((this.events = this.events || {}), t in this.events != !1))
        for (let e = 0; e < this.events[t].length; e++)
          this.events[t][e].apply(
            this,
            Array.prototype.slice.call(arguments, 1)
          );
    }
  }
  function f(t, e) {
    var s =
      ("undefined" != typeof Symbol && t[Symbol.iterator]) || t["@@iterator"];
    if (!s) {
      if (
        Array.isArray(t) ||
        (s = (function (t, e) {
          if (!t) return;
          if ("string" == typeof t) return b(t, e);
          var s = Object.prototype.toString.call(t).slice(8, -1);
          "Object" === s && t.constructor && (s = t.constructor.name);
          if ("Map" === s || "Set" === s) return Array.from(t);
          if (
            "Arguments" === s ||
            /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(s)
          )
            return b(t, e);
        })(t)) ||
        (e && t && "number" == typeof t.length)
      ) {
        s && (t = s);
        var a = 0,
          i = function () {};
        return {
          s: i,
          n: function () {
            return a >= t.length ? { done: !0 } : { done: !1, value: t[a++] };
          },
          e: function (t) {
            throw t;
          },
          f: i,
        };
      }
      throw new TypeError(
        "Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
      );
    }
    var n,
      r = !0,
      l = !1;
    return {
      s: function () {
        s = s.call(t);
      },
      n: function () {
        var t = s.next();
        return (r = t.done), t;
      },
      e: function (t) {
        (l = !0), (n = t);
      },
      f: function () {
        try {
          r || null == s.return || s.return();
        } finally {
          if (l) throw n;
        }
      },
    };
  }
  function b(t, e) {
    (null == e || e > t.length) && (e = t.length);
    for (var s = 0, a = new Array(e); s < e; s++) a[s] = t[s];
    return a;
  }
  var m = new g(document.getElementById("table1"));
  function y() {
    var t,
      e = f(m.wrapper.querySelectorAll("ul.dataTable-pagination-list"));
    try {
      for (e.s(); !(t = e.n()).done; ) {
        var s;
        (s = t.value.classList).add.apply(s, [
          "pagination",
          "pagination-primary",
        ]);
      }
    } catch (t) {
      e.e(t);
    } finally {
      e.f();
    }
    var a,
      i = f(m.wrapper.querySelectorAll("ul.dataTable-pagination-list li"));
    try {
      for (i.s(); !(a = i.n()).done; ) {
        a.value.classList.add("page-item");
      }
    } catch (t) {
      i.e(t);
    } finally {
      i.f();
    }
    var n,
      r = f(m.wrapper.querySelectorAll("ul.dataTable-pagination-list li a"));
    try {
      for (r.s(); !(n = r.n()).done; ) {
        n.value.classList.add("page-link");
      }
    } catch (t) {
      r.e(t);
    } finally {
      r.f();
    }
  }

  m.on("datatable.init", function () {
    var t;
    (t = m.wrapper.querySelector(
      ".dataTable-selector"
    )).parentNode.parentNode.insertBefore(t, t.parentNode),
      t.classList.add("form-select"),
      y();
  }),
    m.on("datatable.page", y);
})();