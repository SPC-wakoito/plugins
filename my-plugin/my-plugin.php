<?php
/*
 Plugin Name: My Plugin
 Description: 固定のメッセージを返す関数を提供するプラグイン
 */

/**
 * 固定のメッセージを返す
 *
 * @return string メッセージ
 */
function get_my_plugin_message() {
    return 'This is My Plugin.';
}