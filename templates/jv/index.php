<?php
defined('_JEXEC') or die;

//Add CSS
$doc = JFactory::getDocument();
$doc->addStyleSheet
        ('templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/custom.css');
//Add Javascript from Bootstrap
Jhtml::_('bootstrap.framework');


//Get sitename
$config = JFactory::getConfig();
$sitename = $config->get('sitename');

//схлопывание столбцов
//$middlespan = 'span6';
//$left = true;
//$right = true;
//if ($this->countModules('position-3') == 0
//        AND $this->countModules('position-4') == 0
//        AND $this->countModules('position-5') == 0
//        AND $this->countModules('position-6') == 0
//        AND $this->countModules('position-7') == 0
//        AND $this->countModules('position-8') == 0
//        AND $this->countModules('position-9') == 0
//        AND $this->countModules('position-10') == 0):
//    $middlespan = 'span12';
//    $left = false;
//    $right = false;
//elseif
// ($this->countModules('position-3') == 0
//        AND $this->countModules('position-4') == 0
//        AND $this->countModules('position-5') == 0):
//    $middlespan = 'span9';
//    $left = false;
//elseif
// ($this->countModules('position-6') == 0
//        AND $this->countModules('position-7') == 0
//        AND $this->countModules('position-8') == 0
//        AND $this->countModules('position-9') == 0
//        AND $this->countModules('position-10') == 0):
//    $middlespan = 'span9';
//    $right = false;
//endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="head" />
    <script type="text/javascript" src="/templates/jv/js/bootstrap.min.js">
    </script>
</head>
<body>

    <div class="body">

        <div class="container">

            <div class="header">
                <div class="header-lg visible-lg">
                    <div class="sitename">
                        <?php echo htmlspecialchars($config->get('sitename')); ?>
                    </div>
                    <jdoc:include	type="modules"	name="position-11"	/>
                </div>
                <div class="header-md visible-md">
                    <div class="sitename">
                        <?php echo htmlspecialchars($config->get('sitename')); ?>
                    </div>
                    <jdoc:include	type="modules"	name="position-11"	/>
                </div>
                <div class="header-sm visible-sm">
                    <div class="sitename">
                        <?php echo htmlspecialchars($config->get('sitename')); ?>
                    </div>
                    <jdoc:include	type="modules"	name="position-11"	/>
                </div>
                <div class="header-xs visible-xs">
                    <div class="sitename">
                        <?php echo htmlspecialchars($config->get('sitename')); ?>
                    </div>
                    <jdoc:include	type="modules"	name="position-11"	/>
                </div>
            </div>

            <div class="row body-top top-jv">

                <div class="col-xs-4 col-sm-3 col-md-2 nav">
                    <jdoc:include type="modules" name="position-1" />
                </div>

                <div class="col-sm-5 contacts hidden-xs">
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2 cart-jv">
                    <jdoc:include type="modules" name="position-20" />
                </div>  

                <div class="address col-md-2 hidden-xs hidden-sm">
                    <div>Беларусь</div>
                    <div>Минск</div>
                    <div>пр. Независимости</div>
                    <div>65-7</div>
                    <div>вход со двора</div>
                </div>

                <div class="search col-xs-2 visible-lg visible-md">
                    <jdoc:include type="modules" name="position-0" />
                </div>

            </div>

            <div class="row-middle">
                <div class="filter hidden-xs col-sm-3">
                    <jdoc:include type="modules" name="position-3" />
                    <jdoc:include type="modules" name="position-4" />
                    <jdoc:include type="modules" name="position-5" />
                </div>

                <div class='col-xs-12 col-sm-9 col-md-9'>
                    <jdoc:include type="component" />    
                </div>

                <div class="span3">
                    <jdoc:include type="modules" name="position-6" />
                    <jdoc:include type="modules" name="position-7" />
                    <jdoc:include type="modules" name="position-8" />
                    <jdoc:include type="modules" name="position-9" />
                    <jdoc:include type="modules" name="position-10" />
                </div>

            </div>

            <div class="row body-bottom">
                <div class="span4">
                    <jdoc:include type="modules" name="position-12" />
                </div>
                <div class="span4">
                    <jdoc:include type="modules" name="position-13" />
                </div>
                <div class="span4">
                    <jdoc:include type="modules" name="position-14" />
                </div>
            </div>

        </div>
</body>
</html>
