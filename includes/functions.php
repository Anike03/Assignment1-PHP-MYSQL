<?php
// Optional helper functions
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>