<?php

namespace DBTech\Credits\Widget;

use XF\Widget\AbstractWidget;

/**
 * Class Richest
 *
 * @package DBTech\Credits\Widget
 */
class Richest extends AbstractWidget
{
	/**
	 * @var array
	 */
	protected $defaultOptions = [
		'limit' => 10,
		'currencyIds' => ''
	];
	
	/**
	 * @param $context
	 *
	 * @return array
	 */
	protected function getDefaultTemplateParams($context)
	{
		$params = parent::getDefaultTemplateParams($context);
		if ($context == 'options')
		{
			$params['currencies'] = $this->finder('DBTech\Credits:Currency')
				->fetch()
				->pluckNamed('title')
			;
		}
		return $params;
	}
	
	/**
	 * @return \XF\Widget\WidgetRenderer
	 */
	public function render()
	{
		$options = $this->options;
		
		/** @var \DBTech\Credits\Entity\Currency[] $currencies */
		$currencies = $this->finder('DBTech\Credits:Currency')
			->fetch()
			->filterViewable()
			->filter(function(\DBTech\Credits\Entity\Currency $currency) use ($options)
			{
				if (
					$options['currencyIds']
					&& !in_array(0, $options['currencyIds'])
					&& !in_array($currency->currency_id, $options['currencyIds'])
				)
				{
					return null;
				}
				
				return $currency;
			})
		;

		$viewParams = [
			'title' => $this->getTitle() ?: \XF::phrase('dbtech_credits_richest_users'),
			'currencies' => $currencies,
		];
		return $this->renderer('dbtech_credits_widget_richest', $viewParams);
	}
	
	/**
	 * @param \XF\Http\Request $request
	 * @param array $options
	 * @param null $error
	 *
	 * @return bool
	 */
	public function verifyOptions(\XF\Http\Request $request, array &$options, &$error = null)
	{
		$options = $request->filter([
			'limit' => 'uint',
			'currencyIds' => 'array-uint'
		]);
		if (empty($options['limit']))
		{
			$error = \XF::phrase('dbtech_credits_richest_widget_must_be_configured_to_display_one_or_more_user');
			return false;
		}
		if (empty($options['currencyIds']))
		{
			$error = \XF::phrase('dbtech_credits_richest_widget_must_be_configured_to_display_one_or_more_currency');
			return false;
		}
		return true;
	}
}