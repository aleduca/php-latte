<?php

use Latte\Runtime as LR;

/** source: /Users/alexandrexandecar/Desktop/latte/app/views/home.php */
final class Template4a8c3cbf92 extends Latte\Runtime\Template
{
	public const Blocks = [
		['title' => 'blockTitle', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo '

';
		$this->renderBlock('content', get_defined_vars()) /* line 5 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = 'master.php';
		return get_defined_vars();
	}


	/** {block title} on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'My amazing blog';
	}


	/** {block content} on line 5 */
	public function blockContent(array $ʟ_args): void
	{
		echo '	<p>Welcome to my awesome homepage.</p>
';
	}
}
