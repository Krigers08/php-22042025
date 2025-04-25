<?php

$orders = [
    ['order_id' => 1, 'customer' => 'Alise', 'product' => 'Lidmašīna'],
    ['order_id' => 1, 'customer' => 'Alise', 'product' => 'Pildspalva'],
    ['order_id' => 2, 'customer' => 'Bobs', 'product' => 'Dators'],
    ['order_id' => 2, 'customer' => 'Bobs', 'product' => 'Pelīte'],
    ['order_id' => 3, 'customer' => 'Čārlijs', 'product' => 'Kafijas automāts'],
];

$groupedOrders = [];

foreach ($orders as $order) {
    $order_id = $order['order_id'];
    $customer = $order['customer'];
    $product = $order['product'];

    if (!isset($groupedOrders[$order_id])) {
        $groupedOrders[$order_id] = [
            'order_id' => $order_id,
            'customer' => $customer,
            'products' => []
        ];
    }

    $groupedOrders[$order_id]['products'][] = $product;
}

foreach ($groupedOrders as &$order) {
    $order['products'] = implode(', ', $order['products']);
}
$groupedOrders = array_values($groupedOrders);

echo "<pre>";
print_r($groupedOrders);
echo "</pre>";
