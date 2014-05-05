<?php

Route::resource('password', 'RemindersController', array('only' => array('index','show', 'store', 'update')));
