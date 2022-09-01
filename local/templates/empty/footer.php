
				<?
					if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
						die();
				?>
            </div>
        </div>
        <?if(ERROR_404=='Y'):?>
            </div>
        <?else:?>
            <div class="sticky-push"></div>
        <?endif;?>
    </div>

    <footer>
        <div class="sticky-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <address>
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR.'include/phone3.php',
                                array(),
                                array(
                                    'MODE' => 'text'
                                )
                            );?>
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR.'include/mail.php',
                                array(),
                                array(
                                    'MODE' => 'html'
                                )
                            );?>
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR.'include/address.php',
                                array(),
                                array(
                                    'MODE' => 'text'
                                )
                            );?>
                        </address>
                    </div>

                    <div class="col-md-4 col-md-push-4">
                        <div class="copyright">
                            Данный шаблон предоставлен компанией<br/>© <a href="http://www.intervolga.ru">ИНТЕРВОЛГА</a> для
                            Академии 1С-Битрикс
                        </div>
                    </div>

                    <div class="col-md-4 col-md-pull-4 hidden-print">
                        <ul class="list-inline social-links">
                            <li><a href="https://vk.com/intervolga"><i class="fa fa-vk"></i></a></li>
                            <li><a href="https://www.facebook.com/intervolga34"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/intervolga_ru"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="mailto:info@intervolga.ru"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="https://www.youtube.com/user/wwwintervolgaru"><i class="fa fa-youtube"></i></a>
                            </li>
                            <li><a href="https://instagram.com/intervolga_ru/"><i class="fa fa-instagram"></i></a></li>
                            <li>
                                <div id="bx-composite-banner"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<?
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/bootstrap/collapse.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/bootstrap/tooltip.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/plugins.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.touchSwipe.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.ba-throttle-debounce.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');

		// слайдер
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/cookesHelp.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/bootstrap-switch.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.carouFredSel-packed.js');
	?>
</body>
</html>