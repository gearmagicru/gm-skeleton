<?php
if (!isset($exceptions) || !isset($handler)) return;

$next = false;
foreach ($exceptions as $error) {
    $severity = method_exists($error, 'getSeverity') ? $handler->getSeverity($error->getSeverity()) : null;
    $message  = method_exists($error, 'getDispatch') ? $error->getDispatch() : $error->getMessage();
    echo '<b>', ($severity === null ? 'Exception' : $severity[1]), '</b><br>';
    echo $message, '<br>';
    echo '<small>[', $error->getFile(), ':', $error->getLine(), ']</small><br>';
    if ($next) {
        $next = true;
        echo '<hr />';
    }

    if (GM_DEBUG) {
        $index = 0; 
        foreach ($error->getTrace() as $trace) {
            echo ++$index, '# ';
            if (isset($trace['class'])) {
                echo  $trace['class'], $trace['type'];
            }
            echo $trace['function'], ($trace['args'] ?? []) ? '(...)' : '()<br>';
            if (!(empty($trace['file']) || empty($trace['line']))) {
                echo '<small>[', $trace['file'], ':', $trace['line'], ']</small><br>';
            }
        }
    }
}
?>