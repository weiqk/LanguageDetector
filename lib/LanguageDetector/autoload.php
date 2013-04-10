<?php
/**
 *  Autoloader function generated by crodas/Autoloader
 *
 *  https://github.com/crodas/Autoloader
 *
 *  This is a generated file, do not modify it.
 */

spl_autoload_register(function ($class) {
    /*
        This array has a map of (class => file)
    */

    // classes {{{
    static $classes = array (
  'languagedetector\\sortinterface' => '/SortInterface.php',
  'languagedetector\\ngramparser' => '/NGramParser.php',
  'languagedetector\\format' => '/Format.php',
  'languagedetector\\learn' => '/Learn.php',
  'languagedetector\\sort\\bayes' => '/Sort/Bayes.php',
  'languagedetector\\sort\\sum' => '/Sort/Sum.php',
  'languagedetector\\sort\\common' => '/Sort/Common.php',
  'languagedetector\\sort\\pagerank' => '/Sort/PageRank.php',
  'languagedetector\\formatinterface' => '/FormatInterface.php',
  'languagedetector\\detect' => '/Detect.php',
  'languagedetector\\config' => '/Config.php',
  'languagedetector\\summaryinterface' => '/SummaryInterface.php',
  'languagedetector\\format\\json' => '/Format/JSON.php',
  'languagedetector\\format\\php' => '/Format/PHP.php',
  'languagedetector\\format\\ses' => '/Format/SES.php',
  'languagedetector\\distance\\bayes' => '/Distance/Bayes.php',
  'languagedetector\\distance\\outofplace' => '/Distance/OutOfPlace.php',
  'languagedetector\\distanceinterface' => '/DistanceInterface.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'languagedetector\\sort\\bayes' => 
  array (
    0 => 'languagedetector\\sort\\common',
    1 => 'languagedetector\\sort\\sum',
  ),
  'languagedetector\\sort\\sum' => 
  array (
    0 => 'languagedetector\\sort\\common',
  ),
  'languagedetector\\sort\\pagerank' => 
  array (
    0 => 'languagedetector\\sort\\common',
  ),
  'languagedetector\\summaryinterface' => 
  array (
    0 => 'languagedetector\\sortinterface',
  ),
);
    // }}}

    $class = strtolower($class);
    if (isset($classes[$class])) {
        if (!empty($deps[$class])) {
            foreach ($deps[$class] as $zclass) {
                if (!class_exists($zclass, false) && !interface_exists($zclass, false)) {
                    require __DIR__  . $classes[$zclass];
                }
            }
        }

        if (!class_exists($class, false) && !interface_exists($class, false)) {

            require __DIR__  . $classes[$class];

        }
        return true;
    }

    return false;
});


