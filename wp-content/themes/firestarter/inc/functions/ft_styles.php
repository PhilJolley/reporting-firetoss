<?php

function ft_styles($s = null){
	global $styles;
	return join(' ', $s ? $s : $styles);
}
