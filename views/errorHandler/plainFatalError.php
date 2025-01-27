<?php
if (!isset($exception) || !isset($handler)) return;

$message  = method_exists($exception, 'getDispatch') ? $exception->getDispatch() : $exception->getMessage();
$severity = method_exists($exception, 'getSeverity') ? $handler->getSeverity($exception->getSeverity()) : null;

echo '<b>', ($severity === null ? 'Exception' : $severity[1]), '</b></br>';
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
        $args = $trace['args'] ?? null;
        echo $trace['function'], $args ? '(...)' : '()<br>';
        if (!(empty($trace['file']) || empty($trace['line']))) {
            echo '<small>[', $trace['file'], ':', $trace['line'], ']</small><br>';
        }
    }
}
?>