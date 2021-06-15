<?php
session_start();
session_destroy();

header('location: /crypto-1/admin');