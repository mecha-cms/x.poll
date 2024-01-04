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
        script = doc.getElementsByTagName('script'), src, token,
        a, b, c, d, e, i, j, k, l, t, u, v, w;

    script = script[script.length - 1];
    src = script.src;
    src = src.slice(0, src.indexOf('/lot/')) + '/-poll/';

    // just in case, prevent users playing around with the element inspector [^1]
    token = script[get]('data-token');
    script[reset]('data-token');

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
        ajax(src + b[token], 'id=' + encode((b.id || ':').split(':')[1]) + '&token=' + encode(token) + '&key=' + encode(v[get]('data-key')) + '&value=' + encode(w) + '&title=' + encode(v[get]('title') || v[get]('data-title')));
    }

    for (i = 0, j = poll[count]; i < j; ++i) {
        a = poll[i];
        // [^1]
        a[token] = a[get]('data-path');
        a[reset]('data-path');
        a = a[query]('.poll--a')[0];
        if (/\bfreeze\b/.test(a[cla])) continue;
        a = a[child];
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