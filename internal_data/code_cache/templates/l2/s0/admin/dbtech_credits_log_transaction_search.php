<?php
// FROM HASH: 246de69b2589af36779e04af89c051c2
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Search transactions');
	$__finalCompiled .= '

';
	$__compilerTemp1 = $__templater->mergeChoiceOptions(array(), $__vars['sortOrders']);
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formNumberBoxRow(array(
		'name' => 'criteria[transaction_id]',
		'value' => $__vars['criteria']['transaction_id'],
		'min' => '0',
		'step' => '1',
	), array(
		'label' => 'Transaction ID',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'criteria[SourceUser][username]',
		'ac' => 'single',
		'value' => $__vars['criteria']['SourceUser']['username'],
	), array(
		'label' => 'Source User',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'criteria[TargetUser][username]',
		'ac' => 'single',
		'value' => $__vars['criteria']['TargetUser']['username'],
	), array(
		'label' => 'Target User',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formRow('
				<div class="inputGroup">
					' . $__templater->formDateInput(array(
		'name' => 'criteria[dateline][start]',
		'value' => $__vars['criteria']['dateline']['start'],
		'size' => '15',
	)) . '
					<span class="inputGroup-text">-</span>
					' . $__templater->formDateInput(array(
		'name' => 'criteria[dateline][end]',
		'value' => $__vars['criteria']['dateline']['end'],
		'size' => '15',
	)) . '
				</div>
			', array(
		'rowtype' => 'input',
		'label' => 'Date range',
	)) . '

			' . $__templater->callMacro('public:dbtech_credits_event_macros', 'event_trigger_select', array(
		'inputName' => 'criteria[event_trigger_id]',
		'eventTriggerId' => '',
		'includeBlank' => false,
		'includeAny' => true,
	), $__vars) . '

			' . $__templater->callMacro('public:dbtech_credits_event_macros', 'event_select', array(
		'inputName' => 'criteria[event_id]',
		'eventId' => '',
		'includeBlank' => false,
		'includeAny' => true,
	), $__vars) . '

			<hr class="formRowSep" />

			' . $__templater->formRow('

				<div class="inputPair">
					' . $__templater->formSelect(array(
		'name' => 'order',
	), $__compilerTemp1) . '
					' . $__templater->formSelect(array(
		'name' => 'direction',
		'value' => 'desc',
	), array(array(
		'value' => 'asc',
		'label' => 'Tăng dần',
		'_type' => 'option',
	),
	array(
		'value' => 'desc',
		'label' => 'Giảm dần',
		'_type' => 'option',
	))) . '
				</div>
			', array(
		'rowtype' => 'input',
		'label' => 'Sắp xếp',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'sticky' => 'true',
		'icon' => 'search',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('dbtech-credits/logs/transactions', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
});