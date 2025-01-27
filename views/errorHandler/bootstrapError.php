<?php
if (!isset($exception)) return;

$message = method_exists($exception, 'getDispatch') ? $exception->getDispatch() : $exception->getMessage();
$name    = method_exists($exception, 'getName') ? $exception->getName() : 'Unknow error';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>GM: <?= $name ?></title>
    <meta name="charset" content="utf-8" />

    <link rel="shortcut icon" href="<?= BASE_URL . PUBLIC_BASE_URL ?>/vendors/gm/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_BASE_URL ?>/vendors/gm/css/gm.css" type="text/css" />
</head>
<body>
<div class="gm-stick gm-stick-error">
    <div class="gm-stick-head">
        <div>
            <span class="gm-stick-name"><?= $name ?></span>
<?php if (GM_MODE_DEV) : ?>
            <span class="gm-stick-exception">&mdash; <?= get_class($exception) ?></span>
<? endif ?>
        </div>
    </div>
    <div class="gm-stick-body">
        <div class="gm-stick-msg"><?= $message ?></div>
<?php if (GM_MODE_DEV) : ?>
        <div class="gm-stick-file">
            <span class="file-letter">in</span> <?= $exception->getFile() ?><span class="file-line"><span class="file-letter">at line</span> <?= $exception->getLine() ?></span>
        </div>
<? endif ?>
<?php if (GM_DEBUG && GM_MODE_DEV) : ?>
        <div class="gm-stick-trace">
            <ol>
<?php foreach($exception->getTrace() as $trace) : ?>
                <li>
                    <div class="target">
<? if (isset($trace['class'])) : ?>
                        <span class="target-class"><?= $trace['class'] ?></span><span class="target-type"><?= $trace['type'] ?></span>
<? endif ?>
                        <span class="target-func"><?= $trace['function'] ?> (<span class="target-func-args"><?=  ($trace['args'] ?? []) ? '...' : '' ?></span>)</span>
                    </div>
<? if (!(empty($trace['file']) || empty($trace['line']))) : ?>
                    <div class="target-file">
                        <span class="file-letter">called at [</span><span class="file-name"><?= $trace['file'] ?></span><span class="file-sp">:</span><span class="file-line"><?= $trace['line'] ?></span><span class="file-letter">]</span>
                    </div>
<? endif ?>
                </li>
<?php endforeach ?>
                </ol>
            </div>
<?php endif ?>
        </div>
    </div>
</body>
</html>