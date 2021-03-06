<?php

return [
    /**
     * Enable Whoops exception handling.
     *
     * If WP is not in debug mode, this setting has no effect as all debug output is hidden.
     */
    'enable_whoops' => true,

    /**
     * If true, then the character count is shown next to strings in the dump output.
     *
     * Eg. (6) "SnapWP"
     */
    'dump_show_string_length' => false,

    /**
     * The css styles for the dump() and dd() functions.
     *
     * Can have a value of 'snap', 'laravel', 'symfony', or an array of styles to overwrite the default symfony VarDumper styles.
     */
    'dump_set_style' => 'snap',

    /**
     * If true, then the file and line number where the dump function was called will be shown along with the dump output.
     */
    'dump_include_trace' => true,
];
