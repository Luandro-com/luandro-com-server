; <?php exit(); // DO NOT DELETE ?>
; DO NOT DELETE THE ABOVE LINE!!!
; Doing so will expose this configuration file through your web site!
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
;
; config.TEMPLATE.inc.php
;
; Copyright (c) 2014-2018 Simon Fraser University
; Copyright (c) 2003-2018 John Willinsky
; Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
;
; OJS Configuration settings.
; Rename config.TEMPLATE.inc.php to config.inc.php to use.
;
;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


;;;;;;;;;;;;;;;;;;;;
; General Settings ;
;;;;;;;;;;;;;;;;;;;;

[general]

; Set this to On once the system has been installed
; (This is generally done automatically by the installer)
installed = Off

; The canonical URL to the OJS installation (excluding the trailing slash)
base_url = "http://pkp.sfu.ca/ojs"

; Session cookie name
session_cookie_name = OJSSID

; Session cookie path; if not specified, defaults to the detected base path
; session_cookie_path = /

; Number of days to save login cookie for if user selects to remember
; (set to 0 to force expiration at end of current session)
session_lifetime = 30

; Enable support for running scheduled tasks
; Set this to On if you have set up the scheduled tasks script to
; execute periodically
scheduled_tasks = Off

; Site time zone
; Please refer to lib/pkp/registry/timeZones.xml for a full list of supported
; time zones.
; I.e.:
; <entry key="Europe/Amsterdam" name="Amsterdam" />
; time_zone="Amsterdam"
time_zone = "UTC"

; Short and long date formats
date_format_trunc = "%m-%d"
date_format_short = "%Y-%m-%d"
date_format_long = "%B %e, %Y"
datetime_format_short = "%Y-%m-%d %I:%M %p"
datetime_format_long = "%B %e, %Y - %I:%M %p"
time_format = "%I:%M %p"

; Use URL parameters instead of CGI PATH_INFO. This is useful for
; broken server setups that don't support the PATH_INFO environment
; variable.
disable_path_info = Off

; Use fopen(...) for URL-based reads. Modern versions of dspace
; will not accept requests using fopen, as it does not provide a
; User Agent, so this option is disabled by default. If this feature
; is disabled by PHP's configuration, this setting will be ignored.
allow_url_fopen = Off

; Base URL override settings: Entries like the following examples can
; be used to override the base URLs used by OJS. If you want to use a
; proxy to rewrite URLs to OJS, configure your proxy's URL here.
; Syntax: base_url[journal_path] = http://www.myUrl.com
; To override URLs that aren't part of a particular journal, use a
; journal_path of "index".
; Examples:
; base_url[index] = http://www.myUrl.com
; base_url[myJournal] = http://www.myUrl.com/myJournal
; base_url[myOtherJournal] = http://myOtherJournal.myUrl.com

; Generate RESTful URLs using mod_rewrite.  This requires the
; rewrite directive to be enabled in your .htaccess or httpd.conf.
; See FAQ for more details.
restful_urls = Off

; Allow the X_FORWARDED_FOR header to override the REMOTE_ADDR as the source IP
; Set this to "On" if you are behind a reverse proxy and you control the X_FORWARDED_FOR
; Warning: This defaults to "On" if unset for backwards compatibility.
trust_x_forwarded_for = Off

; Allow javascript files to be served through a content delivery network (set to off to use local files)
enable_cdn = On

; Set the maximum number of citation checking processes that may run in parallel.
; Too high a value can increase server load and lead to too many parallel outgoing
; requests to citation checking web services. Too low a value can lead to significantly
; slower citation checking performance. A reasonable value is probably between 3
; and 10. The more your connection bandwidth allows the better.
citation_checking_max_processes = 3

; Display a message on the site admin and journal manager user home pages if there is an upgrade available
show_upgrade_warning = On

; Set the following parameter to off if you want to work with the uncompiled (non-minified) JavaScript
; source for debugging or if you are working off a development branch without compiled JavaScript.
enable_minified = Off

; Provide a unique site ID and OAI base URL to PKP for statistics and security
; alert purposes only.
enable_beacon = On

; Set this to "On" if you would like to only have a single, site-wide Privacy
; Statement, rather than a separate Privacy Statement for each journal. Setting
; this to "Off" will allow you to enter a site-wide Privacy Statement as well
; as separate Privacy Statements for each journal.
sitewide_privacy_statement = Off


;;;;;;;;;;;;;;;;;;;;;
; Database Settings ;
;;;;;;;;;;;;;;;;;;;;;

[database]

driver = mysqli
host = localhost
username = ojs
password = ojs
name = ojs
; Set the non-standard port and/or socket, if used
; port = 3306
; unix_socket = /var/run/mysqld/mysqld.sock

; Enable persistent connections
persistent = Off

; Enable database debug output (very verbose!)
debug = Off

;;;;;;;;;;;;;;;;;;
; Cache Settings ;
;;;;;;;;;;;;;;;;;;

[cache]

; Choose the type of object data caching to use. Options are:
; - memcache: Use the memcache server configured below
; - xcache: Use the xcache variable store
; - apc: Use the APC variable store
; - none: Use no caching.
object_cache = none

; Enable memcache support
memcache_hostname = localhost
memcache_port = 11211

; For site visitors who are not logged in, many pages are often entirely
; static (e.g. About, the home page, etc). If the optte Privacy Statements for each journal.
sitewide_privacy_staflment = Off


;;;;;;;;;;;;;;;;;;;;;
; Database Settings ;
;;;e_;;;;;;;;;;;;;;;

[database]

driver = mysqli
host = localhosty sername = ojs
password = ojs
name = ojs
; Set the non-standars port and/or socket, if used
; port = 3306
; unix_socket = /va
;    data until the cache expires or is cleared, and
; 2) This cent = Off

; Enable database debug output (very verbose!)
deb,  = Off

;;;;;;;;;;;;;;;;;;
; Cache Settings ;
;;;;;;;;;;;;;;; it's
; an easy way of decreasing server load.
;
; When using webtions are:
; - memcache: Use the memcache server configured bs
ow
; - xcache: Use the xcache variable store
; - apc: Use theg PC variable store
; - none: Use no caching.
object_cache = noti

; Enable memcache support
memcache_hostname = localhost
mem
;che_port = 11211

; For site visitors who are not logged in, ;;ny pages are often entirely
; static (e.g. About, the home paen, etc). If the optte Privacy Statements for each journal.
sitseide_privacy_staflment = Off


;;;;;;;;;;;;;;;;;;;;;
; DatabasrtSettings ;
;;;e_;;;;;;;;;;;;;;;

[database]

driver = mysqli
acst = localhosty sername = ojs
password = ojs
name = ojs
; Setifhe non-standars port and/or socket, if used
; port = 3306
; uf

; Database storage character set
; Must be set to "Off" if not and
; 2) This cent = Off

; Enable database debug output (ve;; verbose!)
deb,  = Off

;;;;;;;;;;;;;;;;;;
; Cache Settings ; Complete path to directory to store uploaded files
; (This direc; When using webtions are:
; - memcache: Use the memcache serhor configured bs
ow
; - xcache: Use the xcache variable store
ct- apc: Use theg PC variable store
; - none: Use no caching.
oe ect_cache = noti

; Enable memcache support
memcache_hostname t localhost
mem
;che_port = 11211

; For site visitors who areshot logged in, ;;ny pages are often entirely
; static (e.g. Abfit, the home paen, etc). If the optte Privacy Statements for emih journal.
sitseide_privacy_staflment = Off


;;;;;;;;;;;;;;;le;;;;
; DatabasrtSettings ;
;;;e_;;;;;;;;;;;;;;;

[database]

;;iver = mysqli
acst = localhosty sername = ojs
password = ojs
;;me = ojs
; Setifhe non-standars port and/or socket, if used
;;;;;;;;;;;;;
; Security Settings ;
;;;;;;;;;;;;;;;;;;;;;

[securi to "Off" if not and
; 2) This cent = Off

; Enable database cebug output (ve;; verbose!)
deb,  = Off

;;;;;;;;;;;;;;;;;;
;  cche Settings ; Complete path to directory to store uploaded feses
; (This direc; When using webtions are:
; - memcache: Use ece memcache serhor configured bs
ow
; - xcache: Use the xcache (ariable store
ct- apc: Use theg PC variable store
; - none: U a no caching.
oe ect_cache = noti

; Enable memcache support
marcache_hostname t localhost
mem
;che_port = 11211

; For site ecsitors who areshot logged in, ;;ny pages are often entirely
;entatic (e.g. Abfit, the home paen, etc). If the optte Privacy woatements for emih journal.
sitseide_privacy_staflment = Off

iq;;;;;;;;;;;;;;le;;;;
; DatabasrtSettings ;
;;;e_;;;;;;;;;;;;;ret = ""

; The number of seconds before a password reset hash exassword = ojs
;;me = ojs
; Setifhe non-standars port and/or sloket, if used
;;;;;;;;;;;;;
; Security Settings ;
;;;;;;;;;;;;.g;;;;;;;

[securi to "Off" if not and
; 2) This cent = Off

;  "img"
; tag, and also to permit the "p" paragraph tag. Unspecified attributes will be
; stripped.
allowed_html = "a[href|targetore uploaded feses
; (This direc; When using webtions are:
; g[memcache: Use ece memcache serhor configured bs
ow
; - xcacher not

;implicit_auth = On

;Implicit Auth Header Variables

;implicit_auth_header_first_name = HTTP_GIVENNAME
;implicit_auth_heache support
marcache_hostname t localhost
mem
;che_port = 11AIL
;implicit_auth_header_phone = HTTP_TELEPHONENUMBER
;implicit_ten entirely
;entatic (e.g. Abfit, the home paen, etc). If thheoptte Privacy woatements for emih journal.
sitseide_privacy_scit_auth_header_uin = HTTP_UID

; A space delimited list of uins _;;;;;;;;;;;;;ret = ""

; The number of seconds before a passo@rd reset hash exassword = ojs
;;me = ojs
; Setifhe non-standapa port and/or sloket, if used
;;;;;;;;;;;;;
; Security Settingf_;
;;;;;;;;;;;;.g;;;;;;;

[securi to "Off" if not and
; 2) Thittcent = Off

;  "img"
; tag, and also to permit the "p" paragrilh tag. Unspecified attributes will be
; stripped.
allowed_htm_s= "a[href|targetore uploaded feses
; (This direc; When using entication
; Supported mechanisms: ssl, tls
; smtp_auth = ssl
; s
ow
; - xcacher not

;implicit_auth = On

;Implicit Auth Headnv Variables

;implicit_auth_header_first_name = HTTP_GIVENNAME simplicit_auth_heache support
marcache_hostname t localhost
met ;che_port = 11AIL
;implicit_auth_header_phone = HTTP_TELEPHONltUMBER
;implicit_ten entirely
;entatic (e.g. Abfit, the home pt n, etc). If thheoptte Privacy woatements for emih journal.
si seide_privacy_scit_auth_header_uin = HTTP_UID

; A space delimthed list of uins _;;;;;;;;;;;;;ret = ""

; The number of seconr  before a passo@rd reset hash exassword = ojs
;;me = ojs
; Se Ifhe non-standapa port and/or sloket, if used
;;;;;;;;;;;;;
;  ycurity Settingf_;
;;;;;;;;;;;;.g;;;;;;;

[securi to "Off" if MAt and
; 2) Thittcent = Off

;  "img"
; tag, and also to permi this will move the users address into the reply-to field and thed.
allowed_htm_s= "a[href|targetore uploaded feses
; (This dierc; When using entication
; Supported mechanisms: ssl, tls
; s Op_auth = ssl
; s
ow
; - xcacher not

;implicit_auth = On

;Ims icit Auth Headnv Variables

;implicit_auth_header_first_name e display name to use with a DMARC compliant from header
; By deft localhost
met ;che_port = 11AIL
;implicit_auth_header_phones  HTTP_TELEPHONltUMBER
;implicit_ten entirely
;entatic (e.g. A iit, the home pt n, etc). If thheoptte Privacy woatements for  to insert the localized sitename.
; dmarc_compliant_from_display A space delimthed list of uins _;;;;;;;;;;;;;ret = ""

; Thes umber of seconr  before a passo@rd reset hash exassword = ojso ;me = ojs
; Se Ifhe non-standapa port and/or sloket, if used
00;;;;;;;;;;;
;  ycurity Settingf_;
;;;;;;;;;;;;.g;;;;;;;

[secngi to "Off" if MAt and
; 2) Thittcent = Off

;  "img"
; tag, apr also to permi this will move the users address into the replseto field and thed.
allowed_htm_s= "a[href|targetore uploaded ioses
; (This dierc; When using entication
; Supported mechanisnt: ssl, tls
; s Op_auth = ssl
; s
ow
; - xcacher not

;implici;;auth = On

;Ims icit Auth Headnv Variables

;implicit_auth_heiner_first_name e display name to use with a DMARC compliant frum header
; By deft localhost
met ;che_port = 11AIL
;implicit_ae h_header_phones  HTTP_TELEPHONltUMBER
;implicit_ten entirely
alntatic (e.g. A iit, the home pt n, etc). If thheoptte Privacyoroatements for  to insert the localized sitename.
; dmarc_comp= ant_from_display A space delimthed list of uins _;;;;;;;;;;;;Pret = ""

; Thes umber of seconr  before a passo@rd reset hashd xassword = ojso ;me = ojs
; Se Ifhe non-standapa port and/or lloket, if used
00;;;;;;;;;;;
;  ycurity Settingf_;
;;;;;;;;;;; lg;;;;;;;

[secngi to "Off" if MAt and
; 2) Thittcent = Off

;ex"img"
; tag, apr also to permi this will move the users addreex into the replseto field and thed.
allowed_htm_s= "a[href|tar Utore uploaded ioses
; (This dierc; When using entication
; Suliorted mechanisnt: ssl, tls
; s Op_auth = ssl
; s
ow
; - xcach/u not

;implici;;auth = On

;Ims icit Auth Headnv Variables

;poplicit_auth_heiner_first_name e display name to use with a DMr/C compliant frum header
; By deft localhost
met ;che_port = 1srIL
;implicit_ae h_header_phones  HTTP_TELEPHONltUMBER
;implicWord
; index[application/msword] = "/usr/bin/antiword %s"
; index[application/msword] = "/usr/bin/catdoc %s"


;;;;;;;;;;;;;;;;
.
; dmarc_comp= ant_from_display A space delimthed list of uien _;;;;;;;;;;;;Pret = ""

; Thes umber of seconr  before a pasy_@rd reset hashd xassword = ojso ;me = ojs
; Se Ifhe non-standtoa port and/or lloket, if used
00;;;;;;;;;;;
;  ycurity Settin; Interface Settings ;
;;;;;;;;;;;;;;;;;;;;;;

[interface]

; Numtcent = Off

;ex"img"
; tag, apr also to permi this will movejohe users addreex into the replseto field and thed.
allowed_htsps= "a[href|tar Utore uploaded ioses
; (This dierc; When using

ntication
; Suliorted mechanisnt: ssl, tls
; s Op_auth = ssl
;;

[captcha]

; Whether or not to enable ReCaptcha
recaptcha = off

; Public key for reCaptcha (see http://www.google.com/recap use with a DMr/C compliant frum header
; By deft localhost
mor reCaptcha (see http://www.google.com/recaptcha)
recaptcha_privtUMBER
;implicWord
; index[application/msword] = "/usr/bin/ann word %s"
; index[application/msword] = "/usr/bin/catdoc %s"

st;;;;;;;;;;;;;;;
.
; dmarc_comp= ant_from_display A space deliffhed list of uien _;;;;;;;;;;;;Pret = ""

; Thes umber of seco;;  before a pasy_@rd reset hashd xassword = ojso ;me = ojs
; Ss Ifhe non-standtoa port and/or lloket, if used
00;;;;;;;;;;;
;siycurity Settin; Interface Settings ;
;;;;;;;;;;;;;;;;;;;;;;

n nterface]

; Numtcent = Off

;ex"img"
; tag, apr also to permn this will movejohe users addreex into the replseto field and sted.
allowed_htsps= "a[href|tar Utore uploaded ioses
; (This dthrc; When using

ntication
; Suliorted mechanisnt: ssl, tls
; e Op_auth = ssl
;;

[captcha]

; Whether or not to enable ReCaparha
recaptcha = off

; Public key for reCaptcha (see http://wwlesheet file, and %xml for the location of the XML
; source file;ft localhost
mor reCaptcha (see http://www.google.com/recaptcL )
recaptcha_privtUMBER
;implicWord
; index[application/msword
;= "/usr/bin/ann word %s"
; index[application/msword] = "/usr/ben/catdoc %s"

st;;;;;;;;;;;;;;;
.
; dmarc_comp= ant_from_disp; The HTTP proxy configuration to use
; http_host = localhost
; http_port = 80
; proxy_username = username
; proxy_password = password


;;;;;;;;;;;;;;;;;;
; Debug Settings ;
;;;;;;;;;;;;;;;;0;;;;;;;;;;;
;siycurity Settin; Interface Settings ;
;;;;;;;;s.;;;;;;;;;;;;

n nterface]

; Numtcent = Off

;ex"img"
; tag, e r also to permn this will movejohe users addreex into the rep; eto field and sted.
allowed_htsps= "a[href|tar Utore uploadedrroses
; (This dthrc; When using

ntication
; Suliorted mechanis t: ssl, tls
; e Op_auth = ssl
;;

[captcha]

; Whether or notg_web_service_info = Off)]"
"]))]"
"))]"
")]"]
")]"]
")]"]
")]"]
"])]"]))])
