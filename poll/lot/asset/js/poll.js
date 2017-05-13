(function(win, doc) {

    function ajax(url, data) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(data);
    }

    var query = 'querySelectorAll',
        html = 'innerHTML',
        first = 'firstChild',
        prepend = 'insertBefore',
        parent = 'parentNode',
        child = 'children',
        copy = 'cloneNode',
        remove = 'removeChild',
        cla = 'className',
        set = 'setAttribute',
        get = 'getAttribute',
        reset = 'removeAttribute',
        event = 'addEventListener',
        count = 'length',
        poll = doc[query]('.poll'),
        encode = encodeURIComponent,
        _ = 'poll',
        a, b, c, d, e, i, j, k, l, t, u, v, w;

    function click() {
        t = this;
        u = t[parent];
        v = u[parent];
        e = u[child][1];
        b = v[parent][parent];
        if (u[cla] === d + ' a done') {
            w = -1;
            e[html] = (+e[html]) + w;
            u[cla] = d + ' a';
            v[set]('title', v[get]('data-title') || "");
            v[reset]('data-title');
        } else {
            w = 1;
            e[html] = (+e[html]) + w;
            u[cla] = d + ' a done';
            v[set]('data-title', v[get]('title') || "");
            v[reset]('title');
        }
        ajax(b[_].url, 'id=' + encode((b.id || ':').split(':')[1]) + '&token=' + encode(b[_].token) + '&key=' + encode(v[get]('data-key')) + '&value=' + encode(w) + '&title=' + encode(v[get]('title') || v[get]('data-title')));
    }

    for (i = 0, j = poll[count]; i < j; ++i) {
        a = poll[i];
        // just in case, prevent users playing around with the element inspector
        a[_] = {
            token: a[get]('data-token'),
            url: a[get]('data-url')
        };
        a[reset]('data-token');
        a[reset]('data-url');
        a = a[query]('.poll--a')[0][child];
        for (k = 0, l = a[count]; k < l; ++k) {
            b = a[k];
            if (/\bfreeze\b/.test(b[cla])) continue;
            c = b[first];
            d = c[cla];
            c[cla] = d + ' a';
            c[child][0][event]('click', click, false);
        }
    }

})(window, document);