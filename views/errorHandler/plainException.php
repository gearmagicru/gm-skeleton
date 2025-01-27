<?php
if (!isset($exception) || !isset($handler)) return;

$name    = method_exists($exception, 'getName') ? $exception->getName() : 'Unknow Exception';
$message = method_exists($exception, 'getDispatch') ? $exception->getDispatch() : $exception->getMessage();

echo '<b>', $name, '</b></br>';
echo $message;

if (GM_MODE_DEV) {
    echo '<br><small>[', $exception->getFile(), ':', $exception->getLine(), ']</small>';
}

if (GM_DEBUG) {
    echo '<br>';
    $index = 0; 
    foreach ($exception->getTrace() as $trace) {
        echo ++$index, '# ';
        if (isset($trace['class'])) {
            echo  $trace['class'], $trace['type'];
        }
        echo $trace['function'], ($trace['args'] ?? '') ? '(...)' : '()<br>';
        if (!(empty($trace['file']) || empty($trace['line']))) {
            echo '<small>[', $trace['file'], ':', $trace['line'], ']</small><br>';
        }
    }
}
?>