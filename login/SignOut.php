<?php
/**
 * @Author: name
 * @Date:   2019-03-29 19:13:56
 * @Last Modified by:   name
 * @Last Modified time: 2019-03-29 19:19:42
 */
if (!session_id()) session_start();

session_destroy();

header('Location: /');