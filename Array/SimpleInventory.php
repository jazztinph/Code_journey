<?php

/**
 * Calculates the total quantity of all products in the inventory.
 *
 * @param array $inventory An array of products.
 * @return int The total quantity of products.
 */
function calculateTotalInventory(array $inventory): int
{
    if (empty($inventory)) {
        return 0; // Return 0 if the inventory is empty
    }

    $total = 0;

    // Loop through each product in the inventory
    foreach ($inventory as $product) {
        if (isset($product['quantity']) && is_numeric($product['quantity'])) {
            $total += $product['quantity'];
        } else {
            // Option 1: Log an error (using error_log)
            $productName = $product['name'] ?? 'Unknown Product'; // Get product name or use a default
            error_log("Warning: Invalid or missing 'quantity' for product: " . $productName);
            continue; // Skip to the next product
            continue;
        }
    }

    return $total;
}

// Example usage:
$inventory = [
    [
        'name' => 'T-Shirt',
        'quantity' => 42
    ],
    [
        'name' => 'Jeans',
        'quantity' => 20
    ],
    [
        'name' => 'Hat',
        'quantity' => 10
    ]
];

$totalInventory = calculateTotalInventory($inventory);
echo "Total inventory: " . $totalInventory . "\n";
