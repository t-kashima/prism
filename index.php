<?php
require_once(dirname(__FILE__) . '/lib/limonade.php');

function configure() {
    option('root_dir', dirname(__FILE__));
    option('views_dir', option('root_dir') . '/views');

    // 適宜フォルダまでのパスに変更して下さい
    /* option('base_uri', '/prism/'); */
}

function before($route)
{
    layout('layout.html.php');
}

dispatch('/', function() {
        return render('index.html.php');
});

dispatch('/search', function() {
        $word = NULL;
        if (isset($_GET['word']) == true) {
            $word = $_GET['word'];
        }

        $result = NULL;
        if (isset($word) && $word != '') {
            // ここで複数のWikiを検索する
            require_once(dirname(__FILE__) . '/lib/PukiWikiUtility/PukiWikiUtility.class.php');
            $result = PukiWikiUtility::search('http://odz.sakura.ne.jp/projecteuler/', $word);
        }
        set('title', '検索');
        set('word', $word);
        set('result', $result);
        return render('search.html.php');
});

run();
