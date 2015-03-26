<?php

foreach ( glob( dirname( __FILE__ ) .  '/_*.php')  as $file ) {
    require_once ( $file );
}