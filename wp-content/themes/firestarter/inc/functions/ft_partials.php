<?php

function ft_partials($arr = []) {
    foreach ($arr as $arg):
        ft_partial($arg);
    endforeach;
}