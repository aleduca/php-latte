<?php

use Latte\Runtime as LR;

/** source: /Users/alexandrexandecar/Desktop/latte/app/views/home.latte */
final class Template7816e37075 extends Latte\Runtime\Template
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

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['user' => '17'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = 'master.latte';
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
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '	<p>My name is ';
		echo LR\Filters::escapeHtmlText($name) /* line 6 */;
		echo '</p>

	<hr>

	<ul>
';
		foreach ($iterator = $ʟ_it = new Latte\Essential\CachingIterator($users, $ʟ_it ?? null) as $user) /* line 17 */ {
			echo '			<li>';
			echo LR\Filters::escapeHtmlText(($this->global->fn->shortify)($user->firstName, 3)) /* line 18 */;
			echo '</li>
';
		}
		if ($iterator->isEmpty()) /* line 19 */ {
			echo '			<li><em>Sorry, no users in this list</em></li>
';

		}
		$iterator = $ʟ_it = $ʟ_it->getParent();

		echo '	</ul>


';
	}
}
