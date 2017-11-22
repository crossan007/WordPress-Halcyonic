#!/bin/bash
rm -rf public/wp-content/themes/Halcyonic
cp -R src/Halcyonic public/wp-content/themes

rm -rf public/wp-content/plugins/churchcrm-calendar
cp -R WordPress-ChurchCRM-Calendar/churchcrm-calendar public/wp-content/plugins/