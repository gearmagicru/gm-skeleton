<?php
if (!isset($exception)) return;

$message = method_exists($exception, 'getDispatch') ? $exception->getDispatch() : $exception->getMessage();
$name    = method_exists($exception, 'getName') ? $exception->getName() : 'Unknow error';

echo '<b>', $name, '</b></br>';
echo $message, '<br>';
echo '<small>[', $exception->getFile(), ':', $exception->getLine(), ']</small><br>';
if (GM_DEBUG) :
    $index = 0; 
    foreach($exception->getTrace() as $trace) :
        echo ++$index, '# ';
        if (isset($trace['class'])) :
            echo  $trace['class'], $trace['type'];
        endif;
        echo $trace['function'], $trace['args'] ? '(...)' : '()<br>';
        if (!(empty($trace['file']) || empty($trace['line']))) :
            echo '<small>[', $trace['file'], ':', $trace['line'], ']</small><br>';
        endif;
    endforeach;
endif;
?>