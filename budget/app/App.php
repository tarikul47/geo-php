<?php

declare(strict_types=1);

/**
 * 
 */
function getTransactionFiles(string $dirPath): array
{
    $files = [];

    foreach (scandir($dirPath) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $files[] = $dirPath . $file;
    }

    return $files;
}

/**
 * 
 */

function getTransactions(string  $filename, ?callable $transactioHandler = null): array
{
    if (!file_exists($filename)) {
        trigger_error("File $filename does not exist.", E_USER_ERROR);
    }

    $file = fopen($filename, 'r');

    // 1st line skip 
    fgetcsv($file);

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {

        if ($transactioHandler !== null) {
            $transaction = $transactioHandler($transaction);
        }
        $transactions[] = $transaction;
    }

    return $transactions;
}

function extractTransactions(array $transaction): array
{
    [$date, $checknumber, $description, $amount] = $transaction;

    $amount = (float) str_replace(['$', ','], '', $amount);

    return [
        'date' => $date,
        'checkNumber' => $checknumber,
        'description' => $description,
        'amount' => $amount,
    ];
}

function calculateTotals(array $transactions): array
{
    $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];

    foreach ($transactions as $transaction) {
        $totals['netTotal'] += $transaction['amount'];

        if ( $transaction['amount'] >= 0 ) {
            $totals['totalIncome'] += $transaction['amount'];
        } else {
            $totals['totalExpense'] += $transaction['amount'];
        }
    }

    return  $totals;
}
