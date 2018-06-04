<?php
// source: C:\xampp\htdocs\achievements\app\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Templated520d29e9a extends Latte\Runtime\Template
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
    <div class='row'>
        <div class='col-md-4'>
            <div class="panel panel-default">
                <div class='panel-heading'><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Achievements:default")) ?>"><strong>News</strong></a></div>
                <div class="panel-body">
                    <p><strong>Ubisoft says 'No more lootboxes!'</strong></p>
                    <hr>
                    <p><strong>Far Cry 6 to take place in Uzbekistan</strong></p>
                    <hr>
                    <p><strong>Nestle buys EA</strong></p>
                    <hr>
                    <p><strong>Trump playing Stardew Valley</strong></p>
                </div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class="panel panel-default">
                <div class='panel-heading'><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Users:default")) ?>"><strong>Users</strong></a></div>
                <div class="panel-body">
                    <p><strong>FreSsh</strong></p>
                    <hr>
                    <p><strong>Drag0n0idus</strong></p>
                    <hr>
                    <p><strong>Ruduvun</strong></p>
                    <hr>
                    <p><strong>Garttox</strong></p>
                </div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class="panel panel-default">
                <div class='panel-heading'><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Garmes:default")) ?>"><strong>Games</strong></a></div>
                <div class="panel-body">
                    <p><strong>Warframe</strong></p>
                    <hr>
                    <p><strong>Frostpunk</strong></p>
                    <hr>
                    <p><strong>Far Cry 5</strong></p>
                    <hr>
                    <p><strong>Clicker Heroes</strong></p>
                </div>
            </div>
        </div>
    </div><?php
	}

}
