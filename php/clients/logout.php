<?php
session_start();
echo "khdam";
session_unset();
session_destroy();
echo "
    <script>
    window.history.go(-1);
    </script>
";
