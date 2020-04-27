/* https://stackoverflow.com/questions/36222254/drupal-mixed-content-error-when-using-ssl-certificate */

$conf['reverse_proxy'] = TRUE;
$base_url = 'https://whatever-your-domain-is.com';
$conf['reverse_proxy_addresses'] = array('internal_nginx_proxy_ip');
$conf['reverse_proxy_header'] = 'HTTP_X_FORWARDED_FOR';
