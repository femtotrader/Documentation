<!-- Code generated by indicator_reference_code_generator.py -->
<? 
$hasReference = false;
$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'MovingAverageConvergenceDivergence';
$helperName = 'MACD';
$helperArguments = 'symbol, 12, 26, 9, MovingAverageType.Exponential';
$properties = array("Fast","Slow","Signal","Histogram");
$pyProperties = array("fast","slow","signal","histogram");
$otherProperties = array();
$otherPyProperties = array();
$updateParameterType = 'time/number pair or an <code>IndicatorDataPoint</code>';
$constructorArguments = '12, 26, 9, MovingAverageType.Exponential';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'moving-average-convergence-divergence';
$isOptionIndicator = false;
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>