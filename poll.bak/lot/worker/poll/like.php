<?php

// icons: <http://fontawesome.io>

Shield::get(__DIR__ . DS . '..' . DS . 'poll.php', extend([
    'id' => Path::N(__FILE__),
    'a' => [
        '+1' => [
            'i' => ['0 0 14 16', 'M2.286 12c0-0.313-0.259-0.571-0.571-0.571s-0.571 0.259-0.571 0.571 0.259 0.571 0.571 0.571 0.571-0.259 0.571-0.571zM12.571 6.857c0-0.607-0.545-1.143-1.143-1.143h-3.143c0-1.045 0.857-1.804 0.857-2.857 0-1.045-0.205-1.714-1.429-1.714-0.571 0.58-0.277 1.946-1.143 2.857-0.25 0.259-0.464 0.536-0.687 0.813-0.402 0.518-1.464 2.045-2.17 2.045h-0.286v5.714h0.286c0.5 0 1.321 0.321 1.804 0.491 0.982 0.339 2 0.652 3.054 0.652h1.080c1.009 0 1.714-0.402 1.714-1.491 0-0.17-0.018-0.339-0.045-0.5 0.375-0.205 0.58-0.714 0.58-1.125 0-0.214-0.054-0.429-0.161-0.616 0.304-0.286 0.473-0.643 0.473-1.063 0-0.286-0.125-0.705-0.313-0.92 0.42-0.009 0.67-0.813 0.67-1.143zM13.714 6.848c0 0.518-0.152 1.027-0.438 1.455 0.054 0.196 0.080 0.411 0.080 0.616 0 0.446-0.116 0.893-0.339 1.286 0.018 0.125 0.027 0.259 0.027 0.384 0 0.571-0.188 1.143-0.536 1.589 0.018 1.687-1.134 2.679-2.786 2.679h-1.152c-1.268 0-2.446-0.375-3.625-0.786-0.259-0.089-0.982-0.357-1.232-0.357h-2.571c-0.634 0-1.143-0.509-1.143-1.143v-5.714c0-0.634 0.509-1.143 1.143-1.143h2.446c0.348-0.232 0.955-1.036 1.223-1.384 0.304-0.393 0.616-0.777 0.955-1.143 0.536-0.571 0.25-1.982 1.143-2.857 0.214-0.205 0.5-0.33 0.804-0.33 0.929 0 1.821 0.33 2.259 1.196 0.277 0.545 0.313 1.063 0.313 1.661 0 0.625-0.161 1.161-0.429 1.714h1.571c1.232 0 2.286 1.045 2.286 2.277z']
        ],
        '-1' => [
            'i' => ['0 0 14 16', 'M2.286 4c0-0.313-0.259-0.571-0.571-0.571s-0.571 0.259-0.571 0.571 0.259 0.571 0.571 0.571 0.571-0.259 0.571-0.571zM12.571 9.143c0-0.33-0.25-1.134-0.67-1.143 0.188-0.214 0.313-0.634 0.313-0.92 0-0.42-0.17-0.777-0.473-1.062 0.107-0.188 0.161-0.402 0.161-0.616 0-0.411-0.205-0.92-0.58-1.125 0.027-0.161 0.045-0.33 0.045-0.5 0-1.045-0.661-1.491-1.652-1.491h-1.143c-1.054 0-2.071 0.313-3.054 0.652-0.482 0.17-1.304 0.491-1.804 0.491h-0.286v5.714h0.286c0.705 0 1.768 1.527 2.17 2.045 0.223 0.277 0.438 0.554 0.687 0.813 0.866 0.911 0.571 2.277 1.143 2.857 1.223 0 1.429-0.67 1.429-1.714 0-1.054-0.857-1.812-0.857-2.857h3.143c0.598 0 1.143-0.536 1.143-1.143zM13.714 9.152c0 1.232-1.054 2.277-2.286 2.277h-1.571c0.268 0.554 0.429 1.089 0.429 1.714 0 0.589-0.036 1.125-0.313 1.661-0.438 0.866-1.33 1.196-2.259 1.196-0.304 0-0.589-0.125-0.804-0.33-0.893-0.875-0.616-2.286-1.143-2.866-0.339-0.357-0.652-0.741-0.955-1.134-0.268-0.348-0.875-1.152-1.223-1.384h-2.446c-0.634 0-1.143-0.509-1.143-1.143v-5.714c0-0.634 0.509-1.143 1.143-1.143h2.571c0.25 0 0.973-0.268 1.232-0.357 1.286-0.446 2.402-0.786 3.777-0.786h1c1.625 0 2.795 0.964 2.786 2.634v0.045c0.348 0.446 0.536 1.018 0.536 1.589 0 0.125-0.009 0.259-0.027 0.384 0.223 0.393 0.339 0.839 0.339 1.286 0 0.205-0.027 0.42-0.080 0.616 0.286 0.429 0.438 0.938 0.438 1.455z']
        ]
    ]
], !empty($lot) ? $lot : []));