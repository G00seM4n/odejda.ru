<?
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetTitle("Главная");
?>
<p>
	Мы рады приветствовать вас на сайте нашей компании.
</p>
<p>
	 Наша компания была основана в 1993 году, а наш интернет-магазин стал одним из первых магазинов, осуществляющих on-line продажу одежды в регионе. Компания специализируется на оптовой и розничной продаже одежды как для дома, так и для офиса.
</p>
<p>
	 На данный момент мы представляем собой крупную компанию, владеющую интернет–магазином и имеющую в своей сети единый call-центр, который регулирует всю деятельность магазина, отдел продаж, службу доставки, широкий штат квалифицированных сборщиков, собственный склад c постоянным наличием необходимого запаса товаров.
</p>
<p>
	 За это время у нас сложились партнерские отношения с ведущими производителями, позволяющие предлагать высококачественную продукцию по конкурентоспособным ценам.
</p>
<p>
	 Мы можем гордиться тем, что у нас один из самых широких ассортиментов одежды в городе и области.
</p>
<h2>Наши возможности</h2>
<div class="row">
	<div class="col-xs-4">
		<ul class="bxe-list bxe-lis-blue">
			 <?$APPLICATION->IncludeFile(
				SITE_DIR.'include/capabilities1.php',
				array(),
				array(
					'MODE' => 'html'
				)
			);?>
		</ul>
	</div>
	<div class="col-xs-4">
		<ul class="bxe-list bxe-lis-blue">
			 <?$APPLICATION->IncludeFile(
				SITE_DIR.'include/capabilities2.php',
				array(),
				array(
					'MODE' => 'html'
				)
			);?>
		</ul>
	</div>
	<div class="col-xs-4">
		<ul class="bxe-list bxe-lis-blue">
			 <?$APPLICATION->IncludeFile(
				SITE_DIR.'include/capabilities3.php',
				array(),
				array(
					'MODE' => 'html'
				)
			);?>
		</ul>
	</div>
</div>
 <br>
<p>
	 Мы всегда рады общению с нашими клиентами. Если у вас есть какие-либо пожелания, предложения, замечания, касающиеся работы нашего Интернет-магазина - пишите нам, и мы с благодарностью примем ваше мнение во внимание:
</p>
<p>
 <b>Электронная почта</b>: <?$APPLICATION->IncludeFile(
		SITE_DIR.'include/mail.php',
		array(),
		array(
			'MODE' => 'html'
		)
	);?>
</p>
 <br><?
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>