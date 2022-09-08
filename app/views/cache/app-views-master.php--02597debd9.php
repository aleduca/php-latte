<?php

use Latte\Runtime as LR;

/** source: /Users/alexandrexandecar/Desktop/latte/app/views/master.php */
final class Template02597debd9 extends Latte\Runtime\Template
{
	public const Blocks = [
		['title' => 'blockTitle', 'content' => 'blockContent', 'footer' => 'blockFooter'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!doctype html>
<html lang="en">
<head>
	<title>';
		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo '</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="content">
';
		$this->renderBlock('content', get_defined_vars()) /* line 9 */;
		echo '	</div>
	<div id="footer">
		';
		$this->renderBlock('footer', get_defined_vars()) /* line 12 */;
		echo '
	</div>
</body>
</html>
';
	}


	/** {block title} on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 9 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block footer} on line 12 */
	public function blockFooter(array $ʟ_args): void
	{
		echo '&copy; Copyright 2008';
	}
}
