<?php
function is_active ($page) {
    if (strtolower($page) == strtolower(get_the_title())) {
        return "active";
    }
    else {
        return "nactive";
    }
}