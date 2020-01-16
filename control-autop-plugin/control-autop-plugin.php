<?php
/*
 Plugin Name: Control AUTOP Plugin
 Description: 自動整形機能を無効化するプラグイン
 */

// 本文の自動整形を無効化する
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化する
remove_filter('the_excerpt', 'wpautop');