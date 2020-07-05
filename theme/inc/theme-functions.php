<?php

function get_current_page_url() {
  global $wp;
  $current_url = home_url(add_query_arg(array(), $wp->request));
  return $current_url;
}
