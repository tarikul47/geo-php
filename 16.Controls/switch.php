<?php

/**
 * Switch Statement 
 * #1. default statement is an option, we can ommit it 
 * 
 * #2. Payment status if has same type 
 */

$paymentStatus = 'declined';

#1. 
// switch ($paymentStatus) {
//     case 'paid':
//         echo "Paid";
//         break;

//     case 'declined':
//         echo "Payment declined";
//         break;

//     case 'pending':
//         echo "Pending Payment";
//         break;

//     default:
//         echo 'Unknown Payment Status';
//         break;
// }

#2. 

// switch ($paymentStatus) {
//     case "paid":
//         echo "Paid";
//         break;

//     case "pending":
//         echo "Pending";
//         break;

//     case "declined":
//     case "rejected":
//         echo "Rejected";
//         break;

//     default:
//         echo "Unknown Payment Status";
//         break;
// }
