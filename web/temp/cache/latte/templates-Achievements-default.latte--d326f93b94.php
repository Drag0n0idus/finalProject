<?php
// source: C:\xampp\htdocs\achievements\app\presenters/templates/Achievements/default.latte

use Latte\Runtime as LR;

class Templated326f93b94 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<h2>Achievements!</h2>
<a class="button button-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>">Back home</a><?php
	}

}
