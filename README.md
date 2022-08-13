# phpMyAdmin-5.1.0-Google App Engine - php 7.4

# Installation
1 - Pull Repo

2 - Modify config.inc.php

          $cfg['blowfish_secret'] = 'somesecretphraseforcookie'; // Replace by Random String

          $host = '/cloudsql/sqlcloudinstant'; // Replace with SQL Cloud Instance

          $cfg['PmaAbsoluteUri'] = 'https://xxxxxxxxxxxxxxxxxxxxx.ts.r.appspot.com/'; // Replace by App Engine URL

3 - Modify app.yaml

        login: admin // Remove this if you want phpMyAdmin to be accessible via anyone  

4 - Deploy

        app deploy app.yaml
        
# Test Env

**Operating system:** Google App Engine's default OS

**Web server:** Google App Engine's default

**Database version:** MySQL 8.0

**PHP version:** 7.4

**phpMyAdmin version:** 5.1.0


# Useful Links

https://cloud.google.com/sql/docs/mysql/phpmyadmin-on-app-engine
