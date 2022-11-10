<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

$dateNow = new Datetime();
$dateBirth = new DateTime("1986-07-01");
$dateStatic = DateTime::createFromFormat("d/m/Y", "10/03/2010");

var_dump(
    $dateNow,
    $dateBirth,
    $dateStatic
);

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,
    $dateNow
]);


/*var_dump([
    $dateNow->format(format: DATE_RFC7231),
    $dateNow->format(format:"d")
]);

echo "<p>hoje é dia {$dateNow->format(format: "d")} do 
          {$dateNow->format(format: "m")} de 
          {$dateNow->format(format: "Y")}</p>";
*/




/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");
var_dump($dateInterval);

$dateTime = new DateTime("now");
//$dateTime->add($dateInterval);
$dateTime->sub($dateInterval);

var_dump($dateTime);

$birth = new DateTime("2022-08-16");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);

var_dump($birth, $diff);

if($diff->invert){
    echo "<p>Seu aniiversario foi a {$diff->days} dias.</p>";
}else{
    echo "<p>Faltam {$diff->days} para o seu aniversario!</p>";
}

$dateResources = new DateTime("now");

var_dump([
    $dateResources->format(DATE_RSS),
    $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_RSS),
    $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_RSS),
]);




/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime("2022-01-01");

$period = new DatePeriod($start, $interval, $end);

var_dump([
    $start->format(DATE_RSS),
    $interval,
    $end->format(DATE_RSS)
], $period, get_class_methods($period));


echo "<h1>Sua Assinatura:</h1>";
foreach($period as $recurrences){
    var_dump($recurrences);
    die;
    echo "<p>Proximo vencimento {$recurrences->format(DATE_RSS)}</p>"; 
}